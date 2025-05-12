
function showAlert(message, type = 'info', timeout = 3000) {
  const alert = document.getElementById('alert');
  alert.textContent = message;
  alert.className = 'alert alert-' + type;
  alert.style.display = 'block';

  setTimeout(() => {
    alert.style.display = 'none';
  }, timeout);
}

