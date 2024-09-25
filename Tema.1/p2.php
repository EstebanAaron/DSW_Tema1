<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>  
        <?php
        $a='Hola';
        $$a= 'mundo';
        print "<p>";
        print "${$a}";
        print "</p>";
        print "<p>";
        $a='adios';
        print "${$a}";
        print "$Hola";
        print "</p>";
        ?>
    </h1>
</body>
</html>