<?php
  if(empty($say_text)) {
    $to_user_room = "$name~RS thinks nothing--now that is just typical!\n";
  } else {
    $to_user_room = "$name~RS thinks . o O ( $say_text~RS )\n";
  }
?>