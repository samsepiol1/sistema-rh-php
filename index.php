<?php

require __DIR__.'/vendor/autoload.php';

use \App\Entity\Vaga;

$vagas = Vaga::getVagas();

require __DIR__.'\includes\header.php';
include __DIR__.'/includes/listagem.php';
require __DIR__.'\includes\footer.php';


?>