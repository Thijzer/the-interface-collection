<?php

namespace Intface\Component\Csv\Reader;

interface RowInterface
{
    public function getHeaders(): array;
    public function hasHeaders(): bool;
}