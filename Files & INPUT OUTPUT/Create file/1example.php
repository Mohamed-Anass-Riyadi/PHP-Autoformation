<html>

   <head>
      <title>Reading a file using PHP</title>
   </head>
   
   <body>
    <!-- r option -->
      <?php
         $filename = 'text.txt';

         $openfile = fopen($filename, 'w+');
         if ($openfile) {
            
             echo 'The file ' . $filename . ' is open';
             fclose($openfile);
         }         
      ?>
      
   </body>
</html>