<?php
// php to save entire csv at the end of the experiment. 

// data file
$data = $_POST['full_data'];

// subject name
$subject = $_POST['subject'];

// email address
$email = $_POST['email'];

// combine subject and email into one line
$line = array(htmlspecialchars($subject), htmlspecialchars($email));

// create filename (folder should already be created)
//$name = "data/" . $subject . "/" . $subject . "_results.csv"; 

// don't create a separat folder for each person 
$name = "data/" . htmlspecialchars($subject) . "_results.csv"; 

// write the file to disk
file_put_contents($name, htmlspecialchars($data));


// open master csv file
$handle = fopen("data/completions.csv", "a");

// append new row containing subject name and email
fputcsv($handle, $line); # $line is an array of strings (array|string[])

// close file
fclose($handle);

?>