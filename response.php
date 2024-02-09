<?php

require __DIR__ . '\vendor\autoload.php';

use dev\classes\Pergunta;


$pergunta = new Pergunta($_POST['input-pergunta'], $_POST['respostas'], $_POST['alternativaCorreta']);

var_dump($pergunta);