<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP eReader</title>
</head>
<body>
    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    ?>
    <form action="/" method="post" enctype="multipart/form-data">
        <h2>Please select a book to upload</h2>
        <input type="text" name="title" id="title" placeholder="Title"><br>
        <input type="text" name="author" id="author" placeholder="Author"><br>
        <input type="file" name="content" id="content"><br>
        <button type="submit">Submit</button>
    </form>
    <?php
    } else {
        $title = $_REQUEST['title'];
        $author = basename($_REQUEST['author']);
        if ($author == '' || $author == '.' || $author == '..') {
            echo "Invalid author name";
        } else {
            $root = './uploads';
            if (!file_exists("$root/$author")) {
                mkdir("$root/$author");
            }
            $result = move_uploaded_file($_FILES['content']['tmp_name'], "$root/$author/$title.txt");
            if ($result) {
                echo "File saved successfully";
            } else {
                echo "Failed to save file";
            }
        }
    }
    ?>
</body>
</html>
