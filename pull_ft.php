<?php

// if ( $_POST['payload'] ) {
//     shell_exec('git pull'); 
// }

if ( $_SERVER['HTTP_X_GITHUB_EVENT'] === 'push' ) {
    $output = shell_exec('git pull 2>&1');
    if ($output) {
      error_log("Git pull failed: " . $output);
    } else {
      // Success message (optional)
    }
  }