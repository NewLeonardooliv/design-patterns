<?php

namespace Src\Patterns;

use Src\Patterns\BudgetStates\BudgetState;
use Src\Patterns\BudgetStates\OnApproval;

class Budget
{
    public float $price;
    public float $items;
    public BudgetState $state;

    public function __construct()
    {
        $this->state = new OnApproval();
    }

    public function applyExtraDiscount()
    {
        $this->price -= $this->state->calculateExtraDiscount($this);
    }

    public function approve()
    {
        $this->state->approve($this);
    }

    public function disaprove()
    {
        $this->state->disaprove($this);
    }

    public function finish()
    {
        $this->state->finish($this);
    }
}
