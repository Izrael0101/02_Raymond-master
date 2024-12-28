<?php

//Produccion
$conn = mysqli_connect('srv1167.hstgr.io' , 'u737454357_Raymond', 'Bboykic0192*80', 'u737454357_Raymond');
$db_select = mysqli_select_db($conn, 'u737454357_Raymond');


//Pruebas
//$conn = mysqli_connect('127.0.0.1:3306' , 'root', '', 'haku');
//$db_select = mysqli_select_db($conn, 'haku');

if (!$db_select) {
    die("Database selection failed: " . mysqli_error());
}


?>