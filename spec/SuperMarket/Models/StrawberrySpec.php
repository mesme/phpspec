<?php

namespace spec\CampusWonders\SuperMarket\Models;

use CampusWonders\SuperMarket\Models\Strawberry;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class StrawberrySpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(Strawberry::class);
    }

    function it_should_return_its_name()
    {
        $this->getName()->shouldReturn("Strawberry");
    }

    function it_should_return_price_per_item()
    {
        $this->getPrice(1)->shouldBeEqualTo(50);
    }

    function it_should_return_price_for_two_items()
    {
        $this->getPrice(2)->shouldBeEqualTo(100);
    }

    function it_should_return_an_offer_price()
    {
        $this->getOfferDetails()->shouldReturn([
           'quantity' => 3,
            'price' => 130
        ]);
    }
}
