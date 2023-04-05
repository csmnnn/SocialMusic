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

document.getElementById('like').onclick = function() {
    if (document.getElementById('like').src == "http://127.0.0.1:5500/resources/img/heart_empty.png") {
        document.getElementById('like').src = "http://127.0.0.1:5500/resources/img/heart_full.png"
    } else {
        document.getElementById('like').src = "http://127.0.0.1:5500/resources/img/heart_empty.png"
    }
}
