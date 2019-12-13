<?php

namespace Intface\Component\Common\Menu;

interface MenuItem
{
    public function addChild(string $name, array $options): self;
    public function addChildItem(MenuItem $item): void;
    public function getName(): string;
    public function getOrderNumber():? int;
    public function hasItems(): bool;
    public function getItems(): array;
    public function getOptions(): array;
}