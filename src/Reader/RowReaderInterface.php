<?php

namespace Intface\Component\Reader;

interface RowReaderInterface extends ReaderInterface
{
    public function getRow(int $line): self;
    public function getRows(array $lines): self;
    public function getColumns(string...$columnNames): self;
}
