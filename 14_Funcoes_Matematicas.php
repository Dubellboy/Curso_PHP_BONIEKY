<?php 
//Funções Nativas


$numero = -8.4;

echo "Retorna número positivo: " .abs($numero)."<br/>"."<hr />"; 

echo "Retorna PI: " .pi()."<br/>"."<hr />";

$numero2 = 2.7;
echo "Arredonda número para baixo: " .floor($numero2)."<br/>"."<hr />";

echo "Arredonda número para cima: " .ceil($numero2)."<br/>"."<hr />"; 

echo "Arredonda número: " .round($numero2)."<br/>"."<hr />"; 

echo "Arredonda número com casas decimais: " .round($numero2, 2)."<br/>"."<hr />"; 

$aleatorio = rand(2,9);
echo "Escolhe numero aleatorio: " .$aleatorio."<br/>"."<hr />"; 

$lista = [ 2, 6, 1, 4];

echo min($lista). " Mostra menor número da lista." ."<br/>"."<hr />"; 

?>