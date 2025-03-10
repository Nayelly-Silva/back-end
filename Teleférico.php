<?php
$c=10; $a=20;
$v = $a / ($c - 1);  
if ($a % ($c- 1) != 0) $v = $v + 1;  
echo (int)$v;
