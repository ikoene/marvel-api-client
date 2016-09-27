<?php

require_once dirname(__DIR__) . '/vendor/autoload.php';

use ikoene\Marvel\Client;
use ikoene\Marvel\Entity\Character;
use ikoene\Marvel\DataWrapper\CharacterDataWrapper;
use ikoene\Marvel\Entity\ComicSummary;

$client = new Client('your_public_api_key', 'your_private_api_key');

/** @var CharacterDataWrapper $response */
$response = $client->getCharacter(1009610);

/** @var Character $character */
foreach ($response->getData()->getResults() as $character) {
    echo '<h2>' . $character->getName() . '</h2>';
    echo '<p>' . $character->getDescription() . '</p>';

    echo '<p>This character appears in ' . $character->getComics()->getAvailable() . ' comics. 
         These are the first ' . $character->getComics()->getReturned() . ' comics:</p>';

    echo '<ul>';

        /** @var ComicSummary $comic */
        foreach ($character->getComics()->getItems() as $comic) {
                echo '<li>' . $comic->getName() . '</li>';
        }

    echo '</ul>';
}
