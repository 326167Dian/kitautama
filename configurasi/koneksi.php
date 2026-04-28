<?php
Date_Default_timezone_set('Asia/jakarta');
$server = "localhost";
$user = "u877780297_retnobaru";
$password = "7390091979Dian&&";
$database = "u877780297_citrasehatbaru";
set_time_limit(1800);

try {
    $dsn = "mysql:host=$server;dbname=$database;charset=utf8";
    $db = new PDO($dsn, $user, $password);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    die("Koneksi gagal: " . $e->getMessage());
}


// $server = "localhost";
// $user = "root";
// $password = "";
// $database = "kitautama";
// set_time_limit(1800);

// try {
//     $dsn = "mysql:host=$server;dbname=$database;charset=utf8";
//     $db = new PDO($dsn, $user, $password);
//     $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//     $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
// } catch (PDOException $e) {
//     die("Koneksi gagal: " . $e->getMessage());
// }
