<?php
         $filename = "function.php";
         $file = fopen( $filename, "r" );
         
         if( $file == false ) {
            echo ( "Error in opening file" );
            exit();
         }
         
         $filesize = filesize( $filename );
         $filetext = fread( $file, $filesize );
         fclose( $file );
         
         echo ( "File size : $filesize bytes" );
         echo ( "<pre>$filetext</pre>" );
      ?>

<?php
         function printMe($param = 1) {
            print $param;
         }
         
         printMe("This is test");
         printMe();
      ?>

<?php
    print date("d/m/y G:i:s",time());
?>

<?php
   define("MINSIZE", 50);
   
   echo MINSIZE;
   echo constant("MINSIZE"); // same thing as the previous line
?>