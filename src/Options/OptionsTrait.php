<?php

namespace Intface\Component\Common\Options;

trait OptionsTrait
{
    private $options;

    public function setOptions(array $options = []): void
    {
        $this->options = array_merge($this->options, $options);
    }
}