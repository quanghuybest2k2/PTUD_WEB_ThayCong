<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["hoTen"]) && isset($_POST["soThich"])) {
        echo "<p>Vui lòng nhật đầy đủ các trường!!!</p>";
    } else {
        $hoTen = $_POST["hoTen"];
        $soThich = $_POST["soThich"];
        echo nl2br("<p>Họ và tên: $hoTen\nSở thích: $soThich</p>");
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POST method in PHP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <div class='container mt-5'>
        <div class='row justify-content-center'>
            <div class='col-12 col-md-8 col-lg-6 col-xl-5'>
                <form action='./post.php' method="POST">
                    <div class='mb-3 mt-3'>
                        <label class='form-label'>Họ và tên:</label>
                        <input type='text' class='form-control' id='hoTen' placeholder='Bạn tên gì?' name='hoTen'>
                    </div>
                    <div class='mb-3'>
                        <label class='form-label'>Sở thích:</label>
                        <input type='text' class='form-control' id='soThich' placeholder='Sở thích của bản?' name='soThich'>
                    </div>
                    <div class='form-check mb-3'>
                        <label class='form-check-label'>
                            <input class='form-check-input' type='checkbox' name='remember'> Remember me</label>
                    </div>
                    <button type='submit' class='btn btn-primary'>Xác nhận</button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>