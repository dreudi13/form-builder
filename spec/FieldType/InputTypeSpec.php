<?php

namespace spec\Dreudi\FormBuilder\FieldType;

use Dreudi\FormBuilder\FieldType\InputType;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class InputTypeSpec extends ObjectBehavior
{
    function let()
    {
        $this->beConstructedWith($options=[]);
    }

    function it_is_initializable()
    {
        $this->shouldHaveType(InputType::class);
    }

    function it_should_have_a_tag_name()
    {
        $this->getTagName()->shouldReturn('input');
    }

    function it_should_add_parameter()
    {
        $this
            ->add(['type' => ['button']])
            ->add([
                'id' => ['hello'],
                'class' => ['btn style']
            ]);

        $this->getParameters()->shouldHaveCount(3);
    }

    function it_should_have_good_parameters()
    {
        $options = [
            'type' => ['text']
        ];

        $this->beConstructedWith($options);
        $this->validate()->shouldReturn(true);
    }
}
