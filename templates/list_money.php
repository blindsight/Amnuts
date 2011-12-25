<?php
  $to_user  = "\n+----------------------------------------------------------------------------+\n";
  $to_user .= "| ~FC~OLUser money listings~RS                                                        |\n";
  $to_user .= "+----------------------------------------------------------------------------+\n";
  
  $money_lines = preg_split('@\n@', $main_content, NULL, PREG_SPLIT_NO_EMPTY);

  
  foreach($money_lines as $line) {
    $to_user .= "|" . $line . "|\n";
  }

  $to_user .= "+----------------------------------------------------------------------------+\n"; 
  
  //sprintf is used to add the | at either side
  $total_text = "Total of ~OL$total_users~RS user$pltext_s";
  $to_user .= sprintf("| %-80s |\n", $total_text);
  $to_user .= "+----------------------------------------------------------------------------+\n\n";
?>