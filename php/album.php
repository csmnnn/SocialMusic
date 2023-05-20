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
                        <img src="../resources/img/tisoki-album.jpg" alt="">
                    </div>
                    <div class="album-p flex flex-column justify-center">
                        <div class="album-name flex align-center">
                            <p style="margin: 0; font-size: 50px; font-weight: bold;">01953</p>
                            <!-- <button class="btn-info">
                                <img src="../resources/img/info.png" alt="">
                            </button> -->
                        </div>
                        <div class="album-artist flex align-center">
                            <span class="artist-avatar">
                                <img src="../resources/img/tisoki-avatar.jpg" alt="">
                            </span>
                            <a href="artist.php">Tisoki</a>
                            &nbsp;&bull;&nbsp;
                            <p style="margin: 0;">10 songs &bull;&nbsp;</p>
                            <p style="margin: 0;">29:11</p>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="album-songs-container flex align-center justify-center">
                    <ol class="flex align-start flex-column album-songs-list">
                        <li class="album-songs-list-item">
                            <div class="div-album-list-item flex">
                                <div class="song-number flex justify-center align-center">1</div>
                                <div class="album-song-name flex flex-column justify-center">
                                    <p class="song-title">2020 (INTRO)</p>
                                    <div class="writers">
                                        <a class="song-writers" href="artist.php">Tisoki</a>
                                    </div>
                                </div>
                                <div class="album-song-like flex align-center justify-center">
                                    <img id="like" src="../resources/img/heart_empty.png" alt="">
                                </div>
                                <div class="album-song-length flex align-center justify-center">2:33</div>
                            </div>
                        </li>
                        <li class="album-songs-list-item">
                            <div class="div-album-list-item flex">
                                <div class="song-number flex justify-center align-center">2</div>
                                <div class="album-song-name flex flex-column justify-center">
                                    <p class="song-title">HOLD ON ME</p>
                                    <div class="writers">
                                        <a class="song-writers" href="artist.php">Tisoki</a>
                                    </div>
                                </div>
                                <div class="album-song-like flex align-center justify-center">
                                    <img src="../resources/img/heart_empty.png" alt="">
                                </div>
                                <div class="album-song-length flex align-center justify-center">2:08</div>
                            </div>
                        </li>
                        <li class="album-songs-list-item">
                            <div class="div-album-list-item flex">
                                <div class="song-number flex justify-center align-center">3</div>
                                <div class="album-song-name flex flex-column justify-center">
                                    <p class="song-title">WAVEY</p>
                                    <div class="writers">
                                        <a class="song-writers" href="artist.php">Tisoki</a>
                                    </div>
                                </div>
                                <div class="album-song-like flex align-center justify-center">
                                    <img src="../resources/img/heart_empty.png" alt="">
                                </div>
                                <div class="album-song-length flex align-center justify-center">2:48</div>
                            </div>
                        </li>
                        <li class="album-songs-list-item">
                            <div class="div-album-list-item flex">
                                <div class="song-number flex justify-center align-center">4</div>
                                <div class="album-song-name flex flex-column justify-center">
                                    <p class="song-title">FAKE IT</p>
                                    <div class="writers">
                                        <a class="song-writers" href="artist.php">Tisoki<span style="margin: 0;">&#44;</span>
                                        </a>
                                        <a class="song-writers" href="artist.php">joegarratt</a>
                                    </div>
                                </div>
                                <div class="album-song-like flex align-center justify-center">
                                    <img src="../resources/img/heart_empty.png" alt="">
                                </div>
                                <div class="album-song-length flex align-center justify-center">3:29</div>
                            </div>
                        </li>
                        <li class="album-songs-list-item">
                            <div class="div-album-list-item flex">
                                <div class="song-number flex justify-center align-center">5</div>
                                <div class="album-song-name flex flex-column justify-center">
                                    <p class="song-title">GLASS</p>
                                    <div class="writers">
                                        <a class="song-writers" href="artist.php">Tisoki</a>
                                    </div>
                                </div>
                                <div class="album-song-like flex align-center justify-center">
                                    <img src="../resources/img/heart_empty.png" alt="">
                                </div>
                                <div class="album-song-length flex align-center justify-center">3:38</div>
                            </div>
                        </li>
                        <li class="album-songs-list-item">
                            <div class="div-album-list-item flex">
                                <div class="song-number flex justify-center align-center">6</div>
                                <div class="album-song-name flex flex-column justify-center">
                                    <p class="song-title">ALL NIGHT</p>
                                    <div class="writers">
                                        <a class="song-writers" href="artist.php">Tisoki<span style="margin: 0;">&#44;</span>
                                        </a>
                                        <a class="song-writers" href="artist.php">byblood<span style="margin: 0;">&#44;</span></a>
                                        <a class="song-writers" href="artist.php">Cry4Tre</a>
                                    </div>
                                </div>
                                <div class="album-song-like flex align-center justify-center">
                                    <img src="../resources/img/heart_empty.png" alt="">
                                </div>
                                <div class="album-song-length flex align-center justify-center">2:52</div>
                            </div>
                        </li>
                        <li class="album-songs-list-item">
                            <div class="div-album-list-item flex">
                                <div class="song-number flex justify-center align-center">7</div>
                                <div class="album-song-name flex flex-column justify-center">
                                    <p class="song-title">COMEDOWN</p>
                                    <div class="writers">
                                        <a class="song-writers" href="artist.php">Tisoki</a>
                                    </div>
                                </div>
                                <div class="album-song-like flex align-center justify-center">
                                    <img src="../resources/img/heart_empty.png" alt="">
                                </div>
                                <div class="album-song-length flex align-center justify-center">2:32</div>
                            </div>
                        </li>
                        <li class="album-songs-list-item">
                            <div class="div-album-list-item flex">
                                <div class="song-number flex justify-center align-center">8</div>
                                <div class="album-song-name flex flex-column justify-center">
                                    <p class="song-title">MADE 4 THIS</p>
                                    <div class="writers">
                                        <a class="song-writers" href="artist.php">Tisoki</a>
                                    </div>
                                </div>
                                <div class="album-song-like flex align-center justify-center">
                                    <img src="../resources/img/heart_empty.png" alt="">
                                </div>
                                <div class="album-song-length flex align-center justify-center">2:42</div>
                            </div>
                        </li>
                        <li class="album-songs-list-item">
                            <div class="div-album-list-item flex">
                                <div class="song-number flex justify-center align-center">9</div>
                                <div class="album-song-name flex flex-column justify-center">
                                    <p class="song-title">SENSITIVE</p>
                                    <div class="writers">
                                        <a class="song-writers" href="artist.php">Tisoki<span style="margin: 0;">&#44;</span>
                                        </a>
                                        <a class="song-writers" href="artist.php">Charity Vance</a>
                                    </div>
                                </div>
                                <div class="album-song-like flex align-center justify-center">
                                    <img src="../resources/img/heart_empty.png" alt="">
                                </div>
                                <div class="album-song-length flex align-center justify-center">3:08</div>
                            </div>
                        </li>
                        <li class="album-songs-list-item">
                            <div class="div-album-list-item flex">
                                <div class="song-number flex justify-center align-center">10</div>
                                <div class="album-song-name flex flex-column justify-center">
                                    <p class="song-title">FIND URSELF</p>
                                    <div class="writers">
                                        <a class="song-writers" href="artist.php">Tisoki</a>
                                    </div>
                                </div>
                                <div class="album-song-like flex align-center justify-center">
                                    <img src="../resources/img/heart_empty.png" alt="">
                                </div>
                                <div class="album-song-length flex align-center justify-center">3:18</div>
                            </div>
                        </li>
                    </ol>
                </div>
            </div>
        </div>

        <?php include '../html/homepage-item-3.html'; ?>
    </div>
</body>

</html>