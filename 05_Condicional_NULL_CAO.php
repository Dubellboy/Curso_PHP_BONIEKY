<?php 
$nome = "Eduardo";

$nomeCompleto = $nome;
//$nomeCompleto .= isset($sobrenome) ?$sobrenome : '';
$nomeCompleto .=$sobrenome ?? '';//Se sobrenome existe use ela se não deixa em brnaco
echo $nomeCompleto;
?>