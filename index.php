<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Próximamente | Regal — Experiencias de Distinción</title>
<link rel="icon" type="image/png" href="imagenes/monito01.png">
<link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;0,600;1,300;1,400&family=Josefin+Sans:wght@200;300;400&display=swap" rel="stylesheet">
<style>
  *{margin:0;padding:0;box-sizing:border-box}
  :root{
    --gold:#C9A84C;
    --gold-light:#E8D48A;
    --dark:#0D0C0A;
    --dark2:#1A1915;
    --cream:#F9F4EB;
    --cream2:#EDE5D4;
    --text-muted:#8A8070;
  }
  body{font-family:'Josefin Sans',sans-serif;background:var(--dark);color:var(--cream);overflow-x:hidden}

  /* NAV MINIMALISTA */
  nav{position:fixed;top:0;left:0;right:0;z-index:100;padding:1.5rem 3rem;display:flex;align-items:center;justify-content:center;background:rgba(13,12,10,0.8);backdrop-filter:blur(12px);border-bottom:1px solid rgba(201,168,76,0.1)}
  .nav-logo-img {
    height: 150px; /* Ajusta este valor para hacer el logo más grande o más chico */
    width: auto;
    object-fit: contain;
    transition: transform 0.3s ease;
  }
  
  .nav-logo-img:hover {
    transform: scale(1.03); /* Un toque sutil al pasar el cursor */
  }

  /* HERO & COMING SOON */
  .hero{
    /* min-height: 100vh; -- Eliminamos altura fija y centrado vertical automático */
    display:flex;
    flex-direction:column;
    align-items:center;
    /* justify-content: center; -- Eliminamos */
    position:relative; /* -- Lo dejamos para el degradado de fondo radial */
    overflow:hidden;
    padding: 10rem 2rem; /* -- Padding vertical generoso para "centrar" en la página */
  }
  .hero-bg{position:absolute;inset:0;background:radial-gradient(ellipse at 50% 40%, rgba(201,168,76,0.12) 0%, transparent 60%)}
  .hero-line-v{position:absolute;left:50%;top:0;width:1px;height:100%;background:linear-gradient(to bottom, transparent, rgba(201,168,76,0.2) 30%, rgba(201,168,76,0.2) 70%, transparent);z-index: 1;}
  
  .hero-content{text-align:center;position:relative;z-index:2;max-width:800px;width:100%}
  .hero-eyebrow{font-size:0.65rem;letter-spacing:0.4em;text-transform:uppercase;color:var(--gold);margin-bottom:1.5rem;display:flex;align-items:center;justify-content:center;gap:1.5rem}
  .hero-eyebrow::before,.hero-eyebrow::after{content:'';width:40px;height:1px;background:var(--gold);opacity:0.6}
  
  .hero-title {
    font-family: 'Cormorant Garamond', serif;
    font-size: clamp(2.8rem, 6vw, 4.5rem); /* Redujimos el tope máximo para que no compita con el logo */
    font-weight: 300;
    line-height: 1;
    letter-spacing: 0.02em;
    color: var(--cream);
    margin-bottom: 1rem;
  }
  .hero-title em{font-style:italic;color:var(--gold)}
  
  .hero-subtitle {
    font-size: 0.95rem; /* Aumentamos el tamaño base */
    line-height: 1.8;
    letter-spacing: 0.05em;
    color: var(--cream2); /* Cambiamos del gris apagado a un crema más luminoso */
    margin: 1.5rem auto 2.5rem;
    font-weight: 300; /* Le dimos un pelín más de peso (de 200 a 300) para mejor lectura */
    max-width: 600px;
  }
  .hero-subtitle strong{color:var(--cream);font-weight:400}

  /* COUNTDOWN TEMPORIZADOR */
  .countdown{display:flex;justify-content:center;align-items:center;gap:1.5rem;margin-bottom:3rem}
  .time-box{display:flex;flex-direction:column;align-items:center;min-width:60px}
  .time-num{font-family:'Cormorant Garamond',serif;font-size:3rem;color:var(--gold);line-height:1;font-weight:300}
  .time-label{font-size:0.55rem;letter-spacing:0.25em;text-transform:uppercase;color:var(--text-muted);margin-top:0.6rem}
  .time-sep{font-family:'Cormorant Garamond',serif;font-size:2rem;color:rgba(201,168,76,0.3);line-height:1;margin-top:-20px}

  /* FORMULARIO VIP */
  .vip-form{background:rgba(26,25,21,0.7);border:1px solid rgba(201,168,76,0.2);padding:3rem;max-width:450px;margin:0 auto;backdrop-filter:blur(10px);box-shadow:0 20px 40px rgba(0,0,0,0.5)}
  .form-row{margin-bottom:1.8rem;text-align:left}
  .form-row label{display:block;font-size:0.55rem;letter-spacing:0.25em;text-transform:uppercase;color:var(--gold);margin-bottom:0.6rem;font-weight:300}
  .form-row input{width:100%;background:transparent;border:none;border-bottom:1px solid rgba(201,168,76,0.3);padding:0.6rem 0;color:var(--cream);font-family:'Josefin Sans',sans-serif;font-size:0.9rem;font-weight:200;letter-spacing:0.05em;transition:all 0.3s;outline:none}
  .form-row input:focus{border-bottom-color:var(--gold);background:rgba(201,168,76,0.03)}
  .form-row input::placeholder{color:rgba(138,128,112,0.5)}
  
  .btn-primary{width:100%;padding:1.2rem;background:var(--gold);color:var(--dark);font-family:'Josefin Sans',sans-serif;font-size:0.7rem;letter-spacing:0.25em;text-transform:uppercase;border:none;cursor:pointer;font-weight:400;transition:all 0.3s;margin-top:1rem}
  .btn-primary:hover{background:var(--gold-light);transform:translateY(-2px);box-shadow:0 10px 20px rgba(201,168,76,0.15)}

  /* MENSAJES DEL FORMULARIO */
  #form-mensaje{font-size:0.7rem;letter-spacing:0.1em;margin-top:1.5rem;text-align:center;display:none;line-height:1.5}
  .msg-success{color:var(--gold);}
  .msg-error{color:#ff6b6b;}

  /* FOOTER Y LOGO KAI */
  footer {
    margin-top: 4rem;
    padding: 2rem;
    text-align: center;
    z-index: 2;
    display: flex; /* Añadimos flexbox al footer para mejor control */
    flex-direction: column;
    align-items: center;
    gap: 1.5rem; /* Separación entre elementos principales del footer */
  }
  .social-links {display:flex;justify-content:center;gap:2rem;list-style:none}
  .social-links a {color:var(--gold);font-size:0.65rem;letter-spacing:0.2em;text-transform:uppercase;text-decoration:none;transition:color 0.3s}
  .social-links a:hover {color:var(--cream)}
  .copyright {font-size:0.6rem;letter-spacing:0.1em;color:rgba(138,128,112,0.5)}
  
  .powered-by-container {
    display: flex;
    flex-direction: column;
    align-items: center;
    gap: 0.8rem;
    margin-top: 1rem;
    padding-top: 1.5rem;
    border-top: 1px solid rgba(201,168,76,0.1); /* Línea sutil separadora */
    width: 100%;
    max-width: 300px;
  }
  .powered-by-text {
    font-size: 0.55rem;
    letter-spacing: 0.3em;
    text-transform: uppercase;
    color: var(--text-muted);
  }
  .kai-logo {
    height: 35px; /* Altura controlada, ajusta si es necesario */
    width: auto;
    object-fit: contain;
    /* Si tu logo "KAI_NG.png" es muy oscuro para el fondo negro, 
       descomenta la siguiente línea para invertir los colores (hacerlo claro): */
    /* filter: invert(1) brightness(0.9); */
    opacity: 0.7;
    transition: opacity 0.3s;
  }
  .kai-logo:hover {
    opacity: 1;
  }

  /* ANIMACIONES DE ENTRADA ESCALONADAS */
  @keyframes fadeUp {
    from { opacity: 0; transform: translateY(30px); }
    to { opacity: 1; transform: translateY(0); }
  }
  .hero-eyebrow { animation: fadeUp 1s cubic-bezier(0.2, 0.8, 0.2, 1) forwards; opacity: 0; }
  .hero-title { animation: fadeUp 1s cubic-bezier(0.2, 0.8, 0.2, 1) 0.2s forwards; opacity: 0; }
  .hero-subtitle { animation: fadeUp 1s cubic-bezier(0.2, 0.8, 0.2, 1) 0.4s forwards; opacity: 0; }
  .countdown { animation: fadeUp 1s cubic-bezier(0.2, 0.8, 0.2, 1) 0.6s forwards; opacity: 0; }
  .vip-form { animation: fadeUp 1s cubic-bezier(0.2, 0.8, 0.2, 1) 0.8s forwards; opacity: 0; }
  footer { animation: fadeUp 1s cubic-bezier(0.2, 0.8, 0.2, 1) 1.2s forwards; opacity: 0; } /* -- Retraso mayor para que aparezca después del form centrado */

  @media(max-width:600px){
    nav{padding:1rem}
    .nav-logo-img { height: 75px; } /* Ajuste del logo imponente para móviles */
    .hero{padding:8rem 1.5rem} 
    .vip-form{padding:2rem 1.5rem}
    .time-num{font-size:2.2rem}
    .countdown{gap:1rem}
  }
</style>
</head>
<body>

<nav>
  <img src="imagenes/RÉGAL_B.png" alt="Régal Coffee + Lounge" class="nav-logo-img">
</nav>

<section class="hero">
  <div class="hero-bg"></div>
  <div class="hero-line-v"></div>
  
  <div class="hero-content">
    <div class="hero-eyebrow">Próximamente</div>
    <h1 class="hero-title">El arte de <em>celebrar</em></h1>
    <p class="hero-subtitle">La exclusividad toma una nueva forma. Únete a nuestra lista fundadora y obtén estatus <strong>Gold</strong> automático y <strong>beneficios exclusivos</strong> en tu primera reservación.</p>
    
    <div class="countdown" id="countdown">
      <div class="time-box">
        <span class="time-num" id="days">00</span>
        <span class="time-label">Días</span>
      </div>
      <div class="time-sep">:</div>
      <div class="time-box">
        <span class="time-num" id="hours">00</span>
        <span class="time-label">Hrs</span>
      </div>
      <div class="time-sep">:</div>
      <div class="time-box">
        <span class="time-num" id="minutes">00</span>
        <span class="time-label">Min</span>
      </div>
      <div class="time-sep">:</div>
      <div class="time-box">
        <span class="time-num" id="seconds">00</span>
        <span class="time-label">Seg</span>
      </div>
    </div>

    <form class="vip-form" id="vipForm">
      <div class="form-row">
        <label>Nombre completo</label>
        <input type="text" name="nombre" id="nombre" placeholder="Ej. Gustavo Cruz" required>
      </div>
      <div class="form-row">
        <label>Correo electrónico</label>
        <input type="email" name="correo" id="correo" placeholder="guscruz@correo.com" required>
      </div>
      <button class="btn-primary" type="submit" id="btnSubmit">Solicitar Acceso VIP</button>
      <div id="form-mensaje"></div>
    </form>
  </div>
</section>

<footer>
  <ul class="social-links">
    <li><a href="https://www.instagram.com/regal_coffeelounge" target="_blank" rel="noopener noreferrer">Instagram</a></li>
    <li><a href="https://www.facebook.com/regalcoffelounge" target="_blank" rel="noopener noreferrer">Facebook</a></li>
    <li><a href="https://wa.me/525540507317" target="_blank" rel="noopener noreferrer">WhatsApp</a></li>
    <li><a href="mailto:contacto@regal.mx">Contacto</a></li>
  </ul>
  <div class="copyright">© 2026 Regal. Todos los derechos reservados.</div>
  
  <div class="powered-by-container">
    <div class="powered-by-text">Powered By</div>
    <img src="imagenes/KAI_NG.png" alt="KAI Experience" class="kai-logo">
  </div>
</footer>

<script>
  // ==========================================
  // LÓGICA DEL TEMPORIZADOR
  // ==========================================
  const targetDate = new Date("September 1, 2026 00:00:00").getTime();

  const timerInterval = setInterval(function() {
    const now = new Date().getTime();
    const distance = targetDate - now;

    if (distance < 0) {
      clearInterval(timerInterval);
      document.getElementById("countdown").innerHTML = "<div class='time-num' style='font-size:1.5rem; letter-spacing:0.2em;'>NUESTRAS PUERTAS ESTÁN ABIERTAS</div>";
      return;
    }

    const days = Math.floor(distance / (1000 * 60 * 60 * 24));
    const hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    const seconds = Math.floor((distance % (1000 * 60)) / 1000);

    document.getElementById("days").innerText = days.toString().padStart(2, '0');
    document.getElementById("hours").innerText = hours.toString().padStart(2, '0');
    document.getElementById("minutes").innerText = minutes.toString().padStart(2, '0');
    document.getElementById("seconds").innerText = seconds.toString().padStart(2, '0');
  }, 1000);

  // ==========================================
  // LÓGICA DEL FORMULARIO (AJAX)
  // ==========================================
  document.getElementById('vipForm').addEventListener('submit', function(e) {
    e.preventDefault(); 
    
    const form = this;
    const btnSubmit = document.getElementById('btnSubmit');
    const mensajeDiv = document.getElementById('form-mensaje');
    
    btnSubmit.innerText = 'Procesando...';
    btnSubmit.disabled = true;
    mensajeDiv.style.display = 'none';
    
    const formData = new FormData(form);
    
    fetch('guardar_lead.php', {
      method: 'POST',
      body: formData
    })
    .then(response => response.json())
    .then(data => {
      mensajeDiv.style.display = 'block';
      mensajeDiv.innerText = data.message;
      
      if(data.status === 'success') {
        mensajeDiv.className = 'msg-success';
        form.reset(); 
        btnSubmit.innerText = 'Acceso Concedido';
      } else {
        mensajeDiv.className = 'msg-error';
        btnSubmit.innerText = 'Solicitar Acceso VIP';
        btnSubmit.disabled = false;
      }
    })
    .catch(error => {
      console.error('Error:', error);
      mensajeDiv.style.display = 'block';
      mensajeDiv.innerText = 'Hubo un problema de conexión.';
      mensajeDiv.className = 'msg-error';
      btnSubmit.innerText = 'Solicitar Acceso VIP';
      btnSubmit.disabled = false;
    });
  });
</script>

</body>
</html>