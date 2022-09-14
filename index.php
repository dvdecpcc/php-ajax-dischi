<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <title>Music</title>
</head>
<body>
    <header>
        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/1/19/Spotify_logo_without_text.svg/2048px-Spotify_logo_without_text.svg.png" alt="Spotify Logo">
    </header>
    <main>
        <section class="albumWrapper">
            <?php
                require __DIR__ . "/database.php";

                foreach($database as $album){
                    echo "<div class='myAlbum'>";
                    echo "<img src='" . $album['poster'] . "'alt='" . $album['title'] . "'>";
                    echo "<h2 class='albumTitle'>" . $album['title'] . "</h2> ";
                    echo "<p class= 'infos'>" . $album['author'] . "</p>";
                    echo "<p class='infos'>" . $album['year'] . "</p>";
                    echo "</div>";
                }
            ?>
        </section>
    </main>

</body>
</html>



