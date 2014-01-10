<?php
    require_once("menu.php");


    session_start();
    
    if(!isset($_SESSION["cadastros"])){
        echo "Não existe pessoas para Editar";
     }
     else{
        $id = $_REQUEST["id"];
        $nome = $_REQUEST["nome"];
        $sexo = $_REQUEST["sexo"];
        $estado = $_REQUEST["estado"];
        $Observacoes = $_REQUEST["Observacoes"];
        
        $aceito = false;
        if(isset($_REQUEST["aceito"])){
        $aceito = true;
        
        }
        
        
        $pessoa = array();
        $pessoa["nome"] = $nome;
        $pessoa["sexo"] = $sexo;
        $pessoa["aceito"] = $aceito;
        $pessoa["estado"] = $estado;
        $pessoa["Observacoes"] = $Observacoes;
        
       
        $cadastros =& $_SESSION["cadastros"];
        $cadastros[$id] = $pessoa;
        echo "<br/>";
        echo "Edição Efetuada com Sucesso";
     }    
        
  
?>
