<?php

namespace Intface\Component\Reader;

interface ReaderInterface
{
    public function find(array $constraints): self;
    public function filter(callable $callable): self;
    public function getIterator(): \Iterator;
    public function getValues(): array;
}