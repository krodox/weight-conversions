<?php

namespace Krodox\WeightConversions;

class Weight
{
    protected float $kilograms;

    public function __construct(float $kilograms)
    {
        $this->kilograms = $kilograms;
    }

    public static function kilogramsToPounds(float $kilograms): self
    {
        return new static($kilograms * 2.2046);
    }
}
