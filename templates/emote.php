<?php
  if($say_text[0] != " ") {
    $say_text = " " . $say_text;
  }
  
  $to_user_room = "$name~RS$say_text~RS\n";
?>