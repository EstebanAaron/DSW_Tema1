<?php
    require_once('subjectData.php');
    require_once('companies.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Obteniendo los datos</h1>
    <p>
        <?php echo  $_POST['name'];?>
    </p>
    <p>
        <?php echo $_POST['age'];?>
    </p>
    <p>
        hobby: 
        <?php echo $_POST['hobby'];?>
    </p>
    <p>
        <?php echo $_POST['genero'];?>
    </p>
    <?php if (isset ($_POST['course'])) {?>
    <p>
        Matriculado en el ciclo
        <?php echo $_POST['course'];?>
    </p>
    <?php } ?>
    <P>
        Modulo favorito
        <?php echo $_POST['subject'];?>
        Modulo favorito php
        <?php echo $subjects[$_POST['subject1']]?>
    </P>
    <p>
        Compañia preferida:
       <?php // echo $companies[$_POST['company']]?>
       <?php  print_r($_POST['companiesId']);?>
       <ul>
        <?php
            $companiesId = $_POST['companiesId'];
            foreach ($companiesId as $i ) {
                printf('<li>%s</li>', $companies[$i]);
            }
        ?>
       </ul>
    </p>
</body>
</html>