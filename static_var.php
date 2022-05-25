<?php
function abc(){
    static $count = 0;
    $count++;
    print $count;
}

print abc();
print abc();
print abc();
?>