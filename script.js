// Nav Bar Toggle Button

document.getElementById('toggleBtnOpen').addEventListener('click', ()=> {
        document.getElementById('hidden-menu').style.visibility = "visible";
});

document.getElementById('toggleBtnClose').addEventListener('click', ()=> {
        document.getElementById('hidden-menu').style.visibility = "hidden";
});

// Home page video script

const srcValues = ["videos/videoyoga.mp4", "videos/videorun.mp4"];
let i = 0;
let replacesrc = () => {
    videoElement.setAttribute('src', srcValues[i])
    console.log(i)
}
let videoElement = document.getElementById("homepagevideo");
let playVideo = () =>{
    replacesrc();
    if (i >= (srcValues.length) - 1) {
        i = 0;
    } else {
        i++;
    }
    videoElement.play();
}
window.onload = function(){ 
    playVideo();
    videoElement.addEventListener("ended", function(){ playVideo(); });
}

//Scroll back to top button 

let scrollButton = document.getElementById("scrollbutton");

window.onscroll = function() {scrollFunction()};

let scrollFunction = () => {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    scrollButton.style.display = "block";
  } else {
    scrollButton.style.display = "none";
  }
}

let topFunction = () => {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}
scrollButton.addEventListener("click", topFunction)