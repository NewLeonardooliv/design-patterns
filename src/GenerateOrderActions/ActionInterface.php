<?php

namespace Src\Patterns\GenerateOrderActions;

use Src\Patterns\Order;

interface ActionInterface
{
    public function execute(Order $order);
}
