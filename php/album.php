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
    <script src="../js/displayPlaylist.js" defer></script>
    <title>Album name | SocialMusic</title>
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

            <div class="album flex flex-column">
                <div class="album-info flex align-center">
                    <div class="album-image">
                        <img src="../resources/img/playlist-stock-img.jpg" alt="">
                    </div>
                    <div class="album-p flex flex-column justify-center">
                        <div class="album-name flex align-center">
                            <p style="margin: 0; font-size: 50px; font-weight: bold;"></p>
                        </div>
                        <div class="album-artist flex align-center">
                            <span class="artist-avatar">
                                <img src="../resources/img/profile_picture.png" alt="">
                            </span>
                            <a href="artist.php"></a>
                            &nbsp;&bull;&nbsp;
                            <p style="margin: 0;">&bull;&nbsp;</p>
                            <p style="margin: 0;"></p>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="album-songs-container flex align-center justify-center">
                    <ol class="flex align-start flex-column album-songs-list">
                    </ol>
                </div>
            </div>
        </div>

        <?php include '../html/homepage-item-3.html'; ?>
    </div>
</body>

</html>