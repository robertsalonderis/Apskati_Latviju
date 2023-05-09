<?php
$servera_vards = "localhost:3307"; 
$Lietotajvards = "root";
$Parole = "";
$db_vards = "a_Latviju";
 
$savienojums = mysqli_connect($servera_vards, $Lietotajvards, $Parole, $db_vards);
 
 
if(!$savienojums){
    die("Pieslēgties neizdevās: ".mysqli_connect_error());
}else{
   // echo "Savienojums ar DB veiksmīgi izveidots!";
}
?>