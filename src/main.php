<?php

//Resolver o problema com o Slim e o Monolog na hora de baixar as dependências.

include_once __DIR__ . "/../vendor/autoload.php";

use App\SystemServices\MonologFactory;
use App\Persistence\ConnectionFactory;

// :: = estático
MonologFactory::getInstance()->info("Testando Monolog");

$conn = ConnectionFactory::getConnectionInstance();

echo "Sus";

?>