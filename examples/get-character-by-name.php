<?php

require_once dirname(__DIR__) . '/vendor/autoload.php';

use ikoene\Marvel\Client;
use ikoene\Marvel\Entity\CharacterFilter;
use ikoene\Marvel\DataWrapper\CharacterDataWrapper;
use ikoene\Marvel\Entity\Character;
use ikoene\Marvel\Entity\ComicSummary;

$client = new Client('your_public_api_key', 'your_private_api_key');

$characterFilter = new CharacterFilter();
$characterFilter->setName('Deadpool');

/** @var CharacterDataWrapper $response */
$response = $client->getCharacters($characterFilter);

/** @var Character $character */
$character = $response->getData()->get(0);

echo '<h1>' . $character->getName() . ' appears in ' . $character->getComics()->getAvailable() . ' comics. ';

echo 'This is a list of the first ' . $character->getComics()->getReturned() . ' comics:</h1>';

/** @var ComicSummary $comic **/
foreach ($character->getComics()->getItems() as $comic) {
    echo '<h2>' . $comic->getName() . '</h2>';
}
