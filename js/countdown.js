// ==========================================
// LÓGICA DEL TEMPORIZADOR
// ==========================================
// NOTA BUENA PRÁCTICA: Usar fecha ISO con offset (MX -06:00) si es exacto
const targetDate = new Date("September 1, 2026 00:00:00").getTime();

const timerInterval = setInterval(function() {
  const now = new Date().getTime();
  const distance = targetDate - now;

  const countdownElement = document.getElementById("countdown");
  
  // Seguridad por si el elemento no existe en la página
  if (!countdownElement) {
    clearInterval(timerInterval);
    return;
  }

  if (distance < 0) {
    clearInterval(timerInterval);
    countdownElement.innerHTML = "<div class='time-num' style='font-size:1.5rem; letter-spacing:0.2em;'>NUESTRAS PUERTAS ESTÁN ABIERTAS</div>";
    return;
  }

  const days = Math.floor(distance / (1000 * 60 * 60 * 24));
  const hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  const seconds = Math.floor((distance % (1000 * 60)) / 1000);

  // Asegurar que existan antes de actualizar (buenas prácticas)
  const daysEl = document.getElementById("days");
  const hoursEl = document.getElementById("hours");
  const minutesEl = document.getElementById("minutes");
  const secondsEl = document.getElementById("seconds");

  if(daysEl) daysEl.innerText = days.toString().padStart(2, '0');
  if(hoursEl) hoursEl.innerText = hours.toString().padStart(2, '0');
  if(minutesEl) minutesEl.innerText = minutes.toString().padStart(2, '0');
  if(secondsEl) secondsEl.innerText = seconds.toString().padStart(2, '0');
  
}, 1000);