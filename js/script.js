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
