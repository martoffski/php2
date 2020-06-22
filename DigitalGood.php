<?php

class DigitalGood extends Good
{
    private float $price;
    public function __construct(string $name)
    {
        parent::__construct($name);
        $pieceGood = new PieceGood('Piece Good');
        $price = $pieceGood->getPrice()/2;
    }

    public function getPrice(): float
    {
        return $this->price;
    }

    public function sell(float $sold): float
    {
        return (int)$sold * $this->getPrice();
    }
}