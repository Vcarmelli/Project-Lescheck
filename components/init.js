var audio = document.getElementsByClassName("hidden-audio")[1]; 
    
document.getElementById("startButton").addEventListener("click", playClickSound);
document.getElementById("multiplayerButton").addEventListener("click", playClickSound);
document.getElementById("instructionsButton").addEventListener("click", playClickSound);

function playClickSound() {
    var newAudio = audio.cloneNode();
    newAudio.currentTime = 0; 
    newAudio.play();
}

window.addEventListener('load', spin);

function spin() {
    document.documentElement.classList.add('rotating');
    document.querySelector('.object3d').classList.add('rotate');
}