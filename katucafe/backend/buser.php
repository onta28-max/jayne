<?php
require('../server/server.php');
session_start();
$adminname = $_POST['username'];
$adminpassword = $_POST['password'];
var_dump($_POST);
$sql = "SELECT * FROM tb_admin where adminname=? and adminpassword=?";
$statement = $connection->prepare($sql);
$statement->execute([$adminname, $adminpassword]);
$user = $statement->fetch(PDO::FETCH_ASSOC);
var_dump($user);
if ($user) {
    $_SESSION['admin'] = $user['name'];
    header('location:../component/insertuser.php');
    exit();
} else {
    $_SESSION['modelnot'] = "ທ່ານປ້ອນລະຫັດບໍ່ຖືກຕ້ອງ";
    exit();
}
