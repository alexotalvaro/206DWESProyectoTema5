<?php
define("dsn", 'mysql:dbname=DB206DWESProyectoTema5;host=192.168.1.214');
define("usuario", 'user206DWESTema5');
define("contra", 'paso');
//pedimos al usuario, un user y un password
if (!isset($_SERVER['PHP_AUTH_USER'])) {
    header('WWW-Authenticate: Basic realm="Dominio De Alex"');
    header('HTTP/1.0 401 Unauthorized');
    echo 'Inicio de sesión cancelado';
    exit;
    
} else { //Si ha introducido un usuario y un password, lo comparamos con la base de datos.
    try {
        $miDB = new PDO(dsn, usuario, contra); //Conexion a la BD

        //Query para comparar mi bd con lo introducido
        $consulta = "SELECT T01_CodUsuario FROM T01_Usuario WHERE T01_CodUsuario='$_SERVER[PHP_AUTH_USER]' AND T01_Password='($_SERVER[PHP_AUTH_PW])'";

        //ejecutamos el query
        $resultadoConsulta = $miDB->query($consulta);

        //Si al ejecutar el query, no nos devuelve nada (0 rows), pediremos un nuevo inicio de Sesion.
        if ($resultadoConsulta->rowCount() == 0) {
            header('WWW-Authenticate: Basic realm="Contenido Restringido"');
            header('HTTP/1.0 401 Unauthorized');
            exit;
        }
    } catch (PDOException $excepcion) {
        echo $excepcion->getMessage();
    } finally {
        unset($miDB);
    }
}
    

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





        <style>

            body{
                background-color: mistyrose;
            }
            h1{

                font-family: 'Quicksand', sans-serif;

            }

            table {

                border-collapse: none;

                font-family: 'Arial'
            }



            main{

                margin-bottom: 19vh;
            }

            tr td {
                border: 1px solid black;
                padding-left: 15px;
            }

            footer {

                background-color: grey;
                position: fixed;
                width: 100%;
                height: 5vh;
                font-size: 1em;
                font-family: 'Chela One', cursive;
                text-align: center;
                padding-top: 20px;
                padding-bottom: 30px;
                bottom: 0;
                left: 0px;

            }

            strong {

                font-size: 16pt;
            }

            .icono_cv {
                position: absolute;
                top: 25px;
                left: 100px;
            }

            .icono_link {
                position: absolute;
                top: 25px;
                right: 200px;
            }
        </style>

    </head>
    <body>
        <main>
            <a href = "../indexProyectoTema5.php"><img src = "../doc/atras.png" onmouseover = "this.width = 50;" onmouseout = "this.width = 39;"width = "39" title = "linkedin" class = ".icono_cv" /></a>
            <ins> <h1> Ejercicio2. Desarrollo de un control de acceso con identificación del usuario basado en la función header() y en el uso de una tabla “Usuario” de la base de datos. (PDO).</h1></ins>

<?php
echo "<p>Te has loggeado como:  {$_SERVER['PHP_AUTH_USER']}.</p>";
echo "<p>Esta es tu password: {$_SERVER['PHP_AUTH_PW']}</p>";
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
