<!-- 355 -->
<?php
function DienVien($ten, $namSinh)
{
    $namHienTai = date("Y");
    $tuoi = $namHienTai - $namSinh;
    echo nl2br("Tên diễn viên: $ten\nTuổi của diễn viên là: $tuoi");
}
function ThuVanMay($r)
{
    switch (true) {
        case $r <= 4:
            echo "Bạn không qua rồi :( ";
            break;
        case $r <= 8:
            echo "Cũng tạm ổn :) ";
            break;
        case $r <= 10:
            echo "Giỏi quá :() ";
            break;
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fuction in PHP</title>
</head>

<body>
    <h1><?php DienVien("Inoue Rikako", 1998) ?></h1>
    <p><?php $r = rand(0, 10);
        echo $r . "<br/>";
        ThuVanMay($r) ?>
    </p>
</body>

</html>