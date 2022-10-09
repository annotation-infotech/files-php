<?php
    $f = fopen(__DIR__.'/library.csv', 'r');

    $entries = [];

    while(($entry = fgetcsv($f)) != null) {
        if ($entry[1] == 'Charles Dickens') {
            $entries[] = $entry;
        }
    }
    fclose($f);

    $dest = fopen(__DIR__.'/dickens_books.csv', 'w');
    foreach ($entries as $entry) {
        fputcsv($dest, $entry);
    }

    fclose($dest);
?>
