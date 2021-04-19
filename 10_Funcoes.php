<?php 

function subsequente(){
    for($q=0;$q<10;$q++){
        echo $q."<br/>";
    };
    echo"<hr />";
};

subsequente();

function somar($n1,$n2){
    $total = $n1 + $n2;
    return $total;
}

$somar = somar(2,2);
echo "O total é: " .$somar."<br/>"."<hr />";

//Função receber só número

function somarInt(int $n1, int $n2){
    $total = $n1 + $n2;
    return $total;
}

echo somarInt(2.8,2)."<br/>"."<hr />";

$lista = [4,9,2];

sort($lista);//Colocar lista por ordem

print_r($lista);


?>