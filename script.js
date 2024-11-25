function iframeResetToIndex() {
    if ((document.getElementById("iframeMain").contentWindow.location.href).includes("inicio.html") == false) {
        document.getElementById("iframeMain").contentWindow.location.href = "inicio.html"
    }
}