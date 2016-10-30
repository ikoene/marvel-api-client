<?php

require_once dirname(__DIR__) . '/vendor/autoload.php';

use ikoene\Marvel\Client;
use ikoene\Marvel\DataWrapper\ComicDataWrapper;
use ikoene\Marvel\Entity\Comic;
use ikoene\Marvel\Entity\ComicFilter;

$client = new Client('your_public_api_key', 'your_private_api_key');

$comicFilter = new ComicFilter();
$comicFilter->setIsbn('978-0-7851-9255-8');

/** @var ComicDataWrapper $response */
$response = $client->getComics($comicFilter);

/** @var Comic $comic */
$comic = $response->getData()->get(0);

echo '<h2>' . $comic->getTitle() . '</h2>';
echo '<p>' . $comic->getDescription() . '</p>';
