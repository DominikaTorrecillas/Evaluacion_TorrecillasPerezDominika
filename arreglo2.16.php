<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<?php

$array = array ("Juan" => "5000","Pepe" => "4000","Pancho" => "5700","Carol" => "3000"
,"Booby" => "2000");

 $array += ["angeles" => "4000", "Sofia" => "6000"];

arsort($array);
foreach ($array as $empleados => $sueldomensual){
       echo "el sueldo mensual de $empleados:$sueldomensual";
       echo "<br>";
    }

 arsort($array);
foreach ($array as $empleados => $sueldomensual){
       echo "el sueldo mensual de $empleados:$sueldomensual";
       echo "<br>";
    }


?>

</body>
</html>