function toggleChatbox() {
    const chatbox = document.getElementById('chatbox');
    if (chatbox.style.display === 'none') {
        chatbox.style.display = 'block';
    } else {
        chatbox.style.display = 'none';
    }
}

function sendMessage() {
    const userInput = document.getElementById('user-input').value;
    const messages = document.getElementById('messages');
    const userMessage = document.createElement('div');
    userMessage.textContent = 'Usuario: ' + userInput;
    messages.appendChild(userMessage);
    document.getElementById('user-input').value = '';

    // Lógica de respuesta del chatbot
    const botMessage = document.createElement('div');

    if (userInput.toLowerCase().includes('hola') || userInput.toLowerCase().includes('buenos días') || userInput.toLowerCase().includes('buenas tardes') || userInput.toLowerCase().includes('buenas noches')) {
        botMessage.textContent = 'Robot: ¡Hola! ¿En qué puedo ayudarte?';
    } else if (userInput.toLowerCase().includes('cómo estás')) {
        botMessage.textContent = 'Robot: Estoy bien, ¡gracias por preguntar!';
    } else if (userInput.toLowerCase().includes('adiós') || userInput.toLowerCase().includes('hasta luego')) {
        botMessage.textContent = 'Robot: ¡Hasta luego! Que tengas un buen día.';
    } else {
        botMessage.textContent = 'Robot: Disculpa, no entiendo. ¿Puedes ser más específico?';
    }

    messages.appendChild(botMessage);
}
