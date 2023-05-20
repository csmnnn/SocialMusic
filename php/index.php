<?php
require('requireLogin.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/styles.css">
    <link rel="stylesheet" href="../css/modal.css">
    <title>SocialMusic</title>
    <script src="../js/script.js" defer></script>
    <script src="../js/fetchAll.js" defer></script>
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
                <div class="playlist-suggestions">
                    <div class="heading-section">
                        <p class="section-name"><strong>Suggestions</strong></p>
                    </div>
                    <div class="playlist">
                        <div class="playlist-item">
                            <div class="playlist-image">
                                <img class="playlist-image" src="../resources/img/ghost-voices-image.jpg" alt="">
                            </div>
                            <a class="song-writers" href="artist.php">Artist</a>
                            <p class="songs song-title">Song name</p>
                        </div>
                        <div class="playlist-item">
                            <div class="playlist-image">
                                <img class="playlist-image" src="../resources/img/ghost-voices-image.jpg" alt="">
                            </div>
                            <div class="playlist-name">
                                <p class="playlist-name">Playlist name</p>
                            </div>
                        </div>
                        <div class="playlist-item">
                            <div class="playlist-image">
                                <img class="playlist-image" src="../resources/img/ghost-voices-image.jpg" alt="">
                            </div>
                            <a class="song-writers" href="artist.php">Artist</a>
                            <p class="songs song-title">Song name</p>
                        </div>
                        <div class="playlist-item">
                            <div class="playlist-image">
                                <img class="playlist-image" src="../resources/img/ghost-voices-image.jpg" alt="">
                            </div>
                            <div class="playlist-name">
                                <p class="playlist-name">Playlist name</p>
                            </div>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="your-playlists">
                    <div class="heading-section">
                        <p class="section-name"><strong>Your playlists</strong></p>
                    </div>
                    <div class="playlist">
                        <div class="playlist-item">
                            <div class="playlist-image">
                                <img class="playlist-image" src="../resources/img/ghost-voices-image.jpg" alt="">
                                <div class="circle" id="circle">
                                    <img class="img-test-icon" src="../resources/img/play-button.png" alt="">
                                </div>
                            </div>
                            <div class="playlist-name">
                                <p class="playlist-name">Playlist name</p>
                            </div>
                        </div>
                        <div class="playlist-item">
                            <div class="playlist-image">
                                <img class="playlist-image" src="../resources/img/ghost-voices-image.jpg" alt="">
                            </div>
                            <div class="playlist-name">
                                <p class="playlist-name">Playlist name</p>
                            </div>
                        </div>
                        <div class="playlist-item">
                            <div class="playlist-image">
                                <img class="playlist-image" src="../resources/img/ghost-voices-image.jpg" alt="">
                            </div>
                            <div class="playlist-name">
                                <p class="playlist-name">Playlist name</p>
                            </div>
                        </div>
                        <div class="playlist-item">
                            <div class="playlist-image">
                                <img class="playlist-image" src="../resources/img/ghost-voices-image.jpg" alt="">
                            </div>
                            <div class="playlist-name">
                                <p class="playlist-name">Playlist name</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <?php include '../html/homepage-item-3.html'; ?>

    </div>
</body>

</html>