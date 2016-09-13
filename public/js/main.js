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
$('body').on('click.collapse-next.data-api', '[data-toggle=collapse-next]', function() {
    var $target = $(this).parent().next()
    $target.data('bs.collapse') ? $target.collapse('toggle') : $target.collapse()
});