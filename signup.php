<!DOCTYPE html>

<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Nuevo iRUNNER</title>
        
        <!-- Font Icon -->
        <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">
        
        <!-- Main css -->
        <link rel="stylesheet" href="css/style.css">
        
        <!-- Log css -->
        <link rel="stylesheet" href="css/log.css">
    </head>
    
    <a href="index.html"><img src="images/logo.png" width="300" /></a>
    <div class="main">
        <!-- <div class="wrapper-main"> -->
            <section class="signup">
                <div class="container">
                    <div class="signup-content">
                        <div class="signup-form">
                            <h2 class="form-title">Registro</h2>
                            <h3 class="form-title">¡Hola! Estás a punto de convertirte en un iRUNNER</h3>
                            <form action="includes/signup.inc.php" method="POST" accept=charset="UTF-8" class="register-form" id="register-form">
                                <div class="form-group">
                                    <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                    <input type="text" name="name" id="name" placeholder="Tu Nombre"/>
                                </div>
                                <div class="form-group">
                                    <label for="gender"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                    <input type="text" name="gender" id="gender" placeholder="Género"/>
                                </div>
                                <div class="form-group">
                                    <label for="age"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                    <input type="text" name="age" id="age" placeholder="Edad"/>
                                </div>
                                <div class="form-group">
                                    <label for="email"><i class="zmdi zmdi-email"></i></label>
                                    <input type="email" name="email" id="email" placeholder="Email"/>
                                </div>
                                <div class="form-group">
                                    <label for="pass"><i class="zmdi zmdi-lock"></i></label>
                                    <input type="password" name="pass" id="pass" placeholder="Contraseña"/>
                                </div>
                                <div class="form-group">
                                    <label for="pass"><i class="zmdi zmdi-lock"></i></label>
                                    <input type="password" name="pass-repeat" id="pass-repeat" placeholder="Confirma tu contraseña"/>
                                </div>
                                <div class="form-group form-button">
                                    <input type="submit" name="signup-submit" id="signup-submit" class="form-submit" value="Enviar"/>
                                </div>
                            </form>  
                        </div>
                        <div class="signup-image">
                            <figure><img src="images/come.jpg" alt="sing up image"></figure>
                            <a href="login.php" class="signup-image-link" style="font-size:160%;"><b>Iniciar sesión</b></a>
                            <a href="index.html" class="signup-image-link" style="font-size:160%;"><b>Volver</b></a>
                        </div>
                    </div>
                </div>
            </section>
        <!-- </div> -->
        <script src="jquery/jquery.min.js"></script>
    </div>
</html>