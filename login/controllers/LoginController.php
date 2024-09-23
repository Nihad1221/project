<?php
session_start();
if (isset($_POST['login'], $_POST['username'], $_POST['password'])) {
    $username = htmlspecialchars($_POST['username']);
    $password = htmlspecialchars($_POST['password']);

    $users = [
        [
            'username' => 'nihad',
            'password' => '1234',
        ],
        [
            'username' => 'jake',
            'password' => '1234',
        ]
    ];

    foreach ($users as $user) {
        if ($user['username'] == $username && $user['password'] == $password) {
            $_SESSION['login'] = true;
            break;
        }


    }
    if (!isset($_SESSION['login'])) {
        $_SESSION['username'] = $username;
        $_SESSION['password'] = $password;
        $_SESSION['error'] = 'İstifadəçi adı və ya şifrə yanlışdır';
    }

    header('Location: /index.php');
    exit();

} else {
    die('Error');
}
