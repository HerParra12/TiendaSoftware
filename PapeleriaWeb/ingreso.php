<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styleIngreso.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.13.1/themes/smoothness/jquery-ui.css">

    <link rel="icon" href="assets/iconIngreso.svg">
    <title>Bienvenido a la papelería</title>
</head>
<body>
    <div class="container-form sign-up">
        <div class="welcome-back">
            <div class="message">
                <h2>Bienvenido a la papelería de Rosita</h2>
                <p>Si ya tienes una cuenta por favor inicia sesion aqui</p>
                <button class="sign-up-btn" id="btn-form-sign-up">Iniciar Sesion</button>
            </div>
        </div>
        <form action="registro-usuario.php" method="POST" class="formulario-sign-up">
            <h2 class="create-account">Crear una cuenta</h2>
            <p class="cuenta-gratis">Ingresa tus datos para el registro</p>
            <input type="text" name= "nombre" placeholder="Nombres" pattern="[A-Za-z\s]+" required title="Por favor, ingresa solo letras y espacios">
            <input type="text" name= "apellidos" placeholder="Apellidos" pattern="[A-Za-z\s]+" required title="Por favor, ingresa solo letras y espacios">
            <input type="email" name= "email" placeholder="Email" required title="Por favor, ingresa un email valido">
            <label for="fechaNacimiento">Fecha de Nacimiento</label>
            <input type="date" id="fechaNacimiento" name="fechaNacimiento" required>
            <p class="cuenta-gratis">Selecciona tu rol</p>
            <select id="opciones" name="rol"  required>
                <option value="">-- Selecciona una opción --</option>
                <option value="Administrador">Administrador</option>
                <option value="Empleado">Empleado</option>
            </select>
            <input type="submit" value="Registrarse" id="btn-form-sign-up">
        </form>
    </div>
    <div class="container-form sign-in">
        <form action="validacion-usuario.php" method="POST" class="formulario">
            <h2 class="create-account">Iniciar Sesion</h2>
            <p class="cuenta-gratis">Ingresa tus datos para el ingreso</p>
            <input type="email" name= "email" placeholder="Email">
            <p class="cuenta-gratis">Selecciona tu rol</p>
            <select id="opciones" name="rol">
                <option value="">-- Selecciona una opción --</option>
                <option value="Administrador">Administrador</option>
                <option value="Empleado">Empleado</option>
            </select>
            <input type="submit" value="Iniciar Sesion" id="btn-form-sign-in">
        </form>
            <div class="welcome-back">
                <div class="message">
                    <h2>Bienvenido de nuevo</h2>
                    <p>Si aun no tienes una cuenta por favor registrese aqui</p>
                    <button class="sign-in-btn" id="btn-form-sign-in">Registrarse</button>
                </div>
            </div>
        </div>

    <script src="js/ingreso.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://code.jquery.com/ui/1.13.1/jquery-ui.min.js"></script>
</body>
</html>