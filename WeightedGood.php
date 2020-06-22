<?php

class WeightedGood extends Good
{
    public function __construct(string $name)
    {
        parent::__construct($name);
        $pieceGood = new PieceGood('Piece Good');
        $price = $pieceGood->getPrice() * 1.1;
    }

    public function getPrice(): float
    {
        return $this->price;
    }

    public function sell(float $sold): float
    {
        return pow($sold, 0.9) * $this->getPrice();
    }
}