<?php
   $xml = simplexml_load_file("note.xml") or die("Error: Object Creation failure");
?>

<html>
   <head>
      
      <body>
         
         <?php
            echo $xml->COURSE . "<br>";
            echo $xml->COUNTRY . "<br>";
            echo $xml->COMPANY . "<br>";
            echo $xml->PRICE;
         ?>
         
      </body>
      
   </head>
</html>