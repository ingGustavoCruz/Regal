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

      // Estado de carga (Mejoramos la redacción)
      btnSubmit.innerText = 'Confirmando estatus...';
      btnSubmit.disabled = true;
      mensajeDiv.style.display = 'none';
      
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
          // Esto bloquea efectivamente cualquier interacción futura y da feedback definitivo.
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
          // Al cambiar innerHTML, el vip-form mantiene su estilo de caja oscura centrado,
          // pero su contenido ahora es la pantalla de éxito.

          // 2. DISPARAMOS EL CONFETI DORADO (El "Wow Factor")
          triggerGoldConfetti();

        } else {
          // Estado de error (Mantenemos la lógica actual)
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

// --- Función Simplificada y Espectacular de Gold Confetti ---
// No requiere librerías externas, es puro JS y CSS.
function triggerGoldConfetti() {
  const confettiColors = ['#C9A84C', '#E8D48A', '#8A8070']; // Paleta dorada y gris
  
  // Creamos 60 partículas de confeti
  for (let i = 0; i < 60; i++) {
    const confettiEl = document.createElement('div');
    confettiEl.classList.add('confetti');
    
    // Posición horizontal aleatoria (toda la pantalla)
    confettiEl.style.left = Math.random() * 100 + 'vw';
    
    // Color aleatorio de nuestra paleta
    confettiEl.style.backgroundColor = confettiColors[Math.floor(Math.random() * confettiColors.length)];
    
    // Tamaño aleatorio (pequeños y elegantes círculos)
    confettiEl.style.width = Math.random() * 8 + 4 + 'px';
    confettiEl.style.height = confettiEl.style.width; // Cuadrados perfectos
    
    // Duración y retraso aleatorio para un efecto natural
    confettiEl.style.animationName = 'confettiDrop'; // Mismo nombre que en el CSS keyframe
    confettiEl.style.animationDuration = Math.random() * 3 + 2 + 's'; // 2s a 5s
    confettiEl.style.animationDelay = Math.random() * 0.5 + 's';
    
    // Los hacemos redondos para un look más refinado que confeti cuadrado
    confettiEl.style.borderRadius = '50%'; 

    // Los añadimos al body
    document.body.appendChild(confettiEl);

    // Limpieza automática del DOM después de que termina la animación
    setTimeout(() => confettiEl.remove(), (parseFloat(confettiEl.style.animationDuration) + 1) * 1000);
  }
}