<?php

namespace Src\Patterns\BudgetStates;

use Src\Patterns\Budget;

abstract class BudgetState
{
    abstract public function calculateExtraDiscount(Budget $budget): float;

    public function approve(Budget $budget)
    {
        throw new \DomainException('Um orçamento não pode ser aprovado');
    }

    public function disapprove(Budget $budget)
    {
        throw new \DomainException('Um orçamento não pode ser reprovado');
    }

    public function finish(Budget $budget)
    {
        throw new \DomainException('Um orçamento não pode ser finalizado');
    }
}
