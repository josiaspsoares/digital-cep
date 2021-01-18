<?php

require_once "vendor/autoload.php";

use digital_cep\digital_cep\Search;

$busca = new Search();

$resultado = $busca->getAddressFromZipcode('01001000');

print_r($resultado);