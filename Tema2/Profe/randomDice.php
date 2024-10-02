<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>El número obtenido es</h1>
    <p>
        <?php 
        $random = rand(1,6);
        printf('<img src="sides/dice .png" alt="%s">', $random, $random);
        ?>
    </p>
</body>
</html>