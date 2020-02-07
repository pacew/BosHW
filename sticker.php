<?php

$snum = intval (@$_REQUEST['s']);
$es = intval (@$_REQUEST['es']);
$download = intval (@$_REQUEST['download']);

$filename = sprintf ("qr%d%s.png", $snum, $es ? "-es" : "");

if ($download == 0) {
    $t = sprintf ("sticker.php"
        ."?s=%d"
        ."&es=%d"
        ."&download=1",
        $snum, $es);

    echo ("<body style='background: #ccc'>\n");
    echo ("<div style='padding-bottom:3em'>");
    echo ("<a href='/admin'>admin home</a> | ");
    echo (sprintf ("<a href='%s'>download this sticker</a>",
            $t, $filename));
    echo ("</div>");
    echo (sprintf ("<a href='%s'><img src='%s' width='400px' alt='' /></a>",
            $t, $filename));

    echo ("</body>\n");
} else {
    header ("Content-Type: image/png");
    header ("Content-Disposition: attachment; filename=$filename");
    readfile($filename);
}


