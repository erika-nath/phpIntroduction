<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conceptos basicos php</title>
</head>
<!-- Metdo GET usando enlaces -->
 <!--<body>
    <p>La fecha de hoy es: 
        <?php echo date ("F,j,Y"); ?>
    </p>
    <a href="resultado.php?color=azul">Azul</a>
    <a href="resultado.php?color=rojo">Rojo</a>
    <a href="resultado.php?color=amarillo">Amarillo</a>
    <?php
    if (isset($_GET["nombre"]))
    {
        echo 'Hola' . $_GET["nombre"] . '!';
    }
        else echo "Por favor especifica el nombre"
    ?> 
</body>-->

<!-- Metdo GET usando enlaces -->
<!-- <body>
<?php
    if(isset($_GET["color"]))
    {
        if($_GET["color"] == 'azul')
        {
            ?>
            <div style="background-color:blue">
                <h1 style="color:yellow">Hola</h1>
            </div>
            <?php
        }
        else if($_GET["color"]=='rojo')
        {
            ?>
            <div style="background-color:red">
            <h1 style="solor:white">Hola</h1>
        </div>
        <?php
        }
            else if($_GET["color"]== 'amarillo')
        {
            ?>
             <div style="background-color:yellow">
                ><h1 style="color:blue">Hola</h1>
            </div>
            <?php
        }
        }
?>
</body> -->

<!--Arreglos asociativos-->

<!-- <body>
    <?php
    $alumno = array (
        "nombre" =>"Ana",
        "edad"=> 25,
        "calificacion" => 100
    );
    var_dump($alumno);
        ?>
        <?php
        $datos[0] = "Azul";
        $datos[1] = 2020;
        $datos['precio']= 199.99;
        echo print_r($datos);
        ?>
</body>-->
<!--<body>
    <?php
    $vertice['posicion'] = array(10,24,36);
    var_dump($vertice);
    ?>
</body>-->
</html>