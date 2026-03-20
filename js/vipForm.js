// ==========================================
// LÓGICA DEL FORMULARIO (AJAX ESPECTACULAR)
// ==========================================
// Usamos DOMContentLoaded para asegurar que el DOM esté listo
document.addEventListener('DOMContentLoaded', function() {
    
    const vipForm = document.getElementById('vipForm');
    
    if (!vipForm) return; // Seguridad

    vipForm.addEventListener('submit', function(e) {
      e.preventDefault(); 
      
      const form = this;
      const btnSubmit = document.getElementById('btnSubmit');
      const mensajeDiv = document.getElementById('form-mensaje');
      
      // Capturamos el nombre completo antes de hacer nada más
      const nombreInput = form.querySelector('#nombre');
      // Obtenemos solo el primer nombre o 'Miembro' si falla
      const primerNombre = nombreInput ? nombreInput.value.split(' ')[0] : 'Miembro'; 

      if (!btnSubmit || !mensajeDiv) return; // Seguridad

      // Estado de carga
      btnSubmit.innerText = 'Confirmando...';
      btnSubmit.disabled = true;
      mensajeDiv.style.display = 'none';
      
      // FormData empaca TODO el formulario automáticamente (Nombre, Correo y ahora WhatsApp)
      const formData = new FormData(form);
      
      fetch('guardar_lead.php', {
        method: 'POST',
        body: formData
      })
      .then(response => response.json())
      .then(data => {
        
        if(data.status === 'success') {
          // ==========================================
          // 🏆 LA MAGIA DEL ÉXITO ESPECTACULAR 🏆
          // ==========================================
          
          // 1. REEMPLAZAMOS TODO EL CONTENIDO DEL FORMULARIO
          const successHTML = `
            <div class="form-success-content">
              <div class="success-icon-wrap">
                <div class="success-icon">&#10003;</div> </div>
              <h3 class="success-title">Bienvenido, ${primerNombre}</h3>
              <p class="success-subtitle">
                Tu estatus <strong>Gold</strong> automático ha sido confirmado con éxito. Eres oficialmente parte de nuestra lista fundadora.
              </p>
              <p class="success-subtitle">
                Un correo de bienvenida ya está en camino a tu bandeja de entrada con los detalles.
              </p>
              <p class="success-subtitle" style="font-size:0.8rem; color:var(--text-muted);">
                Nos vemos pronto.
              </p>
            </div>
          `;

          form.innerHTML = successHTML;

          // 2. DISPARAMOS EL CONFETI DORADO
          triggerGoldConfetti();

        } else {
          // Estado de error 
          mensajeDiv.style.display = 'block';
          mensajeDiv.innerText = data.message;
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
});

// --- Función Espectacular de Gold Confetti ---
function triggerGoldConfetti() {
  const confettiColors = ['#C9A84C', '#E8D48A', '#8A8070']; 
  
  for (let i = 0; i < 60; i++) {
    const confettiEl = document.createElement('div');
    confettiEl.classList.add('confetti');
    
    confettiEl.style.left = Math.random() * 100 + 'vw';
    confettiEl.style.backgroundColor = confettiColors[Math.floor(Math.random() * confettiColors.length)];
    confettiEl.style.width = Math.random() * 8 + 4 + 'px';
    confettiEl.style.height = confettiEl.style.width; 
    
    confettiEl.style.animationName = 'confettiDrop'; 
    confettiEl.style.animationDuration = Math.random() * 3 + 2 + 's'; 
    confettiEl.style.animationDelay = Math.random() * 0.5 + 's';
    
    confettiEl.style.borderRadius = '50%'; 

    document.body.appendChild(confettiEl);

    setTimeout(() => confettiEl.remove(), (parseFloat(confettiEl.style.animationDuration) + 1) * 1000);
  }
}