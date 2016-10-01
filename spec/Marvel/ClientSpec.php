<?php

namespace spec\ikoene\Marvel;

use ikoene\Marvel\Client;
use PhpSpec\ObjectBehavior;

class ClientSpec extends ObjectBehavior
{
    function let() {
        $this->beConstructedWith(
            getenv('PUBLIC_API_KEY'),
            getenv('PRIVATE_API_KEY')
        );
    }

    function it_is_initializable()
    {
        $this->shouldHaveType(Client::class);
    }

    function it_can_get_characters()
    {
        $response = $this->getCharacters();

        $response->shouldHaveType('ikoene\Marvel\DataWrapper\CharacterDataWrapper');
    }

    function it_can_get_comics()
    {
        $response = $this->getComics();

        $response->shouldHaveType('ikoene\Marvel\DataWrapper\ComicDataWrapper');
    }

    function it_can_get_events()
    {
        $response = $this->getEvents();

        $response->shouldHaveType('ikoene\Marvel\DataWrapper\EventDataWrapper');
    }

    function it_can_get_creators()
    {
        $response = $this->getCreators();

        $response->shouldHaveType('ikoene\Marvel\DataWrapper\CreatorDataWrapper');
    }

    function it_can_get_stories()
    {
        $response = $this->getStories();

        $response->shouldHaveType('ikoene\Marvel\DataWrapper\StoryDataWrapper');
    }

    function it_can_get_series()
    {
        $response = $this->getSeries();

        $response->shouldHaveType('ikoene\Marvel\DataWrapper\SeriesDataWrapper');
    }
}
