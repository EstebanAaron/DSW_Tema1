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
    <h1> Elige un pais</h1>
    <form action="cities.php" method="get">
        <select name="country" id="">
            <?php foreach($countries as $country => $value){
                printf("<option>%s</option>",$country);
            }?>
            
        </select>
        <p> 
        <input type="submit" value=" Buscar ciudades ">
        </p>
        <button type="submit"> boton del panico</button>
    </form>
    
</body>
</html>