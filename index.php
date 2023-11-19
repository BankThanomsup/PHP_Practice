<?php

function Powerof3($v)
{
    return $v * $v * $v;
}
$a = 5;
$b = 15;
$c = 25;

echo "<br>" . "ผลลัพธ์ยกกำลัง 3 ของ" . $a . "คือ" . Powerof3($a);
echo "<br>" . "ผลลัพธ์ยกกำลัง 3 ของ" . $b . "คือ" . Powerof3($b);
echo "<br>" . "ผลลัพธ์ยกกำลัง 3 ของ" . $c . "คือ" . Powerof3($c);
