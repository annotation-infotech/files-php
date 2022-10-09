<?php
    $filename = __DIR__.'../../../books/Charles Dickens/A Christmas Carol.txt';

    function getPermissionInfo($filename) {
        return [
            'file owner'=> fileowner($filename),
            'owning group' => filegroup($filename),
            'permissions' => sprintf('%o',fileperms($filename))
        ];
    }

    var_dump(getPermissionInfo($filename));

    chmod($filename, 0640);

    var_dump(getPermissionInfo($filename));

?>
