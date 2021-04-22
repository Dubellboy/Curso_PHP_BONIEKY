<?php
$nome = '    Eduardo     ';
echo trim($nome)." Tira os espações em branco"."<br/>"."<hr />";

$nomeQtd = 'Eduardo';
echo "Conta os caracteres: ".strlen($nomeQtd). "<br/>"."<hr />";

$nomeCompleto = 'Eduardo Chagas';
echo "Transforma para letra minúsculas: ".strtolower($nomeCompleto). "<br/>"."<hr />";

echo "Transforma para letra maiúsculas: ".strtoupper($nomeCompleto). "<br/>"."<hr />";

$nome3 = 'Eduardo Chagas';
$nomeAlterado = str_replace('Chagas', 'Santos', $nome3);
echo "Altera uma palavra: ".($nomeAlterado). "<br/>"."<hr />";


$nome4 = 'Eduardo Chagas';
$nomeCont= substr($nome3, 0 , 5);
echo "Pegas as palavras de acordo com seu ídice: ".($nomeCont). "<br/>"."<hr />";

$nome5 = 'Eduardo Chagas';
$nomePos= strpos($nome5, 'a');
echo "Localiza onde aparece primeiro a letra: ".($nomePos). "<br/>"."<hr />";

//Usando o strpos

$meuNome = 'Eduardo Chagas';

$posicao = strpos($meuNome, 'W');
    if($posicao > -1) {
        echo "ACHOU". "<br/>"."<hr />";
    }else {
        echo "NÃO ACHOU". "<br/>"."<hr />";
    }

//Transformar primeira letra em maiúscula

$nome6 = "eduardo";
echo ucfirst($nome6). "<br/>"."<hr />";

//Transformar em array

$nome7 = "Eduardo Chagas";

$nomeArray = explode(' ', $nome7);

print_r($nomeArray);



//Formatar números

$numero = 12913.12;

echo number_format($numero, 1, ',', '.');


?>