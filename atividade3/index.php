<?php
    require_once("menu.php");

    session_start();

    if(isset($_SESSION["cadastrar"])){
        $cadastros = $_SESSION["cadastrar"];
        
        echo"<dl>";
        
        foreach($cadastros as $produtos){
            if($produtos != null){
                
                $nome = $produtos["nome"];
                $prazo = $produtos["prazo"];
                $descricao = $produtos["descricao"];
                $novoproduto = $produtos["novoproduto"];
                $cor = $produtos["cor"];
                
                echo "<dt class='$cor'>" . $produtos["nome"] . "<dt>";
                echo "<dd>nome: " . $nome . "</dd>";
                echo "<dd>prazo: " . $prazo . "</dd>";
                echo "<dd>descricao: " . $descricao . "</dd>";
                echo "<dd>novoproduto: ";
                 
                            
                if ($novoproduto){
                  echo "sim";
                }
                else{
                  echo "nao";
                }
                echo "</dd>";
                
            }
        }
                echo"<dl>";
    }
    else{
        echo "Não existem produtos cadastradas";
    }
?>
