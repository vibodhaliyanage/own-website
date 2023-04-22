var y = 0;
var a = 0;


function m1() {


    if (y == 0) {

    } else {
        y = y - 4;
        var x = y;
        m(x);
    }
}

function m2() {
    var r = new XMLHttpRequest();
    r.onreadystatechange = function() {
        if (r.readyState == 4) {
            var text = r.responseText;
            var a1 = text.split(",");
            a = a1["0"];

        }
    }
    r.open("GET", "search.php", true);
    r.send();

    if (a == 0) {
        y = y + 0;
        var x = y;
        m(x);

    } else {
        y = y + 4;
        var x = y;
        m(x);
    }

}

function m(x) {

    var r = new XMLHttpRequest();
    r.onreadystatechange = function() {
        if (r.readyState == 4) {
            var text = r.responseText;
            var d = document.getElementById("main");

            var a1 = text.split(",");
            a = a1["0"];
            d.innerHTML = a1["1"];
        }
    }
    y = x;
    r.open("GET", "search.php?&i=" + y, true);
    r.send();

}