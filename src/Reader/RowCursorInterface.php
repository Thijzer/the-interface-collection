<?php

namespace Intface\Component\Reader;

interface RowCursorInterface extends \Countable, \SeekableIterator
{
    public function getHeaders(): array;
    public function hasHeaders(): bool;
}