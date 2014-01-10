<?php
    require_once("menu.php");
    session_start();
    
    if(!isset($_SESSION["cadastros"])){
        $_SESSION["cadastros"] = array();
    }
    
    $nome = $_REQUEST["nome"];
    $sexo = $_REQUEST["sexo"];
    $estado = $_REQUEST["Estado"];
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
    
    array_push($_SESSION["cadastros"], $pessoa);
    echo "<br/>";
    echo "Cadastro efetuado com sucesso!";
