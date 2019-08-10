<?php

$signs = array ();

$s = (object)NULL;
$s->sign_num = 1801;
$s->banner_title = "East Boston";
$s->html_title = array();
$s->html_title['en'] = "Boston Harborwalk: Boston's Wooden Shipbuilding Center";
$s->html_title['es'] = "El centro de construcción naval en madera de Boston";
$s->main_caption_html = array ();
$s->main_caption_html['en'] = "Samuel H. Pook was 23 when he designed"
    ." <em>Surprise</em>, the first"
    ." of several of his very fast clipper ships, and one of the"
    ." most successful clippers in the China trade. Pook later"
    ." became a naval architect for the U.S. Navy.";
$s->main_caption_html['es'] = "Samuel H. Pook tenía 23 años cuando"
    ." diseñó <em>Surprise</em>, el primero de varios de sus muy veloces"
    ." clippers y uno de los clippers más activos en el comercio"
    ." con China. Más adelante, Pook se convirtió en arquitecto"
    ." naval de la Armada de los Estados Unidos.";
$signs[$s->sign_num] = $s;

$s = (object)NULL;
$s->sign_num = 1802;
$s->banner_title = "East Boston";
$s->html_title = array();
$s->html_title['en'] = "Boston Harborwalk: Local Industries";
$s->html_title['es'] = "Boston Harborwalk: Industrias locales";
$s->main_caption_html = array ();
$s->main_caption_html['en'] = "Small buildings housed the many businesses"
    ." operating here, and stacks of lumber lined the wharves (Border Street"
    ." between Central Square and Maverick Street).";
$s->main_caption_html['es'] = "Los edificios pequeños albergaban muchos"
    ." negocios y había pilas de maderos a lo largo de los muelles."
    ." (Border Street entre Central Square y Maverick Street)";
$signs[$s->sign_num] = $s;

$s = (object)NULL;
$s->sign_num = 1803;
$s->banner_title = "East Boston";
$s->html_title = array();
$s->html_title['en'] = "Boston Harborwalk: Ship Repair";
$s->html_title['es'] = "Boston Harborwalk: Reparación de Embarcaciones";
$s->main_caption_html = array ();
$s->main_caption_html['en'] = "The 1928 photograph taken from the water"
    ." shows the larger vessel on the 2000-ton double-track marine"
    ." railway&ndash;the closer of the two railways visible ahead. At the time,"
    ." it was the largest railway in Boston and second largest in the"
    ." country. Crandall Dry Dock Engineers designed and built the marine"
    ." railways on this site and moved their office here in 1891.";
$s->main_caption_html['es'] = "Esta  foto de 1928 tomada desde el agua"
    ." muestra una embarcación en el varadero más grande con dos vías"
    ." para embarcaciones de hasta 2000 toneladas – el más cercano de"
    ." los varaderos que se divisan delante.  En aquella época, este"
    ." varadero era el más grande de Boston y el segundo más grande"
    ." del país. La compañía Crandall Dry Dock Engineers diseñó y"
    ." construyó los varaderos en este sitio y trasladó sus oficinas"
    ." aquí en 1891.";
$signs[$s->sign_num] = $s;

$s = (object)NULL;
$s->sign_num = 1901;
$s->banner_title = "Charlestown";
$s->html_title = array();
$s->html_title['en'] = "New Life as Floating Barracks";
$s->html_title['es'] = "Nueva vida como cuarteles flotantes";
$s->main_caption_html = array ();
$s->main_caption_html['en'] = "U.S.R.S. <em>Wabash</em> doing duty as a"
    ." receiving ship in the Charleston Navy"
    ." Yard in the late 1870s.";
$s->main_caption_html['es'] = "La embarcación U.S.R.S. Wabash operando como"
    ."buque receptor en Charleston Navy Yard a fines de la década de 1870.";
$signs[$s->sign_num] = $s;

$s = (object)NULL;
$s->sign_num = 1902;
$s->banner_title = "Charlestown";
$s->html_title['en'] = "Transformed Land";
$s->html_title['es'] = "Tierra transformada";
$s->main_caption_html = array ();
$s->main_caption_html['en'] = "Joshua Winer's mural depicts"
    ." Massachusett women and men"
    ." engaged in seasonal encampment"
    ." activities during the pre-Colonial era.";
$s->main_caption_html['es'] = "El mural de Joshua Winer muestra a mujeres y"
    ." hombres de Massachusetts que participan en actividades en un"
    ." campamento estacional durante la era precolonial.";
$signs[$s->sign_num] = $s;

$s = (object)NULL;
$s->sign_num = 1903;
$s->banner_title = "East Boston";
$s->html_title['en'] = "Exploring the Living Shoreline";
$s->main_caption_html = array ();
$s->main_caption_html['en'] = "Saltmarsh chordgrass"
    ." (<em>Spartina alterniflora</em>) and saltmeadow cordgrass"
    ." (<em>Spartina patens</em>) were the original plant species"
    ." introduced into the low and high marsh. Many additional plants"
    ." now call the Living Shoreline home. How many can you identify?<";
$signs[$s->sign_num] = $s;

$s = (object)NULL;
$s->sign_num = 1904;
$s->banner_title = "East Boston";
$s->html_title['en'] = "Prolific inventor: Otis Tufts";
$s->main_caption_html = array ();
$s->main_caption_html['en'] = "Iron-hulled <em>R. B. Forbes</em>"
    ." with its twin smoke stacks is shown alongside the"
    ." <em>U.S.S.Jamestown</em>, famous for its famine relief"
    ." journey to Ireland. The <em>R. B. Forbes</em> was also"
    ." used extensively in salvage operations.";
$signs[$s->sign_num] = $s;

$s = (object)NULL;
$s->sign_num = 1905;
$s->banner_title = "East Boston";
$s->html_title['en'] = "View of Boston in 1848";
$s->main_caption_html = array ();
$s->main_caption_html['en'] = "<p>Much has changed along Boston's"
    ." waterfront and in the harbor since this image was drawn in 1848."
    ." Wharves were contructed and mud flats filled, creating more land."
    ." Buildings went up; others were torn down.</p>"
    ." <p><strong>What else is different?"
    ." Which Boston landmarks can you still see today?</strong></p>\n";
$signs[$s->sign_num] = $s;


function redirect_permanent ($target) {
  header ("Location: $target", true, 301);
  exit ();
}

$req = parse_url ($_SERVER['REQUEST_URI']);
$path = $req['path'];

$arg_lang = @$_REQUEST['lang'];

$allowed_lang = array ();
$allowed_lang["en"] = 1;
$allowed_lang["es"] = 1;

$lang = "en";
if (@$allowed_lang[$arg_lang])
    $lang = $arg_lang;

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

if ($path == "/privacy") {
    make_privacy ();
    exit ();
}

if ($path == "/") {
    make_index ();
    exit ();
}

function h($val) {
	return (htmlentities ($val, ENT_QUOTES, 'UTF-8'));
}

function fix_target ($path) {
	$path = preg_replace ("/[&]/", "&amp;", $path);
	return ($path);
}

function fatal ($str) {
	echo ("fatal: " . h($str));
	exit();
}



$body = "";
$body_class = "";

function pstart () {
}

function pfinish () {
    global $body, $body_class, $title, $cache_sig, $lang;
    
    $ret = "";
    $ret .= "<!DOCTYPE html>\n";
    $ret .= sprintf ("<html lang='%s'>\n", $lang);
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
    
    $ret .= sprintf ("<script>\n"
        ."var test_mode = %s;\n"
        ."</script>\n",
        @$_REQUEST['test'] ? 1 : 0);

    $ret .= "</head>\n";
    $c = "";
    if ($body_class)
        $c = sprintf ("class='%s'", $body_class);
    $ret .= sprintf ("<body %s>\n", $c);

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
    global $signs, $body, $body_class, $lang, $title;
    
    $filename = sprintf ("s%d-%s.html", $sign_num, $lang);

    pstart ();
    $body_class = sprintf ("sign%d", $sign_num);
    
    if (($s = @$signs[$sign_num]) == NULL) {
        echo ("missing sign info");
        exit ();
    }
    
    if (($title = @$s->html_title[$lang]) == "")
        $title = $s->html_title['en'];

    $body .= "<div class='banner'>\n";
    $body .= "  <img src='harborwalk-logo-80.png' alt='' />\n";
    $body .= sprintf ("  <span>%s</span>\n", h($s->banner_title));
    $body .= "</div>\n";

    $body .= "<header class='mainheader'>\n";

    $body .= "<nav>\n"
        ."  <ul>\n";

    if (isset ($s->main_caption_html['es'])) {
        $t = sprintf ("/%d?lang=en", $sign_num);
        $body .= sprintf (
            "<li><a href='%s'>English</a></li>\n", 
            fix_target ($t));
        
        $t = sprintf ("/%d?lang=es", $sign_num);
        $body .= sprintf (
            "<li><a href='%s'>Español</a></li>\n", 
            fix_target ($t));
    }

    switch ($lang) {
    default:
    case "en": {
        $body .= "<li><a href='#didyouknow'>More...</a></li>\n"
            ."<li><a href='#resources'>Resources</a></li>\n"
            ."<li><a href='#aboutus'>About us</a></li>\n";
        break;
    }
    case "es": {
        $body .= "<li><a href='#didyouknow'>Más...</a></li>\n"
            ."<li><a href='#resources'>Recursos</a></li>\n"
            ."<li><a href='#aboutus'>Acerca de nosotros</a></li>\n";
        break;
    }
    }
    
    $body .= "  </ul>\n"
        ."</nav>\n";

    /* caption for banner image */
    $body .= "<div>\n";

    $t = sprintf ("sign%d-banner-hires.jpg", $sign_num);
	$body .= sprintf (
        "<img class='hires' src='%s' alt='' />\n", 
        fix_target ($t));
    $t = sprintf ("sign%d-banner-lores.jpg", $sign_num);
	$body .= sprintf (
        "<img class='lores' src='%s' alt='' />\n", 
        fix_target ($t));

    $body .= "<div class='main-caption'>\n";
    $body .= @$s->main_caption_html[$lang];
    $body .= "</div>\n";

    $body .= "</div>\n";
    $body .= "</header>\n";

    $guts = @file_get_contents ($filename);
    if ($guts == "")
        fatal ("missing sign contents");
    $body .= $guts;

    global $lang;
    $fname = sprintf ("about-%s.html", $lang);
    $body .= file_get_contents ($fname);

    pfinish ();
}


function make_privacy () {
    global $body;
    pstart ();
    $body .= file_get_contents ("privacy.html");
    pfinish ();
}

function make_index () {
    global $body, $signs;

    pstart ();
    foreach ($signs as $s) {
        $body .= "<div>\n";
        $sep = "";
        foreach ($s->main_caption_html as $lang => $dummy) {
            $body .= $sep;
            $sep = " | ";
            $t = sprintf ("/%d?lang=%s", $s->sign_num, $lang);
            $text = sprintf ("sign%d-%s", $s->sign_num, $lang);
            $body .= sprintf (
                "<a href='%s'>%s</a>\n", 
                fix_target ($t),
                h($text));
        }
        $body .= "</div>\n";
    }
    pfinish ();
}



echo ("not found");
exit ();



