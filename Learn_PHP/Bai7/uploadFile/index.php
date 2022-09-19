<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload ảnh</title>
</head>

<body>
    <h2>Chọn ảnh để upload</h2>
    <form action="xuLy.php" method="POST" enctype="multipart/form-data">
        <input type="file" name="picture"><br>
        <input type="submit" value="Submit">
    </form>
</body>

</html>