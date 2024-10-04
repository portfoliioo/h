<?php
session_start();
if(!isset($_SESSION['logged']) || $_SESSION['logged'] !== true){
    header("Location: https://codingapp.net/login_page");
    exit;
};

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title title="Download Button">Download Button</title>
    <script src="https://code.iconify.design/iconify-icon/1.0.1/iconify-icon.min.js"></script>
    <link rel="stylesheet" href="
        <?php 
            $token = bin2hex(random_bytes(16));
            $baseUrl = 'https://codingapp.net/Home/Projects/Websites/DownloadBtn/style.css' . '?token=' . $token;
            echo $baseUrl;
        ?>
    ">
    <link rel="icon" type="image/x-icon" href="
        <?php 
            $token = bin2hex(random_bytes(16));
            $baseUrl = 'https://codingapp.net/Signup/Logo_Black.ico' . '?token=' . $token;
            echo $baseUrl;
        ?>
    ">
</head>
<body>
    <div class="center" title="Download">
        <button class="download-btn" onclick="download()">
            <span>Download</span>
            <iconify-icon class="cloud-icon" class="icon" icon="ant-design:cloud-download-outlined" width="40" height="40"></iconify-icon>
            <span class="finish">Finish</span>
            <iconify-icon class="check-icon" icon="akar-icons:check" width="40" height="40"></iconify-icon>
        </button>
    </div>
    <script src="
        <?php 
            $token = bin2hex(random_bytes(16));
            $baseUrl = 'https://codingapp.net/Home/Projects/Websites/DownloadBtn/script.js' . '?token=' . $token;
            echo $baseUrl;
        ?>
        "></script>
</body>
</html>