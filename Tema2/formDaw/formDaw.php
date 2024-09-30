<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Formulario DAW</h1>
    <form action="validateDaw.php" method="post">
        <p>
            <input type="text" name="name" id="" placeholder="nombre...">
        </p>
        <p>
            <input type="text" name="surname" id="" placeholder="apellidos...">
        </p>
        <p>
            <input type="email" name="email" id="" placeholder="email...">
        </p>
        <p>
            <input type="text" name="age" id="" placeholder="edad...">
        </p>
        <p>
            Matriculación:
            <input type="checkbox" name="modules[]" id="DSW" value="DSW"><label for="DSW">Desarrollo del lado del servidor</label>
            <input type="checkbox" name="modules[]" id="DEW" value="DEW"><label for="DEW">Desarrollo del lado del cliente</label>
            <input type="checkbox" name="modules[]" id="DOR" value="DOR"><label for="DOR">Diseño de interface web</label>
            <input type="checkbox" name="modules[]" id="DPL" value="DPL"><label for="DPL">Despliege de aplicaciones web</label>
        </p>
        <p>
            <button type="submit">Enviar</button>
        </p>
    </form>
</body>
</html>