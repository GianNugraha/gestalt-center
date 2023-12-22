<?php

function calculateDenominations($amount)
{
    $denominations = [100000, 50000, 20000, 10000, 5000, 1000];
    $result = [];

    foreach ($denominations as $denomination) {
        $count = floor($amount / $denomination);
        $result[$denomination] = $count;
        $amount %= $denomination;
    }

    return $result;
}

$amount = 1588000;

$denominationCount = calculateDenominations($amount);

foreach ($denominationCount as $denomination => $count) {
    echo "Rp. " . number_format($denomination) . " : " . $count . " lembar" . "<br/>";
}