<?php

    $idade = intval($_GET["idade"]);
    $membro = intval($_GET["membro"]);
    $convidado = intval($_GET["convidado"]); 

    if($idade > 18 && (membro == "Sim" || convidado == "Sim"){
        echo "Entrada permitida! :)";
    } 
    else {
        echo "Entrada negada!! :(";
    }

?>