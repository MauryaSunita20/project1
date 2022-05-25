<?php
 $array = array( 1, 2, 3, 4, 5);
         
 foreach( $array as $value ) {
     if ($value == 4) continue;   //escape when array value is 4  
      echo "Value is $value ";
      
}
?>

<?php
 $array = array( 1, 2, 3, 4, 5);    //numeric array also look like this (remove break or continue)
         
 foreach( $array as $value ) {
     if ($value == 4) break;    //break when array value 4 
      echo "Value is $value ";
      
}
?>