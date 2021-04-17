<?php

$nome = "Eduardo";//String
$sobrenome = 'Chagas';
$idade = 36;//Inteiro
$dormindo = true;//Boolean
$vazia= null;//Sem valor
$semValor ='';//String vazia

$nomeCompleto = "$nome $sobrenome tem $idade anos.";//Para concatenar usa-se aspas dupla
echo $nomeCompleto;


$x = 3;
$y = 4;

echo $x.$y;//Concatena
echo $x+$y;//Soma

$x .= 2;//Colocar um ponto e igual ele concatena com o valor anterior da variável
echo $x;
?>