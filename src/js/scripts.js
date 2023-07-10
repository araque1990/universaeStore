const form = document.querySelector('#registro-form');
form.addEventListener('submit', comprobarPasswords);

function comprobarPasswords(evento) {
  const password = document.querySelector('#password').value;
  const confirmarPassword = document.querySelector('#confirmar-password').value;
  if (password !== confirmarPassword) {
    evento.preventDefault();
    alert('Las contraseñas no coinciden, por favor inténtelo de nuevo.');
  }
}
