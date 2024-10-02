<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        p {
            color: <?=$_POST['color']?>;
            font-size: <?=$_POST['size']?>px;
        }
    </style>
</head>
<body>
    <h1>Texto recibido</h1>
    <p>
        <?php
            echo $_POST['text'];
        ?>
    </p>
    <p>
        <?php
            if (move_uploaded_file($_FILES['page']['tmp_name'], $_FILES['page']['name'])) {
                include($_FILES['page']['name']);
            }
        ?>
    </p>
</body>
</html>