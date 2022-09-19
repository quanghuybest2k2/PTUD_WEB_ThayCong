<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>The uploaded image:</h1>
    <?php
    $file = $_FILES['picture']['tmp_name']; // lấy ảnh thông qua name="picture"
    $picture = file_get_contents($file);
    $sourceImage = imagecreatefromstring($picture);
    $width = imageSX($sourceImage);
    $height = imageSY($sourceImage);
    $newheight = 400;
    $newwidth = $newheight * ($width / $height);
    $newImage = imagecreatetruecolor($newwidth, $newheight);
    $result = imagecopyresampled(
        $newImage,
        $sourceImage,
        0,
        0,
        0,
        0,
        $newwidth,
        $newheight,
        $width,
        $height
    );
    // $anh = $_POST["picture"];
    imagejpeg($newImage, "mtp.jpg");
    ?>
    <img src="uploads/mtp.jpg">
</body>

</html>