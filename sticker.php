<?php

$snum = intval (@$_REQUEST['s']);
$es = intval (@$_REQUEST['es']);

$filename = sprintf ("qr%d%s.png", $snum, $es ? "-es" : "");

header ("Content-Type: image/png");
header ("Content-Disposition: attachment; filename=$filename");
readfile($filename);


