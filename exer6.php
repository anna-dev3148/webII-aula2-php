<?php 

    $velocidadeVeiculo = $_GET["velocidadeVeiculo"];
    
    $velocidadeLimite = $_GET["velocidadeLimite"];


    if ($velocidadeVeiculo > $velocidadeLimite) {
        echo "Gerar multa";
    }

    if ($velocidadeLimite >= $velocidadeVeiculo) {
        echo "Direção segura";
    }


?>