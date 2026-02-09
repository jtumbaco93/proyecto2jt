document.addEventListener('DOMContentLoaded', () => {
    const form = document.querySelector('#ticketForm');

    if (form) {
        form.addEventListener('submit', (e) => {
            let errors = [];
            const cliente = document.getElementById('cliente').value.trim();
            const email = document.getElementById('email').value.trim();
            const descripcion = document.getElementById('descripcion').value.trim();

            // Validar campos vacíos
            if (!cliente || !email || !descripcion) {
                errors.push("Todos los campos son obligatorios.");
            }

            // Validar formato de email
            const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            if (email && !emailRegex.test(email)) {
                errors.push("Por favor, ingrese un correo electrónico válido.");
            }

            if (errors.length > 0) {
                e.preventDefault();
                alert(errors.join("\n"));
            }
        });
    }
});