<?php
require_once '../config.php';

if ($_GET['pos']) {
    $pos = $_GET['pos'];

    $setlistLength = mysqli_fetch_assoc(mysqli_query($db, "SELECT COUNT(*) AS count FROM setlist"))['count'];

    if ($pos < $setlistLength) {
        $aside = mysqli_query($db, 
        "UPDATE setlist SET position = -1 WHERE position = $pos;")
        or
        die(mysqli_error($db));

        $down = mysqli_query($db, 
        "UPDATE setlist SET position = $pos WHERE position = $pos + 1;")
        or
        die(mysqli_error($db));

        $up = mysqli_query($db, 
        "UPDATE setlist SET position = $pos + 1 WHERE position = -1;")
        or
        die(mysqli_error($db));
    }
    
    header("location: index.php");
}
?>
