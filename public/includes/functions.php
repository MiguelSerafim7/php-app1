<?php 

function soma($numA, $numB) {
    return $numA + $numB;
}

function subComRetornoPOsitivo($numA, $numB) {
    return ($numA > $numB) ? $numA - $numB : $numB - $numA; 
}

function multi(int $numA, int $numB) : int {
    return $numA * $numB;
}

function divide(int $numA, int $numB) : float {
    return $numA / $numB;
}