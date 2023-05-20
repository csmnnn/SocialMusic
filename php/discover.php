<?php
require('requireLogin.php');
?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/styles.css">
    <link rel="stylesheet" href="../css/modal.css">
    <script src="../js/script.js" defer></script>
    <title>Discover | SocialMusic</title>
</head>

<body>

    <div class="modal-container" id="modalContainer">
        <div class="modal">
            <h1>Modal</h1>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Minima vitae dolore eligendi non accusantium
                voluptatibus sit cumque, natus facilis magnam aperiam animi dicta consectetur debitis sunt aliquam iure
                nisi iusto.</p>
            <button id="close-modal">Close modal</button>
        </div>
    </div>

    <div class="flexbox-homepage-container">
        <?php include '../html/homepage-item-1.html'; ?>

        <div class="flexbox-homepage-item-2">
            <?php include '../html/music-player.html'; ?>
            <div class="homepage-feed">
                <div class="flex align-center">
                    <h1 class="heading">Discover Daily | dd.mm.yyyy</h1>
                    <button type="button" class="add-playlist">Add to your playlists</button>
                </div>
                <hr>
                <div class="discover-songs-container">
                    <div class="discover-song flex flex-column align-center">
                        <div class="discover-song-img">
                            <img src="../resources/img/ghost-voices-image.jpg" alt="">
                        </div>
                        <a class="song-writers" href="artist.php">Artist</a>
                        <p class="songs song-title">Song name</p>
                    </div>
                    <div class="discover-song flex flex-column align-center">
                        <div class="discover-song-img">
                            <img src="../resources/img/ghost-voices-image.jpg" alt="">
                        </div>
                        <a class="song-writers" href="artist.php">Artist</a>
                        <p class="songs song-title">Song name</p>
                    </div>
                    <div class="discover-song flex flex-column align-center">
                        <div class="discover-song-img">
                            <img src="../resources/img/ghost-voices-image.jpg" alt="">
                        </div>
                        <a class="song-writers" href="artist.php">Artist</a>
                        <p class="songs song-title">Song name</p>
                    </div>
                    <div class="discover-song flex flex-column align-center">
                        <div class="discover-song-img">
                            <img src="../resources/img/ghost-voices-image.jpg" alt="">
                        </div>
                        <a class="song-writers" href="artist.php">Artist</a>
                        <p class="songs song-title">Song name</p>
                    </div>
                    <div class="discover-song flex flex-column align-center">
                        <div class="discover-song-img">
                            <img src="../resources/img/ghost-voices-image.jpg" alt="">
                        </div>
                        <a class="song-writers" href="artist.php">Artist</a>
                        <p class="songs song-title">Song name</p>
                    </div>
                    <div class="discover-song flex flex-column align-center">
                        <div class="discover-song-img">
                            <img src="../resources/img/ghost-voices-image.jpg" alt="">
                        </div>
                        <a class="song-writers" href="artist.php">Artist</a>
                        <p class="songs song-title">Song name</p>
                    </div>
                    <div class="discover-song flex flex-column align-center">
                        <div class="discover-song-img">
                            <img src="../resources/img/ghost-voices-image.jpg" alt="">
                        </div>
                        <a class="song-writers" href="artist.php">Artist</a>
                        <p class="songs song-title">Song name</p>
                    </div>
                    <div class="discover-song flex flex-column align-center">
                        <div class="discover-song-img">
                            <img src="../resources/img/ghost-voices-image.jpg" alt="">
                        </div>
                        <a class="song-writers" href="artist.php">Artist</a>
                        <p class="songs song-title">Song name</p>
                    </div>
                </div>
            </div>
        </div>
        
        <?php include '../html/homepage-item-3.html'; ?>
    </div>
</body>

</html>