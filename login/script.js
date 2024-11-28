function chooseLoginRegisterFunc(loginRegister) {
    if (loginRegister == 1) {
        document.getElementById("forms-cadastro").style.display = "none";
        document.getElementById("formMainLabelRegister").style.display = "none";
    }
    else if (loginRegister == 2) {
        document.getElementById("forms-login").style.display = "none";
        document.getElementById("formMainLabelLogin").style.display = "none";
    }
    
    document.getElementById("desktopMain").style.display = "block";
    document.getElementById("formDivisor").style.display = "none";  // General, valid for any of the options. //
    document.getElementById("mobileMain").style.display = "none";
}

function passwordShowHide(passwordShowHideButtonNumber) {
    var passwordShowHideElementID = document.getElementById("senha" + passwordShowHideButtonNumber)
    var currentPasswordShowHidePosition = document.getElementById("passwordShowHideButton" + passwordShowHideButtonNumber).src

    if (currentPasswordShowHidePosition.includes("openEye")) {
        document.getElementById("passwordShowHideButton" + passwordShowHideButtonNumber).src = "../media/icons/closedEyeWhite.png";
    }
    else {
        document.getElementById("passwordShowHideButton" + passwordShowHideButtonNumber).src = "../media/icons/openEyeWhite.png";
    }

    if (passwordShowHideElementID.type === "password") {
        passwordShowHideElementID.type = "text";
    }
    else {
        passwordShowHideElementID.type = "password";
    }
}

function forgotPassword(openOrClose) {
    if (openOrClose == "open") {
        document.getElementById("forgotPasswordPopup").style.display = "inline";
    }
    else {
        document.getElementById("forgotPasswordPopup").style.display = "none";
    }
}

function goToHome() {
    window.location.href = "home.php";
}

function outputLogin(message, button) {
    document.getElementById("formMessage").style.display = "block"
    document.getElementById("formMessageP").innerHTML = message
    document.getElementById("formMessageButton").innerHTML = button
}