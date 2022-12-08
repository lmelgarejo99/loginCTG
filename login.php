<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Inicio de sesión</title>
    
        <!-- Font Icon -->
        <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">
    
        <!-- Main css -->
        <link rel="stylesheet" href="css/style.css">

        <!-- Log css -->
        <link rel="stylesheet" href="css/log.css">
        
        </head>
    <body>
    
        <a href="index.html"><img src="images/logo.png" width="300" /></a>
        <div class="main">
            <section class="sign-in">
                <div class="container">
                    <div class="signin-content">
                        <div class="signin-image">
                            <figure><img src="images/run.jpg" alt="sing up image"></figure>
                            <a href="signup.php" class="signup-image-link" style="font-size:160%;"><b>Nuevo iRUNNER</b></a>
                            <a href="index.html" class="signup-image-link" style="font-size:160%;"><b>Volver</b></a>
                        </div>
                        <div class="signin-form">
                            <h2 class="form-title">Iniciar Sesión</h2>
                            <form action="includes/login.inc.php" method="post">
                                <div class="form-group">
                                    <label for="your_name"><i class="zmdi zmdi-email"></i></label>
                                    <input type="text" name="mailuid" placeholder="Email">
                                </div>
                                <div class="form-group">
                                    <label for="your_pass"><i class="zmdi zmdi-lock"></i></label>
                                    <input type="password" name="pwd" placeholder="Contraseña">
                                </div>
                                <div class="form-group form-button">
                                    <input type="submit" name="login-submit" id="login-submit" class="form-submit" value="Iniciar Sesión"/>
                                </div>
                            </form>


                        </div>
                    </div>
                </div>
            </section>

            <!-- Inicio de sesión -->
            <div>
               
            </div>

        </div>
        <!-- JS -->
        <script src="jquery/jquery.min.js"></script>

    </body>
</html>