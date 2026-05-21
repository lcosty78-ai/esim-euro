<!DOCTYPE html>
<html lang="ro">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
  <meta name="description" content="eSIM nelimitat Europa. Internet instant fără roaming, activare rapidă, plată sigură și suport 24/7.">
  <title>eSIM Nelimitat | Internet nelimitat în Europa</title>
  <link rel="icon" type="image/png" href="/favicon.png">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:opsz,wght@14..32,300;14..32,400;14..32,600;14..32,700;14..32,800;14..32,900&display=swap" rel="stylesheet">
  <style>
    /* -------------------- RESET & VARIABLES -------------------- */
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    :root {
      --bg-dark: #020914;
      --bg-card: rgba(5, 25, 45, 0.78);
      --border-glow: rgba(67, 169, 255, 0.32);
      --blue-primary: #0b8cff;
      --cyan-accent: #48dbff;
      --green-accent: #18d478;
      --text-light: #f4f8ff;
      --text-muted: #b7cbe2;
      --gray-deep: #0c1e2f;
      
      --radius-sm: 12px;
      --radius-md: 18px;
      --radius-lg: 24px;
      --radius-xl: 32px;
      
      --shadow-md: 0 16px 40px rgba(0, 0, 0, 0.25);
      --shadow-glow: 0 0 28px rgba(11, 140, 255, 0.3);
      --transition: all 0.25s cubic-bezier(0.2, 0.9, 0.4, 1.1);
    }

    body {
      font-family: 'Inter', system-ui, -apple-system, 'Segoe UI', sans-serif;
      background: radial-gradient(circle at 15% 10%, #0c3155 0%, #061c34 25%, #020b16 55%, #01050c 100%);
      color: var(--text-light);
      line-height: 1.5;
      overflow-x: hidden;
    }

    /* grid subtle pattern overlay */
    body::before {
      content: "";
      position: fixed;
      inset: 0;
      background-image: 
        linear-gradient(to right, rgba(255,255,255,0.03) 1px, transparent 1px),
        linear-gradient(to bottom, rgba(255,255,255,0.02) 1px, transparent 1px);
      background-size: 60px 60px;
      pointer-events: none;
      z-index: 0;
    }

    /* -------------------- TYPOGRAPHY & UTILS -------------------- */
    h1, h2, h3, h4 {
      font-weight: 800;
      letter-spacing: -0.02em;
    }

    .container {
      max-width: 1400px;
      margin: 0 auto;
    }

    .text-glow {
      text-shadow: 0 0 12px rgba(72, 219, 255, 0.3);
    }

    /* -------------------- LAYOUT: NAVIGATION -------------------- */
    .nav {
      position: sticky;
      top: 0;
      z-index: 100;
      display: flex;
      align-items: center;
      justify-content: space-between;
      padding: 0 2rem;
      height: 70px;
      background: rgba(2, 10, 22, 0.78);
      backdrop-filter: blur(16px);
      border-bottom: 1px solid rgba(72, 219, 255, 0.2);
    }

    .brand {
      display: flex;
      align-items: center;
      gap: 12px;
      font-weight: 800;
      font-size: 1.5rem;
    }

    .brand span { color: var(--cyan-accent); }

    .logoImg {
      width: 44px;
      height: 44px;
      object-fit: contain;
      filter: drop-shadow(0 0 8px var(--cyan-accent));
      border-radius: 12px;
    }

    .links {
      display: flex;
      gap: 2rem;
    }

    .links a {
      color: var(--text-light);
      text-decoration: none;
      font-weight: 600;
      font-size: 0.9rem;
      transition: var(--transition);
      opacity: 0.85;
    }

    .links a:hover { color: var(--cyan-accent); opacity: 1; }

    /* -------------------- MAIN GRID (LEFT + RIGHT) -------------------- */
    .main {
      display: grid;
      grid-template-columns: 1fr 0.9fr;
      gap: 0;
      max-width: 1600px;
      margin: 0 auto;
    }

    .left {
      padding: 3rem 2rem 3rem 3rem;
      border-right: 1px solid rgba(78, 170, 255, 0.2);
    }

    .right {
      padding: 2rem 2rem 3rem 2rem;
    }

    /* -------------------- HERO SECTION -------------------- */
    .hero {
      display: grid;
      grid-template-columns: 1fr 380px;
      gap: 2rem;
      align-items: center;
      margin-bottom: 2rem;
    }

    .hero h1 {
      font-size: 3.2rem;
      line-height: 1.2;
      background: linear-gradient(135deg, #fff, var(--cyan-accent));
      background-clip: text;
      -webkit-background-clip: text;
      color: transparent;
      margin-bottom: 1rem;
    }

    .hero p {
      font-size: 1rem;
      color: var(--text-muted);
      margin-bottom: 1.8rem;
    }

    .icons {
      display: flex;
      flex-wrap: wrap;
      gap: 1rem;
      margin-bottom: 2rem;
    }

    .mini {
      display: flex;
      align-items: center;
      gap: 0.6rem;
      background: rgba(255, 255, 255, 0.05);
      padding: 0.6rem 1rem;
      border-radius: 60px;
      backdrop-filter: blur(4px);
      border: 1px solid rgba(72, 219, 255, 0.2);
    }

    .mini i {
      width: 28px;
      height: 28px;
      display: grid;
      place-items: center;
      background: rgba(72, 219, 255, 0.15);
      border-radius: 50%;
      font-style: normal;
      font-weight: 700;
    }

    .btn {
      display: inline-flex;
      align-items: center;
      gap: 0.8rem;
      background: linear-gradient(135deg, var(--green-accent), var(--cyan-accent), var(--blue-primary));
      border: none;
      padding: 0.9rem 1.8rem;
      border-radius: 60px;
      font-weight: 800;
      color: #02111f;
      text-decoration: none;
      box-shadow: 0 12px 24px rgba(72, 219, 255, 0.3);
      transition: var(--transition);
    }

    .btn:hover {
      transform: translateY(-3px);
      filter: brightness(1.05);
      box-shadow: 0 20px 30px rgba(72, 219, 255, 0.4);
    }

    .trust {
      margin-top: 1.2rem;
      display: flex;
      align-items: center;
      gap: 0.8rem;
      flex-wrap: wrap;
    }

    .star { color: var(--green-accent); font-size: 1.2rem; letter-spacing: 2px; }

    .trustBadges {
      display: flex;
      flex-wrap: wrap;
      gap: 0.6rem;
      margin-top: 0.8rem;
    }

    .trustBadges span {
      background: rgba(255,255,255,0.05);
      border-radius: 60px;
      padding: 0.3rem 0.9rem;
      font-size: 0.75rem;
      font-weight: 600;
      border: 1px solid rgba(72,219,255,0.2);
    }

    /* visual + phone */
    .visual {
      position: relative;
      min-height: 400px;
      display: flex;
      justify-content: center;
      align-items: center;
    }

    .map {
      background: rgba(255,255,255,0.03);
      border-radius: 32px;
      padding: 1rem;
      border: 1px solid rgba(72,219,255,0.25);
      box-shadow: var(--shadow-md);
    }

    .map img {
      width: 100%;
      max-width: 380px;
      border-radius: 24px;
      transform: rotate(-1deg);
    }

    .phone {
      position: absolute;
      right: 20px;
      top: 40px;
      width: 170px;
      background: linear-gradient(145deg, #0b8cff, #042c51);
      border-radius: 36px;
      padding: 1rem 0.5rem;
      text-align: center;
      border: 4px solid #020914;
      box-shadow: 0 0 0 2px rgba(72,219,255,0.5), 0 30px 40px rgba(0,0,0,0.5);
      animation: floatPhone 5s ease-in-out infinite;
    }

    .phone h2 { font-size: 1.5rem; margin-bottom: 0.5rem; }

    .qr {
      background: white;
      border-radius: 16px;
      padding: 0.6rem;
      width: 120px;
      margin: 0 auto;
    }

    .qr img { width: 100%; border-radius: 8px; }
    .qr small { color: #022c4e; font-size: 0.6rem; display: block; margin-top: 0.3rem; font-weight: bold; }

    @keyframes floatPhone {
      0%, 100% { transform: translateY(0); }
      50% { transform: translateY(-8px); }
    }

    /* -------------------- STEPS (CUM FUNCTIONEAZA) -------------------- */
    .stepsTitle {
      font-size: 2rem;
      margin: 2.5rem 0 1.5rem 0;
      position: relative;
      display: inline-block;
    }
    .stepsTitle::after {
      content: '';
      width: 70px;
      height: 3px;
      background: linear-gradient(90deg, var(--green-accent), var(--cyan-accent));
      position: absolute;
      bottom: -8px;
      left: 0;
      border-radius: 4px;
    }

    .steps {
      display: grid;
      grid-template-columns: repeat(3, 1fr);
      gap: 1.5rem;
      margin-bottom: 2rem;
    }

    .step {
      background: linear-gradient(145deg, rgba(255,255,255,0.05), rgba(255,255,255,0.02));
      border: 1px solid rgba(72,219,255,0.2);
      border-radius: 24px;
      padding: 1.5rem 1rem;
      text-align: center;
      transition: var(--transition);
    }
    .step:hover { transform: translateY(-6px); border-color: var(--cyan-accent); }

    .stepIcon {
      width: 80px;
      height: 80px;
      background: radial-gradient(circle at 30% 30%, var(--cyan-accent), #0b5ca8);
      border-radius: 50%;
      margin: 0 auto 1rem;
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 2rem;
      position: relative;
      font-weight: 700;
    }
    .stepIcon em {
      position: absolute;
      top: -8px;
      left: 6px;
      background: linear-gradient(135deg, var(--green-accent), var(--cyan-accent));
      width: 28px;
      height: 28px;
      border-radius: 50%;
      display: grid;
      place-items: center;
      font-style: normal;
      font-size: 0.9rem;
      font-weight: 900;
      color: #02111f;
    }
    .step b { font-size: 1.2rem; display: block; margin-bottom: 0.4rem; }
    .step small { color: var(--text-muted); font-size: 0.8rem; }

    /* bar benefits */
    .bar {
      display: grid;
      grid-template-columns: repeat(4, 1fr);
      gap: 1rem;
      background: rgba(5, 25, 45, 0.6);
      border-radius: 28px;
      padding: 1.2rem;
      margin: 1.8rem 0;
      border: 1px solid rgba(72,219,255,0.2);
    }

    .barItem {
      display: flex;
      align-items: center;
      gap: 0.8rem;
      background: rgba(255,255,255,0.04);
      padding: 0.8rem;
      border-radius: 18px;
    }
    .barItem b { display: block; font-size: 0.85rem; }
    .barItem small { font-size: 0.7rem; color: var(--text-muted); }

    /* bottom grid FAQ & reviews */
    .bottom {
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 1.5rem;
      margin-top: 1rem;
    }

    .box {
      background: rgba(5, 25, 45, 0.7);
      backdrop-filter: blur(8px);
      border: 1px solid rgba(72,219,255,0.25);
      border-radius: 24px;
      padding: 1.5rem;
    }

    .faq details {
      background: rgba(8, 33, 58, 0.7);
      border-radius: 14px;
      padding: 0.8rem;
      margin-bottom: 0.8rem;
    }
    .faq summary { font-weight: 700; cursor: pointer; }
    .faq p { font-size: 0.8rem; margin-top: 0.5rem; color: var(--text-muted); }

    .review {
      display: grid;
      grid-template-columns: 180px 1fr;
      gap: 1rem;
    }
    .greenStars span { background: #00b67a; color: white; width: 22px; display: inline-block; text-align: center; border-radius: 6px; }

    .reviewForm {
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 0.8rem;
      margin-top: 1rem;
    }
    .reviewForm input, .reviewForm textarea, .reviewForm select {
      background: rgba(1, 13, 27, 0.8);
      border: 1px solid rgba(72,219,255,0.3);
      border-radius: 14px;
      padding: 0.7rem;
      color: white;
    }
    .reviewForm textarea { grid-column: span 2; min-height: 70px; }
    .reviewForm button {
      grid-column: span 2;
      background: linear-gradient(135deg, var(--green-accent), var(--cyan-accent));
      border: none;
      border-radius: 40px;
      padding: 0.8rem;
      font-weight: 800;
      color: #02111f;
      cursor: pointer;
    }
    .userReviews {
      display: flex;
      flex-direction: column;
      gap: 0.8rem;
      margin-top: 1rem;
    }
    .userReview {
      background: rgba(255,255,255,0.04);
      border-radius: 14px;
      padding: 0.8rem;
    }

    /* plans */
    .plansHead { text-align: center; margin-bottom: 1.8rem; }
    .plansHead h2 { font-size: 2.2rem; }
    .plans {
      display: grid;
      grid-template-columns: repeat(4, 1fr);
      gap: 1.2rem;
      margin-bottom: 1.8rem;
    }
    .plan {
      background: radial-gradient(circle at 50% 0%, rgba(72,219,255,0.1), rgba(2, 10, 22, 0.9));
      border: 1px solid rgba(72,219,255,0.25);
      border-radius: 28px;
      padding: 1.8rem 1rem 1.5rem;
      text-align: center;
      transition: var(--transition);
      position: relative;
    }
    .plan.pop { border-color: var(--green-accent); box-shadow: 0 0 20px rgba(24,212,120,0.2); }
    .tag {
      position: absolute;
      top: -12px;
      left: 50%;
      transform: translateX(-50%);
      background: linear-gradient(90deg, var(--green-accent), var(--cyan-accent));
      padding: 0.2rem 1rem;
      border-radius: 60px;
      font-size: 0.7rem;
      font-weight: 900;
      color: #02111f;
    }
    .price { font-size: 2rem; font-weight: 800; margin: 0.8rem 0; color: var(--cyan-accent); }
    .planBuy, .offerBtn {
      width: 100%;
      background: linear-gradient(135deg, var(--green-accent), var(--cyan-accent));
      border: none;
      border-radius: 40px;
      padding: 0.8rem;
      font-weight: 800;
      color: #02111f;
      cursor: pointer;
      transition: var(--transition);
    }
    .planBuy:hover, .offerBtn:hover { transform: scale(1.02); filter: brightness(1.05); }
    .planTrust { font-size: 0.7rem; margin: 0.8rem 0; color: var(--text-muted); }
    .plan ul { list-style: none; text-align: left; font-size: 0.75rem; margin-top: 0.8rem; }
    .plan li::before { content: "✓"; color: var(--green-accent); margin-right: 6px; }

    .coverage {
      display: grid;
      grid-template-columns: 1fr 1fr 1.2fr;
      gap: 1rem;
      background: rgba(5, 25, 45, 0.7);
      border-radius: 28px;
      padding: 1.5rem;
      margin: 1.5rem 0;
      border: 1px solid rgba(72,219,255,0.2);
    }
    .countries {
      display: flex;
      flex-wrap: wrap;
      gap: 0.5rem;
      max-height: 240px;
      overflow-y: auto;
    }
    .countries span {
      background: rgba(255,255,255,0.07);
      border-radius: 40px;
      padding: 0.3rem 0.8rem;
      font-size: 0.75rem;
      display: inline-flex;
      align-items: center;
      gap: 6px;
    }
    .countries img { width: 20px; border-radius: 4px; }

    .rightBottom { display: grid; grid-template-columns: 1fr 1fr; gap: 1rem; margin: 1rem 0; }
    .socialGrid { display: flex; gap: 0.8rem; margin-top: 0.8rem; }
    .socialGrid a {
      background: rgba(255,255,255,0.05);
      border-radius: 60px;
      padding: 0.5rem 1rem;
      text-decoration: none;
      color: white;
      font-weight: 600;
    }

    .partnerAd {
      background: linear-gradient(120deg, rgba(2,9,20,0.95), rgba(2,9,20,0.7)), url('https://i.imgur.com/5SEQWGM.png');
      background-size: cover;
      border-radius: 32px;
      padding: 1.5rem;
      display: flex;
      align-items: center;
      justify-content: space-between;
      margin: 1rem 0;
    }
    .partnerAd a {
      background: linear-gradient(135deg, var(--green-accent), var(--cyan-accent));
      padding: 0.6rem 1.2rem;
      border-radius: 40px;
      font-weight: bold;
      color: #02111f;
      text-decoration: none;
    }

    .footer {
      display: grid;
      grid-template-columns: repeat(4, 1fr);
      gap: 1.5rem;
      background: rgba(5, 25, 45, 0.6);
      border-radius: 28px;
      padding: 1.8rem;
      font-size: 0.8rem;
      margin-top: 2rem;
    }
    .payments { display: flex; gap: 0.5rem; flex-wrap: wrap; }
    .pay { background: white; border-radius: 8px; padding: 0.3rem 0.7rem; font-weight: bold; color: #111; }

    .whatsappFloat {
      position: fixed;
      bottom: 20px;
      right: 20px;
      background: linear-gradient(135deg, #25D366, #18d478);
      padding: 0.8rem 1.5rem;
      border-radius: 60px;
      text-decoration: none;
      color: #02111f;
      font-weight: 800;
      z-index: 1000;
      box-shadow: 0 8px 20px rgba(0,0,0,0.2);
    }

    /* modals */
    .modal, .checkoutOverlay {
      position: fixed;
      inset: 0;
      background: rgba(0, 0, 0, 0.8);
      backdrop-filter: blur(6px);
      display: none;
      align-items: center;
      justify-content: center;
      z-index: 2000;
    }
    .modal.show, .checkoutOverlay.show { display: flex; }
    .modalBox, .checkoutPanel {
      background: linear-gradient(145deg, #071e36, #020914);
      border: 1px solid var(--cyan-accent);
      border-radius: 32px;
      max-width: 520px;
      width: 90%;
      padding: 2rem;
      color: white;
    }
    .checkoutClose, .modalClose { float: right; background: none; border: none; font-size: 1.5rem; color: white; cursor: pointer; }
    .checkoutForm { display: flex; flex-direction: column; gap: 1rem; margin-top: 1rem; }
    .checkoutForm input { padding: 0.8rem; border-radius: 14px; background: #031a2c; border: 1px solid var(--cyan-accent); color: white; }
    .checkoutActions { display: flex; gap: 1rem; }
    .checkoutSubmit { background: linear-gradient(135deg, var(--green-accent), var(--cyan-accent)); border: none; border-radius: 40px; padding: 0.8rem; font-weight: bold; }

    /* responsive */
    @media (max-width: 1100px) {
      .main { grid-template-columns: 1fr; }
      .left { border-right: none; }
      .hero { grid-template-columns: 1fr; }
      .steps { grid-template-columns: 1fr; }
      .bar { grid-template-columns: 1fr 1fr; }
      .plans { grid-template-columns: 1fr 1fr; }
      .coverage { grid-template-columns: 1fr; }
      .footer { grid-template-columns: 1fr 1fr; }
    }
    @media (max-width: 680px) {
      .nav { padding: 0 1rem; }
      .links { display: none; }
      .plans { grid-template-columns: 1fr; }
      .bar { grid-template-columns: 1fr; }
      .bottom { grid-template-columns: 1fr; }
      .rightBottom { grid-template-columns: 1fr; }
      .hero h1 { font-size: 2.3rem; }
    }
  </style>
</head>
<body>
  <header class="nav">
    <div class="brand"><img src="/logo.png" alt="Logo eSIM" class="logoImg"> eSIM <span>Nelimitat</span></div>
    <nav class="links"><a href="#acasa">Acasă</a><a href="#planuri">Planuri</a><a href="#cum">Cum funcționează</a><a href="#acoperire">Acoperire</a><a href="#faq">FAQ</a><a href="#contact">Contact</a></nav>
  </header>

  <main class="main">
    <section class="left" id="acasa">
      <div class="hero">
        <div>
          <h1>Internet Nelimitat<br>în Toată Europa</h1>
          <p>Conectare instant în peste 40 de țări. Fără SIM fizic, fără contract, fără roaming.</p>
          <div class="icons"><div class="mini"><i>◷</i><span>Activare <b>10min</b></span></div><div class="mini"><i>∞</i><span>Nelimitat <b>FUP</b></span></div><div class="mini"><i>☎</i><span>Suport <b>24/7</b></span></div></div>
          <a class="btn" href="#planuri">VEZI PLANURILE →</a>
          <div class="trust">Excelent 4.9 ★ Trustpilot</div>
          <div class="trustBadges"><span>✔ 100+ clienți</span><span>✔ Activare rapidă</span><span>✔ Plată securizată</span></div>
        </div>
        <div class="visual"><div class="map"><img src="/europa.png" alt="Harta Europa"></div><div class="phone"><h2>eSIM</h2><div class="qr"><img src="https://api.qrserver.com/v1/create-qr-code/?size=200x200&data=https://esim-euro.com" alt="QR"><small>Scanează și conectează-te</small></div></div></div>
      </div>

      <h2 class="stepsTitle" id="cum">Cum funcționează?</h2>
      <div class="steps"><div class="step"><div class="stepIcon"><em>1</em>🛒</div><b>Alegi planul</b><small>Selectezi durata potrivită</small></div><div class="step"><div class="stepIcon"><em>2</em>💳</div><b>Plătești online</b><small>Plată securizată 100%</small></div><div class="step"><div class="stepIcon"><em>3</em>📱</div><b>Activezi eSIM</b><small>Scanezi QR și ești conectat</small></div></div>
      
      <div class="bar"><div class="barItem">🚚<div><b>Livrare instant</b><small>Email/WhatsApp</small></div></div><div class="barItem">🌐<div><b>Fără roaming</b><small>Internet local</small></div></div><div class="barItem">🔒<div><b>Plăți sigure</b><small>Stripe • Apple Pay</small></div></div><div class="barItem">↻<div><b>Garanție returnare</b><small>24h bani înapoi</small></div></div></div>

      <div class="bottom">
        <div class="box faq" id="faq"><h3>Întrebări frecvente</h3><details open><summary>Funcționează în toată Europa?</summary><p>Da, peste 40 de țări partenere. Activezi și pornești datele mobile.</p></details><details><summary>Este nelimitat?</summary><p>Da, dar se aplică FUP (viteză ajustată după consum mare).</p></details><details><summary>Pot folosi hotspot?</summary><p>Da, unde rețeaua permite.</p></details><details><summary>Rambursare?</summary><p>Posibilă în 24h dacă eSIM-ul nu a fost folosit.</p></details></div>
        <div class="box"><h3>Clienții ne recomandă</h3><div class="review"><div><h4>Excelent</h4><div class="greenStars"><span>★</span><span>★</span><span>★</span><span>★</span><span>★</span></div><small><b>Recenzii reale</b></small></div><div class="quote" id="featuredReview">Feedback-ul apare după ce clienții publică.</div></div></div>
        <div class="box reviewPanel"><h3>Lasă o recenzie</h3><form class="reviewForm" id="reviewForm"><input id="reviewEmail" type="email" placeholder="Email" required><select id="reviewStars"><option value="5">★★★★★ 5</option><option value="4">★★★★☆ 4</option><option value="3">★★★☆☆ 3</option></select><textarea id="reviewText" placeholder="Scrie recenzia..."></textarea><button type="submit">PUBLICĂ RECENZIA</button></form><div class="userReviews" id="userReviews"></div></div>
      </div>
    </section>

    <section class="right">
      <div class="plansHead" id="planuri"><h2>Planuri Nelimitate</h2><p>Alege durata cea mai bună pentru tine</p></div>
      <div class="plans">
        <article class="plan"><h3>Personalizat</h3><div>Spune-ne nevoile tale, răspundem rapid</div><div class="price">La cerere</div><button class="offerBtn" data-plan="custom">CERE ACUM</button><div class="planTrust"><span>✔ Răspuns 24h</span><span>✔ Fără contract</span></div><ul><li>Nelimitat (FUP)</li><li>40+ țări</li><li>Activare instant</li></ul><button type="button" class="openFupBtn">DETALII FUP</button></article>
        <article class="plan"><h3>Europa 3 zile</h3><div>Nelimitat date</div><div class="price">10.99€</div><button class="buy planBuy" data-plan="3">CUMPĂRĂ ACUM</button><div class="planTrust">✔ Rambursare 24h</div><ul><li>3 zile valabilitate</li><li>Nelimitat (FUP)</li><li>Peste 40 țări</li></ul><button class="openFupBtn">DETALII FUP</button></article>
        <article class="plan pop"><div class="tag">CEL MAI POPULAR</div><h3>Europa 400 GB</h3><div>400 GB / 30 zile</div><div class="price">55.99€</div><button class="buy planBuy" data-plan="400GB">CUMPĂRĂ ACUM</button><div class="planTrust">✔ Cel mai vândut</div><ul><li>400 GB viteză mare</li><li>30 zile valabilitate</li><li>Acoperire completă</li></ul><button class="openFupBtn">DETALII FUP</button></article>
        <article class="plan"><h3>Europa 30 zile</h3><div>Nelimitat complet</div><div class="price">59.99€</div><button class="buy planBuy" data-plan="30">CUMPĂRĂ ACUM</button><div class="planTrust">✔ Acces nelimitat</div><ul><li>30 zile nelimitat</li><li>FUP echitabil</li><li>Asistență 24/7</li></ul><button class="openFupBtn">DETALII FUP</button></article>
      </div>

      <div class="coverage" id="acoperire"><div><h3>Acoperire Europa</h3><p>Peste 40 de destinații, roaming zero.</p></div><div class="mapSmall" id="mapSmall"></div><div class="countries" id="countryList"></div></div>

      <div class="rightBottom"><div class="box"><h3>Politică FUP</h3><p>Internet nelimitat cu utilizare echitabilă. După 1GB la viteză maximă, viteza se ajustează.</p><button class="openFupBtn" id="openFup">Citește Politica completă</button></div><div class="box"><h3>Suport 24/7</h3><p>Email: esimeuro@gmail.com</p><a class="btn" href="https://mail.google.com/mail/?view=cm&fs=1&to=esimeuro@gmail.com" target="_blank">CONTACTEAZĂ-NE</a></div></div>
      
      <div class="box socialBox"><h3>Urmărește-ne</h3><div class="socialGrid"><a href="https://www.tiktok.com/@esimeuro.com" target="_blank">TikTok</a><a href="https://www.instagram.com/esimeuro" target="_blank">Instagram</a><a href="#">Facebook</a></div></div>
      <div class="partnerAd"><div><small>PARTENER RECOMANDAT</small><h3>Joacă Metin2 pe serverul nostru partener</h3><p>Comunitate activă, evenimente, gameplay clasic.</p></div><a href="https://legacies2global.com" target="_blank">VIZITEAZĂ →</a></div>
      
      <footer class="footer" id="contact"><div><b>eSIM Nelimitat</b><p>Internet nelimitat în Europa fără complicații.</p></div><div><b>SUPORT</b><p>esimeuro@gmail.com<br>WhatsApp: <a href="https://wa.me/40733914329">deschide chat</a><br>Discord în curând</p></div><div><b>INFO</b><p>Disponibil 24/7<br>Rambursare 24h</p></div><div><b>PLĂȚI SIGURE</b><div class="payments"><span class="pay">Stripe</span><span class="pay">Apple Pay</span><span class="pay">GPay</span><span class="pay">VISA</span></div></div></footer>
      <div class="copy">© 2026 eSimEuro. Toate drepturile rezervate.</div>
    </section>
  </main>

  <a href="https://wa.me/40733914329?text=Salut%20vreau%20detalii" class="whatsappFloat" target="_blank">💬 WhatsApp</a>

  <!-- Modals -->
  <div class="modal" id="fupModal"><div class="modalBox"><button class="modalClose" id="closeFup">&times;</button><h2>Politică de utilizare echitabilă (FUP)</h2><p>Internet nelimitat cu viteză maximă pentru primii 1GB, apoi între 8-25 Mbps pentru a asigura o conexiune corectă. Hotspot permis, fără întreruperi.</p><ul><li>Viteză adaptată la congestie</li><li>Valabil în toate țările incluse</li><li>Fără costuri ascunse</li></ul></div></div>

  <div class="checkoutOverlay" id="checkoutOverlay"><div class="checkoutPanel"><button class="checkoutClose" id="checkoutClose">&times;</button><h2>Finalizează comanda</h2><div class="checkoutSummary"><span id="checkoutPlanName">Plan eSIM</span><strong id="checkoutPlanPrice"></strong></div><form id="checkoutForm"><input id="checkoutName" placeholder="Nume complet" required><input id="checkoutEmail" placeholder="Email" type="email" required><input id="checkoutPhone" placeholder="Telefon" required><div class="checkoutActions"><button type="button" id="checkoutCancel">Înapoi</button><button type="submit" class="checkoutSubmit">Continuă spre plată</button></div><div class="checkoutError" id="checkoutError"></div></form></div></div>

  <div class="checkoutOverlay" id="offerOverlay"><div class="checkoutPanel"><button class="checkoutClose" id="offerClose">&times;</button><h2>Cere ofertă personalizată</h2><form id="offerForm"><input id="offerName" placeholder="Nume complet" required><input id="offerEmail" placeholder="Email" type="email" required><input id="offerPhone" placeholder="Telefon"><input id="offerDesc" placeholder="Detalii plan dorit"><button type="submit" class="checkoutSubmit">Trimite cererea</button></form></div></div>

  <script>
    (function() {
      // map SVG
      const mapSmall = document.getElementById('mapSmall');
      if(mapSmall) mapSmall.innerHTML = `<svg viewBox="0 0 700 430" width="100%" height="100%" preserveAspectRatio="xMidYMid meet"><defs><pattern id="dots" width="9" height="9" patternUnits="userSpaceOnUse"><circle cx="2" cy="2" r="1.45" fill="#1aa7ff" opacity=".95"/></pattern><radialGradient id="glow"><stop offset="0" stop-color="#55f2ff"/><stop offset=".35" stop-color="#15baff" stop-opacity=".75"/><stop offset="1" stop-color="#108cff" stop-opacity="0"/></radialGradient></defs><g class="mapShape"><path d="M165 128l46-38 58-9 44-44 48 28 55 4 38 27 52-1 25 34 51 17 9 43 44 24-16 42 30 33-30 33-59-7-39 31-56-8-32 42-52-23-54 31-46-38-51 6-21-42-67-5-17-42-65-20 12-41-38-32 39-31z" fill="url(#dots)" opacity=".74"/><path d="M122 180l70-15 39-58 72-19 51-48 52 31 55 3 43 29 58 5 30 45 58 22 7 43 39 28-22 39 28 38-31 37-65-9-44 35-64-9-30 48-57-27-56 36-52-43-56 7-25-48-71-5-23-48-72-25 17-49-41-36z" fill="none" stroke="#168de8" stroke-width="2" opacity=".32"/></g><path d="M135 285c80-96 176-126 286-78 74 33 121 48 185 35" fill="none" stroke="#53d8ff" stroke-width="2" opacity=".9" class="route"/><path d="M196 332c62-70 126-96 207-76 78 19 112-60 183-105" fill="none" stroke="#0c96ff" stroke-width="2" opacity=".8" class="route"/><path d="M116 247c119-32 215-21 346 46" fill="none" stroke="#36cbff" stroke-width="1.7" opacity=".62" class="route"/><ellipse cx="382" cy="235" rx="245" ry="82" fill="none" stroke="#27c4ff" stroke-width="2" opacity=".56"/><g>${[[148, 282], [211, 220], [298, 162], [372, 213], [455, 181], [544, 146], [594, 250], [432, 318], [315, 338]].map((p, i) => `<circle cx="${p[0]}" cy="${p[1]}" r="32" fill="url(#glow)" opacity=".75"/><circle cx="${p[0]}" cy="${p[1]}" r="5" fill="#4feeff" class="dot" style="animation-delay:${i * .23}s"/>`).join('')}</g></svg>`;
      
      // country list dynamic
      const countryList = document.getElementById('countryList');
      const countries = ["România","Italia","Spania","Franța","Germania","Olanda","Belgia","Austria","Elveția","Grecia","Portugalia","Polonia","Suedia","Danemarca","Norvegia","Finlanda","Irlanda","UK","Ungaria","Bulgaria","Croația","Serbia"];
      if(countryList) countryList.innerHTML = countries.map(c => `<span><img src="https://flagcdn.com/w20/${c.slice(0,2).toLowerCase()}.png" alt=""> ${c}</span>`).join('');

      // API & PLAN DATA
      const CHECKOUT_API = "https://esim-euro-api.onrender.com/create-checkout-session";
      const REVIEW_API = "https://esim-euro-api.onrender.com/reviews";
      const planMap = { 3: { name: "Europa 3 zile", price: "10.99€" }, "400GB": { name: "Europa 400 GB", price: "55.99€" }, 30: { name: "Europa 30 zile", price: "59.99€" }, custom: { name: "Plan personalizat", price: "La cerere" } };

      // CHECKOUT LOGIC
      let selectedPlan = null;
      const overlay = document.getElementById('checkoutOverlay');
      const closeCheckout = () => overlay.classList.remove('show');
      document.querySelectorAll('.buy').forEach(btn => btn.addEventListener('click', (e) => {
        selectedPlan = btn.dataset.plan;
        if(!planMap[selectedPlan]) return alert('Plan invalid');
        document.getElementById('checkoutPlanName').innerText = planMap[selectedPlan].name;
        document.getElementById('checkoutPlanPrice').innerText = planMap[selectedPlan].price;
        overlay.classList.add('show');
      }));
      document.getElementById('checkoutClose')?.addEventListener('click', closeCheckout);
      document.getElementById('checkoutCancel')?.addEventListener('click', closeCheckout);
      document.getElementById('checkoutForm')?.addEventListener('submit', async (e) => {
        e.preventDefault();
        const name = document.getElementById('checkoutName').value.trim();
        const email = document.getElementById('checkoutEmail').value.trim();
        const phone = document.getElementById('checkoutPhone').value.trim();
        if(!name || !email || !phone) return alert('Completează toate câmpurile');
        const submitBtn = document.querySelector('#checkoutForm .checkoutSubmit');
        submitBtn.disabled = true; submitBtn.innerText = 'Procesare...';
        try {
          const res = await fetch(CHECKOUT_API, { method: 'POST', headers: { 'Content-Type': 'application/json' }, body: JSON.stringify({ plan: selectedPlan, email, name, phone, planName: planMap[selectedPlan].name }) });
          const data = await res.json();
          if(data.url) window.location.href = data.url;
          else throw new Error('Eroare plată');
        } catch(err) { alert('Eroare conexiune: ' + err.message); submitBtn.disabled = false; submitBtn.innerText = 'Continuă spre plată'; }
      });

      // OFFER MODAL
      const offerOverlay = document.getElementById('offerOverlay');
      document.querySelectorAll('.offerBtn').forEach(btn => btn.addEventListener('click', () => offerOverlay.classList.add('show')));
      document.getElementById('offerClose')?.addEventListener('click', () => offerOverlay.classList.remove('show'));
      document.getElementById('offerForm')?.addEventListener('submit', (e) => {
        e.preventDefault();
        const name = document.getElementById('offerName').value, email = document.getElementById('offerEmail').value, phone = document.getElementById('offerPhone').value, desc = document.getElementById('offerDesc').value;
        const mailto = `https://mail.google.com/mail/?view=cm&fs=1&to=esimeuro@gmail.com&su=Cerere ofertă eSIM&body=Nume: ${encodeURIComponent(name)}%0AEmail: ${email}%0ATel: ${phone}%0ADescriere: ${desc}`;
        window.open(mailto, '_blank');
        offerOverlay.classList.remove('show');
      });

      // FUP MODAL
      const fupModal = document.getElementById('fupModal');
      document.querySelectorAll('.openFupBtn, #openFup').forEach(btn => btn.addEventListener('click', () => fupModal.classList.add('show')));
      document.getElementById('closeFup')?.addEventListener('click', () => fupModal.classList.remove('show'));
      if(fupModal) fupModal.addEventListener('click', (e) => { if(e.target === fupModal) fupModal.classList.remove('show'); });
      
      // REVIEWS
      async function loadReviews() {
        try {
          const res = await fetch(REVIEW_API);
          const data = await res.json();
          const reviews = data.reviews || [];
          const container = document.getElementById('userReviews');
          const featured = document.getElementById('featuredReview');
          if(container && reviews.length) {
            container.innerHTML = reviews.map(r => `<div class="userReview"><b>${escapeHtml(r.name || 'Client')}</b><span style="color:#18d478">${'★'.repeat(r.stars)}</span><p>${escapeHtml(r.text)}</p></div>`).join('');
            if(featured && reviews[0]) featured.innerHTML = `“${escapeHtml(reviews[0].text)}”<br>— ${escapeHtml(reviews[0].name)}`;
          }
        } catch(e) { console.log(e); }
      }
      document.getElementById('reviewForm')?.addEventListener('submit', async (e) => {
        e.preventDefault();
        const email = document.getElementById('reviewEmail').value, stars = parseInt(document.getElementById('reviewStars').value), text = document.getElementById('reviewText').value;
        const res = await fetch(REVIEW_API, { method: 'POST', headers: { 'Content-Type': 'application/json' }, body: JSON.stringify({ email, stars, text }) });
        if(res.ok) { alert('Recenzie publicată!'); loadReviews(); e.target.reset(); }
        else alert('Eroare');
      });
      function escapeHtml(str) { return str.replace(/[&<>]/g, function(m){if(m === '&') return '&amp;'; if(m === '<') return '&lt;'; if(m === '>') return '&gt;'; return m;}); }
      loadReviews();
    })();
  </script>
</body>
</html>