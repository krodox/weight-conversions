<?php

namespace Krodox\WeightConversions;

class Weight
{
    protected float $kilograms;

    public static function kilograms(float $kilograms): self
    {
        return new static($kilograms);
    }
    public function __construct(float $kilograms)
    {
        $this->kilograms = $kilograms;
    }
<<<<<<< HEAD
    public function toPounds(): float
=======

    public static function kilogramsToPounds(float $kilograms): self
>>>>>>> aa12834affe7e18f9bb165497844c004ee18f7c0
    {
        return $this->kilograms * 2.2046;
    }
}
