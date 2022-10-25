<?php

    $username = trim(filter_var($_POST['username'], FILTER_UNSAFE_RAW));
    $email = trim(filter_var($_POST['email'], FILTER_SANITIZE_EMAIL));
    $login = trim(filter_var($_POST['login'], FILTER_UNSAFE_RAW));
    $pass = trim(filter_var($_POST['pass'], FILTER_UNSAFE_RAW));

    if (strlen($username) <=3 )
        exit();
    else if (strlen($email) <=3 )
        exit();
    else if (strlen($login) <=3 )
        exit();
    else if (strlen($pass) <=3 )
        exit();

    $hash = 'heycreme';
    $pass = md5($pass . $hash);

    $user = 'root';
    $password = '';
    $db = 'testing';
    $host = 'localhost';

    $dsn = 'mysql:host='.$host.';dbname='.$db;
    $pdo = new PDO($dsn, $user, $password);
    $sql = 'INSERT INTO users(name, email, login, pass) VALUES(?, ?, ?, ?)';
    $query = $pdo->prepare($sql);
    $query->execute([$username, $email, $login, $pass]);

?>