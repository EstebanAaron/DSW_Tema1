<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="">
    <p>
            <label for="subject1">Modulo facorito php</label>
            <?php require_once('subjectData.php');?>
            <select name="subject1" id="subject1">
                <?php foreach($subjects as $key => $subject1) {?>
                    <option value="<?=$key?>"><?= $subject1?></option>
               <?php }?>
            </select>
        </p>
        <input type="submit" value="envia">
    </form>
</body>
</html>