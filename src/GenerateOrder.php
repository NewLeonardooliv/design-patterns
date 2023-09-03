<?php

namespace Src\Patterns;

class GenerateOrder
{
    public function __construct(
        private float $price,
        private int $items,
        private string $clientName,
    ) {
    }

    public function getPrice(): float
    {
        return $this->price;
    }

    public function getItems(): int
    {
        return $this->items;
    }

    public function getClientName(): string
    {
        return $this->clientName;
    }
}
