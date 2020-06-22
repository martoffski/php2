<?php

class PieceGood extends Good
{
    const PIECE_PRICE = 100;
    public function getPrice(): float
    {
        return self::PIECE_PRICE;
    }

    public function sell(float $sold): float
    {
        return (int)$sold * $this->getPrice();

    }
}