<?php

require_once dirname(__DIR__) . '/vendor/autoload.php';

use ikoene\Marvel\Client;
use ikoene\Marvel\Entity\CharacterFilter;
use ikoene\Marvel\DataWrapper\CharacterDataWrapper;

$client = new Client('your_public_api_key', 'your_private_api_key');

$characterFilter = new CharacterFilter();
$characterFilter->setName('Deadpool');

/** @var CharacterDataWrapper $response */
$response = $client->getCharacters($characterFilter);

var_dump($response);
