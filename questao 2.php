<?php
$h = 145; $b = 4;
$alturas = [120,140,160,180];
$c = 0;
if ($h >= $alturas[0]) $c = $c+1;
if ($h >= $alturas[1]) $c = $c+1;
if ($h >= $alturas[2]) $c = $c+1;
if ($h >= $alturas[3]) $c = $c+1;
echo "$c";
