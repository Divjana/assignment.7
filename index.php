<?php

require __DIR__ . '/head.html';
require __DIR__ . '/index.html';
require __DIR__ . '/data.php';


foreach ($teams as $teamName => $teamData) :
?>
    Team: <?php echo $teamName; ?><br>
    League: <?php echo $teamData['league']; ?><br>
    Last Time Champions: <?php
                            if (isset($teamData['last-time-champions'])) {
                                echo $teamData['last-time-champions'];
                            } else {
                                echo "Have never been champions";
                            }
                            ?><br>
    City: <?php echo $teamData['city']; ?><br>
    <?php
    if (isset($teamData['nickname'])) :
    ?>
        Nickname: <?php echo $teamData['nickname']; ?><br>
    <?php endif; ?>
    URL: <?php echo $teamData['url']; ?><br>
    <br>
<?php endforeach;
?>