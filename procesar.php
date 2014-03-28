<?php
require 'conexion.php';

$nom=$_POST["Nom"];
$semestre=$_POST["Semestre"];
$cal1=$_POST["Cal1"];
$cal2=$_POST["Cal2"];
$cal3=$_POST["Cal3"];
$cal4=$_POST["Cal4"];

$sql="INSERT INTO registro(id_alumno, nom, semestre, cal1, cal2, cal3, cal4)VALUES(' ','$nombre','$semestre','$cal1','$cal2','$cal3','$cal4')";
$resultado=mysql_query($sql,$con);

if($resultado){
 echo "El registro se almaceno de manera correcta: ".$nombre." Mail: ".$mail." Telefono: ".$telefono;    
}else{
 die("Error de conexión".mysql_error());   
}

mysql_close($con);
?>