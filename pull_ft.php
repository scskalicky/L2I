<?php

// if ( $_POST['payload'] ) {
//     shell_exec('git pull'); 
// }

if ( $_SERVER['HTTP_X_GITHUB_EVENT'] === 'push' ) {
    shell_exec('git pull'); 
}