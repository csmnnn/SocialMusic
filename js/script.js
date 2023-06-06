var musicPlayer = document.getElementById('music-player');
var progress = document.getElementById('progress');
var progress_slider = document.getElementById('progress-slider');
var playSpan = document.getElementById('spanPlay');
const logout = document.getElementById('logout');
var songCurrentTime = document.getElementById('song-current-time');
progress.style.width = "0%";

musicPlayer.ontimeupdate = function () {
    var coef = (100 * musicPlayer.currentTime) / musicPlayer.duration;
    progress.style.width = Math.floor(coef) + "%";
    
    let minutes = Math.floor(musicPlayer.currentTime / 60);
    let seconds = Math.floor(musicPlayer.currentTime - minutes * 60) ;
    if (seconds === 0 || seconds <= 9) 
        songCurrentTime.innerHTML = minutes + ":0" + seconds;
    else
        songCurrentTime.innerHTML = minutes + ":" + seconds;

}
progress_slider.onclick = function (event) {
    musicPlayer.currentTime = (event.offsetX / progress_slider.offsetWidth) * musicPlayer.duration;
    console.log(musicPlayer.currentTime);
}

playSpan.addEventListener("click", () => {
    var img = document.querySelector('#spanPlay img');
    if (musicPlayer.src) {
        if (img.src === 'http://localhost/socialmusic/resources/img/play-button.png') {
            musicPlayer.play();
            img.src = 'http://localhost/socialmusic/resources/img/pause-button.png';
            console.log('Song is playing');
        } else {
            img.src = 'http://localhost/socialmusic/resources/img/play-button.png';
            musicPlayer.pause();
            console.log('Song paused');
        }
    }
});

var likeButton = document.getElementById('like');

if (likeButton != null) {
    document.getElementById('like').onclick = function() {
        if (document.getElementById('like').src == "http://127.0.0.1:5500/resources/img/heart_empty.png") {
            document.getElementById('like').src = "http://127.0.0.1:5500/resources/img/heart_full.png";
        } else {
            document.getElementById('like').src = "http://127.0.0.1:5500/resources/img/heart_empty.png";
        }
    }
}

const modalContainer = document.getElementById('modalContainer');
const closeModal = document.getElementById('close-modal');

const open = document.getElementById('open-modal');
const openAboutSongModal = document.getElementById('aboutSong');
const openEditProfileModal = document.getElementById('btnEditProfile');
const openEditArtistsModal = document.getElementById('btnEditArtists');
const openEditSongsModal = document.getElementById('btnEditSongs');
const openEditAlbumsModal = document.getElementById('btnEditAlbums');

const favSongs = document.getElementsByClassName('fav-img-song');
if (favSongs) {
    for (let favSong of favSongs) {
        favSong.addEventListener('click', () => {
            modalContainer.classList.add('show');
        });
    }
}

open.addEventListener('click', () => {
    modalContainer.classList.add('show');
});

openAboutSongModal.addEventListener('click', () => {
    modalContainer.classList.add('show');
})

if (openEditProfileModal && openEditArtistsModal && openEditSongsModal && openEditAlbumsModal) {
    openEditProfileModal.addEventListener('click', () => {
        modalContainer.classList.add('show');
    });
    
    openEditArtistsModal.addEventListener('click', () => {
        modalContainer.classList.add('show');
    });
    
    openEditSongsModal.addEventListener('click', () => {
        modalContainer.classList.add('show');
    });
    
    openEditAlbumsModal.addEventListener('click', () => {
        modalContainer.classList.add('show');
    });
}

closeModal.addEventListener('click', () => {
    modalContainer.classList.remove('show');
});

logout.addEventListener('click', () => {
    localStorage.clear();
})
