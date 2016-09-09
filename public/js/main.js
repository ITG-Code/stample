function startTid() {
    var idag = new Date();
    var t = idag.getHours();
    var m = idag.getMinutes();
    var s = idag.getSeconds();
    m = checkTid(m);
    s = checkTid(s);
    document.getElementById('txt').innerHTML = t + ":" + m + ":" + s;
    var t = setTimeout(startTid, 500);
}
function checkTid(i) {
    if (i < 10) {
        i = "0" + i
    }
    ; //lägger till en nolla framför tal som är mindre än 10
    return i;
}


var switsh = false;
function changeCSS() {
    if (switsh) {
        switsh = false;
        document.getElementById("theme").setAttribute("href", '/public/css/flatly.css');
    }else{
        switsh = true;
        document.getElementById("theme").setAttribute("href", '/public/css/darkly.css');
    }
}