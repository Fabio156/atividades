<style>
    .masculino{
        color: green;
    }
    .femenino{
        color: yellow;
    }
    
</style>

<html>
    <head>
        <title>Cadastro de Pessoas</title>
    </head>
     <body background="londres_iStock_000005872948Medium.jpg">
     </body>   

<?php
    require_once("menu.php");

    session_start();
    
    if(isset($_SESSION["cadastros"])){
        
        $cadastros = $_SESSION["cadastros"];
        
        echo "<dl>";
        foreach($cadastros as $pessoa){
            $sexo = $pessoa["sexo"];
            $aceito = $pessoa["aceito"];
            $Observacoes = $pessoa["Observacoes"];
            
            
            
            if($pessoa != null){
               echo "<dt class='$sexo'>" . $pessoa["nome"] . "</dt>";
               echo "<dd>Sexo:" . $sexo . "</dd>";
               echo "<dd>Estado: " . $pessoa["estado"] . "</dd>";
               echo "<dd>Aceita o contrato?";
               echo "<dd>Observacoes: " . $pessoa["observacoes"] . "</dd>";
               
               
               
               if($aceito){
                    echo "</br>";
                    echo "Usúario Aceita Contrato!";
                }
                else{
                    echo "</br>";
                    echo "O Usúario Não Aceita o Contrato!";
                }
                echo "</dd>";
            }    
        }
        echo "</dl>";
    }
    else{
        echo "<br/>";
        echo "Não existe pessoas cadastradas!";
    }

?>
