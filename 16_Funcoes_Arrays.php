<?php 

$lista = ['nome1', 'nome2', 'nome3', 'nome4'];

echo "TOTAL: ".count($lista)."<br />" ."<hr/>";

//Mostrar a posição do array
$pos =array_search('nome2',$lista);
echo $pos."<br />" ."<hr/>";

//Mostrar se o item tem no array
if(in_array('nome17', $lista)) {
    echo "EXISTE"."<br />" ."<hr/>";
}else {
    echo "NÂO EXISTE"."<br />" ."<hr/>";
}

//Alinhar Números
$numeros2 = [10,20,24,91,18];
sort($numeros2);// rsort coloca na ordem decrescente
print_r($numeros2);



$lista2 = ['Paula', 'Pedro', 'João', 'José'];
$aprovados = ['José', 'Maria', 'Pedro'];

$reprovados = array_diff($lista2, $aprovados);//Mostra só os que estão no array

print_r($reprovados)."<br />" ."<hr/>";

$numeros = [10,20,24,91,18];

$filtrados = array_filter($numeros, function($item){
    if($item < 30) {
        return true;
    }else {
        return false;
    }
});


print_r($filtrados);
?>