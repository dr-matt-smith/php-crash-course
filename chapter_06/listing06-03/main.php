<?php
$continueLooping = true;
while ($continueLooping) {
    $userInput = readline("type something (or: quit): ");

    if ($userInput == 'quit') {
        $continueLooping = false;
    }
    if ($userInput == 'q') {
        $continueLooping = false;
    }

    print "you typed '$userInput'\n";
}

print '--- I have left the loop! ---';
