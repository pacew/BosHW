<?php

ini_set ('display_errors', 1);


$signs = array ();

$s = (object)NULL;
$s->sign_num = 1801;
$s->banner_title = "East Boston";
$s->html_title = "Boston Harborwalk: East Boston Clipper Ships";
$s->main_caption_html = "Samuel H. Pook was 23 when he designed"
    ." <em>Surprise</em>, the first"
    ." of several of his very fast clipper ships, and one of the"
    ." most successful clippers in the China trade. Pook later"
    ." became a naval architect for the U.S. Navy.";

$signs[$s->sign_num] = $s;


function redirect_permanent ($target) {
  header ("Location: $target", true, 301);
  exit ();
}

$path = $_SERVER['REQUEST_URI'];

/* legacy */
if ($path == "/sign1-en.html")
  redirect_permanent ("/1801");
if ($path == "/sign1801-en.html")
  redirect_permanent ("/1801");

if (preg_match ('|^/([1-9][0-9][0-9][0-9])$|', $path, $matches)) {
    $sign_num = intval ($matches[1]);
    make_sign ($sign_num);
    exit ();
}

function h($val) {
	return (htmlentities ($val, ENT_QUOTES, 'UTF-8'));
}

function fix_target ($path) {
	$path = preg_replace ("/[&]/", "&amp;", $path);
	return ($path);
}


$body = "";

function pstart () {
}

function pfinish () {
    global $body, $title, $cache_sig;
    
    $ret = "";
    $ret .= "<!DOCTYPE html>\n";
    $ret .= "<html lang='en'>\n";
    $ret .= "<head>\n";
    $ret .= sprintf ("<title>%s</title>\n", h($title));
    $ret .= "<meta charset='utf-8' />\n";
    $ret .= "<link rel='icon' href='harborwalk-logo-ico.png' />\n";
    $ret .= sprintf (
        "<link rel='stylesheet' href='style.css?v=%s' />\n",
        $cache_sig);
    $ret .= "<meta name='viewport'"
        ." content='width=device-width, initial-scale=1.0' />\n";
    $ret .= "<script"
        ." src='https://code.jquery.com/jquery-3.3.1.min.js'"
        ." integrity='sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8='"
        ." crossorigin='anonymous'></script>\n";
    $ret .= sprintf ("<script src='script.js?v=%s'></script>\n", $cache_sig);

    $ret .= "<!-- Global site tag (gtag.js) - Google Analytics -->\n";
    $ret .= "<script async"
        ." src='https://www.googletagmanager.com/gtag/js?id=UA-120321645-1'>"
        ."</script>\n";
    $ret .= "<script>\n"
        ." window.dataLayer = window.dataLayer || [];\n"
        ." function gtag(){dataLayer.push(arguments);}\n"
        ." gtag('js', new Date());\n"
        ." gtag('config', 'UA-120321645-1');\n"
        ."</script>\n";
    
    $ret .= "</head>\n";
    $ret .= "<body class='body'>\n";

    $ret .= $body;

    $ret .= "<footer class='mainfooter'>\n"
        ."<p>\n"
        ."  <a href='http://www.bostonharbornow.org/'>Boston Harbor Now</a>\n"
        ."  | "
        ."  <a href='/privacy'>Privacy Policy</a>\n"
        ."</p>\n"
        ."</footer>\n";
    
    $ret .= "</body>\n";
    $ret .= "</html>\n";
    echo ($ret);
    exit ();
}

function make_sign ($sign_num) {
    global $signs, $body;
    
    $filename = sprintf ("s%d-en.html", $sign_num);

    pstart ();
    if (($s = @$signs[$sign_num]) == NULL) {
        echo ("missing sign info");
        exit ();
    }
    $title = $s->html_title;

    $body .= "<div class='banner'>\n";
    $body .= "  <img src='harborwalk-logo-80.png' alt='' />\n";
    $body .= sprintf ("  <span>%s</span>\n", h($s->banner_title));
    $body .= "</div>\n";

    $body .= "<header class='mainheader'>\n";

    $body .= "<nav>\n"
        ."  <ul>\n";

    $t = sprintf ("/%d?lang=en", $sign_num);
    $body .= sprintf ("<li><a href='%s'>English</a></li>\n", fix_target ($t));

    $t = sprintf ("/%d?lang=es", $sign_num);
    $body .= sprintf ("<li><a href='%s'>Español</a></li>\n", fix_target ($t));

    $body .= "<li><a href='#didyouknow'>Did you know?</a></li>\n"
        ."<li><a href='#resources'>Resources</a></li>\n"
        ."<li><a href='#aboutus'>About us</a></li>\n";

    $body .= "  </ul>\n"
        ."</nav>\n";

    /* caption for banner image */
    $body .= "<div>\n";

    $t = sprintf ("sign%d-banner-1920.png", $sign_num);
	$body .= sprintf (
        "<img class='hires' src='%s' alt='' />\n", 
        fix_target ($t));
    $t = sprintf ("sign%d-banner-600.png", $sign_num);
	$body .= sprintf (
        "<img class='lores' src='%s' alt='' />\n", 
        fix_target ($t));

    $body .= "<div class='main-caption'>\n";
    $body .= $s->main_caption_html;
    $body .= "</div>\n";

    $body .= "</div>\n";
    $body .= "</header>\n";

    $body .= file_get_contents ($filename);

    $body .= file_get_contents ("about.html");

    pfinish ();
}



echo ("not found");
exit ();



