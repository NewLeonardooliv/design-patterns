<?php

namespace Src\Patterns;

use Src\Patterns\GenerateOrderActions\ActionInterface;
use Src\Patterns\GenerateOrderActions\CreateOrder;
use Src\Patterns\GenerateOrderActions\LogWhenCreateOrder;
use Src\Patterns\GenerateOrderActions\SendOrderOnEmail;

class GenerateOrderHandler
{
    /** @var ActionInterface[] */
    private array $actions = [];

    public function __construct()
    {
    }

    public function addActionWhenCreateOrder(ActionInterface $action)
    {
        $this->actions[] = $action;
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

        foreach ($this->actions as $action) {
            $action->execute($order);
        }
    }
}
