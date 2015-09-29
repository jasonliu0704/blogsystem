//complete code listing for js/lightbox.js
function init(){
var lightboxElements = "<div id='lightbox'>";
lightboxElements
 += "<div id='overlay' class='hidden'></div>";
lightboxElements
 += "<img class='hidden' id='big-image' />";
lightboxElements
 += "</div>";
document.querySelector("body").innerHTML += lightboxElements;


//end of changes
prepareThumbs();
//new code: register toggle as event handler
var bigImage = document.querySelector("#big-image")
bigImage.addEventListener("click",toggle, false);
}


//edit existing function
function toggle( event ){
//which image was clicked
var clickedImage = event.target;
var bigImage = document.querySelector("#big-image");
var overlay = document.querySelector("#overlay");
bigImage.src = clickedImage.src;
//if overlay is hidden, we can assume the big image is hidden
if ( overlay.getAttribute("class") === "hidden" ) {
overlay.setAttribute("class", "showing");
bigImage.setAttribute("class", "showing");
} else {
overlay.setAttribute("class", "hidden");
bigImage.setAttribute("class", "hidden");
}
}




//declare new function
function prepareThumbs() {
var dtElements = document.querySelectorAll("dl#images dt");
var i = 0;
var image, dt;
//loop through all <dt> elements
while ( i < dtElements.length ) {
dt = dtElements[i];
//set class='lightbox'
dt.setAttribute("class", "lightbox");
image = dt.querySelector("img");
//register a click event handler for the <img> elements
image.addEventListener("click", toggle, false);
i += 1;
}
}

document.addEventListener("DOMContentLoaded", init, false);
