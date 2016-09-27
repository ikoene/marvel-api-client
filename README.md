[![Latest Stable Version](https://poser.pugx.org/ikoene/marvel-api-client/v/stable)](https://packagist.org/packages/ikoene/marvel-api-client)
[![Total Downloads](https://poser.pugx.org/ikoene/marvel-api-client/downloads)](https://packagist.org/packages/ikoene/marvel-api-client)
[![License](https://poser.pugx.org/ikoene/marvel-api-client/license)](https://github.com/ikoene/Marvel-API-client/blob/master/LICENSE)

# Marvel API client

The **Marvel Comics API** allows developers everywhere to access information about Marvel's vast library of comics—from what's coming up, to 70 years ago. This **Marvel API client** helps you explore the Marvel universe with great ease.

## Requirements

* PHP 7.0.0
* [Marvel API key](http://developer.marvel.com/account)
* Love for Marvel

## Installation

Add the API client as a dependency to your project using [Composer](https://getcomposer.org/).

```
composer require ikoene/marvel-api-client
```

## Usage

```
<?php

require_once dirname(__DIR__) . '/vendor/autoload.php';

use ikoene\Marvel\Client;

$client = new Client('your_public_api_key', 'your_private_api_key');

$response = $client->getCharacter(1009610);

var_dump($response);
```

### Endpoints

You can call every endpoint with an explicitly defined method. So if you, for example, want a list of comics containing a specific character, you can call `getComicsForCharacter()`.

```
$response = $client->getComicsForCharacter(1009610);
```

### Optional filters

It's also possible to add optional filters to the calls. Let's get all comics for 'Spider-Man' which title starts with 'Age of Ultron' and order the results by 'title'.

```
$comicFilter = new \ikoene\Marvel\Entity\ComicFilter();
$comicFilter->setTitleStartsWith('Age of Ultron');
$comicFilter->setOrderBy('title');

$response = $client->getComicsForCharacter(1009610, $comicFilter);
```

Pretty easy, right?

### Examples

You can find some more examples [here](https://github.com/ikoene/marvel-api-client/tree/master/examples).

## Additional info

* [Marvel API documentation](http://developer.marvel.com/docs)
* [Marvel API terms of use](http://developer.marvel.com/terms)
