<?php 

$ingredientes = [
    'Açúcar',
    'Farinha de trigo',
    'Ovo',
    'Leite',
    'Fermento em pó'
];
//Mostrar só os itens
echo '<h2>Ingredientes</h2>';
foreach($ingredientes as $ingrediente){
    echo "Item: ".$ingrediente."</br>";
};

echo '<h2>Itens e Ingredientes</h2>';
//Mostrar os itens e as chaves 
foreach($ingredientes as $chave => $valor){
    echo "</br>"."Item: ".$chave.": ".$valor;
};
?>