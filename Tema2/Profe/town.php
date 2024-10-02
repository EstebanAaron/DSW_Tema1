<?php 
require_once 'data_province/data_provincias.php'; 

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Pueblos de España</h1>
    <form action="town.php" method="get">

    <?php if (!empty($_GET['province'])) {
        $idProvince = $_GET['province'];
        require_once 'data_province/data_municipios.php'; 
        if (!empty($_GET['town'])) {
            $idTown = $_GET['town'];
            $nameTown = $MUNICIPIOS[$idProvince][$idTown];
            $nameProvince = $PROVINCIAS[$idProvince];
            printf("El municipio de %s con el código %s pertenece a %s", $nameTown, $idTown, $nameProvince);
        } else {
            printf("<h2>Provincia de %s", $PROVINCIAS[$idProvince]);
            $towns = $MUNICIPIOS[$idProvince];
        ?>        
            <p>
                Municipios:
                <select name="town" id="">
                    <option selected disabled>Elige un pueblo</option>
                <?php 
                    foreach($towns as $id => $name) {
                        printf('<option value="%s">%s</option>',$id,$name);
                    }
                ?>
                </select>
                <input type="hidden" name="province" value="<?=$idProvince?>">
            </p>
        <?php
        }
    } else {
    ?>    
        <p>
            Provincia:
            <select name="province" id="">
                <option selected disabled>Elige una provincia</option>
            <?php 
                foreach($PROVINCIAS as $id => $name) {
                    printf('<option value="%s">%s</option>',$id,$name);
                }
            ?>
            </select>
        </p>
    <?php
    }
    ?>
        <p>
            <button type="submit">Enviar</button>
        </p>
    </form>
</body>
</html>