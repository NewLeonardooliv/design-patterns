<?php

namespace Src\Patterns\CodeWithSpl\GenerateOrderActions;

use Src\Patterns\Order;

interface ActionInterface
{
    public function execute(Order $order);
}
