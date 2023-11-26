<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Get method exercise</title>
</head>
<body>
    
    <?php
    if (isset($_GET["nombre"])&& !empty($_GET["nombre"]) && isset ($_GET["edad"])&& !empty($_GET["edad"])){
        $nombre = $_GET["nombre"];
        $edad = $_GET["edad"];
    
        if($edad <=17){
            {
                echo 'Hola ' . $_GET["nombre"] . ' tu edad es ' . $_GET["edad"] . ', segun tu edad aun eres muy joven!';
            }       
        }
        elseif ($edad <= 64)
            {
                echo 'Hola ' . $_GET["nombre"] . ' tu edad es ' . $_GET["edad"] . ' ya eres una persona adulta!';
            } 
        else {
            echo "Hola $nombre, ya eres una persona mayor";
        }
    }
        
        else {echo "Por favor ingresa tu nombre y edad";}
    ?> 

        
</body>
</html>