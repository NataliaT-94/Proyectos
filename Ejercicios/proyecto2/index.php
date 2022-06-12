<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="refresh" content="20">
        <style type="text/css">
            @font-face{
                font-family: ubuntuR;
                src: url(fuentes/UbuntuMono-Regular.ttf) format('trurtype');
            }
            
            @font-face{
                font-family: ubuntuB;
                src: url(fuentes/UbuntuMono-Bold.ttf) format('trurtype');
            }
            
            @font-face{
                font-family: ubuntuBI;
                src: url(fuentes/UbuntuMono-BoldItalic.ttf) format('trurtype');
            }
            
            @font-face{
                font-family: ubuntuI;
                src: url(fuentes/UbuntuMono-Italic.ttf) format('trurtype');
            }

            #logoTipo{
                font-size: 0px;
                float: left;
                position: absolute;
                margin: 0px;
                padding: 0px;
            }

            #tipo{
                position: absolute;
                margin: 0px;
                padding: 0px;
                font-size: 48px;
                color: rgba(255, 255, 255, 1);
                text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.5);
                font-size: ubuntuBI;
                transform: translate(150px 0px);
            }

            #logo{
                float: left;
                text-align: center;
                vertical-align: middle;
                width: 200px;
	            height: 100px;
                background: url('logo/Logo1.jpg');
                background-size: 100% 100%;
                background-repeat: no-repeat;
                position: absolute;
                margin: 0px;
                padding: 0px;
                animation: late 2s;
                transform: scale(1,1);
                animation-iteration-count: infinite;
            }

            @-webkit-keyframes late{
                0%{transform: scale(1,1);}
                50%{transform: scale(1.2,1.2);}
                100%{transform: scale(1,1);}
            }

            #login{
                padding: 10px;
                float: right;
                width: 50%;
                text-align: right;
                vertical-align: middle;
            }

            input{
                padding: 5px;
                font-family: ubuntuR;
                text-shadow: 2px 2px 3px rgba(0, 0, 0, 0.2);
                border: 0px solid white;
                border-radius: 5px;
                background: rgba(0, 0, 0, 0.1);
                box-shadow: inset 0px 0px 3px rgba(0, 0, 0, 0.2);
                transition: box-shadow 2s, background 2s;
                
            }

            input:hover{
                box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.5);
                background: rgba(0, 255, 0, 0.1); 
                border: 2px solid white;

            }

            body{
                font-family: ubuntuR;
                margin: auto;
                padding: 0px;
            }
            
            #contenedor{
                margin: auto;
                width: 80%;
                border: 1px solid black;
                box-shadow: 0px 20px 35px rgba(0, 0, 0, 0.5);
                border-radius: 15px;
            }
            header{
                background: rgba(255, 255, 255, 0);
                height: 150px;
            }
            #contenido{

            }

            #etiquetas{
                padding: 10px;
            }

            footer{
                background: rgba(212, 184, 131, 0.5);
                text-align: center;
                font-family: ubuntuR;
                font-size: 12px;

            }

            a{
                text-decoration: none;
                color: rgba(0, 0, 0, 1);
            }
            
            #registrate{
                color: rgba(0, 0, 0, 1);
                font-size: 10px;
                text-shadow: 0px 0px 5px rgba(0, 255, 0, 0);
                animation: registrate 2s;
                animation-iteration-count: infinite;
            }

            @-webkit-keyframes registrate{
                0%{text-shadow: 0px 0px 5px rgba(0, 255, 0, 0);}
                50%{text-shadow: 0px 0px 5px rgba(0, 255, 0, 1);}
                100%{text-shadow: 0px 0px 5px rgba(0, 255, 0, 0);}
            }

            #presentacion{
                margin: 0px;
                padding: 0px;
                text-align: left;
                width: 100%;
                height: 0px;
                background: rgba(0, 0, 0, 0.1);
                background: url('logo/fondoFiat.jpg') center center;
                background-size: 800px 400px;
                box-shadow: inset 0px 0px 25px rgba(0, 0, 0, 0.2);
                animation: esconde 15s;
            }

            @-webkit-keyframes esconde{
                0%{height: 200px; background-size: 800px 400px;}
                50%{height: 200px;}
                100%{height: 0px; background-size: 1600px 800px;}
            }
            
            #animacionTexto1{
                position: absolute;
                font-family: ubuntuB;
                color: rgba(255, 255, 255, 0);
                text-shadow: 3px 3px 5px rgba(0, 0, 0, 0);
                font-size: 32px;
                transform: translate(150px, 0px);
                animation: mueveTexto1 5s;
            }

            @-webkit-keyframes mueveTexto1{
                0%{color: rgba(255, 255, 255, 0); transform: translate(-150px, 0px); text-shadow: 3px 3px 5px rgba(0, 0, 0, 0);}
                25%{color: rgba(255, 255, 255, 1); transform: translate(-20px, 0px); text-shadow: 3px 3px 5px rgba(0, 0, 0, 0.3);}
                50%{color: rgba(255, 255, 255, 1); transform: translate(0px, 0px); text-shadow: 3px 3px 5px rgba(0, 0, 0, 0.3);}
                75%{color: rgba(255, 255, 255, 1); transform: translate(20px, 0px); text-shadow: 3px 3px 5px rgba(0, 0, 0, 0.3);}
                100%{color: rgba(255, 255, 255, 0); transform: translate(150px, 0px); text-shadow: 3px 3px 5px rgba(0, 0, 0, 0);}
            }

            #animacionTexto2{
                position: absolute;
                font-family: ubuntuB;
                color: rgba(255, 255, 255, 0);
                text-shadow: 3px 3px 5px rgba(0, 0, 0, 0);
                font-size: 32px;
                transform: translate(150px, 0px);
                animation: mueveTexto1 5s;
                animation-delay: 5s;
            }

            @-webkit-keyframes mueveTexto1{
                0%{color: rgba(255, 255, 255, 0); transform: translate(-150px, 0px); text-shadow: 3px 3px 5px rgba(0, 0, 0, 0);}
                25%{color: rgba(255, 255, 255, 1); transform: translate(-20px, 0px); text-shadow: 3px 3px 5px rgba(0, 0, 0, 0.3);}
                50%{color: rgba(255, 255, 255, 1); transform: translate(0px, 0px); text-shadow: 3px 3px 5px rgba(0, 0, 0, 0.3);}
                75%{color: rgba(255, 255, 255, 1); transform: translate(20px, 0px); text-shadow: 3px 3px 5px rgba(0, 0, 0, 0.3);}
                100%{color: rgba(255, 255, 255, 0); transform: translate(150px, 0px); text-shadow: 3px 3px 5px rgba(0, 0, 0, 0);}
            }

            table{
                width: 48%;
                float: left;
                margin: 1%;
                border: 1px solid rgba(255, 255, 255, 1);
                border-radius: 10px;
                background: rgba(212, 184, 131, 0.1);
                box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.5);
                transform: scale(1,1);
                transition: transform 1s;
            }

            table:hover{
                transform: scale(1.1, 1.1);
            }

            table thead{
                border: 1px solid rgba(0, 0, 0, 0.5);
                border-radius: 10px;
                background: rgba(212, 184, 131, 0.5);
                box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);

            }
            
            table th{
                text-align: left;
                width: 50%;
                padding-left: 5px;
                font-family: ubuntuB;
            }
            
            table td{
                border: 1px solid white;
                text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.2);
                padding-left: 5px;

            }
            
            #estrellas{
                float: right;
                font-size: 12px;
                font-family: ubuntuR;
            }

            #trampa{
                opacity: 0;
            }

        </style>
    </head>
    <body>
        <div id="contenedor">
            <header>
                <section id="logoTipo">
                    <div id="logo">
                        
                    </div>
                    <div id="tipo">
                        <h1>MisFavoritos</h1> 
                    </div>
                </section>
                <section id="login">
                    <form>
                        <input type="text" name="usuario" value="usuario" size="20">
                        <input type="text" name="contraseña" value="contraseña" size="20">
                        <input type="submit">
                    </form>
                    <div id="registrate"><a href="">Pulse AQUI para registrarte en la web</a></div>
                </section>
                

            </header>
            <section id="contenido">
                <section id="contenido">
                    <section id="presentacion">
                        <div id="animacionTexto1">
                            <h2>Cansad@ de perder tusfavoritos?</h2> 
                        </div>
                        <div id="animacionTexto2">
                            <h2>Te gustaria no volver a perderlos?</h2>
                        </div>
                    </section>
                </section>
                <section id="etiquetas">
                    
                    <?php
                    $enlace = mysqli_connect("localhost", "root", "", "gestionfiat");

                    if (!$enlace) {
                        echo "Error: No se pudo conectar a MySQL." . PHP_EOL;
                        echo "errno de depuración: " . mysqli_connect_errno() . PHP_EOL;
                        echo "error de depuración: " . mysqli_connect_error() . PHP_EOL;
                        exit;
                    }

                    //echo "Éxito: Se realizó una conexión apropiada a MySQL! La base de datos mi_bd es genial." . PHP_EOL;
                    //echo "Información del host: " . mysqli_get_host_info($enlace) . PHP_EOL;

                    $sql = "SELECT * FROM `turnos_registros`";
                    $resultado = mysqli_query($enlace, $sql);
                    if(!$resultado) {
                        echo mysqli_error($enlace);
                    }else{
                        //echo "Bien";
                    }

                    while ($row = mysqli_fetch_assoc($resultado)) {
                        echo '
                        <table border="1">
                            <thead>
                                <tr>
                                    <th>
                                        REGISTRO
                                    </th>
                                    <th>
                                        '.$row["REGISTRO"].'
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        TITULAR
                                    </td>
                                    <td>
                                        '.$row["TITULAR"].'
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        FECHA
                                    </td>
                                    <td>
                                        '.$row["FECHA"].'
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        HORA
                                    </td>
                                    <td>
                                        '.$row["HORA"].'
                                    </td>
                                </tr>
                            </tbody>
                            
                        </table>
                        ';
                    }

                    mysqli_close($enlace);
                    ?>
                    <section id="trampa">
                        -
                    </section>
                </section>

            </section>
            <footer>
                (c) 2022 - Natt Techeira
            </footer>
        </div>
    </body>

</html>