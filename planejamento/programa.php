<?php

include("../lib/validaDatas.php");

$dataInicial = 0;
$dataFinal = 0;

$dataAtual = date("d-m-Y");

$dataInicial = $_POST["dataInicial"];
$dataFinal = $_POST["dataFinal"];

$vetor1 = explode("/", $dataInicial);
$vetor2 = explode("/", $dataFinal);
$data1Certa($vetor1[0],$vetor1[1],$vetor1[2]);
$data2Certa($vetor2[0],$vetor2[1],$vetor2[2]);

$dataInicial = str_replace("/", "-", $dataInicial);
$dataFinal = str_replace("/", "-", $dataFinal);

$dataAtual = strtotime($dataAtual);
$dataInicial = strtotime($dataInicial);
$dataFinal = strtotime($dataFinal);

if ($dataAtual >= $dataInicial and $dataAtual <= $dataFinal){
	echo"Periodo bom para compras";
}
else{ $dataFinal = str_replace("/", "-", $dataFinal);
	
$dataAtual = strtotime($dataAtual);
	echo"Periodo ruim para compras";

}

?>  


