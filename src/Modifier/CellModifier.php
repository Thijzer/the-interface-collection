<?php

namespace Intface\Component\Common\Modifier;

interface CellModifier extends Modifier
{
    public function modify(string $value);
}