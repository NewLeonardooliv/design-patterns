<?php

namespace Src\Patterns\CodeWithSpl\GenerateOrderActions;

use Src\Patterns\Order;

class LogWhenCreateOrder implements \SplObserver
{
    public function update(\SplSubject $subject): void
    {
        print 'Criando log de pedido';
    }
}
