<?php

for ($i=2; $i<=24 ; $i++) { 
    printMultiply($i);
}
function printMultiply($x){
    echo "<br> สูตรคูณแม่ $x = " ;
    for($i=1;$i<=12;$i++){
        echo ($x*$i)." , ";
    }
    }
?>