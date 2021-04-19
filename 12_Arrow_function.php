<?php

// $dizimo = function(valor {
//     return $valor * 0.1;
// });

//Arrow function com a função acima,
 //a flecha serve como indicação do retorno
 
$dizimo = fn($valor)=>$valor * 0.1;

echo $dizimo(120);
?>
