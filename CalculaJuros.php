<?php

    $C = intval($_GET["capital"]);
    $i = intval($_GET["taxa"])/100;
    $t = intval($_GET["tempo"]);
    $J = $C * $i * $t;
    
    echo "O juros sera de: ". $J . "%";
?>