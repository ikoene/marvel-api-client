<?php

require_once dirname(__DIR__) . '/vendor/autoload.php';

use ikoene\Marvel\Client;
use ikoene\Marvel\Entity\ComicFilter;
use ikoene\Marvel\DataWrapper\ComicDataWrapper;
use ikoene\Marvel\Entity\Comic;

$client = new Client('your_public_api_key', 'your_private_api_key');

$comicFilter = new ComicFilter();
$comicFilter->setHasDigitalIssue(true);

/** @var ComicDataWrapper $response */
$response = $client->getComicsForCharacter(1009610, $comicFilter);

/** @var Comic $comic **/
foreach ($response->getData()->getResults() as $comic) {
    echo '<h2>' . $comic->getTitle() . '</h2>';
    echo '<i>' . $comic->getDigitalId() . '</i>';
    echo '<p>' . $comic->getDescription() . '</p>';
}
