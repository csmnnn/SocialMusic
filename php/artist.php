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
    <title>Artist name | SocialMusic</title>
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
            <div class="profile">
                <div class="profile-banner">
                    <img class="banner-photo" src="../resources/img/banner.jpg" alt="">
                </div>
                <div class="profile-image">
                    <img class="profile-photo" src="../resources/img/profile_picture.png">
                </div>
                <div class="profile-details">
                    <div class="details">
                        <p class="details-p"></p>
                        <p class="details-p" style="margin-bottom: 20px;"></p>
                    </div>
                </div>
                <hr>
                <div class="artist-feed flex">
                    <div style="width: 50%;">
                        <h1 class="heading">Top songs</h1>
                        <div class="top-songs flex justify-center">
                            <ul class="flex align-start flex-column list">
                            </ul>
                        </div>
                    </div>
                    <div style="width: 50%;">
                        <h1 class="heading">Releases</h1>
                        <div class="releases flex">
                            <div class="releases-tab flex flex-column">
                                <div class="tab-bar">
                                    <button class="tab-btn">Singles</button>
                                    <button class="tab-btn">Albums</button>
                                </div>
                                <div class="tab-content flex align-center">
                                    <button class="btn-act">&larr;</button>
                                    <div class="tab-singles">
                                    </div>
                                    <button class="btn-act">&rarr;</button>
                                </div>
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