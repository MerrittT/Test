<?php

function calculateLoanPayment($principal, $interest, $years) {
    $monthlyPayment = $principal * ($interest / (1 - pow(1 + $interest, -$years * 12)));
    return $monthlyPayment;
}



echo "Hello world.";
?>
