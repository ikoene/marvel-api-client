<?php

require_once dirname(__DIR__) . '/vendor/autoload.php';

use ikoene\Marvel\Client;
use ikoene\Marvel\Entity\Character;

$client = new Client('your_public_api_key', 'your_private_api_key');

/** @var Character $response */
$response = $client->getCharacter(1009610);

var_dump($response);
