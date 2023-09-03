<?php

namespace Tests\Unit\BudgetTest;

use PHPUnit\Framework\TestCase;
use Src\Patterns\Budget;
use Src\Patterns\BudgetStates\Approved;
use Src\Patterns\BudgetStates\Disapproved;
use Src\Patterns\BudgetStates\Finished;
use Src\Patterns\BudgetStates\OnApproval;

/**
 * @internal
 *
 * @coversNothing
 */
class BudgetTest extends TestCase
{
    public function testInitialStateIsOnApproval()
    {
        $budget = new Budget();
        $this->assertInstanceOf(OnApproval::class, $budget->state);
    }

    public function testApplyExtraDiscountOnApprovedBudget()
    {
        $budget = new Budget();
        $budget->price = 100.0;
        $budget->state = new Approved();

        $budget->applyExtraDiscount();
        $this->assertEquals(98.0, $budget->price);
    }

    public function testApproveBudget()
    {
        $budget = new Budget();
        $budget->state = new OnApproval();

        $budget->approve();
        $this->assertInstanceOf(Approved::class, $budget->state);
    }

    public function testDisapproveBudget()
    {
        $budget = new Budget();
        $budget->state = new OnApproval();

        $budget->disapprove();
        $this->assertInstanceOf(Disapproved::class, $budget->state);
    }

    public function testFinishBudget()
    {
        $budget = new Budget();
        $budget->state = new Approved();

        $budget->finish();
        $this->assertInstanceOf(Finished::class, $budget->state);
    }
}
