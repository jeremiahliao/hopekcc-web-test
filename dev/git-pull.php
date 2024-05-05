<?php

function gitPull() {
    exec('./pull-from-git.sh',$output, $retval);

    echo "<div>";
    echo "<h4>Returned with status $retval and output:</h4>";
    foreach($output as $item) {
        echo "<p>$item</p>";
    }
    echo "</div>";
}

echo "<h3>Executing Git Pull: </h3>";

try {
    gitPull();
} catch (Exception $e) {
    echo "<div>";
    echo "<h4>Caught exception:</h4>";
    echo "<p>" . $e->getMessage() . "</p>";
    echo "</div>";
}

echo "<h3>Done</h3>";
