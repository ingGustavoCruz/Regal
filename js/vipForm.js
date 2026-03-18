// ==========================================
// LÓGICA DEL FORMULARIO (AJAX)
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
      
      if (!btnSubmit || !mensajeDiv) return; // Seguridad

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
});