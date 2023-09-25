<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="public/css/bootstrap.min.css">
    <link rel="stylesheet" href="public/font/bootstrap-icons.css">
    <link rel="stylesheet" href="public/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="public/css/myc.css">
</head>
<body>
    <?php
        session_start();
        // xác định múi giờ
        date_default_timezone_set('Asia/Ho_Chi_Minh');
        require "core/database.php";
        $data = new database();

        $controller1 = "home";
        $controller2 = "Controller";
        $actionName = "index";
        if(isset($_GET["controller"])){
            $controller1 = $_GET["controller"];
            $title = "WEB TIN TỨC";
            if(isset($_GET["action"])){
                $actionName = $_GET["action"];
            }
        }
        $controllerName = $controller1 . $controller2;
        require ("controllers/".$controllerName.".php");
        $controllerObject = new $controllerName;
        $controllerObject->$actionName();

    ?>
    <!-- Thêm tham chiếu đến thư viện jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    
    <!-- Thêm tham chiếu đến tập tin JS -->
    <script src="public/js/bootstrap.bundle.min.js"></script>

    <!-- Thêm thư viện CKEditor -->
    <script src="public/ckeditor/ckeditor.js"></script>
    <script src="public/ckfinder/ckfinder.js"></script>
    <script>
CKEDITOR.replace( 'editor1',
{
    height: 500,
    filebrowserBrowseUrl: 'public/ckfinder/ckfinder.html',
    filebrowserImageBrowseUrl: 'public/ckfinder/ckfinder.html?type=Images',
    filebrowserUploadUrl: 'public/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
    filebrowserImageUploadUrl: 'public/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images'
});

    </script>    
