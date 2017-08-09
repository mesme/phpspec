<?php

namespace spec\CampusWonders\Models;

use CampusWonders\Models\NumberCollection;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class NumberCollectionSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(NumberCollection::class);
    }

    function it_should_push_an_item_to_the_collection($number)
    {
        $this->add($number);
        $this->count()->shouldReturn(1);
    }
}
