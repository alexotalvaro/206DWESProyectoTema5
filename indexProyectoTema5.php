<!DOCTYPE html>

<html>


    <head>
        <title>EJERCICIOS TEMA 5</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Tipografía -->
        <link href="https://fonts.googleapis.com/css2?family=Chela+One&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Indie+Flower&family=Lobster&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Architects+Daughter&display=swap" rel="stylesheet">




        <style>
            body {
                background-image: url("doc/fondo.jpg");
                background-size: 100%;
                height: 100%;


            }

            h1 {

                text-align: center;
                text-decoration: underline;
                color: black;
                font-family: 'Indie Flower', cursive;

            }

            table {

                border-collapse: collapse;
                border: none;
                font-family: 'Architects Daughter', cursive;
            }

            tr td{

                padding-left: 15px;
            }


            td {
                border: 1px solid black;
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


            td img {
                Width: 15px;
            }
        </style>

    </head>

    <body>
        <h1> TEMA 5: DESARROLLO DE APLICACIONES WEB UTILIZANDO CÓDIGO EMBEBIDO </h1>

        <table>
            <th> SCRIPTS SQL DESARROLLO</th>
            <tr>
                <td>CREAR BBDD</td>
                <td><a href="../206DWESProyectoTema5/codigoPHP/crearBD.php"><img src="doc/play.png"></a></td>
            </tr>
            <tr>
                <td>BORRAR BBDD</td>
                <td><a href="../206DWESProyectoTema5/codigoPHP/borrarBD.php"><img src="doc/play.png"></a></td>
            </tr>
            <tr>
                <td>INSERTAR DATOS EN BBDD</td>
                <td><a href="../206DWESProyectoTema5/codigoPHP/insertarBD.php"><img src="doc/play.png"></a></td>
            </tr>

        </table>
        <br>
        <table>
            <th> SCRIPTS SQL EXPLOTACION</th>
            <tr>
                <td>CREAR BBDD</td>
                <td><a href="../206DWESProyectoTema5/codigoPHP/crearBD1-1.php"><img src="doc/play.png"></a></td>
            </tr>
            <tr>
                <td>BORRAR BBDD</td>
                <td><a href="../206DWESProyectoTema5/codigoPHP/borrarBD1-1.php"><img src="doc/play.png"></a></td>
            </tr>
            <tr>
                <td>INSERTAR DATOS EN BBDD</td>
                <td><a href="../206DWESProyectoTema5/codigoPHP/insertarBD1-1.php"><img src="doc/play.png"></a></td>
            </tr>
        </table>
        <br>
        <table>
            <th>CONEXIONES:</th>
            <tr>
                <td>DESARROLLO</td>
                <td><a href="../206DWESProyectoTema5/mostrarcodigo/mostrarConexionED.php"><img src="doc/play.png"></a></td>
            </tr>
            <tr>
                <td>EXPLOTACIÓN</td>
                <td><a href="../206DWESProyectoTema5/mostrarcodigo/mostrarConexionEX.php"><img src="doc/play.png"></a></td>
            </tr>
            <tr>
                <td>CASA</td>
                <td><a href="../206DWESProyectoTema5/mostrarcodigo/mostrarConexionCA.php"><img src="doc/play.png"></a></td>
            </tr>

        </table>
        <br>
        <table>
            <th> LIBRERÍA DE VALIDACIÓN </th>
            <tr>
                <td>LIBRERIA DE VALIDACIÓN</td>
                <td><a href="../206DWESProyectoTema5/codigoPHP/mostrarLibreria.php"><img src="doc/play.png"></a></td>
            </tr>

        </table>

        <br>
        <table>
            <!-- AQUI VAN LAS COLUMNAS -->
            <tr>
                <th>ENUNCIADO</th>
                <th>PLAY PDO</th>
                <th>CÓDIGO PDO</th>
                <th>PLAY MYSQL</th>
                <th>CODIGO MYSQL</th>
            </tr>

            <!-- AQUÍ EL EJERCICIO 0 -->
            <tr>
                <td>00. Mostrar el contenido de las variables superglobales y phpinfo().</td>
                <td><a href="codigoPHP/ejercicio00.php"><img src="doc/play.png"></a></td>
                <td><a href="mostrarcodigo/muestraejercicio00.php"><img src="doc/php.png"></a></td>


            </tr>
            <!-- AQUÍ EL EJERCICIO 1 -->
            <tr>
                <td>01. Desarrollo de un control de acceso con identificación del usuario basado en la función header().</td>
                <td><a href="codigoPHP/ejercicio01.php"><img src="doc/play.png"></a></td>
                <td><a href="mostrarcodigo/muestraejercicio01.php"><img src="doc/php.png"></a></td>


            </tr>

            <!-- AQUÍ EL EJERCICIO 2 -->
            <tr>
                <td>02.Desarrollo de un control de acceso con identificación del usuario basado en la función header() y en el uso de una tabla “Usuario” de la base de datos. (PDO).</td>
                <td><a href="codigoPHP/ejercicio02.php"><img src="doc/play.png"></a></td>
                <td><a href="mostrarcodigo/muestraejercicio02.php"><img src="doc/php.png"></a></td>

            <footer>
                <a href="/../index.php" style="text-decoration:none">
                    <img src="../doc/home.png" alt="inicio" onmouseover="this.width = 50;this.height = 50;"
                         onmouseout="this.width = 39;this.height = 39;" width="39" title="inicio" />
                </a>
                <a href="/doc/CV.pdf" target="_blank" style="text-decoration: none">
                    <img src="/doc/cv-logo.png" alt="curriculum" onmouseover="this.width = 50;" onmouseout="this.width = 39;"
                         width="39" title="curriculum vitae" class="icono_cv" />
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