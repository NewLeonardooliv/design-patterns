<?php

namespace Src\Patterns\CodeWithSpl\GenerateOrderActions;

use SplSubject;
use Src\Patterns\Order;

class CreateOrder implements \SplObserver
{
    public function update(\SplSubject $subject): void
    {
        print 'Criando pedido no banco de dados';
    }
}
