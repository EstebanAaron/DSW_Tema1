<?php
    require_once 'datos_ciudades.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>La ciudad elegida es <?=$_GET['city']?> del pais <?=$_GET['country']?></h1>
    <form action="Choosen_country.php">
        <button type="submit"> Volver a elegir</button>
    </form>
</body>
</html>