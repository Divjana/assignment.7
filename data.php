<?php

$teams = [
    'Arsenal' => [
        'league' => 'Premier league',
        'last-time-champions' => 2004,
        'city' => 'London',
        'url' => 'https://www.arsenal.com/'
    ],
    'Aston Villa' => [
        'league' => 'Premier league',
        'last-time-champions' => 1981,
        'city' => 'Birmingham',
        'url' => 'https://www.avfc.co.uk/'
    ],
    'Manchester City' => [
        'league' => 'Premier league',
        'last-time-champions' => 2023,
        'city' => 'Manchester',
        'url' => 'https://www.mancity.com/'
    ],
    'Newcastle' => [
        'league' => 'Premier league',
        'last-time-champions' => 1927,
        'city' => 'Newcastle',
        'nickname' => 'Magpies',
        'url' => 'https://www.nufc.co.uk/'
    ],
    'Chelsea' => [
        'league' => 'Premier league',
        'last-time-champions' => 2017,
        'city' => 'London',
        'url' => 'https://www.chelseafc.com/en'
    ],
    'Watford' => [
        'league' => 'Championship',
        'last-time-champions' => null,
        'city' => 'London',
        'url' => 'https://www.watfordfc.com/'
    ],
    'Brighton' => [
        'league' => 'Premier league',
        'last-time-champions' => null,
        'city' => 'Brighton',
        'url' => 'https://www.brightonandhovealbion.com/'
    ],
];

foreach ($teams as $teamName => $teamDetails) :
?>
    Team: <?php echo $teamName; ?><br>
    League: <?php echo $teamDetails['league']; ?><br>
    Last Time Champions: <?php
                            if ($teamDetails['last-time-champions'] !== null) {
                                echo $teamDetails['last-time-champions'];
                            } else {
                                echo " ";
                            }
                            ?><br>
    City: <?php echo $teamDetails['city']; ?><br>
    <?php
    if (isset($teamDetails['nickname'])) :
    ?>
        Nickname: <?php echo $teamDetails['nickname']; ?><br>
    <?php endif; ?>
    URL: <?php echo $teamDetails['url']; ?><br>
    <br>
<?php endforeach;
