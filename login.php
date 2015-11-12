<html>
    <head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8">
        <title>Ejemplo Tema 4: Login Tienda Web</title>
        <link href="tienda.css" rel="stylesheet" type="text/css">
    </head>

    <body>
        <?php
        if (isset($_COOKIE['ultimo_login'])) {
            $ultimo_login = $_COOKIE['ultimo_login'];
            $nombre= $_COOKIE['nombre'];
            echo $nombre." su primera visita fué el " . date("d/m/y \a \l\a\s H:i", $ultimo_login);
            
        } else {
            echo "Bienvenido. Esta es su primera visita.";
            setcookie("ultimo_login", time(), time() + 3600);
            setcookie("nombre", "Juan Simón", time() + 3600);
        }
        ?>
        
    </body>
</html>