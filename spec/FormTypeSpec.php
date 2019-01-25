<?php

namespace spec\Dreudi\FormBuilder;

use Dreudi\FormBuilder\FormType;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class FormTypeSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(FormType::class);
    }

    function it_add_and_store_fields()
    {
        $this->add(['field1', 'field2']);
        $this->getItems()->shouldHaveCount(2);
    }
}
