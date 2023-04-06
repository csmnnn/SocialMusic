var musicPlayer = document.getElementById('music-player')
var progress = document.getElementById('progress')
var progress_slider = document.getElementById('progress-slider')
var playSpan = document.getElementById('spanPlay')
const circle = document.getElementById('circle')

musicPlayer.ontimeupdate = function (event) {
    var coef = (100 * musicPlayer.currentTime) / musicPlayer.duration
    console.log(event)
    progress.style.width = Math.floor(coef) + "%"
}
progress_slider.onclick = function (event) {
    musicPlayer.currentTime = (event.offsetX / progress_slider.offsetWidth) * musicPlayer.duration
}

playSpan.onclick = function (event) {
    event.target.paused = true
    console.log(event.target.paused)
    console.log('Play song')
}

var likeButton = document.getElementById('like')

if (likeButton != null) {
    document.getElementById('like').onclick = function() {
        if (document.getElementById('like').src == "http://127.0.0.1:5500/resources/img/heart_empty.png") {
            document.getElementById('like').src = "http://127.0.0.1:5500/resources/img/heart_full.png"
        } else {
            document.getElementById('like').src = "http://127.0.0.1:5500/resources/img/heart_empty.png"
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
    })
    
    openEditSongsModal.addEventListener('click', () => {
        modalContainer.classList.add('show');
    })
    
    openEditAlbumsModal.addEventListener('click', () => {
        modalContainer.classList.add('show');
    })
}

closeModal.addEventListener('click', () => {
    modalContainer.classList.remove('show');
});
