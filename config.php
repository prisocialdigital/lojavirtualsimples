<?php

$usuario = 'root';
$senha = ' ';
$database = '';
$hostname = '";
$cfg['lang'] = 'pt';

$mysqli = new mysqli($hostname, $usuario, $senha, $database);

if ($mysqli->connect_errno) { // resposta de erro
    echo "Erro: " . $mysqli->connect_error;
} else {
    echo "Conexão efetuada com sucesso";
}
/* Trecho de configurações do phpMyAdmin *//* Cole-o no seu config.inc.php */

?>
