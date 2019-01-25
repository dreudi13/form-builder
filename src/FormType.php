<?php

namespace Dreudi\FormBuilder;

class FormType
{
    /** @var array */
    private $items;

    public function add(array $items)
    {
        $this->items = $items;
    }

    public function getItems()
    {
        return $this->items;
    }
}
