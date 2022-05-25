<?php
//The following example will increment the value of i at least once, and it will continue incrementing the variable i as long as it has a value of less than 10
    $i = 0;
    $num = 0;
     
    do {
        $i++;
       }
         
    while( $i < 10 );
    echo ("Loop stopped at i = $i" );
?>