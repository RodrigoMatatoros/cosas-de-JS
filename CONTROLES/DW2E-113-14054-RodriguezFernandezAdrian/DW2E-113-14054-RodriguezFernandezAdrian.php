<?php

$r = $_REQUEST["r"];
$g = $_REQUEST["g"];
$b = $_REQUEST["b"];

$color = sprintf("#%02x%02x%02x", $r, $g, $b);

echo $color;

?>