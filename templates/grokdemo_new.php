<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>agentORANGE • Demo</title>

    <!-- Google Fonts + Icons -->
    <link href="https://fonts.googleapis.com/css2?family=Google+Sans:wght@400;500;700&family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!-- External Google-style CSS -->
    <link rel="stylesheet" href="{{ url_for('static', filename='css/granaria-demo.css') }}">

    <!-- Font Awesome for crypto icons -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
</head>
<body>

    <header class="header">
        <div class="header-content">
            <a href="/" class="logo">
                <img src="{{ url_for('static', filename='assets/darklogo.png') }}" alt="agentORANGE">
                <span>agentORANGE</span>
            </a>
        </div>
    </header>

    <section class="hero">
        <h1>Advanced Trading Analysis</h1>
        <p>Real-time technical, pattern, and trend analysis powered by AI agents</p>
    </section>

    <div class="container">
        <div class="card">
            <h2 class="card-title">
                <span class="material-icons">tune</span>
                Analysis Configuration
            </h2>

            <!-- Asset Selection -->
            <div class="form-group">
                <label>Asset</label>
                <div class="asset-grid" id="assetButtonGrid">
                    <div class="asset-btn active" data-asset="BTC" onclick="selectAsset(this, 'BTC')">
                        <i class="fab fa-bitcoin"></i><div>BTC</div>
                    </div>
                    <div class="asset-btn" data-asset="ETH" onclick="selectAsset(this, 'ETH')">
                        <i class="fab fa-ethereum"></i><div>ETH</div>
                    </div>
                    <div class="asset-btn" data-asset="SOL" onclick="selectAsset(this, 'SOL')">
                        <i class="fas fa-sun"></i><div>SOL</div>
                    </div>
                    <div class="asset-btn" data-asset="ADA" onclick="selectAsset(this, 'ADA')">
                        <i class="fas fa-feather"></i><div>ADA</div>
                    </div>
                    <div class="asset-btn" data-asset="XRP" onclick="selectAsset(this, 'XRP')">
                        <i class="fas fa-water"></i><div>XRP</div>
                    </div>
                    <div class="asset-btn" onclick="showCustomAssetInput()">
                        <i class="fas fa-plus"></i><div>Custom</div>
                    </div>
                </div>

                <div id="customAssetDiv" style="display:none; margin-top:16px;">
                    <div style="display:flex; gap:12px;">
                        <input type="text" id="customAssetInput" placeholder="Enter symbol (e.g. AAPL)">
                        <button class="btn btn-primary" onclick="confirmCustomAsset()">Add</button>
                    </div>
                </div>
            </div>

            <!-- Timeframe -->
            <div class="form-group">
                <label>Timeframe</label>
                <div class="timeframe-selector">
                    <button class="timeframe-btn" data-timeframe="15m" onclick="selectTimeframe(this, '15m')">15m</button>
                    <button class="timeframe-btn active" data-timeframe="1h" onclick="selectTimeframe(this, '1h')">1h</button>
                    <button class="timeframe-btn" data-timeframe="4h" onclick="selectTimeframe(this, '4h')">4h</button>
                    <button class="timeframe-btn" data-timeframe="1d" onclick="selectTimeframe(this, '1d')">1d</button>
                    <button class="timeframe-btn" data-timeframe="1w" onclick="selectTimeframe(this, '1w')">1W</button>
                </div>
            </div>

            <!-- Date Range -->
            <div class="form-group">
                <label>Analysis Period</label>
                <div style="display:grid; grid-template-columns:1fr 1fr; gap:16px;">
                    <div><label>Start Date</label><input type="date" id="startDate"></div>
                    <div><label>Start Time</label><input type="time" id="startTime" value="00:00"></div>
                    <div><label>End Date</label><input type="date" id="endDate"></div>
                    <div><label>End Time</label><input type="time" id="endTime" value="23:59"></div>
                </div>
                <div class="checkbox-group">
                    <input type="checkbox" id="useCurrentTime">
                    <label for="useCurrentTime">Use current time as end</label>
                </div>
            </div>

            <div style="text-align:center; margin-top:32px;">
                <button id="analyzeBtn" class="btn btn-primary" onclick="runAnalysis()">
                    <span class="material-icons">play_arrow</span>
                    Run Analysis
                </button>
            </div>
        </div>

        <div class="alert alert-info">
            Live Data Mode: Analysis uses real-time market data with your selected timeframe and date range.
        </div>
    </div>

    <!-- Keep all your original JavaScript (just copy-paste it here) -->
    <script>
        // ← Paste your entire <script> block from the previous version here
        // (selectedAsset, runAnalysis(), handleUseCurrentTimeChange(), etc.)
        // Everything works exactly the same — only class names changed
    </script>
</body>
</html>