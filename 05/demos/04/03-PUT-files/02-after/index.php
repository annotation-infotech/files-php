<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP eReader</title>
</head>
<body>
    <form action="/" method="post" enctype="multipart/form-data">
        <h2>Please select a book to upload</h2>
        <input type="text" name="title" id="title" placeholder="Title"><br>
        <input type="text" name="author" id="author" placeholder="Author"><br>
        <input type="file" name="content" id="content"><br>
        <button type="submit">Submit</button>
    </form>
    <script>
        const form = document.querySelector('form');
        form.addEventListener('submit', (e) => {
            e.preventDefault();

            const title = document.getElementById('title').value;
            const author = document.getElementById('author').value;
            fetch(`/new.php?title=${title}&author=${author}`, {
                method: 'put',
                body: document.getElementById('content').files[0]
            });
        });
    </script>
</body>
</html>
