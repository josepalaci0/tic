// public/script.js
function sendData() {
  const dataInput = document.getElementById('dataInput').value;
  const responseParagraph = document.getElementById('response');

  // Crear una solicitud AJAX usando Fetch API
  fetch('/process', {
    method: 'POST',
    headers: {
      'Content-Type': 'application/x-www-form-urlencoded',
    },
    body: 'data=' + encodeURIComponent(dataInput),
  })
    .then((response) => response.text())
    .then((data) => {
      responseParagraph.textContent = data;
    })
    .catch((error) => {
      console.error('Error al enviar los datos:', error);
      responseParagraph.textContent = 'Hubo un error en el envío.';
    });
}
