<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Formulario que envia datos a una pagina PHP</h1>
    <form action="proccessData.php" method="post">
        <p>
        <label for="name">Nombre: </label>
        <input type="text" id="name" name="name" placeholder="Escribe tu nombre">
        </p>
        <p>
            <label for="age">Edad: </label>
            <input type="number" name="age" id="age" min="10" value="20">
        </p>
      
        <input type="button" value="Boton del panico">
        <p>
            <label for="hobby"> Aficiones:</label>
            <select name="hobby" id="hobby">
                <option >Copy paste</option>
                <option >Chat gpt</option>
                <option >Monster</option>
            </select>
        </p>
        <p>
            <input type="radio" name="genero" id="masculino" value="Macho">
            <label for="masculino">Hombre</label>
            <input type="radio" name="genero" id="hembra" value="MUJER">
            <label for="hembra">Mujer</label>
        </p>
        <p>
            <input type="checkbox" name="course" id="course">
            <label for="course">Matriculado en el ciclo</label>
        </p>
        <p>
            <label for="subject">Modulo favorito</label>
            <select name="subject" id="subject">
                <option value="DSW1">DSW</option>
                <option value="DEW1">DEW</option>
                <option value="DOR1">DOR</option>
                <option value="DPL1">DPL</option>
            </select>
        </p>
        <p>
            <label for="subject1">Modulo facorito php</label>
            <?php require_once('subjectData.php');?>
            <select name="subject1" id="subject1">
                <?php foreach($subjects as $key => $subject1) {?>
                    <option value="<?=$key?>"><?= $subject1?></option>
               <?php }?>
            </select>
        </p>
        <p>
            <label for="company">Donde quieres hacer las practicas</label>
            <select name="companiesId[]" id="company" multiple>
                <?php
                    require_once('companies.php');
                    for ($i=0; $i <count($companies) ; $i++) { 
                        printf('<option value="%d">%s</option>',$i, $companies[$i]);
                    }
                ?>
            </select>
        </p>
        <input type="submit" value="envia">
    </form>
</body>
</html>