<?php

namespace Intface\Component\Common\Processor;

interface ProcessorAwareInterface
{
    public function setProcessor(ProcessorInterface $processor): void;
}