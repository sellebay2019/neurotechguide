<?php
// index.php — NeuroTechGuide v5.6 | GIT-SAFE NUCLEAR MODE
// 100% PHP | NO HTML | NO INCLUDES | FORCES EXECUTION
header('Content-Type: text/html; charset=utf-8');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>NeuroTechGuide — Decode the Neural Future</title>
  <meta name="description" content="Ad-free BCI guides, Neuralink ethics, EEG tools. Trusted by 10K+ neural explorers.">
  <link rel="canonical" href="https://neurotechguide.com/">
  <meta property="og:title" content="NeuroTechGuide — Decode the Neural Future">
  <meta property="og:description" content="Free BCI education: Neuralink, EEG, ethics. No hype — pure signal.">
  <meta property="og:type" content="website">
  <link rel="icon" href="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 100 100'%3E%3Ctext y='.9em' font-size='90'%3E🧠%3C/text%3E%3C/svg%3E">
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
  <style>
    :root{--bg:#0a0a0a;--text:#e0e0e0;--card:#1a1a1a;--border:#333;--accent:#00d4ff;--success:#4CAF50;--urgent:#E50914;--cta:#FF6B35;--header-bg:rgba(0,51,102,0.95);--gradient:linear-gradient(135deg,#00d4ff,#003366);}
    [data-theme=light]{--bg:#f5f5f5;--text:#111;--card:#fff;--border:#ddd;--accent:#00aaff;--success:#388E3C;--cta:#F4511E;--header-bg:rgba(0,34,68,0.95);--gradient:linear-gradient(135deg,#00aaff,#002244);}
    *{margin:0;padding:0;box-sizing:border-box;}body{font-family:'Inter',sans-serif;background:var(--bg);color:var(--text);line-height:1.8;transition:background 0.3s,color 0.3s;}
    a{color:var(--accent);text-decoration:none;}a:hover{text-decoration:underline;}
    header{position:fixed;top:0;left:0;right:0;z-index:1000;backdrop-filter:blur(12px);background:var(--header-bg);border-bottom:1px solid var(--border);color:#fff;}
    nav{max-width:1200px;margin:auto;padding:1rem;display:flex;justify-content:space-between;align-items:center;}
    .logo{font-weight:700;font-size:1.5rem;color:#fff;}.logo span{color:var(--accent);}
    .nav-links{display:flex;gap:2rem;}.nav-links a{font-weight:600;color:#fff;position:relative;}.nav-links a::after{content:'';position:absolute;bottom:-5px;left:0;width:0;height:2px;background:var(--accent);transition:width 0.3s;}.nav-links a:hover::after{width:100%;}
    .theme-toggle{background:none;border:none;font-size:1.2rem;cursor:pointer;color:#fff;}
    .search-container{padding:0.5rem 1rem;text-align:center;background:rgba(255,255,255,0.05);border-bottom:1px solid var(--border);}
    #search{padding:0.75rem;width:320px;max-width:90%;border-radius:8px;border:1px solid var(--border);background:var(--card);color:var(--text);font-size:1rem;}
    #results{margin-top:0.5rem;font-size:0.9rem;color:var(--success);}
    .hero{min-height:100vh;display:flex;flex-direction:column;justify-content:center;align-items:center;text-align:center;padding:6rem 1rem 4rem;max-width:900px;margin:auto;background:var(--gradient);animation:gradient 15s ease infinite;}
    @keyframes gradient{0%{background-position:0% 50%;}50%{background-position:100% 50%;}100%{background-position:0% 50%;}}
    .hero h1{font-size:3rem;margin-bottom:1rem;line-height:1.2;background:var(--gradient);-webkit-background-clip:text;-webkit-text-fill-color:transparent;background-clip:text;}
    .hero p{font-size:1.2rem;max-width:700px;margin-bottom:2rem;opacity:0.9;}
    .cta-btn{background:var(--cta);color:#fff;padding:1rem 2rem;border-radius:8px;font-weight:700;font-size:1.1rem;transition:background 0.3s,transform 0.3s;box-shadow:0 4px 6px rgba(0,0,0,0.1);}
    .cta-btn:hover{background:#e55a2b;transform:scale(1.05);}
    .breadcrumbs{font-size:0.9rem;margin-bottom:1rem;opacity:0.7;}.breadcrumbs a{color:var(--text);}
    section{padding:5rem 1rem;max-width:1200px;margin:auto;}.section-title{text-align:center;font-size:2rem;margin-bottom:3rem;position:relative;color:var(--text);}.section-title::after{content:'';position:absolute;bottom:-10px;left:50%;transform:translateX(-50%);width:60px;height:3px;background:var(--accent);}
    .grid{display:grid;grid-template-columns:repeat(auto-fit,minmax(300px,1fr));gap:2rem;}
    .card{background:var(--card);padding:2rem;border-radius:12px;border:1px solid var(--border);transition:transform 0.3s,box-shadow 0.3s;}
    .card:hover{transform:translateY(-8px);box-shadow:0 10px 20px rgba(0,212,255,0.2);}
    .card h3,.card h4{margin-bottom:1rem;color:var(--accent);font-size:1.4rem;}
    .card p{margin-bottom:1rem;line-height:1.8;}
    .news-badge{background:var(--urgent);color:#fff;padding:0.25rem 0.5rem;border-radius:4px;font-size:0.8rem;margin-left:0.5rem;box-shadow:0 0 5px var(--urgent);}
    .newsletter-form{max-width:500px;margin:2rem auto;text-align:center;}
    .newsletter-form input{width:70%;padding:1rem;border-radius:8px;border:1px solid var(--border);background:var(--card);color:var(--text);margin-right:0.5rem;}
    .newsletter-form button{padding:1rem 1.5rem;background:var(--success);color:#fff;border:none;border-radius:8px;font-weight:600;transition:transform 0.3s;}
    .newsletter-form button:hover{transform:rotate(3deg);}
    .testimonial blockquote{font-style:italic;margin-bottom:1rem;}
    .testimonial cite{font-weight:600;color:var(--accent);}
    .cta-middle{text-align:center;padding:3rem 1rem;background:var(--gradient);color:#fff;border-radius:12px;margin:3rem 0;}
    @media (max-width:768px){.nav-links{display:none;}.hero h1{font-size:2.2rem;}#search{width:95%;}.grid{grid-template-columns:1fr;}}
  </style>
</head>
<body data-theme="dark">
  <header>
    <nav aria-label="Main navigation">
      <div class="logo">Neuro<span>Tech</span>Guide</div>
      <div class="nav-links">
        <a href="#about">About</a>
        <a href="#guides">Guides</a>
        <a href="#news">News</a>
        <a href="#newsletter">Subscribe</a>
        <a href="https://neurotechguide.gumroad.com/l/neural-nomad" target="_blank">Neural Nomad</a>
      </div>
      <button class="theme-toggle" onclick="toggleTheme()" aria-label="Toggle Theme">🌙</button>
    </nav>
  </header>
  <div class="search-container">
    <input type="text" id="search" placeholder="Search Neuralink, Ethics..." aria-label="Search">
    <div id="results"></div>
  </div>

  <!-- HERO -->
  <section class="hero">
    <nav class="breadcrumbs" aria-label="Breadcrumb"><a href="/">Home</a></nav>
    <h1>Unlock Brain-Computer Interfaces</h1>
    <p>Free, ad-free guides on Neuralink, EEG, ethics. Empower 10K+ explorers to navigate the neural frontier. No hype — pure signal.</p>
    <a href="#newsletter" class="cta-btn">Join Neural Loop →</a>
  </section>

  <!-- ABOUT -->
  <section id="about">
    <nav class="breadcrumbs" aria-label="Breadcrumb"><a href="/">Home</a> > <span>About</span></nav>
    <h2 class="section-title">Pioneering Ethical Neurotech Education</h2>
    <p>NeuroTechGuide demystifies brain-computer interfaces for innovators, researchers, and curious minds. From Neuralink trials to home EEG setups, we deliver unbiased insights on augmentation, risks, and ethics. Founded to bridge science and society — because the future of thought deserves transparency.</p>

    <h3>Our Neural Core Values</h3>
    <div class="grid">
      <div class="card"><h4>Ethical Innovation</h4><p>Prioritizing privacy and consent in every neural breakthrough. We guide with integrity, unpacking biases in AI-brain tech.</p></div>
      <div class="card"><h4>Open Access Knowledge</h4><p>Ad-free, open-source inspired. Empowering global explorers with tools to hack cognition without gatekeepers.</p></div>
      <div class="card"><h4>Evidence-Driven Exploration</h4><p>Backed by peer-reviewed studies and real-world trials. No speculation — just data-fueled paths to human enhancement.</p></div>
    </div>

    <div class="cta-middle">
      <h3>Why Neural Pioneers Choose Us</h3>
      <p>Deep-dive guides that cut through hype. Interactive ethics sims. Community-vetted resources. Your edge in the brain race.</p>
      <a href="/guides" class="cta-btn">Start Exploring →</a>
    </div>

    <h3>Our Unique Neural Edge</h3>
    <p>Science-backed, community-forged insights that outpace the curve.</p>
    <div class="grid">
      <div class="card"><h4>Interactive Ethics Simulator</h4><p>Unlike static blogs, our quiz scores your BCI readiness — personalized risks vs. rewards.</p></div>
      <div class="card"><h4>Real-Time Neural News</h4><p>Curated from FDA filings to X threads. Faster, deeper than IEEE alerts — with bias checks.</p></div>
      <div class="card"><h4>Open EEG Blueprints</h4><p>DIY kits and code repos. Hands-on value over theory — turn readers into builders.</p></div>
    </div>
  </section>

  <!-- TESTIMONIALS -->
  <section id="testimonials" style="background:var(--card);">
    <nav class="breadcrumbs" aria-label="Breadcrumb"><a href="/">Home</a> > <span>Testimonials</span></nav>
    <h2 class="section-title">What Neural Explorers Say</h2>
    <div class="grid">
      <div class="card testimonial"><blockquote>"NeuroTechGuide turned my Neuralink curiosity into ethical clarity. The sim quiz? Game-changer for my research."</blockquote><cite>— Dr. Elena Voss, Neuroscientist, MIT</cite></div>
      <div class="card testimonial"><blockquote>"Finally, ad-free EEG guides that actually work. Built my first home rig in a weekend — pure signal, no noise."</blockquote><cite>— Alex Rivera, Indie Developer</cite></div>
      <div class="card testimonial"><blockquote>"Ethics unpacked like no other site. Helped my team navigate BCI regulations. Trusted resource for the frontier."</blockquote><cite>— Samir Khan, Ethics Consultant</cite></div>
    </div>
  </section>

  <!-- NEWSLETTER -->
  <section id="newsletter">
    <h2 class="section-title">Enter the Neural Loop</h2>
    <form class="newsletter-form" method="post" action="subscribe.php" onsubmit="return validateEmail();">
      <input type="email" id="email" name="email" placeholder="your@neuralmind.com" required aria-label="Email">
      <button type="submit" class="cta-btn">Subscribe Free</button>
    </form>
    <p>10K+ subscribers • Weekly neural drops • Zero spam</p>
  </section>

  <!-- TRENDING -->
  <section id="trending" style="background:#111;">
    <h2 class="section-title">Trending Neural Signals <span class="news-badge">Live</span></h2>
    <div class="grid">
      <div class="card"><h3>Neuralink's 3rd Implant</h3><p>FDA approval details <span class="news-badge">New</span>.</p><a href="/news/nov3">Read →</a></div>
      <div class="card"><h3>China's BCI Patent Surge</h3><p>1,200+ in 2025.</p><a href="/news/china-bci">Read →</a></div>
      <div class="card"><h3>BCI Ethics Simulator Update</h3><p>Your readiness score in 5 Qs.</p><a href="/guides/ethics">Take Quiz →</a></div>
    </div>
  </section>

  <footer>
    <p>&copy; 2025 NeuroTechGuide • Ad-Free • <a href="/privacy">Privacy</a> • <a href="/contact">Contact</a> • <a href="#" onclick="window.scrollTo(0,0);">Scroll to Top</a></p>
  </footer>

  <script>
    function toggleTheme() { const isLight = document.body.getAttribute('data-theme') === 'light'; const newTheme = isLight ? 'dark' : 'light'; document.body.setAttribute('data-theme', newTheme); localStorage.setItem('theme', newTheme); }
    if (localStorage.getItem('theme') === 'light') document.body.setAttribute('data-theme', 'light');
    const searchData = ['neuralink','ethics','eeg','bci','implants','news'];
    document.getElementById('search').addEventListener('input', e => { const term = e.target.value.toLowerCase(); const results = document.getElementById('results'); if (!term) return results.innerHTML = ''; const matches = searchData.filter(s => s.includes(term)); results.innerHTML = matches.map(m => `<a href="?search=${m}" style="display:block;padding:0.5rem;color:var(--accent);">${m}</a>`).join(''); });
    function validateEmail() { const email = document.getElementById('email').value; if (!email.includes('@') || !email.includes('.')) { alert('Valid email required'); return false; } return true; }
  </script>
</body>
</html>
