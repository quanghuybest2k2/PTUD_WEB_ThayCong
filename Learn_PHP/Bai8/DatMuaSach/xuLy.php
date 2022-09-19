<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $HTMLsoLuong = $_POST["HTMLsoLuong"];
    $CSSsoLuong = $_POST["CSSsoLuong"];
    $JSsoLuong = $_POST["JSsoLuong"];
} ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kết quả đặt mua</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <div class="container mt-3">
        <h2>Kết quả đặt mua</h2>
        <form action="">
            <div class="mb-3 mt-3">
                <label>Số lượng HTML:</label>
                <input type="text" class="form-control" value="<?php echo $HTMLsoLuong ?>" disabled>
            </div>
            <div class="mb-3">
                <label>Số lượng CSS</label>
                <input type="text" class="form-control" value="<?php echo $CSSsoLuong  ?>" disabled>
            </div>
            <div class="mb-3">
                <label>Số lượng JS</label>
                <input type="text" class="form-control" value="<?php echo $JSsoLuong ?>" disabled>
            </div>
            <a href="oder.html"><button type="button" class="btn btn-primary">Quay lại</button></a>

        </form>
        <?php
        date_default_timezone_set('Asia/Ho_Chi_Minh');
        echo nl2br("<p>Đơn hàng đã được xử lý vào lúc " . date('H:i:s d/m/Y') . "</p>");
        // echo "<p>Đơn hàng đã được xử lý vào lúc " . date('H:i, jS F Y') . "</p>";
        echo "<p>Giờ theo khu vực Hồ Chí Minh: " . date_default_timezone_get() . "</p>";
        ?>
    </div>
</body>

</html>