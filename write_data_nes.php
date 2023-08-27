<?php
// php to save entire csv at the end of the experiment. 

// data file
$data = $_POST['full_data'];

// subject name
$subject = $_POST['subject'];

// don't create a separate folder for each person 
$name = "nes_data/" . $subject . "_results.csv"; 

// write the file to disk
file_put_contents($name, $data);

?>