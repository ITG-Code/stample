function startTid() {
    var idag = new Date();
    var t = idag.getHours();
    var m = idag.getMinutes();
    var s = idag.getSeconds();
    m = checkTid(m);
    s = checkTid(s);
    document.getElementById('txt').innerHTML = t + ":" + m + ":" + s;
    setTimeout(startTid, 500);
}
//lägger till en nolla framför tal som är mindre än 10
function checkTid(i) {
    if (i < 10) {
        i = "0" + i;
    }
    return i;
}


var switsh = document.getElementById('theme').getAttribute("href") != '/public/css/flatly.css';
function changeCSS() {
    if (switsh) {
        switsh = false;
        document.getElementById("theme").setAttribute("href", '/public/css/flatly.css');
        setSkin('flatly');
    }else{
        switsh = true;
        document.getElementById("theme").setAttribute("href", '/public/css/darkly.css');
        setSkin('darkly');
    }
}
function setSkin(skin) {
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            //alert(this.responseText);
        }
    };
    xhttp.open("GET", "/public/home/setskin/"+skin, true);
    xhttp.send();
}

jQuery(document).ready(function($) {
    $(".clickable-row").click(function() {
        window.document.location = $(this).data("href");
    });
});

startTid();