document.querySelector('#ticketForm')?.addEventListener('submit', function(e) {
    const cliente = document.querySelector('#cliente').value;
    const email = document.querySelector('#email').value;

    if (cliente.trim() === "" || !email.includes('@')) {
        e.preventDefault();
        alert("Por favor, complete los campos correctamente.");
    }
});