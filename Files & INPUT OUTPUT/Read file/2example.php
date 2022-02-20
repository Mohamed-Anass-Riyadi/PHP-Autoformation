<html>

   <head>
      <title>Reading a file using PHP</title>
   </head>
   
   <body>
    <!-- r option -->
      <?php
         $filename = 'textt.txt';

         $openfile = fopen($filename, 'r');
         if ($openfile) {
            
             echo 'The file ' . $filename . ' is open';
             fclose($openfile);
         }         
      ?>
      
   </body>
</html>