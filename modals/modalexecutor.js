var modalbg = document.getElementById('modalbg');
var images = document.getElementsByClassName('article-img');
var modalImg = document.getElementById("imgs");

for (var i = 0; i < images.length; i++) {
    var img = images[i];
    // and attach our click listener for this image.
    img.onclick = function(evt) {
        modalbg.style.display = "block";
        modalImg.src = this.src;
    }
}

var span = document.getElementsByClassName("close")[0];

span.onclick = function() {
    modalbg.style.display = "none";
}