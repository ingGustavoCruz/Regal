<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Regal — Experiencias de Distinción</title>
<link rel="icon" type="image/png" href="imagenes/monito01.png">
<link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;0,600;1,300;1,400&family=Josefin+Sans:wght@200;300;400&display=swap" rel="stylesheet">
<style>
  *{margin:0;padding:0;box-sizing:border-box}
  :root{
    --gold:#C9A84C;
    --gold-light:#E8D48A;
    --gold-pale:#F5EDD6;
    --dark:#0D0C0A;
    --dark2:#1A1915;
    --dark3:#2A2820;
    --cream:#F9F4EB;
    --cream2:#EDE5D4;
    --text-muted:#8A8070;
  }
  html{scroll-behavior:smooth}
  body{font-family:'Josefin Sans',sans-serif;background:var(--dark);color:var(--cream);overflow-x:hidden}

  /* NAV */
  nav{position:fixed;top:0;left:0;right:0;z-index:100;padding:1.2rem 3rem;display:flex;align-items:center;justify-content:space-between;background:rgba(13,12,10,0.92);backdrop-filter:blur(12px);border-bottom:1px solid rgba(201,168,76,0.15)}
  .nav-logo{font-family:'Cormorant Garamond',serif;font-size:2rem;font-weight:300;letter-spacing:0.25em;color:var(--gold);font-style:italic}
  .nav-links{display:flex;gap:2.5rem;list-style:none}
  .nav-links a{font-size:0.7rem;letter-spacing:0.2em;text-transform:uppercase;color:var(--cream2);text-decoration:none;transition:color 0.3s;font-weight:300}
  .nav-links a:hover{color:var(--gold)}
  .nav-cta{font-size:0.7rem;letter-spacing:0.2em;text-transform:uppercase;padding:0.6rem 1.6rem;border:1px solid var(--gold);color:var(--gold);background:transparent;cursor:pointer;font-family:'Josefin Sans',sans-serif;transition:all 0.3s;font-weight:300}
  .nav-cta:hover{background:var(--gold);color:var(--dark)}

  /* HERO */
  .hero{min-height:100vh;display:flex;align-items:center;justify-content:center;position:relative;overflow:hidden;padding:6rem 2rem 4rem}
  .hero-bg{position:absolute;inset:0;background:radial-gradient(ellipse at 60% 40%, rgba(201,168,76,0.08) 0%, transparent 60%), radial-gradient(ellipse at 20% 80%, rgba(201,168,76,0.05) 0%, transparent 50%)}
  .hero-line-v{position:absolute;left:50%;top:0;width:1px;height:100%;background:linear-gradient(to bottom, transparent, rgba(201,168,76,0.2) 30%, rgba(201,168,76,0.2) 70%, transparent)}
  .hero-content{text-align:center;position:relative;z-index:2;max-width:900px}
  .hero-eyebrow{font-size:0.65rem;letter-spacing:0.4em;text-transform:uppercase;color:var(--gold);margin-bottom:2rem;display:flex;align-items:center;justify-content:center;gap:1.5rem}
  .hero-eyebrow::before,.hero-eyebrow::after{content:'';width:40px;height:1px;background:var(--gold);opacity:0.6}
  .hero-title{font-family:'Cormorant Garamond',serif;font-size:clamp(5rem,12vw,10rem);font-weight:300;line-height:0.9;letter-spacing:0.05em;color:var(--cream);margin-bottom:1rem}
  .hero-title em{font-style:italic;color:var(--gold)}
  .hero-subtitle{font-size:0.72rem;letter-spacing:0.3em;text-transform:uppercase;color:var(--text-muted);margin:2rem 0 3rem;font-weight:200}
  .hero-btns{display:flex;gap:1.5rem;justify-content:center;flex-wrap:wrap}
  .btn-primary{padding:1rem 2.8rem;background:var(--gold);color:var(--dark);font-family:'Josefin Sans',sans-serif;font-size:0.68rem;letter-spacing:0.25em;text-transform:uppercase;border:none;cursor:pointer;font-weight:400;transition:all 0.3s}
  .btn-primary:hover{background:var(--gold-light)}
  .btn-secondary{padding:1rem 2.8rem;background:transparent;color:var(--cream2);font-family:'Josefin Sans',sans-serif;font-size:0.68rem;letter-spacing:0.25em;text-transform:uppercase;border:1px solid rgba(249,244,235,0.25);cursor:pointer;font-weight:200;transition:all 0.3s}
  .btn-secondary:hover{border-color:var(--gold);color:var(--gold)}
  .scroll-hint{position:absolute;bottom:2.5rem;left:50%;transform:translateX(-50%);display:flex;flex-direction:column;align-items:center;gap:0.5rem;color:var(--text-muted)}
  .scroll-hint span{font-size:0.6rem;letter-spacing:0.3em;text-transform:uppercase}
  .scroll-line{width:1px;height:40px;background:linear-gradient(to bottom, var(--gold), transparent);animation:scrollpulse 2s ease-in-out infinite}
  @keyframes scrollpulse{0%,100%{opacity:0.3;transform:scaleY(1)}50%{opacity:1;transform:scaleY(1.2)}}

  /* SECTION BASE */
  section{padding:7rem 3rem}
  .section-label{font-size:0.6rem;letter-spacing:0.4em;text-transform:uppercase;color:var(--gold);margin-bottom:1rem}
  .section-title{font-family:'Cormorant Garamond',serif;font-size:clamp(2.5rem,5vw,4rem);font-weight:300;line-height:1.1;color:var(--cream)}
  .section-title em{font-style:italic;color:var(--gold)}
  .divider{width:60px;height:1px;background:var(--gold);opacity:0.5;margin:2rem 0}

  /* SERVICIOS GRID */
  .servicios{background:var(--dark2)}
  .servicios-inner{max-width:1200px;margin:0 auto}
  .servicios-header{text-align:center;margin-bottom:5rem}
  .servicios-grid{display:grid;grid-template-columns:repeat(auto-fit,minmax(280px,1fr));gap:1px;background:rgba(201,168,76,0.1)}
  .servicio-card{background:var(--dark2);padding:3rem 2.5rem;position:relative;overflow:hidden;cursor:pointer;transition:background 0.4s}
  .servicio-card::before{content:'';position:absolute;top:0;left:0;right:0;height:2px;background:linear-gradient(to right, transparent, var(--gold), transparent);opacity:0;transition:opacity 0.4s}
  .servicio-card:hover{background:var(--dark3)}
  .servicio-card:hover::before{opacity:1}
  .servicio-num{font-size:0.6rem;letter-spacing:0.3em;color:var(--gold);opacity:0.6;margin-bottom:1.5rem;font-weight:300}
  .servicio-icon{font-size:1.8rem;margin-bottom:1.5rem;line-height:1}
  .servicio-name{font-family:'Cormorant Garamond',serif;font-size:1.6rem;font-weight:400;color:var(--cream);margin-bottom:1rem;line-height:1.2}
  .servicio-desc{font-size:0.72rem;color:var(--text-muted);line-height:1.9;letter-spacing:0.05em;font-weight:200}
  .servicio-arrow{position:absolute;bottom:2rem;right:2rem;width:32px;height:32px;border:1px solid rgba(201,168,76,0.3);display:flex;align-items:center;justify-content:center;color:var(--gold);font-size:0.8rem;opacity:0;transform:translateX(-8px);transition:all 0.3s}
  .servicio-card:hover .servicio-arrow{opacity:1;transform:translateX(0)}

  /* RESERVACION */
  .reservacion{background:var(--dark);position:relative;overflow:hidden}
  .reservacion::before{content:'REGAL';position:absolute;right:-2rem;top:50%;transform:translateY(-50%);font-family:'Cormorant Garamond',serif;font-size:20vw;font-weight:300;color:rgba(201,168,76,0.03);line-height:1;pointer-events:none;letter-spacing:0.1em}
  .reservacion-inner{max-width:1200px;margin:0 auto;display:grid;grid-template-columns:1fr 1fr;gap:6rem;align-items:center}
  .reservacion-form{background:var(--dark2);border:1px solid rgba(201,168,76,0.15);padding:3rem}
  .form-title{font-family:'Cormorant Garamond',serif;font-size:1.8rem;color:var(--cream);margin-bottom:2rem;font-weight:300}
  .form-row{margin-bottom:1.5rem}
  .form-row label{display:block;font-size:0.6rem;letter-spacing:0.25em;text-transform:uppercase;color:var(--gold);margin-bottom:0.6rem;font-weight:300}
  .form-row input,.form-row select{width:100%;background:transparent;border:none;border-bottom:1px solid rgba(201,168,76,0.2);padding:0.7rem 0;color:var(--cream);font-family:'Josefin Sans',sans-serif;font-size:0.85rem;font-weight:200;letter-spacing:0.05em;transition:border-color 0.3s;outline:none}
  .form-row input:focus,.form-row select:focus{border-bottom-color:var(--gold)}
  .form-row input::placeholder{color:var(--text-muted)}
  .form-row select option{background:var(--dark2);color:var(--cream)}
  .form-submit{width:100%;margin-top:2rem;padding:1.1rem;background:var(--gold);color:var(--dark);font-family:'Josefin Sans',sans-serif;font-size:0.68rem;letter-spacing:0.3em;text-transform:uppercase;border:none;cursor:pointer;font-weight:400;transition:all 0.3s}
  .form-submit:hover{background:var(--gold-light)}

  /* REWARDS */
  .rewards{background:linear-gradient(135deg, var(--dark2), var(--dark3))}
  .rewards-inner{max-width:1200px;margin:0 auto}
  .rewards-tiers{display:grid;grid-template-columns:repeat(3,1fr);gap:2rem;margin-top:4rem}
  .tier{border:1px solid rgba(201,168,76,0.15);padding:2.5rem 2rem;text-align:center;position:relative;transition:border-color 0.3s}
  .tier:hover{border-color:rgba(201,168,76,0.4)}
  .tier.featured{border-color:var(--gold);background:rgba(201,168,76,0.04)}
  .tier-badge{position:absolute;top:-1px;left:50%;transform:translateX(-50%);background:var(--gold);color:var(--dark);font-size:0.55rem;letter-spacing:0.2em;text-transform:uppercase;padding:0.3rem 1rem;font-weight:400}
  .tier-icon{width:50px;height:50px;border-radius:50%;border:1px solid rgba(201,168,76,0.3);display:flex;align-items:center;justify-content:center;margin:0 auto 1.5rem;font-size:1.2rem}
  .tier-name{font-family:'Cormorant Garamond',serif;font-size:1.4rem;color:var(--cream);margin-bottom:0.5rem;font-weight:400}
  .tier-pts{font-size:0.62rem;letter-spacing:0.2em;text-transform:uppercase;color:var(--gold);margin-bottom:1.5rem}
  .tier-perks{list-style:none;font-size:0.72rem;color:var(--text-muted);line-height:2.2;font-weight:200;letter-spacing:0.03em}
  .tier-perks li::before{content:'— ';color:var(--gold);opacity:0.5}

  /* ENVIOS */
  .envios{background:var(--dark)}
  .envios-inner{max-width:1200px;margin:0 auto;display:grid;grid-template-columns:1fr 1fr;gap:5rem;align-items:start}
  .envios-features{display:flex;flex-direction:column;gap:2rem;margin-top:3rem}
  .envio-feat{display:flex;gap:1.5rem;align-items:flex-start}
  .envio-feat-icon{width:42px;height:42px;border:1px solid rgba(201,168,76,0.25);display:flex;align-items:center;justify-content:center;flex-shrink:0;font-size:1rem}
  .envio-feat-text h4{font-family:'Josefin Sans',sans-serif;font-size:0.7rem;letter-spacing:0.2em;text-transform:uppercase;color:var(--cream);margin-bottom:0.4rem;font-weight:300}
  .envio-feat-text p{font-size:0.72rem;color:var(--text-muted);line-height:1.8;font-weight:200}
  .envios-box{background:var(--dark2);border:1px solid rgba(201,168,76,0.15);padding:2rem;margin-bottom:1rem}
  .envio-item{display:flex;justify-content:space-between;align-items:center;padding:1rem 0;border-bottom:1px solid rgba(201,168,76,0.08);font-size:0.75rem}
  .envio-item:last-child{border-bottom:none}
  .envio-item-name{color:var(--cream2);font-weight:200;letter-spacing:0.05em}
  .envio-item-status{font-size:0.6rem;letter-spacing:0.15em;text-transform:uppercase;padding:0.25rem 0.8rem;border:1px solid}
  .status-en-camino{color:#7BC67B;border-color:rgba(123,198,123,0.4)}
  .status-entregado{color:var(--gold);border-color:rgba(201,168,76,0.4)}
  .status-preparando{color:var(--cream2);border-color:rgba(249,244,235,0.2)}

  /* CATERING */
  .catering{background:var(--dark2)}
  .catering-inner{max-width:1200px;margin:0 auto}
  .catering-packages{display:grid;grid-template-columns:repeat(auto-fit,minmax(260px,1fr));gap:2rem;margin-top:4rem}
  .catering-pkg{background:var(--dark3);border:1px solid rgba(201,168,76,0.1);padding:2.5rem;transition:all 0.3s;cursor:pointer}
  .catering-pkg:hover{border-color:rgba(201,168,76,0.35);transform:translateY(-4px)}
  .pkg-category{font-size:0.6rem;letter-spacing:0.3em;text-transform:uppercase;color:var(--gold);margin-bottom:1rem}
  .pkg-name{font-family:'Cormorant Garamond',serif;font-size:1.8rem;color:var(--cream);margin-bottom:0.5rem;line-height:1.1}
  .pkg-guests{font-size:0.68rem;letter-spacing:0.1em;color:var(--text-muted);margin-bottom:1.5rem;font-weight:200}
  .pkg-divider{width:30px;height:1px;background:var(--gold);opacity:0.4;margin-bottom:1.5rem}
  .pkg-includes{font-size:0.72rem;color:var(--text-muted);line-height:2;font-weight:200}
  .pkg-price{margin-top:2rem;font-family:'Cormorant Garamond',serif;font-size:1.3rem;color:var(--gold)}
  .pkg-price span{font-family:'Josefin Sans',sans-serif;font-size:0.6rem;letter-spacing:0.1em;color:var(--text-muted);display:block;margin-bottom:0.2rem;font-weight:200}

  /* KITS */
  .kits{background:var(--dark)}
  .kits-inner{max-width:1200px;margin:0 auto;text-align:center}
  .kits-grid{display:grid;grid-template-columns:repeat(3,1fr);gap:1.5rem;margin-top:4rem}
  .kit-card{position:relative;overflow:hidden;aspect-ratio:4/5;background:var(--dark2);border:1px solid rgba(201,168,76,0.12);display:flex;flex-direction:column;justify-content:flex-end;padding:2rem;cursor:pointer;transition:border-color 0.4s}
  .kit-card:hover{border-color:rgba(201,168,76,0.4)}
  .kit-pattern{position:absolute;inset:0;display:flex;align-items:center;justify-content:center;font-size:5rem;opacity:0.06;font-family:'Cormorant Garamond',serif;font-weight:300}
  .kit-number{font-size:0.6rem;letter-spacing:0.3em;color:var(--gold);opacity:0.6;margin-bottom:0.8rem}
  .kit-name{font-family:'Cormorant Garamond',serif;font-size:1.5rem;color:var(--cream);margin-bottom:0.5rem;position:relative;z-index:1}
  .kit-desc{font-size:0.68rem;color:var(--text-muted);font-weight:200;letter-spacing:0.05em;position:relative;z-index:1;line-height:1.7}
  .kit-cta{margin-top:1rem;font-size:0.62rem;letter-spacing:0.2em;text-transform:uppercase;color:var(--gold);font-weight:300;position:relative;z-index:1;opacity:0;transform:translateY(8px);transition:all 0.3s}
  .kit-card:hover .kit-cta{opacity:1;transform:translateY(0)}

  /* FOOTER */
  footer{background:var(--dark);border-top:1px solid rgba(201,168,76,0.12);padding:4rem 3rem 2rem}
  .footer-inner{max-width:1200px;margin:0 auto;display:grid;grid-template-columns:2fr 1fr 1fr 1fr;gap:3rem;margin-bottom:3rem}
  .footer-brand .logo{font-family:'Cormorant Garamond',serif;font-size:2rem;font-weight:300;color:var(--gold);font-style:italic;letter-spacing:0.15em;margin-bottom:1rem}
  .footer-brand p{font-size:0.72rem;color:var(--text-muted);line-height:1.9;font-weight:200;max-width:240px}
  .footer-col h5{font-size:0.6rem;letter-spacing:0.3em;text-transform:uppercase;color:var(--gold);margin-bottom:1.5rem;font-weight:300}
  .footer-col ul{list-style:none}
  .footer-col ul li{margin-bottom:0.8rem}
  .footer-col ul li a{font-size:0.72rem;color:var(--text-muted);text-decoration:none;font-weight:200;transition:color 0.3s;letter-spacing:0.05em}
  .footer-col ul li a:hover{color:var(--cream)}
  .footer-bottom{border-top:1px solid rgba(201,168,76,0.1);padding-top:2rem;display:flex;justify-content:space-between;align-items:center}
  .footer-bottom p{font-size:0.62rem;color:var(--text-muted);letter-spacing:0.1em;font-weight:200}

  @media(max-width:900px){
    nav{padding:1rem 1.5rem}
    .nav-links{display:none}
    section{padding:5rem 1.5rem}
    .reservacion-inner,.envios-inner{grid-template-columns:1fr}
    .rewards-tiers,.kits-grid{grid-template-columns:1fr}
    .footer-inner{grid-template-columns:1fr 1fr}
  }
</style>
</head>
<body>

<nav>
  <div class="nav-logo">Regal</div>
  <ul class="nav-links">
    <li><a href="#servicios">Servicios</a></li>
    <li><a href="#reservacion">Reservación</a></li>
    <li><a href="#rewards">Rewards</a></li>
    <li><a href="#envios">Envíos</a></li>
    <li><a href="#catering">Catering</a></li>
    <li><a href="#kits">Kits</a></li>
  </ul>
  <button class="nav-cta">Reservar ahora</button>
</nav>

<!-- HERO -->
<section class="hero" id="inicio">
  <div class="hero-bg"></div>
  <div class="hero-line-v"></div>
  <div class="hero-content">
    <div class="hero-eyebrow">Experiencias de distinción</div>
    <h1 class="hero-title"><em>Regal</em></h1>
    <p class="hero-subtitle">Espacios curados · Momentos inolvidables · Servicio de excelencia</p>
    <div class="hero-btns">
      <button class="btn-primary" onclick="document.getElementById('reservacion').scrollIntoView({behavior:'smooth'})">Hacer una reservación</button>
      <button class="btn-secondary" onclick="document.getElementById('servicios').scrollIntoView({behavior:'smooth'})">Explorar servicios</button>
    </div>
  </div>
  <div class="scroll-hint">
    <span>Descubrir</span>
    <div class="scroll-line"></div>
  </div>
</section>

<!-- SERVICIOS -->
<section class="servicios" id="servicios">
  <div class="servicios-inner">
    <div class="servicios-header">
      <div class="section-label">Lo que ofrecemos</div>
      <h2 class="section-title">Una experiencia <em>completa</em></h2>
    </div>
    <div class="servicios-grid">
      <div class="servicio-card" onclick="document.getElementById('reservacion').scrollIntoView({behavior:'smooth'})">
        <div class="servicio-num">01</div>
        <div class="servicio-icon">◈</div>
        <div class="servicio-name">Reservación de espacios</div>
        <div class="servicio-desc">Reserva el espacio perfecto para tu reunión, evento o celebración. Ambientes únicos con atención personalizada.</div>
        <div class="servicio-arrow">→</div>
      </div>
      <div class="servicio-card" onclick="document.getElementById('rewards').scrollIntoView({behavior:'smooth'})">
        <div class="servicio-num">02</div>
        <div class="servicio-icon">✦</div>
        <div class="servicio-name">Promociones &amp; Rewards</div>
        <div class="servicio-desc">Programa de lealtad exclusivo. Acumula puntos en cada visita y accede a beneficios únicos de la membresía Regal.</div>
        <div class="servicio-arrow">→</div>
      </div>
      <div class="servicio-card" onclick="document.getElementById('envios').scrollIntoView({behavior:'smooth'})">
        <div class="servicio-num">03</div>
        <div class="servicio-icon">◎</div>
        <div class="servicio-name">Envíos &amp; Pedidos</div>
        <div class="servicio-desc">Recibe tus productos favoritos en la puerta de tu hogar u oficina. Seguimiento en tiempo real de tu pedido.</div>
        <div class="servicio-arrow">→</div>
      </div>
      <div class="servicio-card" onclick="document.getElementById('catering').scrollIntoView({behavior:'smooth'})">
        <div class="servicio-num">04</div>
        <div class="servicio-icon">◇</div>
        <div class="servicio-name">Catering &amp; Coffee Breaks</div>
        <div class="servicio-desc">Servicio de catering corporativo y personal. Desde coffee breaks ejecutivos hasta banquetes de gala a tu medida.</div>
        <div class="servicio-arrow">→</div>
      </div>
      <div class="servicio-card" onclick="document.getElementById('kits').scrollIntoView({behavior:'smooth'})">
        <div class="servicio-num">05</div>
        <div class="servicio-icon">❋</div>
        <div class="servicio-name">Kits de celebración</div>
        <div class="servicio-desc">Kits curados para cumpleaños, aniversarios y momentos especiales. Cada detalle pensado para sorprender.</div>
        <div class="servicio-arrow">→</div>
      </div>
      <div class="servicio-card" style="background:rgba(201,168,76,0.04);border:1px solid rgba(201,168,76,0.2);">
        <div class="servicio-num" style="opacity:1">✦</div>
        <div class="servicio-icon" style="color:var(--gold)">R</div>
        <div class="servicio-name" style="color:var(--gold)">La experiencia Regal</div>
        <div class="servicio-desc">Todo lo que necesitas en un solo lugar. Servicio de excelencia con el sello distintivo que nos caracteriza.</div>
        <div class="servicio-arrow" style="opacity:1;transform:none">→</div>
      </div>
    </div>
  </div>
</section>

<!-- RESERVACION -->
<section class="reservacion" id="reservacion">
  <div class="reservacion-inner">
    <div>
      <div class="section-label">Reservar un espacio</div>
      <h2 class="section-title">Tu evento,<br><em>perfectamente</em><br>planeado</h2>
      <div class="divider"></div>
      <p style="font-size:0.8rem;color:var(--text-muted);line-height:2;font-weight:200;max-width:380px;letter-spacing:0.03em">Desde reuniones íntimas hasta grandes celebraciones, nuestros espacios se adaptan a cada ocasión. Capacidades desde 2 hasta 200 personas.</p>
      <div style="margin-top:3rem;display:flex;flex-direction:column;gap:1.2rem">
        <div style="display:flex;gap:1rem;align-items:center">
          <div style="width:6px;height:6px;background:var(--gold);border-radius:50%;flex-shrink:0"></div>
          <span style="font-size:0.72rem;color:var(--text-muted);font-weight:200;letter-spacing:0.05em">Confirmación inmediata disponible 24/7</span>
        </div>
        <div style="display:flex;gap:1rem;align-items:center">
          <div style="width:6px;height:6px;background:var(--gold);border-radius:50%;flex-shrink:0"></div>
          <span style="font-size:0.72rem;color:var(--text-muted);font-weight:200;letter-spacing:0.05em">Coordinador personal asignado</span>
        </div>
        <div style="display:flex;gap:1rem;align-items:center">
          <div style="width:6px;height:6px;background:var(--gold);border-radius:50%;flex-shrink:0"></div>
          <span style="font-size:0.72rem;color:var(--text-muted);font-weight:200;letter-spacing:0.05em">Cancelación flexible hasta 48 hrs antes</span>
        </div>
      </div>
    </div>
    <div class="reservacion-form">
      <div class="form-title">Solicitar reservación</div>
      <div class="form-row">
        <label>Nombre completo</label>
        <input type="text" placeholder="Tu nombre">
      </div>
      <div class="form-row">
        <label>Tipo de evento</label>
        <select>
          <option>Reunión corporativa</option>
          <option>Cumpleaños</option>
          <option>Aniversario</option>
          <option>Coffee break</option>
          <option>Otro</option>
        </select>
      </div>
      <div style="display:grid;grid-template-columns:1fr 1fr;gap:1.5rem">
        <div class="form-row">
          <label>Fecha</label>
          <input type="date">
        </div>
        <div class="form-row">
          <label>Personas</label>
          <input type="number" placeholder="# invitados">
        </div>
      </div>
      <div class="form-row">
        <label>Correo electrónico</label>
        <input type="email" placeholder="tu@correo.com">
      </div>
      <button class="form-submit">Solicitar reservación →</button>
    </div>
  </div>
</section>

<!-- REWARDS -->
<section class="rewards" id="rewards">
  <div class="rewards-inner">
    <div class="section-label">Programa de lealtad</div>
    <h2 class="section-title">Rewards <em>Regal</em></h2>
    <div class="divider"></div>
    <p style="font-size:0.8rem;color:var(--text-muted);max-width:500px;line-height:2;font-weight:200;letter-spacing:0.03em">Cada visita, cada pedido y cada celebración te acerca a los beneficios exclusivos que mereces. Tres niveles de membresía diseñados para reconocer tu lealtad.</p>
    <div class="rewards-tiers">
      <div class="tier">
        <div class="tier-icon">◈</div>
        <div class="tier-name">Silver</div>
        <div class="tier-pts">0 – 999 puntos</div>
        <ul class="tier-perks">
          <li>Descuentos del 5%</li>
          <li>Acceso anticipado a promociones</li>
          <li>Regalo en tu cumpleaños</li>
          <li>Acumulación x1 por compra</li>
        </ul>
      </div>
      <div class="tier featured">
        <div class="tier-badge">Más popular</div>
        <div class="tier-icon" style="border-color:var(--gold)">✦</div>
        <div class="tier-name">Gold</div>
        <div class="tier-pts">1,000 – 4,999 puntos</div>
        <ul class="tier-perks">
          <li>Descuentos del 12%</li>
          <li>Coffee break de bienvenida</li>
          <li>Reservaciones prioritarias</li>
          <li>Acumulación x2 por compra</li>
          <li>Invitaciones a eventos privados</li>
        </ul>
      </div>
      <div class="tier">
        <div class="tier-icon">❋</div>
        <div class="tier-name">Platinum</div>
        <div class="tier-pts">5,000+ puntos</div>
        <ul class="tier-perks">
          <li>Descuentos del 20%</li>
          <li>Coordinador personal exclusivo</li>
          <li>Upgrades gratuitos</li>
          <li>Acumulación x3 por compra</li>
          <li>Acceso VIP a nuevos espacios</li>
        </ul>
      </div>
    </div>
  </div>
</section>

<!-- ENVIOS -->
<section class="envios" id="envios">
  <div class="envios-inner">
    <div>
      <div class="section-label">Envíos &amp; Pedidos</div>
      <h2 class="section-title">Regal a<br>tu <em>puerta</em></h2>
      <div class="divider"></div>
      <div class="envios-features">
        <div class="envio-feat">
          <div class="envio-feat-icon">◎</div>
          <div class="envio-feat-text">
            <h4>Seguimiento en tiempo real</h4>
            <p>Sabe exactamente dónde está tu pedido en cada momento. Notificaciones automáticas en cada etapa.</p>
          </div>
        </div>
        <div class="envio-feat">
          <div class="envio-feat-icon">◈</div>
          <div class="envio-feat-text">
            <h4>Entrega el mismo día</h4>
            <p>Pedidos antes de las 2pm garantizan entrega el mismo día dentro de la zona metropolitana.</p>
          </div>
        </div>
        <div class="envio-feat">
          <div class="envio-feat-icon">❋</div>
          <div class="envio-feat-text">
            <h4>Empaque con sello Regal</h4>
            <p>Presentación de lujo en cada envío. Tu pedido llega listo para regalar o servir.</p>
          </div>
        </div>
      </div>
    </div>
    <div>
      <div style="font-size:0.6rem;letter-spacing:0.25em;text-transform:uppercase;color:var(--gold);margin-bottom:1rem">Pedidos recientes</div>
      <div class="envios-box">
        <div class="envio-item">
          <div>
            <div class="envio-item-name">Kit Aniversario Clásico</div>
            <div style="font-size:0.62rem;color:var(--text-muted);margin-top:0.2rem">Pedido #RG-2847</div>
          </div>
          <div class="envio-item-status status-en-camino">En camino</div>
        </div>
        <div class="envio-item">
          <div>
            <div class="envio-item-name">Coffee Break Ejecutivo ×12</div>
            <div style="font-size:0.62rem;color:var(--text-muted);margin-top:0.2rem">Pedido #RG-2831</div>
          </div>
          <div class="envio-item-status status-entregado">Entregado</div>
        </div>
        <div class="envio-item">
          <div>
            <div class="envio-item-name">Catering Corporativo</div>
            <div style="font-size:0.62rem;color:var(--text-muted);margin-top:0.2rem">Pedido #RG-2862</div>
          </div>
          <div class="envio-item-status status-preparando">Preparando</div>
        </div>
      </div>
      <button class="btn-primary" style="width:100%;margin-top:0.5rem">Hacer un pedido</button>
    </div>
  </div>
</section>

<!-- CATERING -->
<section class="catering" id="catering">
  <div class="catering-inner">
    <div class="section-label">Catering &amp; Coffee Breaks</div>
    <h2 class="section-title">Cada bocado,<br><em>una declaración</em></h2>
    <div class="divider"></div>
    <p style="font-size:0.8rem;color:var(--text-muted);max-width:500px;line-height:2;font-weight:200;letter-spacing:0.03em">Desde un coffee break ejecutivo hasta una recepción de gala. Nuestro equipo culinario crea experiencias gastronómicas memorables a la medida de cada ocasión.</p>
    <div class="catering-packages">
      <div class="catering-pkg">
        <div class="pkg-category">Coffee break</div>
        <div class="pkg-name">Ejecutivo</div>
        <div class="pkg-guests">Desde 10 personas</div>
        <div class="pkg-divider"></div>
        <div class="pkg-includes">Cafés de especialidad · Infusiones premium · Sándwiches artesanales · Repostería fina · Montaje incluido</div>
        <div class="pkg-price"><span>desde</span>$380 / persona</div>
      </div>
      <div class="catering-pkg" style="border-color:rgba(201,168,76,0.3)">
        <div class="pkg-category">Catering completo</div>
        <div class="pkg-name">Gala</div>
        <div class="pkg-guests">Desde 30 personas</div>
        <div class="pkg-divider"></div>
        <div class="pkg-includes">Menú de 3 tiempos · Barra de bebidas · Personal de servicio · Montaje y desmontaje · Coordinación completa</div>
        <div class="pkg-price"><span>desde</span>$950 / persona</div>
      </div>
      <div class="catering-pkg">
        <div class="pkg-category">Desayuno / Brunch</div>
        <div class="pkg-name">Matinal</div>
        <div class="pkg-guests">Desde 15 personas</div>
        <div class="pkg-divider"></div>
        <div class="pkg-includes">Estación de jugos · Huevos en todas sus formas · Waffles y crepas · Fruta de temporada · Panadería artesanal</div>
        <div class="pkg-price"><span>desde</span>$520 / persona</div>
      </div>
      <div class="catering-pkg">
        <div class="pkg-category">A tu medida</div>
        <div class="pkg-name">Personalizado</div>
        <div class="pkg-guests">Cualquier número</div>
        <div class="pkg-divider"></div>
        <div class="pkg-includes">Menú diseñado contigo · Dietéticos y alérgenos · Temáticas especiales · Presentaciones únicas · Sin restricciones</div>
        <div class="pkg-price" style="color:var(--cream2)">Cotización especial</div>
      </div>
    </div>
  </div>
</section>

<!-- KITS -->
<section class="kits" id="kits">
  <div class="kits-inner">
    <div class="section-label">Kits especiales</div>
    <h2 class="section-title">Celebra con el<br>toque <em>Regal</em></h2>
    <div class="divider" style="margin:2rem auto"></div>
    <div class="kits-grid">
      <div class="kit-card">
        <div class="kit-pattern">✦</div>
        <div class="kit-number">Kit 01</div>
        <div class="kit-name">Cumpleaños</div>
        <div class="kit-desc">Pasteles de autor, decoración premium, detalles personalizados y carta de celebración escrita a mano.</div>
        <div class="kit-cta">Ver kit →</div>
      </div>
      <div class="kit-card" style="border-color:rgba(201,168,76,0.25)">
        <div class="kit-pattern">◈</div>
        <div class="kit-number">Kit 02</div>
        <div class="kit-name">Aniversario</div>
        <div class="kit-desc">Champagne de selección, bouquet floral, experiencia gastronómica para dos y amenidades de lujo.</div>
        <div class="kit-cta">Ver kit →</div>
      </div>
      <div class="kit-card">
        <div class="kit-pattern">❋</div>
        <div class="kit-number">Kit 03</div>
        <div class="kit-name">Bienvenida</div>
        <div class="kit-desc">Kit corporativo o personal para recibir a alguien especial con el estilo inconfundible de Regal.</div>
        <div class="kit-cta">Ver kit →</div>
      </div>
    </div>
    <div style="margin-top:3rem;text-align:center">
      <button class="btn-secondary" style="margin-right:1rem">Ver todos los kits</button>
      <button class="btn-primary">Crear kit personalizado</button>
    </div>
  </div>
</section>

<!-- FOOTER -->
<footer>
  <div class="footer-inner">
    <div class="footer-brand">
      <div class="logo">Regal</div>
      <p>Experiencias de distinción para cada momento. Servicio impecable con el sello que nos define.</p>
    </div>
    <div class="footer-col">
      <h5>Servicios</h5>
      <ul>
        <li><a href="#reservacion">Reservaciones</a></li>
        <li><a href="#catering">Catering</a></li>
        <li><a href="#envios">Envíos</a></li>
        <li><a href="#kits">Kits</a></li>
      </ul>
    </div>
    <div class="footer-col">
      <h5>Empresa</h5>
      <ul>
        <li><a href="#">Nosotros</a></li>
        <li><a href="#">Blog</a></li>
        <li><a href="#">Careers</a></li>
        <li><a href="#">Prensa</a></li>
      </ul>
    </div>
    <div class="footer-col">
      <h5>Contacto</h5>
      <ul>
        <li><a href="#">hola@regal.mx</a></li>
        <li><a href="#">+52 55 1234 5678</a></li>
        <li><a href="#">WhatsApp</a></li>
        <li><a href="#">Instagram</a></li>
      </ul>
    </div>
  </div>
  <div class="footer-bottom">
    <p>© 2026 Regal. Todos los derechos reservados.</p>
    <p style="font-size:0.6rem;letter-spacing:0.2em;color:rgba(138,128,112,0.5)">CDMX · MONTERREY · GUADALAJARA</p>
  </div>
</footer>

</body>
</html>