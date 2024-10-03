<?php
    require_once 'questions.php';
    
    if (isset($_GET['score'])) {
        $score=$_GET['score'];
    }
    else{
        $score=0;
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        .acierto{
            color:green;
        }
        .fallo{
            color:red;
        }
    </style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>
   
        <?php
            if (isset($_GET['ask'])) {
                printf("<p>La pregunta anterior: %s</p>",$questions[$_GET['ask']]['statement']);
                printf("Tu respuesta fue: %s",$_GET['request']);
                if ($questions[$_GET['ask']]['answers'][0]==$_GET['request']) {
                    print( '<p class="acierto">Acierto</p>');
                    ++$score;
                }
                else{
                    print( '<p class="fallo">Incorrecto</p>');
                }
            }
        ?>
    </p>
    <p>
        Puntos :<?php print($score)?>
    </p>
    <p>
        Pregunta:
    </p>
    <p>
        <?php 
            $random= rand(0,count($questions)-1);
            print($questions[$random]['statement']);
        ?>
    </p>
    <p>
        <form action="ejercicio3.php" method="get">
            
            <input type="hidden" name="score" value=<?php print($score)?>>
    
            <input type="hidden" name="ask" value=<?php print($random)?>>
    
             Respuestas :
             <?php  
                $anserShuffle =$questions[$random]['answers'];
                shuffle($anserShuffle);

                
                 print("<p></p>");
                 foreach ($anserShuffle as $key) {
                    printf('<input type="radio" name="request" value="%s">%s',$key,$key);
                }
             ?>
             
             <button type="submit">Enviar respuesta</button>
        </form>
    </p>
    
</body>
</html>