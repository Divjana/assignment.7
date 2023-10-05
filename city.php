<?php

require __DIR__ . '/data.php';

$uniqueCities = [];

foreach ($teams as $teamName => $teamData) :
    $city = $teamData['city'];
    if (!in_array($city, $uniqueCities)) {
        $uniqueCities[] = $city;
    }
endforeach;


foreach ($uniqueCities as $city) :
    echo $city; ?> <br> <?php
                    endforeach;
