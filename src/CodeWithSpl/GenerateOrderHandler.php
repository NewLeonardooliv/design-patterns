<?php

namespace Src\Patterns\CodeWithSpl;

use SplObserver;

class GenerateOrderHandler implements \SplSubject
{
    public Order $order;

    /** @var \SplObserver[] */
    private array $actions = [];

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

        $this->order = $order;
        $this->notify();
    }

    public function attach(\SplObserver $observer): void
    {
        $this->actions[] = $observer;
    }

    public function detach(\SplObserver $observer): void
    {
    }

    public function notify(): void
    {
        foreach ($this->actions as $action) {
            $action->update($this);
        }
    }
}
