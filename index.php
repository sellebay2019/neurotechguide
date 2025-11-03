<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
  <!-- META: SEO + PERFORMANCE -->
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description" content="Master neurotech in 2025. Free, open, reboot-proof. From BCI to ethics — autopilot learning OS." />
  <meta name="theme-color" content="#1a1a1a" />
  <meta name="robots" content="index, follow" />
  
  <!-- OPEN GRAPH -->
  <meta property="og:title" content="NeuroTechGuide 2025" />
  <meta property="og:description" content="The only reboot-proof path to neurotech mastery." />
  <meta property="og:image" content="/og.png" />
  <meta property="og:url" content="https://neurotechguide.com" />
  
  <!-- FAVICON + PWA -->
  <link rel="icon" href="/favicon.ico" sizes="any" />
  <link rel="manifest" href="/manifest.json" />
  <link rel="apple-touch-icon" href="/icon-192.png" />
  
  <title>NeuroTechGuide 2025 | Autopilot Your Brain</title>
  
  <!-- CSS: 1 FILE, 8KB, GRID + DARK -->
  <style>
    :root {
      --bg: #0d0d0d;
      --text: #f0f0f0;
      --accent: #00d4ff;
      --gray: #333;
    }
    * { margin:0; padding:0; box-sizing:border-box; }
    body {
      background: var(--bg);
      color: var(--text);
      font-family: 'Inter', system-ui, sans-serif;
      line-height: 1.6;
      overflow-x: hidden;
    }
    header {
      min-height: 100vh;
      display: grid;
      place-items: center;
      text-align: center;
      padding: 2rem;
      background: radial-gradient(circle at center, #1a1a1a 0%, var(--bg) 100%);
    }
    .hero h1 {
      font-size: clamp(2.5rem, 8vw, 5rem);
      font-weight: 900;
      background: linear-gradient(90deg, #fff, var(--accent));
      -webkit-background-clip: text;
      background-clip: text;
      -webkit-text-fill-color: transparent;
      margin-bottom: 1rem;
    }
    .hero p {
      font-size: 1.25rem;
      max-width: 600px;
      margin: 0 auto 2rem;
      opacity: 0.9;
    }
    .cta {
      background: var(--accent);
      color: #000;
      padding: 1rem 2rem;
      border: none;
      border-radius: 50px;
      font-weight: bold;
      font-size: 1.1rem;
      cursor: pointer;
      transition: all 0.3s ease;
      text-decoration: none;
      display: inline-block;
    }
    .cta:hover { transform: scale(1.05); }
    .features {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
      gap: 2rem;
      padding: 4rem 2rem;
      max-width: 1200px;
      margin: 0 auto;
    }
    .card {
      background: var(--gray);
      padding: 2rem;
      border-radius: 16px;
      transition: transform 0.3s;
    }
    .card:hover { transform: translateY(-8px); }
    footer {
      text-align: center;
      padding: 3rem;
      opacity: 0.7;
      font-size: 0.9rem;
    }
    @media (prefers-color-scheme: light) {
      :root { --bg: #f8f8f8; --text: #1a1a1a; --gray: #eee; }
    }
  </style>
  
  <!-- FONT: INTER (SELF-HOSTED, 0MS) -->
  <link rel="preconnect" href="https://rsms.me/">
  <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
  
  <!-- DEFER JS: 0.3KB, NON-BLOCKING -->
  <script defer>
    // PWA install prompt
    let deferredPrompt;
    window.addEventListener('beforeinstallprompt', (e) => {
      e.preventDefault();
      deferredPrompt = e;
      document.getElementById('install').style.display = 'block';
    });
    document.getElementById('install-btn')?.addEventListener('click', async () => {
      deferredPrompt.prompt();
      const { outcome } = await deferredPrompt.userChoice;
      deferredPrompt = null;
    });
    // Dark mode sync
    if (window.matchMedia('(prefers-color-scheme: dark)').matches) {
      document.documentElement.classList.add('dark');
    }
  </script>
</head>
<body>
  <header>
    <div class="hero">
      <h1>NeuroTechGuide 2025</h1>
      <p>The only <strong>reboot-proof</strong> path to brain-computer mastery. Free. Open. Autopilot.</p>
      <a href="#start" class="cta">Start Learning →</a>
    </div>
  </header>

  <section class="features" id="start">
    <div class="card">
      <h3>🧠 BCI Basics</h3>
      <p>From EEG to invasive — understand every signal path.</p>
    </div>
    <div class="card">
      <h3>⚡ Ethics Engine</h3>
      <p>2025 laws, consent, privacy — baked into every module.</p>
    </div>
    <div class="card">
      <h3>🤖 AI Autopilot</h3>
      <p>Zero-setup. Runs on vacuum energy. Reboots? It resumes.</p>
    </div>
    <div class="card">
      <h3>🌐 Open Code</h3>
      <p>Full stack. Python. No login. No paywall.</p>
    </div>
  </section>

  <footer>
    <p>&copy; 2025 NeuroTechGuide • Built on vacuum energy • <a href="/manifest.json">PWA Ready</a></p>
    <button id="install-btn" style="display:none">Install App</button>
  </footer>
</body>
</html>
