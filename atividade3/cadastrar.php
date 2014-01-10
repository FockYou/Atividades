<?php
    require_once("menu.php");
    session_start();
    
    $nome = $_REQUEST["nome"];
    $novoproduto = $_REQUEST["novoproduto"];
    $cor = $_REQUEST["cor"];
    $prazo = $_REQUEST["prazo"];
    $descricao = $_REQUEST["descricao"];
    
    $aceito = false;
    if(!isset($_SESSION["cadastrar"])){
        $_SESSION["cadastrar"] = array();
    }
    $produtos = array("nome" => $nome
                      , "cor" => $cor
                      , "prazo" => $prazo
                      , "descricao" => $descricao
                      , "novoproduto" => $novoproduto);
    array_push($_SESSION["cadastrar"],$produtos);
    
    echo "Seu produto foi cadastrado com sucesso!"

?>
