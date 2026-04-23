<?php
require_once '../config.php';

if ($_GET['pos']) {
    $pos = (int)$_GET['pos'];

    $delete = mysqli_query($db, 
        "DELETE FROM setlist WHERE position = $pos")
        or
        die(mysqli_error($db));

    $update = mysqli_query($db, 
        "UPDATE setlist SET position = position - 1 WHERE position > $pos;")
        or
        die(mysqli_error($db));

    header("location: index.php");
}
?>
