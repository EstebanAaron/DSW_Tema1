<?php
$bill = [
    ['Ron Zacapa 23', 59.99, 2],
    ['Chivas Regal 18', 65, 1],
    ['Glenfiddich 12', 45.55, 3],
    ['Johnnie Walker Blue Label', 180, 1],
    ['Macallan 18', 250, 1],
    ['Jameson Irish Whiskey', 29.9, 4],
    ['Hennessy VS', 40, 2],
    ['Patrón Silver Tequila', 50.1, 2],
    ['Grey Goose Vodka', 55.00, 1],
    ['Baileys Irish Cream', 25.00, 3],
    ['Estrella de Galicia', .7, 24],
    ];
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <title>title</title>
    <style>
        table {
            width: 50%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 10px;
            text-align: center;
        }
        thead{
            background-color: #1329ee;
            color: white;
        }
    </style>
</head>
<body>
    <h1>Números en tabla</h1>
    <table id="tabla" style="margin: 0 auto;">
        <thead>
            <tr>
                <td>Articulo</td>
                <td>Precio</td>
                <td>Cantidad</td>
                <td>Total</td>
            </tr>
        </thead>
        <tbody>
        <?php
        $total=0;
                foreach ($bill as $key => $value) {
                    $totalLine=$value[1]*$value[2];
                    $total+=$totalLine;
                    printf ("<tr><td>%s</td><td>%.2f€</td><td>%02d</td><td>%'.10.2f€</td></tr>", $value[0],$value[1],$value[2],$totalLine);
                }
                
            ?>
            <tr>
            <td colspan=3>TOTAL</td>
            <td><?php printf("%'.10.2f€",$total)?></td>
        </tr>
        </tbody>
    </table>
    <p> 
    </p>
</body>
</html>