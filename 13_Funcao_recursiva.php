<?php
//Usado muito pouc, função que executa ela mesma

function dividir($numero){
    $metade = $numero / 2;
    echo $metade."<br />";

    if(round($metade) > 0){
        dividir($metade);
    }
}

dividir(100);


?>
