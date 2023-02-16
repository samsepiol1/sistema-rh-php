<?php

require __DIR__.'/vendor/autoload.php';

use \App\Entity\Vaga;

//BUSCA

$busca = filter_input(INPUT_GET, 'busca', FILTER_SANITIZE_STRING);

//Filtro Status
$filtroStatus = filter_input(INPUT_GET,'status', FILTER_SANITIZE_STRING);
$filtroStatus  = in_array($FiltroStatus, ['s', 'n']) ? $filtroStatus: '';

//Condições SQL

$condicoes = [
    strlen($busca) ? 'titulo LIKE "%'.str_replace(' ','%', $busca).'%"' : null,
    strlen($filtroStatus) ? 'ativo = "'.$filtroStatus.'"':null

];

//Remove Posições Vazia

$condicoes = array_filter($condicoes);

//Clausula Where

$where =  implode(' AND ', $condicoes);


//Obtenha as Vagas
$vagas = Vaga::getVagas($where);

require __DIR__.'\includes\header.php';
include __DIR__.'/includes/listagem.php';
require __DIR__.'\includes\footer.php';


?>