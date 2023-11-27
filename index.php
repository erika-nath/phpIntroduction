<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Post method php - forms</title>
</head>
<body>
    <form method="post">
        <label for="campo 1">Campo 1</label>
        <input type="text" name="campo_1">
        <br>
        <label for="opcion">Selecciona:</label>
        <select name="opcion" id="opcion">
        <option value="1">opcion 1</option>
        <option value="2">opcion 2</option>
        <option value="3">opcion 3</option>
        </select>
        <br>
        <textarea name="mensaje" cols="30" rows="10">
            Escribe aqui
        </textarea>
        <br>
        <input type="radio" id="si" name="respuesta" value="si">
        <label for="si">Si</label>
        <input type="radio" id="no" name="respuesta" value="no">
        <label for="no">No</label>
        <input type="radio" id="otro" name="respuesta" value="otro">
        <label for="no">Otro</label>
        <br>
        <button>Enviar</button>

    <?php
    var_dump($_POST);
    ?>
    </form>
    
</body>
</html>