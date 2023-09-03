<?php

namespace Tests\Unit\GenerateOrder;

use PHPUnit\Framework\TestCase;
use Src\Patterns\GenerateOrder;
use Src\Patterns\GenerateOrderHandler;

/**
 * @internal
 *
 * @coversNothing
 */
final class GenerateOrderTest extends TestCase
{
    public function testGenerateOrder()
    {
        $prince = 500.0;
        $items = 5;
        $clientName = 'Leonardo Oliveira';

        $generateOrder = new GenerateOrder(
            $prince,
            $items,
            $clientName
        );

        $generateOrderHander = new GenerateOrderHandler();
        $generateOrderHander->execute($generateOrder);

        $this->assertInstanceOf(GenerateOrder::class, $generateOrder);
        $this->assertEquals($prince, $generateOrder->getPrice());
        $this->assertEquals($items, $generateOrder->getItems());
        $this->assertEquals($clientName, $generateOrder->getClientName());
    }
}
