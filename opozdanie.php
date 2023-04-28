<?php

require_once __DIR__.'/boot.php';

// Проверим, не занято ли имя пользователя

// Добавим пользователя в базу
$stmt = pdo()->prepare("INSERT INTO `opozdaniya` (`prichina`, `time`, `para`, `data`) VALUES (:prichina, :time, :para, :data)");
$stmt->execute([
    'prichina' => $_POST['prichina'],
    'time' => $_POST['time'],
    'data' => $_POST['data'],
    'para'=>$_POST['para']
    
]);

$redirect = isset($_SERVER['HTTP_REFERER'])? $_SERVER['HTTP_REFERER']:'redirect-form.html';
header("Location: $redirect");
die;