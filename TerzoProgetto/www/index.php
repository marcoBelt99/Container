<?php 
    echo "Ciao, sta funzionando tutto";
    $n = 5;
    $a = 10;
    echo "<br>";
    echo $n + $a;

    echo "<br>" . "ciao" . "<br>";

    // Closure
$double = function($a) {
    return $a * 2;
};

// This is our range of numbers
$numbers = range(1, 5);

// Applico la funzione contenuta in $double a tutti gli elementi contenuti in $numbers
$new_numbers = array_map($double, $numbers);

print implode(' ', $new_numbers);

?>