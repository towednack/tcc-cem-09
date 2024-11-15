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