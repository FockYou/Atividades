<html>
    <head>
        <title>Cadastro de pessoas</title>
    </head>
    <body>
        <?php
            require_once("menu.php");
        ?>    
        <form action="cadastrar.php" method="post">
            <label>Nome:</label><input type="text" name="nome" />
            <br/>
            <input type="radio" name="sexo" value="m" /><label>Masculino</label>
            <input type="radio" name="sexo" value="f" checked="checked" /><label>Femnino</label><br/>
            <br/>
            <input type="submit" value="Enviar" /><br/>
        </form>
    </body>
        
</html>
