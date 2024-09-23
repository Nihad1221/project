<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo json_encode(['status' => 'error', 'message' => 'Keçərsiz e-poçt ünvanı.']);
        exit;
    }

    if (strpos($email, '@gmail.com') === false) {
        echo json_encode(['status' => 'error', 'message' => 'Yalnız Gmail e-poçtları qəbul olunur.']);
        exit;
    }

    $file = 'emails.txt';
    if (file_put_contents($file, $email . PHP_EOL, FILE_APPEND)) {
        echo json_encode(['status' => 'success', 'message' => 'E-poçt uğurla qeyd edildi.']);
    } else {
        echo json_encode(['status' => 'error', 'message' => 'E-poçt yazıla bilmədi.']);
    }
}
