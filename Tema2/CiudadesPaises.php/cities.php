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
    <?php $country = $_GET['country'];?>
    <h1>Listado de ciudades <?=$country?></h1>
    <form action="choice.php" method ="get">
        <ul>
        <?php
            $cities = $countries[$country]; 
            foreach ($cities as $city){
                printf('<li><input type="radio" name="city" id="%s" value="%s"><label for="%s">%s</label></li>', $city, $city, $city, $city) ;
            }
            
        ?>
        </ul>
        <input type="hidden" name="country" value="<?=$country?>">
        <input type="submit" value="Enviar">
    </form>
   
    <form action="Choosen_country.php" method="get">
        <p>
        <button type="submit"> Volver</button>
        </p>
    </form>

</body>
</html>