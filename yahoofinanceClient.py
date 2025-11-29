# yfinance_client.py
import yfinance as yf
import pandas as pd
from datetime import datetime, timedelta
from typing import Optional, Dict, List
import logging

class YahooFinanceClient:
    """
    Robust Yahoo Finance data client with crypto, stocks, forex & futures support.
    Designed to work flawlessly with granariaTWO and similar trading dashboards.
    """
    # Available assets and their display names
    ASSET_MAPPING = {
        "SPX": "S&P 500",
        "BTC": "Bitcoin",
        "GC": "Gold Futures",
        "NQ": "Nasdaq Futures",
        "CL": "Crude Oil",
        "ES": "E-mini S&P 500",
        "DJI": "Dow Jones",
        "QQQ": "Invesco QQQ Trust",
        "VIX": "Volatility Index",
        "DXY": "US Dollar Index",
        "AAPL": "Apple Inc.",  # New asset
        "TSLA": "Tesla Inc.",  # New asset
    }
    # Common symbol overrides (Yahoo uses different tickers sometimes)


    YFINANCE_SYMBOLS = {
        # Crypto
        "BTC": "BTC-USD",
        "ETH": "ETH-USD",
        "BNB": "BNB-USD",
        "SOL": "SOL-USD",
        "XRP": "XRP-USD",
        "ADA": "ADA-USD",
        "DOGE": "DOGE-USD",
        "AVAX": "AVAX-USD",
        "LINK": "LINK-USD",
        "DOT": "DOT-USD",

        # Popular stocks
        "SPY": "SPY",
        "QQQ": "QQQ",
        "AAPL": "AAPL",
        "TSLA": "TSLA",
        "NVDA": "NVDA",

        # Forex (Yahoo format)
        "EURUSD": "EURUSD=X",
        "GBPUSD": "GBPUSD=X",
        "USDJPY": "USDJPY=X",

        # Futures
        "ES": "ES=F",   # S&P 500 futures
        "NQ": "NQ=F",   # Nasdaq futures
        "GC": "GC=F",   # Gold
        "CL": "CL=F",   # Crude Oil
        "BTCF": "BTC=F", # Bitcoin CME Futures

        "SPX": "^GSPC",  # S&P 500
        "DJI": "^DJI",  # Dow Jones
        "VIX": "^VIX",  # Volatility Index
        "DXY": "DX-Y.NYB",  # US Dollar Index
    }

    # Supported intervals and their Yahoo equivalents
    YFINANCE_INTERVALS = {
        "1": "1m",
        "5": "5m",
        "15": "15m",
        "30": "30m",
        "60": "1h",
        "1m": "1m",
        "5m": "5m",
        "15m": "15m",
        "30m": "30m",
        "60m": "1h",
        "1h": "1h",
        "4h": "4h",
        "1d": "1d",
        "1w": "1wk",
        "1mo": "1mo",
    }
    '''
    self.yfinance_intervals = {
        "1m": "1m",
        "5m": "5m",
        "15m": "15m",
        "30m": "30m",
        "1h": "1h",
        "4h": "4h",  # yfinance supports 4h natively!
        "1d": "1d",
        "1w": "1wk",
        "1mo": "1mo",
    }
    '''

    def __init__(self):
        # Disable yfinance info logs
        logging.getLogger("yfinance").setLevel(logging.ERROR)


    def get_symbol(self, symbol: str) -> str:
        """Return correct Yahoo Finance ticker."""
        return self.YFINANCE_SYMBOLS.get(symbol.upper(), symbol.upper())

    def get_interval(self, interval: str) -> str:
        """Normalize interval to yfinance format."""
        return self.YFINANCE_INTERVALS.get(interval, interval)

    def fetch_data(
        self,
        symbol: str,
        interval: str = "1h",
        period: str = None,
        start_date: str = None,
        end_date: str = None,
        lookback_days: int = None,
    ) -> pd.DataFrame:
        """
        Fetch OHLCV data from Yahoo Finance.

        Args:
            symbol: Asset ticker (e.g., "BTC", "AAPL", "EURUSD")
            interval: "1m", "5m", "15m", "1h", "1d", etc.
            period: "1d", "5d", "1mo", "3mo", "6mo", "1y", "2y", "5y", "10y", "ytd", "max"
            start_date: "YYYY-MM-DD"
            end_date: "YYYY-MM-DD"
            lookback_days: Alternative to period/start-end

        Returns:
            Clean DataFrame with Datetime, Open, High, Low, Close, Volume
        """
        ticker = self.get_symbol(symbol)
        yf_interval = self.get_interval(interval)

        # Validate interval (1m only allowed for last 7 days)
        if yf_interval == "1m":
            if period not in ["1d", "5d", "7d"] and not lookback_days:
                lookback_days = 7

        try:
            # Build date range
            if period:
                df = yf.download(ticker, period=period, interval=yf_interval, progress=False)
            elif start_date or end_date or lookback_days:
                if lookback_days:
                    start = (datetime.now() - timedelta(days=lookback_days)).strftime("%Y-%m-%d")
                    end = datetime.now().strftime("%Y-%m-%d")
                else:
                    start = start_date
                    end = end_date or datetime.now().strftime("%Y-%m-%d")

                df = yf.download(ticker, start=start, end=end, interval=yf_interval, progress=False)
            else:
                # Default: last 30 days
                df = yf.download(ticker, period="30d", interval=yf_interval, progress=False)

            return self._clean_dataframe(df)

        except Exception as e:
            logging.error(f"yfinance error for {ticker} {interval}: {e}")
            return pd.DataFrame()

    def _clean_dataframe(self, df: pd.DataFrame) -> pd.DataFrame:
        """Standardize and clean yfinance output."""
        if df is None or df.empty:
            return pd.DataFrame()

        # Handle MultiIndex columns (happens when downloading multiple tickers)
        if isinstance(df.columns, pd.MultiIndex):
            df.columns = df.columns.droplevel(1) if df.columns.nlevels > 1 else df.columns

        # Reset index to get Date/Datetime as column
        df = df.reset_index()

        # Rename columns safely
        column_map = {
            "Date": "Datetime",
            "Datetime": "Datetime",  # For intraday
            "Open": "Open",
            "High": "High",
            "Low": "Low",
            "Close": "Close",
            "Adj Close": "Close",  # Prefer Adj Close for stocks
            "Volume": "Volume",
        }

        df = df.rename(columns={k: v for k, v in column_map.items() if k in df.columns})

        # Use Adj Close if available (better for stocks/dividends)
        if "Adj Close" in df.columns and "Close" not in df.columns:
            df["Close"] = df["Adj Close"]

        # Ensure required columns
        required = ["Datetime", "Open", "High", "Low", "Close"]
        if not all(col in df.columns for col in required):
            return pd.DataFrame()

        df = df[required + ["Volume"] if "Volume" in df.columns else required]

        # Clean timestamps
        df["Datetime"] = pd.to_datetime(df["Datetime"])

        # Remove timezone (Plotly/Matplotlib prefer naive datetime)
        if df["Datetime"].dt.tz is not None:
            df["Datetime"] = df["Datetime"].dt.tz_localize(None)

        # Remove duplicates and sort
        df = df.drop_duplicates(subset=["Datetime"]).sort_values("Datetime").reset_index(drop=True)

        # Forward fill small gaps (optional)
        #        df = df.set_index("Datetime").resample("1min").ffill().reset_index()

        return df

    def get_price(self, symbol: str) -> Optional[float]:
        """Get current/last price."""
        try:
            ticker = yf.Ticker(self.get_symbol(symbol))
            data = ticker.history(period="1d")
            return data["Close"].iloc[-1] if not data.empty else None
        except:
            return None

    def get_info(self, symbol: str) -> Dict:
        """Get metadata (name, market, etc.)"""
        try:
            ticker = yf.Ticker(self.get_symbol(symbol))
            return ticker.info
        except:
            return {}

# Global instance (recommended)
yf_client = YahooFinanceClient()


# Example usage
if __name__ == "__main__":
    client = YahooFinanceClient()

    # Crypto 1h
    df = client.fetch_data("BTC", interval="1h", lookback_days=30)
    print(df.tail())

    # Stock daily
    df2 = client.fetch_data("AAPL", interval="1d", period="1y")
    print(df2.tail())

    # Current price
    print("BTC Price:", client.get_price("BTC"))