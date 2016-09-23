<?php

require_once dirname(__DIR__) . '/vendor/autoload.php';

use ikoene\Marvel\Client;
use ikoene\Marvel\DataWrapper\ComicDataWrapper;

$client = new Client('your_public_api_key', 'your_private_api_key');

/** @var ComicDataWrapper $response */
$response = $client->getComics();

var_dump($response);
