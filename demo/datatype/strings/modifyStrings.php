<!-- modify Strings  -->

<?php 
   $name = "Hello World!";

   echo strtoupper($name); //to upper case

   echo strtolower($name);  //to lower case

   echo trim($name);  //remove white space

  echo str_replace("World!", "gaurav!", $name);  //replace the "World!" to "gaurav!" in $name  varible.

  echo strrev($name);   //reverse the name variable.

  $y = explode (" ", $name);  //convert string to array 
  // echo $y;
  print_r($y);   //print and echo do'not work. show error.  print_r means print human-radable information..
?>


