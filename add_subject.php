<?php
// create folder for subject when they start experiment.
$subject = $_POST['subject'];

// create directory for subject
if (!is_dir('data/' . $subject)) {
    // dir doesn't exist, make it
    mkdir('data/' . $subject);
  };

?>