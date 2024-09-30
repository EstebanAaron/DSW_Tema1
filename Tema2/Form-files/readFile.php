<?php
    $filesDir ="files/";
    print_r($_POST);
    print_r($_FILES);
    print "<h1>POST</h1><pre>";
    var_dump($_POST);
    print "</pre><h1>FILES</h1><pre>";
    var_dump ($_FILES);
    print "</pre>";
    if ($_FILES['document']['error'] !=0) {
        echo "<h2>Ha habido un error</h2>";
    }
    if ($_FILES['document']['type']!='application/pdf') {
        echo "<h2>Error : esto no es un pdf</h2>";
    }else {
        if (move_uploaded_file($_FILES['document']['tmp_name'],$filesDir . $_FILES['document']['name'])) {
        echo "<p>Se ha copiado correctamente</p>";
        echo '<a href="midocumento.pdf"> Ver documento </a>';
        printf('<a href="%s"> Ver docmuento1</a>',$filesDir . $_FILES['document']['name']);
    }else{
        echo "<p>Error al copiar</p>";
    }
    }

    
?>