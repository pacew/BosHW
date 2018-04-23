<?php

function redirect_permanent ($target) {
  header ("Location: $target", true, 301);
  exit ();
}

$path = $_SERVER['REQUEST_URI'];

if ($path == "/1801")
  redirect_permanent ("sign1-en.html");

echo ("not found");




