<?php

// Open a file called &quot;newfile.txt&quot; for writing (creates the file if it doesn&#39;t exist)
$filename = "newfile.txt";
$file = fopen($filename, "w");

if ($file) {
    // Text to write to the file
    $textToWrite = "Hello, this is some text written to the file.\n";
    
    // Write the text to the file
    fwrite($file, $textToWrite);
    
    // Close the file
    fclose($file);
    
    echo "Text successfully written to '$filename'";
    } else {
    echo "Unable to open the file '$filename' for writing.";
    }

?>