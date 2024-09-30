<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="formresult.php" method="post">
        <p>
        <textarea name="text" id=""> Introduce tu texto aqui</textarea>
        </p><p>
        <input type="color" name="choseeColor" id="">
        </p>
        <p>
        <input type="range" name="size" id="" min="8" max="64" onInput="this.nextElementSibling.value = this.value">
        <output>36</output>
        </p>
        <input type="submit" value="Enviar">
    </form>
    
</body>
</html>