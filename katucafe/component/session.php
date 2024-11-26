<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    $_SESSION['message'] = "ກະລຸນາປ້ອນລະຫັດກ່ອນເຂົ້າສູລະບົບ";
    header("location:/katucafe/login/index.php");
    exit();
}
$name = $_SESSION['name'];
echo "ຊື່ຜູ້ໃຊ້ງານແມ່ນ :" . " " . $name;
 

// header("location:../conponent/Summary.php");