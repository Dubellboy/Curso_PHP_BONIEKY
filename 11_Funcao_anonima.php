<?php

//Função anônima -> Não tem nome, 
//armazenar dentro de uma variável ou como parâmetro de outra função

$dizimo = function (int $valor) {
    return $valor * 0.1;
};

echo $dizimo(90);

//Passando em outra função

algumaFuncao(10, $funcao) {

};

?>