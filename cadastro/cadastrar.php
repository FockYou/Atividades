<?php
    require_once("menu.php");

    session_start();
    
    $nome = $_REQUEST["nome"];
    $sexo = $_REQUEST["sexo"];
    

    if(!isset($_SESSION["cadastros"])){
        $_SESSION["cadastros"] = array();
        
    }
    
    $pessoas = array("nome" => $nome, "sexo" => $sexo);
    //$_SESSION["cadastros"][] = $nome;
    array_push($_SESSION["cadastros"],$pessoas);
    
    echo"Cadastro efetuado com sucesso !!!";
    
    
    
    ?>
