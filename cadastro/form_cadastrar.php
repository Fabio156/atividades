<html>
    <head>
        <title>Cadastro de Pessoas</title>
    </head>
     <body background="londres_iStock_000005872948Medium.jpg">
        <?php
            require_once("menu.php");
        ?>
        <form action="cadastrar.php" method="post">
            <?php require_once ("campos_pessoa.php"); ?>
            <input type="submit" value="Enviar" />
        </form>        
    </body>
</html>
