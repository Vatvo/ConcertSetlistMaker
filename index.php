<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Concert Setlist Maker</title>

      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
<body style="background-color: #07001f;">
    <main style="filter: drop-shadow(0px 0px 40px midnightblue);">
        <br>
        <h1 class="heading text-center fw-bold text-white">CONCERT SETLIST MAKER</h1>
        <br>

        <div>
            <div class="container">
                <form method="POST" action="add_song.php" class="d-flex gap-2 justify-content-between">
                    <input class="form-control shadow" type="text" name="song" placeholder="Song">
                    <input class="form-control shadow" type="text" name="album" placeholder="Album">
                    <input class="form-control shadow" type="text" name="artist" placeholder="Artist">
                    <button class="btn btn-primary shadow" name="add" value="1">Add Song</button>
                </form>
            </div>

            <br>

            <div class="container">
                <table class="table table-striped">
                    <thead>
                        <th>#</th>
                        <th>Song</th>
                        <th>Album</th>
                        <th colspan="3">Artist</th>
                    </thead>
                    <tbody>
                        <?php
                            require "../config.php";

                            $songs = mysqli_query($db, "SELECT * FROM setlist ORDER BY position ASC");

                            $count = 1;

                            while ($item = $songs->fetch_array()) {

                                ?>

                                <tr>
                                    <td>
                                        <?php echo $item['position'] ?>
                                    </td>

                                    <td>
                                        <?php echo $item['song'] ?>
                                    </td>
                                    
                                    <td>
                                        <?php echo $item['album'] ?>
                                    </td>

                                    <td>
                                        <?php echo $item['artist'] ?>
                                    </td>

                                    <td class="d-flex">
                                        <a href="move_down.php?pos=<?php echo $item['position']?>"><i class="fa-solid fa-angle-down"></i></a>
                                        <a href="move_up.php?pos=<?php echo $item['position']?>"><i class="fa-solid fa-angle-up"></i></a>
                                    </td>
                                    <td>
                                        <a href="delete_song.php?pos=<?php echo $item['position']?>"><i class="fa-solid fa-trash text-danger"></i></a>
                                    </td>
                                </tr>
                            <?php }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>
