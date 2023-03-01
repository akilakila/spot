<?php
    if (isset($_POST['q2']))   // if ANY of the options was checked
        echo("Your response was: ");
        echo $_POST['q2'];    // echo the choice
        echo "<br>";
        echo("The correct answer was PinkPantheress!");

?>