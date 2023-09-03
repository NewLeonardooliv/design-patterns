<?php

namespace Src\Patterns\GenerateOrderActions;

use Src\Patterns\Order;

class SendOrderOnEmail implements ActionInterface
{
    public function execute(Order $order)
    {
        print 'Enviando E-Mail';
    }
}
