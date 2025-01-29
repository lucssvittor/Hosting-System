function updateDateTime() {
    const now = new Date();
    const date = now.toLocaleDateString('pt-BR');  // Data no formato Brasileiro
    const time = now.toLocaleTimeString('pt-BR');  // Hora no formato Brasileiro
    document.getElementById('current-date-time').textContent = `Data: ${date} | Hora: ${time}`;
}

// Atualizar a data e hora a cada segundo
setInterval(updateDateTime, 1000);

// Chama a função para mostrar a data e hora imediatamente
updateDateTime();