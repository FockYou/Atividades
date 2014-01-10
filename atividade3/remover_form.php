<html>
    <head>
        <title>Cadastro de livros</title>
    </head>
    <body>
        <?php
            require_once("menu.php");
        ?>    
        <form action="remover.php" method="post">
             <fieldset>
                <label>Digite o código do produto para remover</label>
            
            <br/>
            <input type="text" name="id" />
            <input type="submit" value="Remover" />
             </fieldset>
        </form>
    </body>
        
</html>


<?php
    session_start();
    if(isset($_SESSION["cadastros"])){
        $cadastros = $_SESSION["cadastros"];
        
        foreach($cadastros as $id => $produtos){
            if($produtos != null){ 
            echo"[$id] => " . $produtos["nome"] .  "<br/>";
            }
        }
        
        
    }
    
    else{
        echo "Não existem produtos cadastradas";
    }
?>

