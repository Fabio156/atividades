<?php
    require_once("menu.php");


    session_start();
    
    if(!isset($_SESSION["cadastros"])){
        echo "Não existe pessoas para Editar";
     }
     else{
        $id = $_REQUEST["id"];
        $nome = $_REQUEST["nome"];
        
       
        $cadastros =& $_SESSION["cadastros"];
        $cadastros[$id] = $nome;
        echo "<br/>";
        echo "Edição Efetuada com Sucesso";
     }    
        
  
?>
