<?php

require __DIR__ . '/data.php';

$uniqueCities = array_keys(array_column($teams, 'city'));

foreach ($uniqueCities as $city) {
    echo $city . "<br>";
}
