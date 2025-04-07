function login() {
    const username = document.getElementById('username').value.trim();
    const password = document.getElementById('password').value.trim();
    const error = document.getElementById('error');
    error.textContent = '';

    if (!username || !password) {
        error.textContent = 'Por favor completa todos los campos.';
        return;
    }

    fetch('api/login.php', {
        method: 'POST',
        headers: { 'Content-Type': 'application/json' },
        body: JSON.stringify({ username, password })
    })
    .then(res => res.json())
    .then(data => {
        if (data.success) {
            window.location.href = 'record.php';
        } else {
            error.textContent = data.error || 'Usuario o contraseña incorrectos.';
        }
    })
    .catch(err => {
        console.error('Error al iniciar sesión:', err);
        error.textContent = 'Error de conexión con el servidor.';
    });
}

function register() {
    const nombre = document.getElementById('nombre').value.trim();
    const apellido = document.getElementById('apellido').value.trim();
    const cedula = document.getElementById('cedula').value.trim();
    const email = document.getElementById('email').value.trim();
    const username = document.getElementById('new-username').value.trim();
    const password = document.getElementById('new-password').value.trim();
    const rol_id = parseInt(document.getElementById('rol').value);
    const ubicacion_id = parseInt(document.getElementById('ubicacion').value);

    const error = document.getElementById('register-error');
    error.textContent = '';

    if (!nombre || !apellido || !cedula || !email || !username || !password || !rol_id || !ubicacion_id) {
        error.textContent = 'Por favor completa todos los campos.';
        return;
    }

    fetch('api/registrar_usuario.php', {
        method: 'POST',
        headers: { 'Content-Type': 'application/json' },
        body: JSON.stringify({ nombre, apellido, cedula, email, username, password, rol_id, ubicacion_id })
    })
    .then(res => res.json())
    .then(data => {
        if (data.mensaje) {
            alert(data.mensaje);
            showLogin();
        } else {
            error.textContent = data.error || 'Error al registrar.';
        }
    })
    .catch(err => {
        console.error('Error al registrar:', err);
        error.textContent = 'Error de conexión con el servidor.';
    });
}

function showRegister() {
    document.getElementById('login-container').style.display = 'none';
    document.getElementById('register-container').style.display = 'block';
}

function showLogin() {
    document.getElementById('register-container').style.display = 'none';
    document.getElementById('login-container').style.display = 'block';
}
