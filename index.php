<?php

$individuals = ["John", "Mark", "Slyvia", "Juma", "Mike", "Sana", "Linda"];
$amount = [100, 150, 1100, 3500, 600, 50, 8000];

// Exchange rates
$buyPrice = 3870;
$sellPrice = 3650;

// Taxes
$taxCharge = 2; // for above 1 million UGX
$taxThreshold = 1000000;

echo "<h1>SIMBA FOREX EXCHANGE</h1>";

for ($i = 0; $i < count($individuals); $i++) {
    $balance = $amount[$i] * $sellPrice;
    // Tax check
    if ($balance > $taxThreshold) {
        $taxAmount = $taxCharge / 100 * $balance;
        $result = $balance - $taxAmount;
 
        // Converting back to dollars
        $amountInDollars = $result / $buyPrice;
        echo "<p><b>" . $individuals[$i] . "</b> walks away with " . round($amountInDollars) . " USD. </p>";
    } else {

        // Converting back to dollars
        $amountInDollars = $balance / $buyPrice;
        echo "<p><b>" . $individuals[$i] . "</b> walks away with " . round($amountInDollars) . " USD. </p>";
    }
}

echo "By Mugwanga Ian";
