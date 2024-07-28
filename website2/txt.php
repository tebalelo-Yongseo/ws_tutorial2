<?php

$filename = "newfile.txt";
$file = fopen($filename, "w"); // Open the file for writing

if ($file) {
    $text = "This is written to the file.";
    fwrite($file, $text); // Write the text to the file

    fclose($file); // Close the file
    echo "Text has been written to the file successfully.";
} else {
    echo "Unable to open the file.";
}

?>