function iframeResetToIndex() {
    if ((document.getElementById("iframeMain").contentWindow.location.href).includes("inicio.html") == false) {
        document.getElementById("iframeMain").contentWindow.location.href = "inicio.html"
    }
}

function changeThemeImg() {
    var totalNumberOfImages = 6

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

function downloadHorario() {
  const link = document.createElement('a');
  link.href = 'https://drive.google.com/uc?export=download&id=1CCnK_9ZOh3ii04d4j2MzJp5w_C-auGm8';
  link.download = 'CronogramaDeAulas.pdf';
  link.click();
}

function downloadCalendario() {
  const link = document.createElement('a');
  link.href = 'https://drive.google.com/uc?export=download&id=1XriOA75JfjfHF7U61rO8jqxiFUkD3JNG';
  link.download = 'CalendarioAnual2025.pdf';
  link.click();
}