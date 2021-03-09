<?php

    session_start();

    if(isset($_SESSION['usuario'])){
        header("location: principal.php");
    }


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login and Register</title>

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed&family=Roboto:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/estilos.css">
</head>
<body>
    
    <main>
        <div class="contenedor__todo">
            <div class="caja__trasera">
                <div class="caja__trasera-login">
                    <h3>¿Do you have an account?</h3>
                    <p>Log in with your account.</p>
                    <button id="btn__iniciar-sesion">Log in</button>
                </div>
                <div class="caja__trasera-register">
                    <h3>¿You don´t have an account?</h3>
                    <p>Register to join Us.</p>
                    <button id="btn__registrarse">Register</button>
                </div>
            </div>
             <!-- formulario para nuestro login y register--> 
            <div class="contenedor__login-register">
                <!-- Login-->
                    <form action="php/login_usuario_be.php" method="POST" class="formulario__login">
                        <h2>Log in</h2>
                        <input type="text" placeholder="E-mail" name = "correo">
                        <input type="password" placeholder="Password" name = "contrasena">
                        <button>Login</button>
                    </form>
                <!--Registro-->
                    <form action="php/registro_usuario_be.php" method="POST" class="formulario__register">
                        <h2>Sign Up</h2>
                        <input type="text" placeholder="Name" name="nombre_completo">
                        <input type="text" placeholder="E-mail" name="correo">
                        <input type="text" placeholder="User" name="usuario">
                        <input type="password"  placeholder="Password" name="contrasena">
                        <button>Sign Up</button>
                    </form>


            </div>
            

        </div>

    </main>
    <script src="assets/js/script.js"></script>
</body>
</html>