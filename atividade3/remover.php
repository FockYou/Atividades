<?php
    require_once("menu.php");

    session_start();
    
    $id = $_REQUEST["id"];

    if(!isset($_SESSION["cadastros"])){
        echo "Não existem cadastro para remover";
        
    }
    else{
        $cadastros =& $_SESSION["cadastros"];
        $cadastros[$id] = null;
    }
    
    echo"Remoção do produto efetuado com sucesso !!!";
    
    
    
    ?>
