
<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        p{
            font-size :<?= $_POST['size'];?>px;
            color: <?php echo $_POST['choseeColor']; ?>;
        }
         
    </style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <p>
        <?php   if (isset($_POST['text'])) {echo $_POST['text'];}?>
        </p>
    
</body>
</html>