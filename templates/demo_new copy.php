<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>granariaTWO</title>

    <!-- Google Fonts + Icons -->
    <link href="https://fonts.googleapis.com/css2?family=Google+Sans:wght@400;500;700&family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!-- External Google-style CSS -->
    <link rel="stylesheet" href="{{ url_for('static', filename='css/granaria.css') }}">

    <!-- Font Awesome for crypto icons -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">






<!--
    <style>
        :root {
            --bg: #F8F9FA;
            --surface: #FFFFFF;
            --text-primary: #202124;
            --text-secondary: #5F6368;
            --border: #DADCE0;
            --accent: #1A73E8;
            --accent-hover: #1557B0;
            --success: #137333;
            --success-bg: #E6F4EA;
            --shadow-1: 0 1px 3px rgba(0,0,0,0.12);
            --shadow-2: 0 4px 10px rgba(0,0,0,0.1);
            --shadow-3: 0 8px 25px rgba(0,0,0,0.12);
            --radius: 16px;
            --radius-sm: 12px;
        }

        *, *::before, *::after { box-sizing: border-box; }

        body {
            margin: 0;
            font-family: 'Roboto', system-ui, sans-serif;
            background: var(--bg);
            color: var(--text-primary);
            line-height: 1.6;
        }

        .header {
            background: var(--surface);
            padding: 20px 24px;
            border-bottom: 1px solid var(--border);
            position: sticky;
            top: 0;
            z-index: 1000;
            backdrop-filter: blur(8px);
        }

        .header-content {
            max-width: 1240px;
            margin: 0 auto;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .logo {
            display: flex;
            align-items: center;
            gap: 16px;
            font-family: 'Google Sans', sans-serif;
            font-size: 28px;
            font-weight: 700;
            color: var(--text-primary);
            text-decoration: none;
        }

        .logo img {
            height: 48px;
        }

        .hero {
            text-align: center;
            padding: 80px 24px 60px;
            background: linear-gradient(135deg, #f8f9fa 0%, #e8f0fe 100%);
        }

        .hero h1 {
            font-family: 'Google Sans', sans-serif;
            font-size: 48px;
            font-weight: 500;
            margin: 0 0 16px;
            color: var(--text-primary);
        }

        .hero p {
            font-size: 20px;
            color: var(--text-secondary);
            max-width: 720px;
            margin: 0 auto 40px;
        }

        .container {
            max-width: 1240px;
            margin: 0 auto;
            padding: 0 24px;
        }

        .card {
            background: var(--surface);
            border-radius: var(--radius);
            box-shadow: var(--shadow-2);
            padding: 32px;
            margin-bottom: 32px;
        }

        .card-title {
            font-family: 'Google Sans', sans-serif;
            font-size: 24px;
            font-weight: 500;
            margin: 0 0 24px;
            color: var(--text-primary);
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .card-title .material-icons {
            color: var(--accent);
        }

        /* Form Controls */
        .form-group {
            margin-bottom: 24px;
        }

        label {
            display: block;
            font-weight: 500;
            margin-bottom: 8px;
            color: var(--text-primary);
        }

        input[type="text"],
        input[type="date"],
        input[type="time"],
        select {
            width: 100%;
            padding: 12px 16px;
            border: 1px solid var(--border);
            border-radius: var(--radius-sm);
            font-size: 16px;
            transition: all 0.2s;
        }

        input:focus, select:focus {
            outline: none;
            border-color: var(--accent);
            box-shadow: 0 0 0 3px rgba(26, 115, 232, 0.2);
        }

        /* Asset Grid */
        .asset-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(120px, 1fr));
            gap: 16px;
            margin-top: 12px;
        }

        .asset-btn {
            padding: 20px 12px;
            border: 2px solid var(--border);
            border-radius: var(--radius-sm);
            background: var(--surface);
            text-align: center;
            cursor: pointer;
            transition: all 0.2s;
            font-weight: 500;
        }

        .asset-btn:hover {
            border-color: var(--accent);
            box-shadow: var(--shadow-1);
        }

        .asset-btn.active {
            background: var(--accent);
            color: white;
            border-color: var(--accent);
            box-shadow: var(--shadow-2);
        }

        .asset-btn i {
            font-size: 28px;
            display: block;
            margin-bottom: 8px;
        }

        /* Timeframe Selector */
        .timeframe-selector {
            display: flex;
            background: #F1F3F4;
            border-radius: var(--radius-sm);
            padding: 6px;
            gap: 6px;
            border: 1px solid var(--border);
            overflow-x: auto;
            scrollbar-width: none;
        }

        .timeframe-selector::-webkit-scrollbar { display: none; }

        .timeframe-btn {
            flex: 1;
            min-width: 70px;
            padding: 10px 16px;
            border-radius: 8px;
            background: transparent;
            border: none;
            font-weight: 500;
            cursor: pointer;
            transition: all 0.2s;
        }

        .timeframe-btn:hover {
            background: rgba(26,115,232,0.1);
        }

        .timeframe-btn.active {
            background: var(--accent);
            color: white;
        }

        /* Buttons */
        .btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
            padding: 12px 24px;
            border: none;
            border-radius: 50px;
            font-weight: 500;
            font-size: 15px;
            cursor: pointer;
            transition: all 0.2s;
        }

        .btn-primary {
            background: var(--accent);
            color: white;
        }

        .btn-primary:hover {
            background: var(--accent-hover);
            box-shadow: var(--shadow-2);
        }

        .btn-primary:disabled {
            background: #9E9E9E;
            cursor: not-allowed;
        }

        /* Checkbox */
        .checkbox-group {
            display: flex;
            align-items: center;
            gap: 12px;
            margin-top: 8px;
        }

        /* Alerts */
        .alert {
            padding: 16px;
            border-radius: var(--radius-sm);
            margin: 16px 0;
            border-left: 4px solid;
        }

        .alert-info {
            background: #EFF6FF;
            border-color: var(--accent);
            color: #0C4A6E;
        }

        .alert-success {
            background: var(--success-bg);
            border-color: var(--success);
            color: var(--success);
        }

        .alert-error {
            background: #FEF2F2;
            border-color: #EF4444;
            color: #991B1B;
        }

        @media (max-width: 768px) {
            .hero h1 { font-size: 36px; }
            .card { padding: 24px; }
            .asset-grid { grid-template-columns: repeat(3, 1fr); }
        }
    </style>
-->
</head>

<body>
     <!-- Header -->
    <header class="header">
        <div class="header-content">
            <a href="/" class="logo">
                <img src="/assets/darklogo.png" alt="granariaTWO">
                <span>granariaTWO - Trading Analysis Agent</span>
            </a>
        </div>
    </header>

   <!-- Hero -->


    <div class="container">

        <!-- Main Form Card -->
        <div class="card">


            <!-- Asset Selection -->
            <div class="form-group">
                <label>Asset</label>
                <div class="asset-grid" id="assetButtonGrid">
                    <div class="asset-btn active" data-asset="BTC" onclick="selectAsset(this, 'BTC')">
                        <i class="fab fa-bitcoin"></i>
                        <div>BTC</div>
                    </div>
                    <div class="asset-btn" data-asset="ETH" onclick="selectAsset(this, 'ETH')">
                        <i class="fab fa-ethereum"></i>
                        <div>ETH</div>
                    </div>
                    <div class="asset-btn" data-asset="SOL" onclick="selectAsset(this, 'SOL')">
                        <i class="fas fa-sun"></i>
                        <div>SOL</div>
                    </div>
                    <div class="asset-btn" data-asset="ADA" onclick="selectAsset(this, 'ADA')">
                        <i class="fas fa-feather"></i>
                        <div>ADA</div>
                    </div>
                    <div class="asset-btn" data-asset="XRP" onclick="selectAsset(this, 'XRP')">
                        <i class="fas fa-water"></i>
                        <div>XRP</div>
                    </div>
                    <div class="asset-btn" onclick="showCustomAssetInput()">
                        <i class="fas fa-plus"></i>
                        <div>Custom</div>
                    </div>
                </div>

                <div id="customAssetDiv" style="display:none; margin-top:16px;">
                    <div style="display:flex; gap:12px;">
                        <input type="text" id="customAssetInput" placeholder="Enter symbol (e.g. AAPL)" style="flex:1;">
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
                    <div>
                        <label>Start Date</label>
                        <input type="date" id="startDate">
                    </div>
                    <div>
                        <label>Start Time</label>
                        <input type="time" id="startTime" value="00:00">
                    </div>
                    <div>
                        <label>End Date</label>
                        <input type="date" id="endDate">
                    </div>
                    <div>
                        <label>End Time</label>
                        <input type="time" id="endTime" value="23:59">
                    </div>
                </div>
                <div class="checkbox-group">
                    <input type="checkbox" id="useCurrentTime">
                    <label for="useCurrentTime">Use current time as end</label>
                </div>
            </div>

            <!-- Run Button -->
            <div style="text-align:center; margin-top:32px;">
                <button id="analyzeBtn" class="btn btn-primary" onclick="runAnalysis()">
                    <span class="material-icons">play_arrow</span>
                    Run Analysis
                </button>
            </div>
        </div>

        <!-- Info Alert -->
        <div class="alert alert-info">
            <strong>Live Data Mode:</strong> Analysis uses real-time market data with your selected timeframe and date range.
        </div>

    </div>



    <!-- Font Awesome (only if you still use crypto icons) -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/js/all.min.js"></script>








    <!-- Page wrapper ---------------------------------------------------------------------------------------- -->
    <div class="flex flex-col min-h-screen overflow-hidden">



        <!-- Page content -->
        <main class="grow">






                        <!-- Analysis Form Section -->
            <section id="analysis" class="py-12 md:py-20">
                <div class="form-container">
                    <!-- Analysis Form -->
                    <div class="form-section">
                        <h3 style="text-align: center; font-size: 1.6rem; font-weight: 600; color: var(--etrade-purple); margin-bottom: 2rem; display: flex; align-items: center; justify-content: center; gap: 0.75rem;">
                            <i class="fas fa-cog" style="font-size: 1.5rem; color: var(--etrade-purple-light);"></i> Analysis Configuration
                        </h3>
                        
                        <!-- Panel 1: Data Selection -->
                        <div class="panel-group">
                            <div class="panel">
                                <h4 class="panel-title">
                                    <i class="fas fa-database"></i> Data Selection
                                </h4>
                                
                                <!-- Asset Selection -->
                                <div class="form-group">
                                    <label class="form-label">
                                        <i class="fas fa-coins"></i> Asset
                                    </label>
                                    <div class="asset-button-grid" id="assetButtonGrid">
                                        <button type="button" class="asset-btn" data-asset="BTC" onclick="selectAsset(this, 'BTC')">
                                            <i class="fas fa-bitcoin"></i> BTC
                                        </button>
                                        <button type="button" class="asset-btn" data-asset="ETH" onclick="selectAsset(this, 'ETH')">
                                            <i class="fab fa-ethereum"></i> ETH
                                        </button>
                                        <button type="button" class="asset-btn" data-asset="AAPL" onclick="selectAsset(this, 'AAPL')">
                                            <i class="fas fa-apple-alt"></i> AAPL
                                        </button>
                                        <button type="button" class="asset-btn" data-asset="GOOGL" onclick="selectAsset(this, 'GOOGL')">
                                            <i class="fab fa-google"></i> GOOGL
                                        </button>
                                        <button type="button" class="asset-btn" data-asset="MSFT" onclick="selectAsset(this, 'MSFT')">
                                            <i class="fab fa-microsoft"></i> MSFT
                                        </button>
                                        <button type="button" class="asset-btn" data-asset="TSLA" onclick="selectAsset(this, 'TSLA')">
                                            <i class="fas fa-car"></i> TSLA
                                        </button>
                                        <button type="button" class="asset-btn custom-asset-btn" id="customAssetBtn" onclick="showCustomAssetInput()">
                                            <i class="fas fa-plus"></i> Custom
                                        </button>
                                    </div>
                                    
                                    <!-- Custom Asset Input -->
                                    <div id="customAssetDiv" class="mt-3" style="display: none;">
                                        <div class="alert alert-info">
                                            <h6><i class="fas fa-plus-circle"></i> Custom Asset Symbol</h6>
                                            <p class="mb-2"><strong>💡 Examples:</strong> NQ (Nasdaq-100 Futures), ZN (10-Year Treasury), etc.</p>
                                            <p class="mb-0"><strong>📝 Format:</strong> Enter the Yahoo Finance symbol for your asset</p>
                                        </div>
                                        <div class="input-group">
                                            <input type="text" class="form-control" id="customAssetInput" placeholder="Enter symbol (e.g., NQ=F, ZN=F, ^VIX)">
                                            <button class="btn btn-outline-primary" type="button" onclick="confirmCustomAsset()">
                                                <i class="fas fa-check"></i> Confirm
                                            </button>
                                        </div>
                                        <small class="form-text text-muted">Use Yahoo Finance symbols. For futures, add =F suffix (e.g., NQ=F)</small>
                                    </div>
                                </div>
                                
                                <!-- Timeframe Selection -->
                                <div class="form-group">
                                    <label class="form-label">
                                        <i class="fas fa-chart-line"></i> Timeframe
                                    </label>
                                    <div class="timeframe-selector">
                                        <button type="button" class="timeframe-btn" data-timeframe="1m" onclick="selectTimeframe(this, '1m')">
                                            1m
                                        </button>
                                        <button type="button" class="timeframe-btn" data-timeframe="15m" onclick="selectTimeframe(this, '15m')">
                                            15m
                                        </button>
                                        <button type="button" class="timeframe-btn" data-timeframe="1h" onclick="selectTimeframe(this, '1h')">
                                            1h
                                        </button>
                                        <button type="button" class="timeframe-btn" data-timeframe="4h" onclick="selectTimeframe(this, '4h')">
                                            4h
                                        </button>
                                        <button type="button" class="timeframe-btn" data-timeframe="1d" onclick="selectTimeframe(this, '1d')">
                                            1d
                                        </button>
                                        <button type="button" class="timeframe-btn" data-timeframe="1w" onclick="selectTimeframe(this, '1w')">
                                            1w
                                        </button>
                                        <button type="button" class="timeframe-btn" data-timeframe="1mo" onclick="selectTimeframe(this, '1mo')">
                                            1mo
                                        </button>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Panel 2: Date & Time Configuration -->
                            <div class="panel">
                                <h4 class="panel-title">
                                    <i class="fas fa-calendar-alt"></i> Date & Time Configuration
                                </h4>
                                
                                <!-- Date Range -->
                                <div class="form-group">
                                    <label class="form-label" style="font-size: 1.2rem; font-weight: 600; color: #374151; margin-bottom: 0.75rem;">
                                        <i class="fas fa-calendar-week" style="color: #6B7280; margin-right: 0.5rem;"></i> Date Range
                                    </label>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <input type="date" id="startDate" class="form-control" placeholder="mm/dd/yyyy" required style="font-size: 1.1rem; padding: 0.875rem 1rem; border: 2px solid #E5E7EB; border-radius: 8px;">
                                        </div>
                                        <div class="col-md-6">
                                            <input type="date" id="endDate" class="form-control" placeholder="mm/dd/yyyy" required style="font-size: 1.1rem; padding: 0.875rem 1rem; border: 2px solid #E5E7EB; border-radius: 8px;">
                                        </div>
                                    </div>
                                </div>
                                
                                <!-- Time Selector -->
                                <div class="form-group">
                                    <label class="form-label" style="font-size: 1.2rem; font-weight: 600; color: #374151; margin-bottom: 0.75rem;">
                                        <i class="fas fa-clock" style="color: #6B7280; margin-right: 0.5rem;"></i> Time Selector
                                    </label>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <input type="time" id="startTime" class="form-control" value="00:00" step="60" style="font-size: 1.1rem; padding: 0.875rem 1rem; border: 2px solid #E5E7EB; border-radius: 8px;">
                                        </div>
                                        <div class="col-md-6">
                                            <input type="time" id="endTime" class="form-control" value="23:59" step="60" style="font-size: 1.1rem; padding: 0.875rem 1rem; border: 2px solid #E5E7EB; border-radius: 8px;">
                                        </div>
                                    </div>
                                </div>
                                
                                <!-- Current Time Option -->
                                <div class="form-group">
                                    <div class="form-check" style="margin-top: 1rem;">
                                        <input class="form-check-input" type="checkbox" id="useCurrentTime" checked style="transform: scale(1.2); margin-right: 0.75rem;">
                                        <label class="form-check-label" for="useCurrentTime" style="font-size: 1.3rem; font-weight: 500; color: #374151; cursor: pointer;">
                                            Use current date & time for end
                                        </label>
                                    </div>
                                </div>
                                
                                <!-- Validation Messages -->
                                <div id="dateRangeInfo" class="alert alert-info mt-2" style="display: none;">
                                    <i class="fas fa-info-circle"></i>
                                    <span id="dateRangeText"></span>
                                </div>
                                
                                <div id="dateRangeError" class="alert alert-danger mt-2" style="display: none;">
                                    <i class="fas fa-exclamation-triangle"></i>
                                    <span id="dateRangeErrorText"></span>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Panel 3: Settings & Security -->
                        <div class="panel-group">
                            <div class="panel">
                                <h4 class="panel-title">
                                    <i class="fas fa-cog"></i> Settings
                                </h4>
                                
                                <!-- LLM Provider Selection -->
                                <div class="form-group">
                                    <label class="form-label">LLM Provider</label>
                                    <select class="form-control" id="llmProviderSelect" onchange="handleProviderChange()">
                                        <option value="openai" selected>OpenAI</option>
                                        <option value="anthropic">Claude (Anthropic)</option>
                                        <option value="qwen">Qwen</option>
                                    </select>
                                </div>
                                
                                <!-- OpenAI API Key Input -->
                                <div class="form-group" id="openaiApiKeyGroup">
                                    <label class="form-label">OpenAI API Key</label>
                                    <div class="input-group">
                                        <input type="password" class="form-control" id="openaiApiKeyInput" placeholder="Enter your OpenAI API key">
                                        <button class="btn btn-outline-primary" type="button" onclick="updateApiKey('openai')">
                                            <i class="fas fa-save"></i> Update
                                        </button>
                                    </div>
                                </div>
                                
                                <!-- Anthropic API Key Input -->
                                <div class="form-group" id="anthropicApiKeyGroup" style="display: none;">
                                    <label class="form-label">Anthropic API Key</label>
                                    <div class="input-group">
                                        <input type="password" class="form-control" id="anthropicApiKeyInput" placeholder="Enter your Anthropic API key">
                                        <button class="btn btn-outline-primary" type="button" onclick="updateApiKey('anthropic')">
                                            <i class="fas fa-save"></i> Update
                                        </button>
                                    </div>
                                </div>
                                
                                <!-- Qwen API Key Input -->
                                <div class="form-group" id="qwenApiKeyGroup" style="display: none;">
                                    <label class="form-label">Qwen API Key (Dashscope)</label>
                                    <div class="input-group">
                                        <input type="password" class="form-control" id="qwenApiKeyInput" placeholder="Enter your Qwen API key">
                                        <button class="btn btn-outline-primary" type="button" onclick="updateApiKey('qwen')">
                                            <i class="fas fa-save"></i> Update
                                        </button>
                                    </div>
                                </div>
                                    
                                    <!-- API Key Status Messages -->
                                    <div id="apiKeyStatus" class="alert alert-info mt-2" style="display: none;">
                                        <i class="fas fa-info-circle"></i>
                                        <span id="apiKeyStatusText"></span>
                                    </div>
                                    <div id="apiKeyError" class="alert alert-danger mt-2" style="display: none;">
                                        <i class="fas fa-exclamation-triangle"></i>
                                        <span id="apiKeyErrorText"></span>
                                    </div>
                                    <div id="apiKeySuccess" class="alert alert-success mt-2" style="display: none;">
                                        <i class="fas fa-check-circle"></i>
                                        <span id="apiKeySuccessText"></span>
                                    </div>
                            </div>
                            
                            <!-- Security Information Panel -->
                            <div class="panel security-panel">
                                <!--h4 class="panel-title">
                                    <i class="fas fa-shield-alt"></i> Security Information
                                </h4>
                                
                                <div class="security-info">
                                    <div class="security-item">
                                        <i class="fas fa-server security-icon"></i>
                                        <div class="security-content">
                                            <strong>Localhost Only</strong>
                                            <p>This server runs exclusively on localhost (127.0.0.1)</p>
                                        </div>
                                    </div>
                                    
                                    <div class="security-item">
                                        <i class="fas fa-key security-icon"></i>
                                        <div class="security-content">
                                            <strong>API Key Security</strong>
                                            <p>Your API key is stored locally and never uploaded to external servers</p>
                                        </div>
                                    </div>
                                    
                                    <div class="security-item">
                                        <i class="fas fa-shield-alt security-icon"></i>
                                        <div class="security-content">
                                            <strong>Data Privacy</strong>
                                            <p>All analysis data remains on your local machine</p>
                                        </div>
                                    </div-->
                                </div>
                            </div>
                        </div>
                        
                        <!-- Run Analysis Button -->
                        <div class="text-center" style="margin-top: 2rem;">
                            <button class="btn btn-primary btn-lg" id="analyzeBtn" onclick="runAnalysis()" style="padding: 1.5rem 3rem; font-size: 1.3rem; border-radius: 15px;">
                                <i class="fas fa-play"></i> Run Analysis
                            </button>
                        </div>
                    </div>
                </div>
            </section>

        </main>

    </div>

    <script>
        // Global variables
        let currentAsset = '';
        let currentTimeframe = '';
        
        // Persisted state keys
        const STORAGE_KEYS = {
            CUSTOM_ASSETS: 'quantagent_custom_assets',
            SELECTED_ASSET: 'quantagent_selected_asset',
            SELECTED_TIMEFRAME: 'quantagent_selected_timeframe'
        };

        // Add or render a custom asset button into the grid
        function addCustomAssetButton(symbol, isServerLoaded = false) {
            const grid = document.getElementById('assetButtonGrid');
            if (!grid) return;

            // Prevent duplicates (check existing data-asset values)
            const existing = Array.from(grid.querySelectorAll('.asset-btn')).some(btn => btn.dataset.asset === symbol);
            if (existing) return;

            const btn = document.createElement('button');
            btn.type = 'button';
            btn.className = 'asset-btn';
            btn.dataset.asset = symbol;
            btn.innerHTML = `<i class="fas fa-tag"></i> ${symbol}`;
            btn.addEventListener('click', () => selectAsset(btn, symbol));

            // Insert before the "Custom" button if present
            const customBtn = document.getElementById('customAssetBtn');
            if (customBtn && customBtn.parentNode === grid) {
                grid.insertBefore(btn, customBtn);
            } else {
                grid.appendChild(btn);
            }

            // If loaded from server or localStorage, do not auto-select unless it matches stored selection
            const storedSelected = localStorage.getItem(STORAGE_KEYS.SELECTED_ASSET);
            if (storedSelected === symbol) {
                // mimic click to set active and store
                btn.click();
            }
        }

        // Load custom assets from localStorage and server, render them
        function loadCustomAssets() {
            // Load from localStorage first (fast)
            try {
                const local = localStorage.getItem(STORAGE_KEYS.CUSTOM_ASSETS);
                if (local) {
                    const list = JSON.parse(local);
                    list.forEach(sym => addCustomAssetButton(sym, false));
                }
            } catch (e) {
                console.warn('Failed to parse local custom assets', e);
            }

            // Then attempt to load server-persisted custom assets and merge
            fetch('/api/custom-assets')
                .then(r => r.json())
                .then(data => {
                    if (Array.isArray(data.custom_assets)) {
                        data.custom_assets.forEach(sym => addCustomAssetButton(sym, true));
                        // Sync server list into localStorage (merge, dedupe)
                        try {
                            const local = JSON.parse(localStorage.getItem(STORAGE_KEYS.CUSTOM_ASSETS) || '[]');
                            const merged = Array.from(new Set([...(local || []), ...data.custom_assets]));
                            localStorage.setItem(STORAGE_KEYS.CUSTOM_ASSETS, JSON.stringify(merged));
                        } catch (e) {
                            console.warn('Failed to sync custom assets to localStorage', e);
                        }
                    }
                })
                .catch(err => {
                    // Not fatal - server might not be reachable
                    console.warn('Could not fetch server custom assets', err);
                });
        }

        // Override confirmCustomAsset to create a persistent custom asset and persist to server/localStorage
        function confirmCustomAsset() {
            const customAssetEl = document.getElementById('customAssetInput');
            const customAsset = customAssetEl.value.trim();

            if (!customAsset) {
                alert('Please enter a custom asset symbol.');
                return;
            }

            // Normalize (trim)
            const symbol = customAsset;

            // Save to localStorage list
            try {
                const listRaw = localStorage.getItem(STORAGE_KEYS.CUSTOM_ASSETS);
                const list = listRaw ? JSON.parse(listRaw) : [];
                if (!list.includes(symbol)) {
                    list.push(symbol);
                    localStorage.setItem(STORAGE_KEYS.CUSTOM_ASSETS, JSON.stringify(list));
                }
            } catch (e) {
                console.warn('Could not persist custom asset to localStorage', e);
            }

            // Persist to server (best-effort)
            fetch('/api/save-custom-asset', {
                method: 'POST',
                headers: { 'Content-Type': 'application/json' },
                body: JSON.stringify({ symbol })
            }).then(r => r.json())
              .then(resp => {
                  if (!resp.success) {
                      console.warn('Server did not save custom asset', resp);
                  }
              }).catch(err => {
                  console.warn('Error saving custom asset to server', err);
              });

            // Add button and select it
            addCustomAssetButton(symbol);
            // Select the new asset: find button and click
            const grid = document.getElementById('assetButtonGrid');
            const newBtn = Array.from(grid.querySelectorAll('.asset-btn')).find(b => b.dataset.asset === symbol);
            if (newBtn) {
                newBtn.click();
            }

            // Hide custom asset input
            document.getElementById('customAssetDiv').style.display = 'none';

            // Clear input
            customAssetEl.value = '';

            // Notify user
            // Use a non-blocking notification (replace alert with console + subtle DOM message if desired)
            console.log(`Custom asset "${symbol}" selected and persisted`);
        }

        // Updated selectAsset to persist selection to localStorage
        function selectAsset(button, asset) {
            // Remove active class from all asset buttons
            document.querySelectorAll('.asset-btn').forEach(btn => {
                btn.classList.remove('active');
            });

            // Add active class to clicked button
            button.classList.add('active');

            // Store selected asset
            selectedAsset = asset;
            try {
                localStorage.setItem(STORAGE_KEYS.SELECTED_ASSET, asset);
            } catch (e) {
                console.warn('Could not persist selected asset', e);
            }

            // Hide custom asset input if it was showing
            const cav = document.getElementById('customAssetDiv');
            if (cav) cav.style.display = 'none';

            console.log('Selected asset:', asset);
        }

        // Persist timeframe selection as well
        function selectTimeframe(button, timeframe) {
            // Remove active class from all timeframe buttons
            document.querySelectorAll('.timeframe-btn').forEach(btn => {
                btn.classList.remove('active');
            });

            // Add active class to clicked button
            button.classList.add('active');

            // Store selected timeframe
            selectedTimeframe = timeframe;
            try {
                localStorage.setItem(STORAGE_KEYS.SELECTED_TIMEFRAME, timeframe);
            } catch (e) {
                console.warn('Could not persist selected timeframe', e);
            }

            console.log('Selected timeframe:', timeframe);
        }

        // On page load, restore selected asset/timeframe and custom assets
        document.addEventListener('DOMContentLoaded', function() {
            // Set default dates
            const now = new Date();
            const thirtyDaysAgo = new Date(now.getTime() - (30 * 24 * 60 * 60 * 1000));
            
            // Format dates for input fields
            const formatDate = (date) => {
                return date.toISOString().split('T')[0];
            };
            
            // Set default start date (30 days ago)
            document.getElementById('startDate').value = formatDate(thirtyDaysAgo);
            
            // Set default end date (today)
            document.getElementById('endDate').value = formatDate(now);
            
            // Apply the current-time checkbox behavior immediately on load
            // (this will disable & populate end date/time if the checkbox is checked by default)
            try { handleUseCurrentTimeChange(); } catch (e) { console.warn('handleUseCurrentTimeChange not available yet', e); }
            
            // Load custom assets and server-synced assets
            loadCustomAssets();

            // Restore selected timeframe (if saved)
            try {
                const savedTF = localStorage.getItem(STORAGE_KEYS.SELECTED_TIMEFRAME);
                if (savedTF) {
                    const tfBtn = Array.from(document.querySelectorAll('.timeframe-btn')).find(b => b.dataset.timeframe === savedTF);
                    if (tfBtn) {
                        tfBtn.classList.add('active');
                        selectedTimeframe = savedTF;
                    }
                }
            } catch (e) {
                console.warn('Could not restore timeframe from localStorage', e);
            }

            // Restore selected asset (if saved). If it is a custom asset that hasn't been added yet,
            // add it and then select it (addCustomAssetButton handles checking duplicates).
            try {
                const savedAsset = localStorage.getItem(STORAGE_KEYS.SELECTED_ASSET);
                if (savedAsset) {
                    // Try to find an existing button
                    let btn = Array.from(document.querySelectorAll('.asset-btn')).find(b => b.dataset.asset === savedAsset);
                    if (!btn) {
                        // Add it as custom and then select
                        addCustomAssetButton(savedAsset, false);
                        btn = Array.from(document.querySelectorAll('.asset-btn')).find(b => b.dataset.asset === savedAsset);
                    }
                    if (btn) {
                        btn.classList.add('active');
                        selectedAsset = savedAsset;
                    }
                } else {
                    // fallback defaults from original code
                    const defaultTimeframeBtn = document.querySelector('[data-timeframe="1h"]');
                    if (defaultTimeframeBtn && !selectedTimeframe) {
                        defaultTimeframeBtn.classList.add('active');
                        selectedTimeframe = '1h';
                    }
                    const defaultAssetBtn = document.querySelector('[data-asset="BTC"]');
                    if (defaultAssetBtn && !selectedAsset) {
                        defaultAssetBtn.classList.add('active');
                        selectedAsset = 'BTC';
                    }
                }
            } catch (e) {
                console.warn('Could not restore selected asset from localStorage', e);
            }

            document.getElementById('useCurrentTime').addEventListener('change', handleUseCurrentTimeChange);
            
            // Set up date/time validation
            const dateInputs = ['startDate', 'startTime', 'endDate', 'endTime'];
            dateInputs.forEach(id => {
                document.getElementById(id).addEventListener('change', validateDateRange);
            });
            
            // Initialize current time update
            setInterval(updateCurrentTime, 1000);
            
            // Add keyboard navigation for timeframe selector
            document.addEventListener('keydown', function(e) {
                const activeBtn = document.querySelector('.timeframe-btn.active');
                if (!activeBtn) return;
                
                const buttons = Array.from(document.querySelectorAll('.timeframe-btn'));
                const currentIndex = buttons.indexOf(activeBtn);
                
                if (e.key === 'ArrowLeft' && currentIndex > 0) {
                    buttons[currentIndex - 1].click();
                } else if (e.key === 'ArrowRight' && currentIndex < buttons.length - 1) {
                    buttons[currentIndex + 1].click();
                }
            });
            
            // Check API key status on page load
            checkApiKeyStatus();
            
            // Set initial provider dropdown state
            const savedProvider = localStorage.getItem('quantagent_provider') || 'openai';
            if (savedProvider) {
                document.getElementById('llmProviderSelect').value = savedProvider;
                handleProviderChange();
            }
        });
        
        function checkApiKeyStatus() {
            const provider = document.getElementById('llmProviderSelect')?.value || 'openai';
            fetch(`/api/get-api-key-status?provider=${provider}`)
                .then(response => {
                    if (!response.ok) {
                        throw new Error(`HTTP error! status: ${response.status}`);
                    }
                    return response.json();
                })
                .then(data => {
                    const providerNames = {
                        'openai': 'OpenAI',
                        'anthropic': 'Anthropic',
                        'qwen': 'Qwen'
                    };
                    const providerName = providerNames[provider] || provider;
                    
                    if (data.error) {
                        console.error('API key status error:', data.error);
                        // Don't show error if it's just that no key is set
                        if (data.has_key === false) {
                            showApiKeyError(`No ${providerName} API key found. Please enter your ${providerName} API key.`);
                        } else {
                            showApiKeyError(`Error checking API key: ${data.error}`);
                        }
                    } else if (data.has_key) {
                        showApiKeyStatus(`${providerName} API key is set: ${data.masked_key}`);
                    } else {
                        showApiKeyError(`No ${providerName} API key found. Please enter your ${providerName} API key.`);
                    }
                })
                .catch(error => {
                    console.error('Error checking API key status:', error);
                    // Silently fail - don't show error to user
                });
        }
        
                 // Global variables
         let selectedAsset = '';
         let selectedTimeframe = '1h'; // Default timeframe
         
         function selectAsset(button, asset) {
             // Remove active class from all asset buttons
             document.querySelectorAll('.asset-btn').forEach(btn => {
                 btn.classList.remove('active');
             });
             
             // Add active class to clicked button
             button.classList.add('active');
             
             // Store selected asset
             selectedAsset = asset;
             try {
                 localStorage.setItem(STORAGE_KEYS.SELECTED_ASSET, asset);
             } catch (e) {
                 console.warn('Could not persist selected asset', e);
             }

             // Hide custom asset input if it was showing
             const cav = document.getElementById('customAssetDiv');
             if (cav) cav.style.display = 'none';

             console.log('Selected asset:', asset);
         }
         
         function showCustomAssetInput() {
             // Remove active class from all asset buttons
             document.querySelectorAll('.asset-btn').forEach(btn => {
                 btn.classList.remove('active');
             });
             
             // Show custom asset input
             document.getElementById('customAssetDiv').style.display = 'block';
             document.getElementById('customAssetInput').focus();
             
             // Clear selected asset
             selectedAsset = '';
         }
         
         function confirmCustomAsset() {
             const customAssetEl = document.getElementById('customAssetInput');
             const customAsset = customAssetEl.value.trim();

             if (!customAsset) {
                 alert('Please enter a custom asset symbol.');
                 return;
             }

             // Normalize (trim)
             const symbol = customAsset;

             // Save to localStorage list
             try {
                 const listRaw = localStorage.getItem(STORAGE_KEYS.CUSTOM_ASSETS);
                 const list = listRaw ? JSON.parse(listRaw) : [];
                 if (!list.includes(symbol)) {
                     list.push(symbol);
                     localStorage.setItem(STORAGE_KEYS.CUSTOM_ASSETS, JSON.stringify(list));
                 }
             } catch (e) {
                 console.warn('Could not persist custom asset to localStorage', e);
             }

             // Persist to server (best-effort)
             fetch('/api/save-custom-asset', {
                 method: 'POST',
                 headers: { 'Content-Type': 'application/json' },
                 body: JSON.stringify({ symbol })
             }).then(r => r.json())
               .then(resp => {
                   if (!resp.success) {
                       console.warn('Server did not save custom asset', resp);
                   }
               }).catch(err => {
                   console.warn('Error saving custom asset to server', err);
               });

            // Add button and select it
            addCustomAssetButton(symbol);
            // Select the new asset: find button and click
            const grid = document.getElementById('assetButtonGrid');
            const newBtn = Array.from(grid.querySelectorAll('.asset-btn')).find(b => b.dataset.asset === symbol);
            if (newBtn) {
                newBtn.click();
            }

            // Hide custom asset input
            document.getElementById('customAssetDiv').style.display = 'none';

            // Clear input
            customAssetEl.value = '';

            // Notify user
            // Use a non-blocking notification (replace alert with console + subtle DOM message if desired)
            console.log(`Custom asset "${symbol}" selected and persisted`);
         }
        
                 function runAnalysis() {
             const dataSource = 'live'; // Always use live data
             const timeframe = selectedTimeframe;
             
             // Get asset value from selected asset
             let asset = selectedAsset;
             
             // Validate inputs
             if (!asset || !timeframe) {
                 alert('Please select both asset and timeframe.');
                 return;
             }
             
             // Get date and time values
             const startDate = document.getElementById('startDate').value;
             const startTime = document.getElementById('startTime').value;
             const endDate = document.getElementById('endDate').value;
             const endTime = document.getElementById('endTime').value;
             const useCurrentTime = document.getElementById('useCurrentTime').checked;
             
             // Validate dates
             if (!startDate || !endDate) {
                 alert('Please select both start and end dates.');
                 return;
             }
             
             // Show loading state
             const analyzeBtn = document.getElementById('analyzeBtn');
             const originalText = analyzeBtn.innerHTML;
             analyzeBtn.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Analyzing...';
             analyzeBtn.disabled = true;
             
             // Prepare request data
             const requestData = {
                 data_source: dataSource,
                 asset: asset,
                 timeframe: timeframe,
                 start_date: startDate,
                 start_time: startTime,
                 end_date: endDate,
                 end_time: endTime,
                 use_current_time: useCurrentTime,
                 redirect_to_output: true
             };
             
             // Make API call
             fetch('/api/analyze', {
                 method: 'POST',
                 headers: {
                     'Content-Type': 'application/json',
                 },
                 body: JSON.stringify(requestData)
             })
             .then(response => response.json())
            .then(data => {
                if (data.redirect) {
                    // Store full results (with images) in sessionStorage before redirect
                    if (data.full_results) {
                        sessionStorage.setItem('analysisResults', JSON.stringify(data.full_results));
                    }
                    // Redirect to output page with results
                    window.location.href = data.redirect;
                 } else if (data.error) {
                     // Show error message
                     alert('Analysis failed: ' + data.error);
                     // Reset button
                     analyzeBtn.innerHTML = originalText;
                     analyzeBtn.disabled = false;
                 } else {
                     // Handle other responses
                     console.log('Analysis completed:', data);
                     alert('Analysis completed successfully!');
                     // Reset button
                     analyzeBtn.innerHTML = originalText;
                     analyzeBtn.disabled = false;
                 }
             })
             .catch(error => {
                 console.error('Error:', error);
                 alert('An error occurred during analysis. Please try again.');
                 // Reset button
                 analyzeBtn.innerHTML = originalText;
                 analyzeBtn.disabled = false;
             });
        }
        
        function handleUseCurrentTimeChange() {
            const useCurrentTime = document.getElementById('useCurrentTime');
            const endTimeInput = document.getElementById('endTime');
            const endDateInput = document.getElementById('endDate');
            
            if (useCurrentTime.checked) {
                // Lock both end date and end time
                endTimeInput.disabled = true;
                endDateInput.disabled = true;
                endTimeInput.style.opacity = '0.5';
                endDateInput.style.opacity = '0.5';
                
                // Set to current date and time
                const now = new Date();
                const currentDate = now.toISOString().split('T')[0];
                const currentTime = now.toTimeString().slice(0, 5); // HH:MM format
                
                endDateInput.value = currentDate;
                endTimeInput.value = currentTime;
                
                // Add visual indication
                endDateInput.title = 'Locked: Using current date/time';
                endTimeInput.title = 'Locked: Using current date/time';
            } else {
                // Unlock both inputs
                endTimeInput.disabled = false;
                endDateInput.disabled = false;
                endTimeInput.style.opacity = '1';
                endDateInput.style.opacity = '1';
                
                // Remove visual indication
                endDateInput.title = '';
                endTimeInput.title = '';
            }
        }
        
        function updateCurrentTime() {
            const useCurrentTime = document.getElementById('useCurrentTime');
            if (useCurrentTime.checked) {
                const now = new Date();
                const currentDate = now.toISOString().split('T')[0];
                const currentTime = now.toTimeString().slice(0, 5); // HH:MM format
                
                document.getElementById('endDate').value = currentDate;
                document.getElementById('endTime').value = currentTime;
            }
        }
        
        function validateDateRange() {
            // Simple date validation
            const startDate = document.getElementById('startDate').value;
            const endDate = document.getElementById('endDate').value;
            
            if (startDate && endDate && startDate > endDate) {
                document.getElementById('dateRangeError').style.display = 'block';
                document.getElementById('dateRangeErrorText').textContent = 'Start date cannot be after end date';
            } else {
                document.getElementById('dateRangeError').style.display = 'none';
            }
        }
        
        function hideDateValidation() {
            document.getElementById('dateRangeError').style.display = 'none';
            document.getElementById('dateRangeInfo').style.display = 'none';
        }
        
                 function updateTimeframeLimits() {
             // Placeholder for timeframe limits functionality
             console.log('Timeframe limits updated');
         }
         
         // Provider and API Key Management Functions
         function handleProviderChange() {
             const provider = document.getElementById('llmProviderSelect').value;
             const openaiGroup = document.getElementById('openaiApiKeyGroup');
             const anthropicGroup = document.getElementById('anthropicApiKeyGroup');
             const qwenGroup = document.getElementById('qwenApiKeyGroup');
             
             // Hide all groups first
             openaiGroup.style.display = 'none';
             anthropicGroup.style.display = 'none';
             qwenGroup.style.display = 'none';
             
             // Show the selected provider's group
             if (provider === 'openai') {
                 openaiGroup.style.display = 'block';
             } else if (provider === 'anthropic') {
                 anthropicGroup.style.display = 'block';
             } else if (provider === 'qwen') {
                 qwenGroup.style.display = 'block';
             }
             
             // Update provider on backend
             updateProvider(provider);
             
             // Check API key status for the selected provider
             checkApiKeyStatus();
         }
         
         function updateProvider(provider) {
             // Save provider preference
             localStorage.setItem('quantagent_provider', provider);
             
             fetch('/api/update-provider', {
                 method: 'POST',
                 headers: {
                     'Content-Type': 'application/json',
                 },
                 body: JSON.stringify({ provider: provider })
             })
             .then(response => response.json())
             .then(data => {
                 if (data.success) {
                     console.log(`Provider switched to ${provider}`);
                 } else {
                     console.error('Failed to update provider:', data.error);
                 }
             })
             .catch(error => {
                 console.error('Error updating provider:', error);
             });
         }
         
         function updateApiKey(provider) {
             const providerSelect = document.getElementById('llmProviderSelect');
             const actualProvider = provider || providerSelect.value;
             
             let apiKey;
             if (actualProvider === 'openai') {
                 apiKey = document.getElementById('openaiApiKeyInput').value.trim();
             } else if (actualProvider === 'anthropic') {
                 apiKey = document.getElementById('anthropicApiKeyInput').value.trim();
             } else if (actualProvider === 'qwen') {
                 apiKey = document.getElementById('qwenApiKeyInput').value.trim();
             }
             
             if (!apiKey) {
                 showApiKeyError('Please enter an API key');
                 return;
             }
             
             // Hide previous messages
             hideApiKeyMessages();
             
             // Show loading state
             const updateBtn = event.target.closest('button');
             const originalText = updateBtn.innerHTML;
             updateBtn.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Updating...';
             updateBtn.disabled = true;
             
             // Make API call to update the key
             fetch('/api/update-api-key', {
                 method: 'POST',
                 headers: {
                     'Content-Type': 'application/json',
                 },
                 body: JSON.stringify({ 
                     api_key: apiKey,
                     provider: actualProvider
                 })
             })
             .then(response => response.json())
             .then(data => {
                 if (data.success) {
                     const providerNames = {
                         'openai': 'OpenAI',
                         'anthropic': 'Anthropic',
                         'qwen': 'Qwen'
                     };
                     showApiKeySuccess(`${providerNames[actualProvider] || actualProvider} API key updated successfully!`);
                     if (actualProvider === 'openai') {
                         document.getElementById('openaiApiKeyInput').value = '';
                     } else if (actualProvider === 'anthropic') {
                         document.getElementById('anthropicApiKeyInput').value = '';
                     } else if (actualProvider === 'qwen') {
                         document.getElementById('qwenApiKeyInput').value = '';
                     }
                     checkApiKeyStatus();
                 } else {
                     showApiKeyError(data.error || 'Failed to update API key');
                 }
             })
             .catch(error => {
                 console.error('Error:', error);
                 showApiKeyError('An error occurred while updating the API key');
             })
             .finally(() => {
                 // Reset button
                 updateBtn.innerHTML = originalText;
                 updateBtn.disabled = false;
             });
         }
         
         function showApiKeySuccess(message) {
             const successDiv = document.getElementById('apiKeySuccess');
             const successText = document.getElementById('apiKeySuccessText');
             successText.textContent = message;
             successDiv.style.display = 'block';
             
             // Hide after 5 seconds
             setTimeout(() => {
                 successDiv.style.display = 'none';
             }, 5000);
         }
         
         function showApiKeyError(message) {
             const errorDiv = document.getElementById('apiKeyError');
             const errorText = document.getElementById('apiKeyErrorText');
             errorText.textContent = message;
             errorDiv.style.display = 'block';
             
             // Hide after 5 seconds
             setTimeout(() => {
                 errorDiv.style.display = 'none';
             }, 5000);
         }
         
         function hideApiKeyMessages() {
             document.getElementById('apiKeyError').style.display = 'none';
             document.getElementById('apiKeySuccess').style.display = 'none';
         }
    </script>
</body>
</html>
