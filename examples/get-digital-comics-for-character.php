<?php

require_once dirname(__DIR__) . '/vendor/autoload.php';

use ikoene\Marvel\Client;
use ikoene\Marvel\Entity\ComicFilter;
use ikoene\Marvel\DataWrapper\EventDataWrapper;

$client = new Client('your_public_api_key', 'your_private_api_key');

$comicFilter = new ComicFilter();
$comicFilter->setHasDigitalIssue(true);

/** @var eventDataWrapper $response */
$response = $client->getComicsForCharacter(1009610, $comicFilter);

var_dump($response);
