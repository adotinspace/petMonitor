<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="utf-8"/>
        <link rel="stylesheet" href="style.css"/>
        <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
        <link rel="icon" href="favicon.ico" type="image/x-icon">
        <title>PETMONITOR</title>
    </head>
    <body>
        <?php
        require_once('conexao.php');
        ?>
        <div id="cabecalho">
            <h1>PETMONITOR</h1>
            <h3>Seu amiguinho sempre seguro!</h3>
        </div>
        <div id="cabecalho-pata">
        <img src="media/paw.png"/>
        </div>
        <div id="menu">
            <form method="post" action="buscar.php">
                Código do seu pet:<input type="text" name="codigo-pet" id="cod-pet" placeholder="(Geralmente vem com o manual da coleira...)">
                <input type="image" name="buscar" id="img-busca" src="media/map-botao.png">
            </form>
        </div>
    </body>
</html>