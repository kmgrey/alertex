function toggleImage() {
    let image = document.getElementById('main-image')
    let currentImage = image.src
    if (currentImage.endsWith("alertex-vectors-04.png")) {
      image.src = "../images/alertex-vectors-07.png"
    } else {
      image.src = "../images/alertex-vectors-04.png"
    }
}
function playAlert() {
    alert("This works");
}