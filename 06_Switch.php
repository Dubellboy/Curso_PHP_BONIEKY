<?php 
$tipo = 'aula';

switch($tipo){
    case 'foto': 
        echo "É uma foto";
        break;
    case 'video':
         echo "É um vídeo";
         break;
    case 'texto': 
        echo "É um texto";
        break;
    default:
         echo "Não é nenhum desses";
}
?>