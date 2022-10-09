<?php
    $filename = __DIR__."../../../books/Charles Dickens/A Tale of Two Cities.txt"; 

    // uncomment one of the statements below to print out the book's text

    print(file_get_contents($filename));
    // readfile($filename);
    // print_r(file($filename));
?>
