<?php
print_r($_POST);

if (!isset($_POST['name'])) {
   echo "<p> No hay variable name</p>";
}
if (empty($_POST['name'])) {
    echo "<p>El nombre esta vacio</p>";
}
if (empty($_POST['surname'])) {
    echo "<p>El apellido esta vacio</p>";
}
if (strlen($_POST['surname']<3)) {
    echo "<p>El apellido esta vacio</p>";
}