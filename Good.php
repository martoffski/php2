<?php


abstract class Good
{
    private string $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    abstract public function getPrice(): float;//Получение цены
    abstract public function sell(float $sold): float;//Продажа
}