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
                    <img class="banner-photo" src="../resources/img/profile-banner.jpg" alt="">
                </div>
                <div class="profile-image">
                    <img class="profile-photo" src="../resources/img/tisoki-avatar.jpg">
                </div>
                <div class="profile-details">
                    <div class="details">
                        <p class="details-p">Tisoki</p>
                        <p class="details-p" style="margin-bottom: 20px;">@tisoki</p>
                    </div>
                </div>
                <hr>
                <div class="artist-feed flex">
                    <div style="width: 50%;">
                        <h1 class="heading">Top songs</h1>
                        <div class="top-songs flex justify-center">
                            <ul class="flex align-start flex-column list">
                                <li class="top-songs-list-item">
                                    <div class="div-list-item flex">
                                        <div class="img">
                                            <img src="../resources/img/tisoki-miles-away.jpg" alt="">
                                        </div>
                                        <div class="top-song-name flex align-center">
                                            <p class="songs song-title">Miles Away</p>
                                        </div>
                                        <div class="top-song-like flex align-center justify-center">
                                            <img src="../resources/img/heart_empty.png" alt="">
                                        </div>
                                        <div class="top-song-length flex align-center justify-center">2:30</div>
                                    </div>
                                </li>
                                <li class="top-songs-list-item">
                                    <div class="div-list-item flex">
                                        <div class="img">
                                            <img src="../resources/img/ghost-voices-image.jpg" alt="">
                                        </div>
                                        <div class="top-song-name flex align-center">
                                            <p class="songs song-title">GHOST VOICES (TISOKI FLIP)</p>
                                        </div>
                                        <div class="top-song-like flex align-center justify-center">
                                            <img src="../resources/img/heart_empty.png" alt="">
                                        </div>
                                        <div class="top-song-length flex align-center justify-center">2:06</div>
                                    </div>
                                </li>
                                <li class="top-songs-list-item">
                                    <div class="div-list-item flex">
                                        <div class="img"><img src="../resources/img/tisoki-album.jpg" alt="">
                                        </div>
                                        <div class="top-song-name flex align-center">
                                            <p class="songs song-title">HOLD ON ME</p>
                                        </div>
                                        <div class="top-song-like flex align-center justify-center">
                                            <img src="../resources/img/heart_empty.png" alt="">
                                        </div>
                                        <div class="top-song-length flex align-center justify-center">2:08</div>
                                    </div>
                                </li>
                                <li class="top-songs-list-item">
                                    <div class="div-list-item flex">
                                        <div class="img">
                                            <img src="../resources/img/ghost-voices-image.jpg" alt="">
                                        </div>
                                        <div class="top-song-name flex align-center">
                                            <p class="songs song-title">Song name</p>
                                        </div>
                                        <div class="top-song-like flex align-center justify-center">
                                            <img src="../resources/img/heart_empty.png" alt="">
                                        </div>
                                        <div class="top-song-length flex align-center justify-center">1:00</div>
                                    </div>
                                </li>
                                <li class="top-songs-list-item">
                                    <div class="div-list-item flex">
                                        <div class="img">
                                            <img src="../resources/img/ghost-voices-image.jpg" alt="">
                                        </div>
                                        <div class="top-song-name flex align-center">
                                            <p class="songs song-title">Song name</p>
                                        </div>
                                        <div class="top-song-like flex align-center justify-center">
                                            <img src="../resources/img/heart_empty.png" alt="">
                                        </div>
                                        <div class="top-song-length flex align-center justify-center">1:00</div>
                                    </div>
                                </li>
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
                                        <div class="discover-song flex flex-column align-center">
                                            <div class="discover-song-img">
                                                <img src="../resources/img/tisoki-miles-away.jpg" alt="">
                                            </div>
                                            <p class="songs song-title">Miles Away</p>
                                        </div>
                                        <div class="discover-song flex flex-column align-center">
                                            <div class="discover-song-img">
                                                <img src="../resources/img/ghost-voices-image.jpg" alt="">
                                            </div>
                                            <p class="songs song-title">GHOST VOICES (...</p>
                                        </div>
                                        <div class="discover-song flex flex-column align-center">
                                            <div class="discover-song-img">
                                                <img src="../resources/img/tisoki-album.jpg" alt="">
                                            </div>
                                            <a class="songs song-title" href="album.php">01953</a>
                                        </div>
                                        <div class="discover-song flex flex-column align-center">
                                            <div class="discover-song-img">
                                                <img src="../resources/img/ghost-voices-image.jpg" alt="">
                                            </div>
                                            <p class="songs song-title">Song name</p>
                                        </div>
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