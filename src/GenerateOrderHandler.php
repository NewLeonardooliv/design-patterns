<?php

namespace Src\Patterns;

class GenerateOrderHandler
{
    public function __construct()
    {
    }

    public function execute(GenerateOrder $generateOrder)
    {
        $budget = new Budget();
        $budget->items = $generateOrder->getItems();
        $budget->price = $generateOrder->getPrice();

        $order = new Order();
        $order->finishDate = new \DateTimeImmutable();
        $order->clientName = $generateOrder->getClientName();
        $order->bugdet = $budget;
    }
}
