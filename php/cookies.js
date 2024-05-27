function getCookie(name) {
    let match = document.cookie.match(new RegExp('(^| )' + name + '=([^;]+)'));
    if (match) return match[2];
    return null;
}

function setCookie(name, value, days) {
    let expires = "";
    if (days) {
        let date = new Date();
        date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
        expires = "; expires=" + date.toUTCString();
    }
    document.cookie = name + "=" + (value || "") + expires + "; path=/";
}

function acceptCookies() {
    setCookie("cookieConsent", "accepted", 365);
    document.getElementById('cookie-consent').style.display = 'none';
}

function declineCookies() {
    setCookie("cookieConsent", "declined", 365);
    document.getElementById('cookie-consent').style.display = 'none';
}

window.onload = function() {
    if (!getCookie("cookieConsent")) {
        document.getElementById('cookie-consent').style.display = 'block';
    }
}
