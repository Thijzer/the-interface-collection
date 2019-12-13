<?php

namespace Intface\Component\Common\Registry;

use Intface\Component\Common\Collection\CollectionInterface;

interface Registry
{
    public function findByName($names): CollectionInterface;
}