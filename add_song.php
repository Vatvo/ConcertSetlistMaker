<?php
require_once '../config.php';

if (isset($_POST['add'])) {
    if ($_POST['song'] != "" && $_POST['album'] != "" && $_POST['artist'] != "") {
        $song = $_POST['song'];
        $album = $_POST['album'];
        $artist = $_POST['artist'];

        $setlistLength = mysqli_fetch_assoc(mysqli_query($db, "SELECT COUNT(*) AS count FROM setlist"))['count'];

        $addsong = mysqli_query($db, 
            "INSERT INTO setlist VALUES(null, $setlistLength + 1, '$song', '$album', '$artist')")
            or
            die(mysqli_error($db));
    }
    
    header('location:index.php');
}

?>
