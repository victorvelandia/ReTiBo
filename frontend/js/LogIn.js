let users = {};
        
        function login() {
            const user = document.getElementById('username').value;
            const pass = document.getElementById('password').value;
            
            if (users[user] && users[user] === pass) {
                alert('Inicio de sesión exitoso');
                window.location.href = 'dashboard.html';
            } else {
                document.getElementById('error').innerText = 'Usuario o contraseña incorrectos';
            }
        }
        
        function register() {
            const newUser = document.getElementById('new-username').value;
            const newPass = document.getElementById('new-password').value;
            
            if (newUser && newPass) {
                users[newUser] = newPass;
                alert('Registro exitoso. Ahora puedes iniciar sesión.');
                showLogin();
            } else {
                document.getElementById('register-error').innerText = 'Por favor, completa todos los campos';
            }
        }
        
        function showRegister() {
            document.getElementById('login-container').style.display = 'none';
            document.getElementById('register-container').style.display = 'block';
        }
        
        function showLogin() {
            document.getElementById('register-container').style.display = 'none';
            document.getElementById('login-container').style.display = 'block';
        }