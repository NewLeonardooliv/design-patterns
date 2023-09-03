<?php

namespace Src\Patterns\CodeWithSpl\GenerateOrderActions;

use Src\Patterns\Order;

class SendOrderOnEmail implements \SplObserver
{
    public function update(\SplSubject $subject): void
    {
        print 'Enviando E-Mail';
    }
}
