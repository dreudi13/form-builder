<?php

namespace Dreudi\FormBuilder\FieldType;

class InputType
{
    const TAG_NAME = 'input';

    /**
     * @var array
     */
    private $options;

    /**
     * @param array $options
     */
    public function __construct(array $options)
    {
        $this->options = $options;
    }

    public function getTagName()
    {
        return $this::TAG_NAME;
    }

    public function validate()
    {
        
    }

    public function add(array $options = null): self
    {
        if ($this->validate($options)) {
            $this->options[] = $options;
        }

        return $this;
    }

    public function getParameters()
    {
    }
}
