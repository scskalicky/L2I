<?php
// add subject to master csv when they complete the experiment
$subject = $_POST['subject'];

$email = $_POST['email'];

$line = array($subject, $email);


// open master csv file
$handle = fopen("data/completions.csv", "a");

// append new row
fputcsv($handle, $line); # $line is an array of strings (array|string[])

// close file
fclose($handle);

?>