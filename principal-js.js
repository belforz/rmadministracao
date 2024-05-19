window.onload = function() {
    // Verificar se o usuário já aceitou os cookies
    if (!getCookie("cookieAccepted")) {
        document.getElementById("cookieConsent").style.display = "block";
    }

    document.getElementById("acceptCookie").onclick = function() {
        setCookie("cookieAccepted", "true", 365);
        document.getElementById("cookieConsent").style.display = "none";
    };

    document.getElementById("closeCookieConsent").onclick = function() {
        document.getElementById("cookieConsent").style.display = "none";
    };
};

// Função para definir um cookie
function setCookie(cname, cvalue, exdays) {
    var d = new Date();
    d.setTime(d.getTime() + (exdays * 24 * 60 * 60 * 1000));
    var expires = "expires=" + d.toUTCString();
    document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
}

// Função para obter um cookie
function getCookie(cname) {
    var name = cname + "=";
    var decodedCookie = decodeURIComponent(document.cookie);
    var ca = decodedCookie.split(';');
    for (var i = 0; i < ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0) == ' ') {
            c = c.substring(1);
        }
        if (c.indexOf(name) == 0) {
            return c.substring(name.length, c.length);
        }
    }
    return "";
}
