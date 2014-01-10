<?php
    require_once("menu.php");

    session_start();
    $id = $_REQUEST["id"];
    $nome = $_REQUEST["nome"]; 
    $novoproduto = $_REQUEST["novoproduto"];
    $prazo = $_REQUEST["prazo"];
    $descricao = $_REQUEST["descricao"];
    $cor = $_REQUEST["cor"];
    
    if(!isset($_SESSION["cadastros"])){
        echo "Não existem cadastros para editar";
        
    }
    else{
        $cadastros =& $_SESSION["cadastros"];
        
        $produtos = array("novoproduto" => $novoproduto, "prazo" => $prazo,"descricao" => $descricao, "cor" => $cor);
        
        $cadastros[$id] = $produtos;
    }
    
    echo "Edição efetuado com sucesso!";
    
    
    
    ?>
