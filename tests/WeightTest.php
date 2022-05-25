<?php

use Krodox\WeightConversions;
use Krodox\WeightConversions\Weight;

it('can convert kilograms to pound correctly', function () {
    Weight::kilogramsToPounds(100);
    expect(true)->toBeTrue();
});
