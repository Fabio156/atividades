<html>
    <head>
        <title>Cadastro de Pessoas</title>
    </head>
     <body background="londres_iStock_000005872948Medium.jpg">
        <?php
            require_once("menu.php");
        ?>
        <form action="editar.php" method="post">
            <label> Digite o codigo da pessoa para Editar:</label>
            <br/>
            <input type="text" name="id" />
            <br/>
            <label> Digite o novo nome da pessoa:</label>
            <br/>
            <?php require_once ("campos_pessoa.php"); ?>
            <input type="submit" value="editar" />
            <br/>
            
        </form>        
    </body>
</html>

<?php
    require_once("menu.php");

    session_start();
    
    if(isset($_SESSION["cadastros"])){
        
        $cadastros = $_SESSION["cadastros"];
        
        foreach($cadastros as $id => $pessoa){
            if($pessoa != null){
                 echo "[$id] => " . $pessoa["nome"] . "<br/> ";
            }
        }
    }
    else{
        echo "Remoção efetuada com sucesso";
    }

?>
