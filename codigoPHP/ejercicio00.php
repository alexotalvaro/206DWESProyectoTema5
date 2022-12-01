<!DOCTYPE html>

<html>


    <head>
        <title>EJERCICIO 00 TEMA 5</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Tipografía -->
        <link href="https://fonts.googleapis.com/css2?family=Chela+One&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Indie+Flower&family=Lobster&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Architects+Daughter&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300&display=swap" rel="stylesheet">





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

            p{
                color: red;
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
            <a href="../indexProyectoTema4.php"><img src="../doc/atras.png" onmouseover="this.width = 50;" onmouseout="this.width = 39;"width="39" title="linkedin" class=".icono_cv" /></a>
            <ins> <h1>Ejercicio 0. Mostrar el contenido de las variables superglobales y phpinfo(). ProyectoTema5.</h1></ins>



            <?php
            /*
             * @author: ALEJANDRO OTÁLVARO MARULANDA
             * @since: 23 11 2022
             */
            require_once '../core/221024libreriaValidacionFormularios.php';

            echo '<h1> $_SESSION </h1>';
            echo '<table>';
            if (!empty($_SESSION)) {
                foreach ($_SESSION as $key => $value) {
                    echo '<tr>';
                    echo '<td>' . $key . '<td>' . $value;
                }
                echo '</tr>';

                echo '</table>';
            } else {
                echo '<p>Variable $_SESSION empty</p>';
            }


            echo '<h1> $_SERVER </h1>';
            echo '<table>';
            if (!empty($_SERVER)) {
                foreach ($_SERVER as $key => $value) {
                    echo '<tr>';
                    echo '<td>' . $key . '<td>' . $value;
                }
                echo '</tr>';

                echo '</table>';
            } else {
                echo '<p>Variable $_SERVER empty</p>';
            }

            echo '<h1> $_COOKIE </h1>';

            echo '<table>';

            if (!empty($_COOKIE)) {
                foreach ($_COOKIE as $key => $value) {
                    echo '<tr>';
                    echo '<td>' . $key . '<td>' . $value;
                }
                echo '</tr>';

                echo '</table>';
            } else {
                echo '<p>Variable $_COOKIE empty</p>';
            }

            echo '<h1> $_REQUEST </h1>';
            echo '<table>';
            if (!empty($_REQUEST)) {
                foreach ($_REQUEST as $key => $value) {
                    echo '<tr>';
                    echo '<td>' . $key . '<td>' . $value;
                }
                echo '</tr>';

                echo '</table>';
            } else {
                echo '<p>Variable $_REQUEST empty</p>';
            }

            echo '<h1> $_GET </h1>';
            echo '<table>';
            if (!empty($_GET)) {
                foreach ($_GET as $key => $value) {
                    echo '<tr>';
                    echo '<td>' . $key . '<td>' . $value;
                }
                echo '</tr>';

                echo '</table>';
            } else {
                echo '<p>Variable $_GET empty</p>';
            }

            echo '<h1> $_POST </h1>';
            echo '<table>';
            if (!empty($_POST)) {
                foreach ($_POST as $key => $value) {
                    echo '<tr>';
                    echo '<td>' . $key . '<td>' . $value;
                }
                echo '</tr>';

                echo '</table>';
            } else {
                echo '<p>Variable $_POST empty</p>';
            }
            echo '<h1> $_FILES </h1>';
            echo '<table>';
            if (!empty($_FILES)) {
                foreach ($_FILES as $key => $value) {
                    echo '<tr>';
                    echo '<td>' . $key . '<td>' . $value;
                }
                echo '</tr>';

                echo '</table>';
            } else {
                echo '<p>Variable $_FILES empty</p>';
            }
            
                  echo '<h1> $_ENV </h1>';
            echo '<table>';
            if (!empty($_ENV)) {
                foreach ($_ENV as $key => $value) {
                    echo '<tr>';
                    echo '<td>' . $key . '<td>' . $value;
                }
                echo '</tr>';

                echo '</table>';
            } else {
                echo '<p>Variable $_ENV empty</p>';
            }
            
            
            echo '<h1> PHP INFO </h1>';
            echo '<br>';

            phpinfo();
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
