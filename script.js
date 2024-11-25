function iframeResetToIndex() {
    if ((document.getElementById("iframeMain").contentWindow.location.href).includes("inicio.html") == false) {
        document.getElementById("iframeMain").contentWindow.location.href = "inicio.html"
    }
}

function changeThemeImg() {
    var totalNumberOfImages = 2

    var themeImg = document.getElementById('indexBackgroundImage'),
    style = themeImg.currentStyle || window.getComputedStyle(themeImg, false),
    backgroundImg = style.backgroundImage,
    themeImgCurrentNumber = (backgroundImg.slice(4, -6).replace(/"/g, "")).substr((backgroundImg.slice(4, -6).replace(/"/g, "")).length - 1);

    if (themeImgCurrentNumber != totalNumberOfImages) {
        themeImg.style.backgroundImage = "url('media/background/dark/graffiti" + (+themeImgCurrentNumber + 1) +".png')"
    }
    else {
        themeImg.style.backgroundImage = "url('media/background/dark/graffiti1.png')"
    }
}