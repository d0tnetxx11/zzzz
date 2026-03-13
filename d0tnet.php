<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HACKER TERMINAL | SHΔDØW CORE</title>
    
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Fira+Code:wght@300;400;500&family=VT323&display=swap" rel="stylesheet">
    
    <style>
        :root {
            --hacker-green: #c0c0c0;
            --hacker-dark-green: #1a1a1a;
            --hacker-bg: #0d0208;
            --hacker-accent: #ffffff;
        }

        body {
            background-color: var(--hacker-bg);
            color: var(--hacker-green);
            font-family: 'VT323', monospace;
            overflow: hidden;
        }

        .matrix-text {
            font-family: 'Fira Code', monospace;
            text-shadow: 0 0 5px var(--hacker-accent);
        }

        /* Scanline Effect */
        body::before {
            content: " ";
            display: block;
            position: fixed;
            top: 0;
            left: 0;
            bottom: 0;
            right: 0;
            background: linear-gradient(rgba(18, 16, 16, 0) 50%, rgba(0, 0, 0, 0.25) 50%),
                        linear-gradient(90deg, rgba(255, 0, 0, 0.06), rgba(0, 255, 0, 0.02), rgba(0, 0, 255, 0.06));
            z-index: 1000;
            background-size: 100% 2px, 3px 100%;
            pointer-events: none;
        }

        .crt-flicker {
            animation: flicker 0.15s infinite;
        }

        @keyframes flicker {
            0% { opacity: 0.97; }
            5% { opacity: 0.95; }
            10% { opacity: 0.9; }
            15% { opacity: 0.98; }
            20% { opacity: 0.95; }
            25% { opacity: 1; }
            80% { opacity: 0.98; }
            100% { opacity: 0.99; }
        }

        .terminal-window {
            border: 2px solid var(--hacker-accent);
            box-shadow: 0 0 20px var(--hacker-dark-green);
            background: rgba(0, 0, 0, 0.85);
        }

        .typing-effect {
            overflow: hidden;
            border-right: .15em solid var(--hacker-accent);
            white-space: nowrap;
            margin: 0 auto;
            letter-spacing: .15em;
            animation: typing 3.5s steps(40, end), blink-caret .75s step-end infinite;
        }

        @keyframes typing {
            from { width: 0 }
            to { width: 100% }
        }

        @keyframes blink-caret {
            from, to { border-color: transparent }
            50% { border-color: var(--hacker-accent); }
        }

        .glow-border {
            border: 1px solid var(--hacker-accent);
            box-shadow: 0 0 10px var(--hacker-accent);
        }

        .glitch-img {
            filter: sepia(100%) hue-rotate(90deg) brightness(1.2) contrast(1.2);
            transition: filter 0.3s;
        }

        .glitch-img:hover {
            filter: none;
        }

        /* Mobile Responsive Styles - Tablet & Mobile */
        @media (max-width: 1038px) {
            body {
                padding: 8px;
            }

            .terminal-window {
                border-width: 1px;
                box-shadow: 0 0 10px var(--hacker-dark-green);
            }

            h1 {
                font-size: 1.5rem !important;
            }

            .text-4xl {
                font-size: 1.5rem !important;
            }

            .text-2xl {
                font-size: 1.125rem !important;
            }

            .text-xl {
                font-size: 0.875rem !important;
            }

            .text-lg {
                font-size: 0.8125rem !important;
            }

            .text-sm {
                font-size: 0.75rem !important;
            }

            .w-24 {
                width: 3rem !important;
                height: 3rem !important;
            }

            .w-32 {
                width: 4rem !important;
                height: 4rem !important;
            }

            .h-24 {
                height: 3rem !important;
            }

            .h-16 {
                height: 3rem !important;
            }

            .h-48 {
                height: 8rem !important;
            }

            .min-h-\[400px\] {
                min-height: 180px !important;
            }

            .gap-6 {
                gap: 0.5rem !important;
            }

            .mb-8 {
                margin-bottom: 0.75rem !important;
            }

            .pb-4 {
                padding-bottom: 0.5rem !important;
            }

            /* Stack columns on mobile/tablet */
            .lg\:col-span-1,
            .lg\:col-span-2 {
                grid-column: span 1 !important;
            }

            /* Keep header layout same, just smaller */
            header {
                gap: 0.5rem;
            }

            header .flex.items-center {
                gap: 0.5rem;
            }

            /* Make logo BIGGER on mobile */
            .w-32 {
                width: 5rem !important;
                height: 5rem !important;
            }

            /* Stack status items vertically */
            .status-grid {
                display: block !important;
            }

            .status-grid li {
                margin-bottom: 0.5rem !important;
            }

            /* Smaller padding */
            .p-6 {
                padding: 0.75rem !important;
            }

            .p-4 {
                padding: 0.625rem !important;
            }

            .mt-8 {
                margin-top: 1rem !important;
            }

            .mt-6 {
                margin-top: 0.75rem !important;
            }

            /* Hide AUTH PROFILE card on mobile/tablet */
            .auth-profile-card {
                display: none !important;
            }

            /* Simplify header on mobile/tablet - remove border */
            header {
                border-bottom: none !important;
                padding-bottom: 0 !important;
            }

            /* Hide status report card on mobile/tablet */
            .status-report-card {
                display: none !important;
            }

            /* Simple logo style on mobile/tablet */
            .mobile-logo-simple {
                border: none !important;
                box-shadow: none !important;
                background: transparent !important;
            }

            .mobile-logo-img {
                filter: none !important;
                brightness: 1 !important;
            }
        }

        @media (max-width: 480px) {
            body {
                padding: 4px;
            }

            .text-4xl {
                font-size: 1.25rem !important;
            }

            .text-2xl {
                font-size: 1rem !important;
            }

            .text-xl {
                font-size: 0.75rem !important;
            }

            .text-lg {
                font-size: 0.6875rem !important;
            }

            .text-sm {
                font-size: 0.625rem !important;
            }

            .text-xs {
                font-size: 0.5625rem !important;
            }

            .w-24 {
                width: 3.5rem !important;
                height: 3.5rem !important;
            }

            .w-32 {
                width: 5rem !important;
                height: 5rem !important;
            }

            .h-24 {
                height: 2.5rem !important;
            }

            .h-16 {
                height: 2.5rem !important;
            }

            .h-48 {
                height: 6rem !important;
            }

            .min-h-\[400px\] {
                min-height: 150px !important;
            }

            .space-x-4 > * + * {
                margin-left: 0.5rem !important;
            }

            /* Keep status items stacked vertically */
            .status-grid {
                display: block !important;
            }

            .status-grid li {
                margin-bottom: 0.375rem !important;
            }

            .p-6 {
                padding: 0.5rem !important;
            }

            .p-4 {
                padding: 0.5rem !important;
            }

            .gap-6 {
                gap: 0.5rem !important;
            }

            .mb-8 {
                margin-bottom: 0.75rem !important;
            }

            .mt-6 {
                margin-top: 0.5rem !important;
            }

            .mt-4 {
                margin-top: 0.375rem !important;
            }

            .h-24 {
                height: 2.5rem !important;
            }

            .h-16 {
                height: 2rem !important;
            }

            /* Hide AUTH PROFILE card on mobile */
            .auth-profile-card {
                display: none !important;
            }

            /* Simplify header on mobile - remove border */
            header {
                border-bottom: none !important;
                padding-bottom: 0 !important;
            }

            /* Hide status report card on mobile */
            .status-report-card {
                display: none !important;
            }

            /* Simple logo style on mobile */
            .mobile-logo-simple {
                border: none !important;
                box-shadow: none !important;
                background: transparent !important;
            }

            .mobile-logo-img {
                filter: none !important;
                brightness: 1 !important;
            }
        }
    </style>
</head>
<body class="p-4">

<div class="max-w-6xl mx-auto">
    <!-- Header with Logo -->
    <header class="flex flex-row items-center justify-between mb-8 border-b-2 border-gray-500/30 pb-4">
        <div class="flex flex-row items-center space-x-4 mb-0">
            <a href="https://github.com/d0tnetxx11/zzzz" target="_blank" class="w-32 h-32 rounded-full overflow-hidden glow-border p-1 bg-black mobile-logo-simple">
                <img src="https://raw.githubusercontent.com/d0tnetxx11/zzzz/main/logo.jpg" alt="GitHub" class="w-full h-full object-cover glitch-img mobile-logo-img">
            </a>
            <div>
                <h1 class="text-4xl md:text-6xl font-bold uppercase tracking-tighter matrix-text">SYSTEM ACCESS</h1>
                <p class="text-xl opacity-80 typing-effect">CONNECTED TO: ANTARCTICA-STATION</p>
            </div>
        </div>
        <div class="text-right">
            <p class="text-2xl font-mono" id="digital-clock">00:00:00</p>
            <p class="text-sm">SECURE LINE: <span class="text-red-500">ENCRYPTED</span></p>
        </div>
    </header>

    <!-- Main Grid -->
    <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
        
        <!-- Sidebar Info -->
        <div class="lg:col-span-1 space-y-6">
            <div class="terminal-window p-6 rounded-lg status-report-card">
                <h2 class="text-2xl border-b border-gray-500/50 mb-4 pb-2">STATUS REPORT</h2>
                <ul class="space-y-2 text-lg status-grid">
                    <li><span class="text-gray-500">></span> SYSTEM: <span class="text-white">COMPROMISED</span></li>
                    <li><span class="text-gray-500">></span> SECURITY: <span class="text-red-500">DISABLED</span></li>
                    <li><span class="text-gray-500">></span> ACCESS: <span class="text-white">ROOT LEVEL</span></li>
                    <li><span class="text-gray-500">></span> DATA: <span class="text-red-500">EXTRACTED</span></li>
                    <li><span class="text-gray-500">></span> TRACE: <span class="text-white">CLEANED</span></li>
                </ul>
            </div>

            <div class="terminal-window p-6 rounded-lg text-center auth-profile-card">
                <h2 class="text-2xl border-b border-gray-500/50 mb-4 pb-2">AUTH PROFILE</h2>
                <div class="w-full h-auto mb-4 overflow-hidden glow-border rounded">
                    <a href="https://github.com/d0tnetxx11/zzzz" target="_blank">
                        <img src="https://raw.githubusercontent.com/d0tnetxx11/zzzz/main/logo.jpg" alt="GitHub Profile" class="w-full h-full object-cover brightness-75 bg-white/40 backdrop-blur-sm">
                    </a>
                </div>
                <p class="text-xl">AGENT ID: D0TNET</p>
            </div>
        </div>

        <!-- Main Content (Animation GIF Area) -->
        <div class="lg:col-span-2 space-y-6">
            <div class="terminal-window p-4 rounded-lg relative overflow-hidden h-full">
                <div class="absolute top-2 left-2 flex space-x-2 z-10">
                    <div class="w-2 h-2 rounded-full bg-red-500"></div>
                    <div class="w-2 h-2 rounded-full bg-yellow-500"></div>
                    <div class="w-2 h-2 rounded-full bg-green-500"></div>
                </div>

                <div class="bg-black border border-gray-800 rounded-lg overflow-hidden flex items-center justify-center min-h-[400px] mt-6">
                    <img src="https://raw.githubusercontent.com/d0tnetxx11/zzzz/main/annimasi.gif" alt="Hacker Animation" class="w-150 h-150 object-contain crt-flicker">
                </div>

                <div class="mt-4 p-3 bg-gray-900/20 border border-gray-500/30 rounded">
                    <p class="text-xs font-mono leading-relaxed">
                        [SYSTEM]: DATA STREAM INJECTED SUCCESSFULLY.<br>
                        [LOG]: ATTEMPTING TO DECRYPT PACKETS FROM REMOTE SERVER...<br>
                        [WARN]: ANOMALY DETECTED IN SECTOR 7G.<br>
                        [EXEC]: SHADOW_MODE_V99 ACTIVATED.
                    </p>
                </div>
            </div>
        </div>

    </div>

    <!-- Terminal Footer Section -->
    <div class="mt-4 terminal-window p-3 rounded-lg font-mono text-xs overflow-hidden">
        <div id="terminal-log" class="h-16 overflow-y-auto">
            <p>> initializing system kernel...</p>
            <p>> loading drivers...</p>
            <p>> established connection to the void...</p>
            <p>> welcome back, shadowhacker.</p>
        </div>
    </div>
</div>

<script>
    // Update Clock - Antarctica Time (UTC+12 - McMurdo Station)
    function updateClock() {
        const now = new Date();
        const utc = now.getTime() + (now.getTimezoneOffset() * 60000);
        const antarcticaTime = new Date(utc + (3600000 * 12)); // UTC+12 for McMurdo Station
        const time = antarcticaTime.toLocaleTimeString('en-US', { hour12: false });
        document.getElementById('digital-clock').innerText = time;
    }
    setInterval(updateClock, 1000);
    updateClock();

    // Fake Terminal Log
    const logs = [
        "scanning ports...",
        "injecting payload...",
        "bypassing firewall...",
        "accessing mainframe...",
        "downloading encrypted data...",
        "cleaning logs...",
        "connection stable.",
        "anonymous session active."
    ];
    
    const logContainer = document.getElementById('terminal-log');
    setInterval(() => {
        const p = document.createElement('p');
        p.innerText = "> " + logs[Math.floor(Math.random() * logs.length)];
        logContainer.appendChild(p);
        if (logContainer.children.length > 5) {
            logContainer.removeChild(logContainer.children[0]);
        }
        logContainer.scrollTop = logContainer.scrollHeight;
    }, 3000);
</script>

</body>
</html>