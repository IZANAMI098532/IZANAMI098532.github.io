<?php
$servidor = "fdb1032.awardspace.net";
$usuario = "4797934_gundaku";
$password = "Gundaku/11_sazabi";
$base_datos = "4797934_gundaku";


//$servidor = "localhost";
//$usuario = "root";
//$password = "";
//$base_datos = "gundakudb";


$conexion = mysqli_connect($servidor,$usuario,$password,$base_datos);

if(!$conexion){
    die("Error en la conexion: " .mysqli_connect_error());
}

//echo"conexion exitosa";
?>