<?php

namespace Intface\Component\Common\Menu;

interface MenuBuilder
{
    public function createItem(string $name, array $options = []): MenuItem;

    public function getItem(string $name): MenuItem;
}