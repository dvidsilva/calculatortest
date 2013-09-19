<?php

require_once (__DIR__.'/ClassCalculator.php');
$result = '';
$askNextCalculation = true;
$inputHandle = fopen("php://stdin", "r");

while ($askNextCalculation) {
    echo <<<EOL

Enter a calculation and press enter to continue (empty line to quit):

CALCULATION:
EOL;


    $calculation = fgets($inputHandle);
    $trimmedCalculation = trim($calculation);
    if (empty($trimmedCalculation)) {
        $askNextCalculation = false;
        continue;
    }


    // DO SOME CALCULATION: THIS IS WHERE YOUR LOGIC SHOULD BE INSERTED
    // Create an object oriented structure that implements calculation
    // Add, substract, multiply, division, modulus
    $calc = Calculator::getInstance($trimmedCalculation);
    $result = $calc->calculate();
    //eval('$result = '. $trimmedCalculation.';');

    // print result
    echo 'RESULT = '.$result.PHP_EOL;
}

