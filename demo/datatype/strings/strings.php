<!-- strings -->

<!-- strings is a sequence of characters. strings are surrounded by double quotes or single quotes. -->



<?php 
  $x = "hello world";
 
  echo "$x <br>";
  echo 'john $x <br>';

  //  as you see a clear that you can deaclre strings with single and double quotes.
  // but there is a differnce. double quotes process the string but single qutes do not.
  

  // string length

  echo strlen($x);

  // string word count


  echo str_word_count($x);

  // search text in the strings

  echo strpos($x, "world");

  # if the string is found then it gives index otherwise it returns the false.
?>