<?php

namespace Src\Patterns\GenerateOrderActions;

use Src\Patterns\Order;

class CreateOrder implements ActionInterface
{
    public function execute(Order $order)
    {
        print "Criando pedido no banco de dados";
    }
}
