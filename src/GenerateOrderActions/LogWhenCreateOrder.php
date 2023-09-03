<?php

namespace Src\Patterns\GenerateOrderActions;

use Src\Patterns\Order;

class LogWhenCreateOrder implements ActionInterface
{
    public function execute(Order $order)
    {
        print 'Criando log de pedido';
    }
}
