<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Formulario de subida de archivo</h1>
    <form action="readFile.php" method="post" enctype="multipart/form-data">
        <p>Nombre
            <input type="text" name="name" id="">
        </p>
        <p>archivo
            <input type="hidden" name="MAX_FILE_SIZE" value="9965">
            <input type="file" name="document" id="">
        </p>
            <button type="submit">Enviar</button>
    </form>
        
</body>
</html>