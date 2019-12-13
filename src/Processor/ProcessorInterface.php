<?php

namespace Intface\Component\Common\Processor;

interface ProcessorInterface
{
    public function process(array $row): array;
}