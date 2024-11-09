const searchInput = document.querySelector('input[type="text"]');
const microphoneButton = document.querySelector('.search-bar button');

microphoneButton.addEventListener('click', () => {
  // Aquí iría el código para activar la escucha del micrófono
  // y enviar la transcripción a un servicio de reconocimiento de voz
  // Por ejemplo, usando la Web Speech API:

  const SpeechRecognition =
    window.SpeechRecognition || window.webkitSpeechRecognition;
  const recognition = new SpeechRecognition();

  recognition.onresult = (event) => {
    const transcript = event.results[0][0].transcript;
    searchInput.value = transcript;
  };

  recognition.start();
});
