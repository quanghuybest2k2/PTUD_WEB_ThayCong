<!-- 321 đến 392 -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loop in PHP</title>
</head>

<body>
    <h1>For Loop in PHP</h1>
    <?php
    $friend = array("Sang Vlog", "Duật CTK44B", "Nhật đạo đức tốt", "Đạt Villa", "Sương sung sướng", "Thanh hoang tưởng");
    echo "Lấy vị trí thứ 2 của mảng: " . $friend[2] . "<br/>"; // xuất ra vị trí của mảng
    for ($i = 0; $i < count($friend); $i++) {
        // echo "Vị trí thứ $i của mảng: " . $friend[$i] . "<br/>";
        echo nl2br("Vị trí thứ $i của mảng: $friend[$i]\n");
    }
    ?>
    <hr />
    <h1>Foreach Loop in PHP</h1>
    <?php
    $friend = array("Sang Vlog", "Duật CTK44B", "Nhật đạo đức tốt", "Đạt Villa", "Sương sung sướng", "Thanh hoang tưởng");
    foreach ($friend as $key => $value) {
        echo "Vị trí thứ $key: " . $value . "<br/>";
    }
    ?>
</body>

</html>