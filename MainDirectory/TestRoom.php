<?php

function funcCount(){
    static $count = 0;
    $count++;
    echo $count."\n";
}
for($i=0;$i<10;$i++) {
    funcCount();
}