<?php

$chocolatesBrancos = 0;
$chocolatesEscuros = 0;
$promoE = 0;
$promoB = 0;
$contagem = 0;

$chocolatesBrancos = $_POST["valor1"];
$chocolatesEscuros = $_POST["valor2"];

$contagem = 3;

while ($contagem <= $chocolatesEscuros){
	$promoB = $promoB +1;
	$contagem = $contagem +1;
}

$contagem = 2;
 
while ($contagem <= $chocolatesBrancos){
	$promoE = $promoE +1;
	$contagem = $contagem +2;
}

$contagem = 5;

while ($contagem <=($chocolatesBrancos +$chocolatesEscuros)){
	$promoB = $promoB +1;
	$contagem = $contagem +5;
}
echo $contagem
;

?>



