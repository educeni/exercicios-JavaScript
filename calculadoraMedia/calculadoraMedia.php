<?php 
    $nome = $_GET['nome'];
    $mat = $_GET['mat'];
    $av1 = $_GET['av1'];
    $av2 = $_GET['av2'];
    
    $resultado = ($av1 + $av2) / 2;

    if(($resultado >= 7)&& ($resultado <= 10)){
        $msg = "Aprovado";
    }
    else if($resultado >= 5) {
        $msg = "Recuperacao";
    }
    else if (($resultado < 5) && ($resultado>=0)) {
        $msg = "Reprovado";
    }
    else {
        $msg = "Forneca notas validas";
    }
    echo $resultado . "\n";
    echo $msg;
?>