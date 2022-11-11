<?php

include('Server/conDB.php');
$operacionDB=new conDB();
$CONQuery=("SElECT * FROM docentes");
$Docentes=$operacionDB->Consultar($CONQuery);
print_r($Docentes);
$Docentes[0];


?>