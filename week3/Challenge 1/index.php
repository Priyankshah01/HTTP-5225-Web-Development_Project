<?php
$timeHour = rand(1,23);


if ($timeHour >= 5 && $timeHour < 9) {
    $meal = 'breakfast';
    $food = 'Bananas, Apples, and Oats';
} elseif ($timeHour >= 12 && $timeHour < 14) {
    $meal = 'lunch';
    $food = 'Fish, Chicken, and Vegetables';
} elseif ($timeHour >= 19 && $timeHour < 21) {
    $meal = 'dinner';
    $food = 'Steak, Carrots, and Broccoli';
} else {
    $meal = 'no meal';
    $food = 'not being fed';
}

echo "Current time is: " . $timeHour . " meal is: " . $meal . " food is: " . $food;
?>