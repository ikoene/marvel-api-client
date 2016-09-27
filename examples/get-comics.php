<?php

require_once dirname(__DIR__) . '/vendor/autoload.php';

use ikoene\Marvel\Client;
use ikoene\Marvel\DataWrapper\ComicDataWrapper;
use ikoene\Marvel\Entity\Comic;

$client = new Client('your_public_api_key', 'your_private_api_key');

/** @var ComicDataWrapper $response */
$response = $client->getComics();

echo '<h1>The Marvel archive has a total of ' . $response->getData()->getTotal() . ' comics. ';

echo 'This is a list of the first ' . $response->getData()->getCount() . ' comics:</h1>';

/** @var Comic $comic **/
foreach ($response->getData()->getResults() as $comic) {
    echo '<h2>' . $comic->getTitle() . '</h2>';
    echo '<p>' . $comic->getDescription() . '</p>';
}
