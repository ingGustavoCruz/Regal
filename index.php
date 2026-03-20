<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Próximamente | Regal Coffee + Lounge — Experiencias de Distinción en Ciudad de México.">
    <title>Próximamente | Regal — Experiencias de Distinción</title>
    <link rel="icon" type="image/png" href="imagenes/monito01.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;0,600;1,300;1,400&family=Josefin+Sans:wght@200;300;400&display=swap" rel="stylesheet">
    
    <link rel="stylesheet" href="css/style.css">
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
        <label for="nombre">Nombre completo</label>
        <input type="text" name="nombre" id="nombre" placeholder="Ej. Gustavo Cruz" required>
      </div>
      <div class="form-row">
        <label for="correo">Correo electrónico</label>
        <input type="email" name="correo" id="correo" placeholder="guscruz@correo.com" required>
      </div>
      <div class="form-row">
        <label for="whatsapp">WhatsApp (Opcional)</label>
        <input type="tel" name="whatsapp" id="whatsapp" placeholder="+52 55 1234 5678" pattern="[0-9\+\s\-]+" title="Ingresa un número de teléfono válido. Se permiten números, espacios y el símbolo +">
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

<script src="js/countdown.js"></script>
<script src="js/vipForm.js"></script>

</body>
</html>