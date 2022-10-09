<?php
    $filename = "../../../books/Charles Dickens/A Tale of Two Cities.txt"; 
    $f = fopen($filename, 'r');

    // while ($data = fgets($f)) {
    //     echo $data;
    // }

    while (!feof($f)) {
        echo fread($f, 512);
        fgets(STDIN);
    }
    
    fclose($f);
?>
