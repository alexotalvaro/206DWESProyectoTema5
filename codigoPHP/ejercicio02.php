<?php
require_once '../config/confDBPDO.php';
$entradaOK = true;
//pedimos al usuario, un user y un password
if (!isset($_SERVER['PHP_AUTH_USER'])) {
    header('WWW-Authenticate: Basic realm="Dominio De Alex"');
    header('HTTP/1.0 401 Unauthorized');
    echo 'Inicio de sesión cancelado';
    die();
} else {

//Si ha introducido un usuario y un password, lo comparamos con la base de datos.
    $consultaUsuario = "SELECT * FROM T01_Usuario WHERE T01_CodUsuario='$_SERVER[PHP_AUTH_USER]'";
    
    $user = $_SERVER['PHP_AUTH_USER'];
    $pass = $_SERVER['PHP_AUTH_PW'];
  
    try {
        $miDB = new PDO(dsn, usuario, contra); //Conexion a la BD
        //Query para comparar mi bd con lo introducido

        
        $consultaUsuarioExe = $miDB->prepare($consultaUsuario);
    
        
        $consultaUsuarioExe->execute();
   
        
        $oUsuario = $consultaUsuarioExe->fetchObject();
   

        if ($oUsuario && $oUsuario->T01_Password== hash('sha256',($_SERVER['PHP_AUTH_USER'].$_SERVER['PHP_AUTH_PW']))) {
            session_start();
            ?>


            <!DOCTYPE html>

            <html>


                <head>
                    <title>EJERCICIO 02 TEMA 5</title>
                    <meta charset = "UTF-8">
                    <meta name = "viewport" content = "width=device-width, initial-scale=1.0">
                    <!--Tipografía-->
                    <link href = "https://fonts.googleapis.com/css2?family=Chela+One&display=swap" rel = "stylesheet">
                    <link href = "https://fonts.googleapis.com/css2?family=Indie+Flower&family=Lobster&display=swap" rel = "stylesheet">
                    <link href = "https://fonts.googleapis.com/css2?family=Architects+Daughter&display=swap" rel = "stylesheet">
                    <link href = "https://fonts.googleapis.com/css2?family=Quicksand:wght@300&display=swap" rel = "stylesheet">
                    <link href= "../webroot/css/estilos.css" rel="stylesheet" type="text/css">

                   
                </head>
                <body>
                    <main>
                        <a href = "../indexProyectoTema5.php"><img src = "../doc/atras.png" onmouseover = "this.width = 50;" onmouseout = "this.width = 39;"width = "39" title = "linkedin" class = ".icono_cv" /></a>
                        <ins> <h1> Ejercicio2. Desarrollo de un control de acceso con identificación del usuario basado en la función header() y en el uso de una tabla “Usuario” de la base de datos. (PDO).</h1></ins>

                        <?php
                        
                        
                        echo "Has iniciado sesión con el usuario: " . $user;
                        echo'<br>';
                        echo "Has iniciado sesión con el Password: " . $pass;
                        ?>
                    </main>
                    <footer>
                        <a href="/../index.php" style="text-decoration:none">
                            <img src="/doc/home.png" alt="inicio" onmouseover="this.width = 50;this.height = 50;"
                                 onmouseout="this.width = 39;this.height = 39;" width="39" title="inicio" />
                        </a>


                        © Alejandro Otálvaro Marulanda

                        <a href="http://www.linkedin.com/in/alejandro-otálvaro-marulanda/" target="_blank"
                           style="text-decoration: none">
                            <img src="/doc/link2.png" alt="linkedin" onmouseover="this.width = 50;" onmouseout="this.width = 39;"
                                 width="39" title="linkedin" class="icono_link" />
                        </a>
                    </footer>

                </body>

            </html>

            <?php
        } else {
            header('WWW-Authenticate: Basic realm="Dominio De Alex"');
            header('HTTP/1.0 401 Unauthorized');
        }
    } catch (PDOException $excepcion) {
        echo $excepcion->getMessage();
    } finally {
        unset($miDB);
    }
}
?>
