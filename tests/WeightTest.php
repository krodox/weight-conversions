<?php

use Krodox\WeightConversions;
use Krodox\WeightConversions\Weight;

it('can convert kilograms to pound correctly', function () {
    $pounds = Weight::kilograms(100)->toPounds();
    expect($pounds)->toEqual(220.46);
});
