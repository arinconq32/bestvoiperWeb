document.getElementById('contactForm').addEventListener('submit', function(event) {
    event.preventDefault();

    // Limpiar errores previos
    document.getElementById('nameError').textContent = '';
    document.getElementById('phoneError').textContent = '';
    document.getElementById('emailError').textContent = '';
    document.getElementById('messageError').textContent = '';

    // Obtener los valores de los campos
    const fullName = document.getElementById('fullName').value.trim();
    const phone = document.getElementById('phone').value.trim();
    const email = document.getElementById('email').value.trim();
    const message = document.getElementById('message').value.trim();

    let isValid = true;

    // Validar Nombre y Apellidos
    if (!fullName) {
        document.getElementById('nameError').textContent = 'Este campo es obligatorio';
        isValid = false;
    }

    // Validar Teléfono (formato básico: 123-456-7890)
    const phoneRegex = /^[0-9]{3}-[0-9]{3}-[0-9]{4}$/;
    if (!phone || !phoneRegex.test(phone)) {
        document.getElementById('phoneError').textContent = 'Ingrese un teléfono válido (formato: 123-456-7890)';
        isValid = false;
    }

    // Validar Correo Electrónico
    const emailRegex = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
    if (!email || !emailRegex.test(email)) {
        document.getElementById('emailError').textContent = 'Ingrese un correo válido';
        isValid = false;
    }

    // Validar Mensaje
    if (!message) {
        document.getElementById('messageError').textContent = 'Este campo es obligatorio';
        isValid = false;
    }

    // Si el formulario es válido, lo puedes enviar
    if (isValid) {
        alert('Formulario enviado con éxito');
        // Aquí podrías hacer una solicitud AJAX para enviar los datos a un servidor
        document.getElementById('contactForm').reset(); // Resetea el formulario
    }
});