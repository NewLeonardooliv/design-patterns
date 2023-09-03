<?php

namespace Src\Patterns;

class Order
{
    public string $clientName;
    public \DateTimeInterface $finishDate;
    public Budget $bugdet;
}
