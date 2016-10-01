<?php

namespace spec\ikoene\Marvel;

use ikoene\Marvel\Client;
use PhpSpec\ObjectBehavior;

class ClientSpec extends ObjectBehavior
{
    function let() {
        $this->beConstructedWith(
            'your_public_api_key',
            'your_private_api_key'
        );
    }

    function it_is_initializable()
    {
        $this->shouldHaveType(Client::class);
    }
}
