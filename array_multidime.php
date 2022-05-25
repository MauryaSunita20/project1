<?php
         $marks = array( 
            "A" => array (
               "physics" => 35,
               "maths" => 30,	
               "chemistry" => 39
            ),
            
            "B" => array (
               "physics" => 30,
               "maths" => 32,
               "chemistry" => 29
            ),
            
            "C" => array (
               "physics" => 31,
               "maths" => 22,
               "chemistry" => 39
            )
         );
         
         /* Accessing multi-dimensional array values */
         echo "Marks for A in physics : " ;
         echo $marks['A']['physics'] . "<br />"; 
         
         echo "Marks for B in maths : ";
         echo $marks['B']['maths'] . "<br />"; 
         
         echo "Marks for C in chemistry : " ;
         echo $marks['C']['chemistry'] . "<br />"; 
      ?>