<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        body{
            background-color: brown;
        }
    </style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $num = rand(1,6);
        $num2 = rand(1,6);
        //printf("<p>%d</p>",$num);
        printf ('<img src="dice%d.png" alt="">',$num);
        printf ('<img src="dice%d.png" alt="">',$num2);
        if ($num>$num2) {
           printf("Gano el primero con %d", $num);
        }
        else {
            printf ("Gano el segundo con %d", $num2);
        }
       
    ?>
    <form action="random.php" method="post">
        <button type="submit"> Reiniciar</button>
    </form>
</body>
</html>