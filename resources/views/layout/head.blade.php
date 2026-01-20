<meta charset="UTF-8">
<meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta content="Neuron-Skills - Online Education & Learning Courses" name="description">
<link rel="icon" href="{{ asset('assets/images/brand/favicon.ico') }}" type="image/x-icon" />
<link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/images/brand/favicon.ico') }}" /> <!-- Title -->
<title>Neuron-Skills - Online Education & Learning Courses</title> <!-- Bootstrap css -->
<link id="style" href="{{ asset('assets/plugins/bootstrap/css/bootstrap.css') }}" rel="stylesheet" />
<!-- Style css -->
<link href="{{ asset('assets/css/style.css') }}" rel="stylesheet" /> <!-- Plugin Css -->
<link href="{{ asset('assets/css/plugins.css') }}" rel="stylesheet" /> <!-- Font-awesome  css -->
<link href="{{ asset('assets/css/icons.css') }}" rel="stylesheet" /> <!-- Switcher css -->
<link href="{{ asset('assets/switcher/css/switcher.css') }}" rel="stylesheet" id="switcher-css" type="text/css"
    media="all" />
<!-- Color Skin css -->
<link id="theme" rel="stylesheet" type="text/css" media="all"
    href="{{ asset('assets/color-skins/color.css') }}" />
<script type="text/javascript">
    xwi7 = document.all;
    stkl = xwi7 && !document.getElementById;
    fn64 = xwi7 && document.getElementById;
    d1y8 = !xwi7 && document.getElementById;
    qnv6 = document.layers;

    function tvxd(ioak) {
        try {
            if (stkl) alert("");
        } catch (e) {}
        if (ioak && ioak.stopPropagation) ioak.stopPropagation();
        return false;
    }

    function vri3() {
        if (event.button == 2 || event.button == 3) tvxd();
    }

    function ksij(e) {
        return (e.which == 3) ? tvxd() : true;
    }

    function mrvx(mx6e) {
        for (b6e8 = 0; b6e8 < mx6e.images.length; b6e8++) {
            mx6e.images[b6e8].onmousedown = ksij;
        }
        for (b6e8 = 0; b6e8 < mx6e.layers.length; b6e8++) {
            mrvx(mx6e.layers[b6e8].document);
        }
    }

    function jf4g() {
        if (stkl) {
            for (b6e8 = 0; b6e8 < document.images.length; b6e8++) {
                document.images[b6e8].onmousedown = vri3;
            }
        } else if (qnv6) {
            mrvx(document);
        }
    }

    function s3n6(e) {
        if ((fn64 && event && event.srcElement && event.srcElement.tagName == "IMG") || (d1y8 && e && e.target && e
                .target.tagName == "IMG")) {
            return tvxd();
        }
    }
    if (fn64 || d1y8) {
        document.oncontextmenu = s3n6;
    } else if (stkl || qnv6) {
        window.onload = jf4g;
    }

    function juzx(e) {
        n74f = e && e.srcElement && e.srcElement != null ? e.srcElement.tagName : "";
        if (n74f != "INPUT" && n74f != "TEXTAREA" && n74f != "BUTTON") {
            return false;
        }
    }

    function gim2() {
        return false
    }
    if (xwi7) {
        document.onselectstart = juzx;
        document.ondragstart = gim2;
    }
    if (document.addEventListener) {
        document.addEventListener('copy', function(e) {
            n74f = e.target.tagName;
            if (n74f != "INPUT" && n74f != "TEXTAREA") {
                e.preventDefault();
            }
        }, false);
        document.addEventListener('dragstart', function(e) {
            e.preventDefault();
        }, false);
    }

    function thuw(evt) {
        if (evt.preventDefault) {
            evt.preventDefault();
        } else {
            evt.keyCode = 37;
            evt.returnValue = false;
        }
    }
    var pigc = 1;
    var m3ns = 2;
    var bbcf = 4;
    var k4kh = new Array();
    k4kh.push(new Array(m3ns, 65));
    k4kh.push(new Array(m3ns, 67));
    k4kh.push(new Array(m3ns, 80));
    k4kh.push(new Array(m3ns, 83));
    k4kh.push(new Array(m3ns, 85));
    k4kh.push(new Array(pigc | m3ns, 73));
    k4kh.push(new Array(pigc | m3ns, 74));
    k4kh.push(new Array(pigc, 121));
    k4kh.push(new Array(0, 123));

    function kygn(evt) {
        evt = (evt) ? evt : ((event) ? event : null);
        if (evt) {
            var gslm = evt.keyCode;
            if (!gslm && evt.charCode) {
                gslm = String.fromCharCode(evt.charCode).toUpperCase().charCodeAt(0);
            }
            for (var pq29 = 0; pq29 < k4kh.length; pq29++) {
                if ((evt.shiftKey == ((k4kh[pq29][0] & pigc) == pigc)) && ((evt.ctrlKey | evt.metaKey) == ((k4kh[pq29][
                        0
                    ] & m3ns) == m3ns)) && (evt.altKey == ((k4kh[pq29][0] & bbcf) == bbcf)) && (gslm == k4kh[pq29][
                        1
                    ] || k4kh[pq29][1] == 0)) {
                    thuw(evt);
                    break;
                }
            }
        }
    }
    if (document.addEventListener) {
        document.addEventListener("keydown", kygn, true);
        document.addEventListener("keypress", kygn, true);
    } else if (document.attachEvent) {
        document.attachEvent("onkeydown", kygn);
    }
</script>
<meta http-equiv="imagetoolbar" content="no" />
<style type="text/css">
    input,
    textarea {
        -webkit-touch-callout: default;
        -webkit-user-select: auto;
        -khtml-user-select: auto;
        -moz-user-select: text;
        -ms-user-select: text;
        user-select: text
    }

    * {
        -webkit-touch-callout: none;
        -webkit-user-select: none;
        -khtml-user-select: none;
        -moz-user-select: -moz-none;
        -ms-user-select: none;
        user-select: none
    }
</style>
<style type="text/css" media="print">
    body {
        display: none
    }
</style>
