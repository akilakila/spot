<?php
    if (isset($_POST['q3']))   // if ANY of the options was checked
        echo("Your response was: ");
        echo $_POST['q3'];    // echo the choice
        echo "<br>";
        echo("The correct answer was Justin Bieber!");

?>