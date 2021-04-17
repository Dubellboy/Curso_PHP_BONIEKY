<?php 
$ingredientes = ['açucar', 'farinha de trigo', 'ovo', 'leite', 'fermento em pó'];

//echo $ingredientes[2];

$numerosDaMegaSena = [10,14,27,34,8];

echo "Número 1: ".$numerosDaMegaSena[0]."</br>";
echo "Número 1: ".$numerosDaMegaSena[1]."</br>";

//Array SPREAD

$bolo2 = [...$ingredientes,'corante'];//Traz os itens do array ingredientes mais o corante

echo $bolo2[5];

print_r($bolo2);//MOstrar todos os itens do array

?>
