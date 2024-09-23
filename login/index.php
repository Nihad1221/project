<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login</title>

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<div class="background">
    <div class="shape"></div>
    <div class="shape"></div>
    <?php
    if (isset($_SESSION['login'])) {
        include_once '../header_and_footer/index.php';
    } else {
        include_once 'pages/login.php';
    }
    ?>
</div>


</body>
</html>

