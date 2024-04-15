<?php
session_start();

// Store form data in session
$_SESSION['nama'] = $_POST['nama'];
$_SESSION['email'] = $_POST['email'];
$_SESSION['phone'] = $_POST['phone'];
$_SESSION['dob'] = $_POST['dob'];
$_SESSION['ClassNum'] = $_POST['ClassNum'];
$_SESSION['gender'] = $_POST['gender'];
$_SESSION['alamat1'] = $_POST['alamat1'];
$_SESSION['negara'] = $_POST['negara'];
$_SESSION['kota'] = $_POST['kota'];
$_SESSION['kecamatan'] = $_POST['kecamatan'];
$_SESSION['kodepos'] = $_POST['kodepos'];
$_SESSION['extrakurikuler'] = $_POST['extrakurikuler'];

// Redirect to success page
header("Location: success.php");
exit;
?>
