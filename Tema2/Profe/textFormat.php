<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="resutTextFormat.php" method="post" enctype="multipart/form-data">
        <p>
            Texto:
        </p>
        <p>
            <textarea name="text" id=""></textarea>
        </p>
        <p>
            <label for="">Color: 
                <input type="color" name="color" id="">
            </label>
        </p>
        <p>
            <label for="">Tamaño de letra:
                <input type="range" name="size" id="" min="8" max="64">
            </label>
        </p>
        <p>
            <label for="">Documento
                <input type="file" name="page" id="">
            </label>
        </p>
        <p>
            <input type="submit" value="Enviar">
        </p>
    </form>
</body>
</html>