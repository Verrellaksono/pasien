<?php
include 'koneksi.php';

if (isset($_POST['submit'])) {
    $nmUser = $_POST['nmUser'];
    $status = $_POST['status'];
    $password = md5($_POST['password']);

    $koneksi->query("INSERT INTO users (nmUser, status, password) VALUES ('$nmUser', '$status', '$password')");
    header("location:user.php");
}

if (isset($_GET['idUser'])) {
    $idUser = $_GET['idUser'];
    $koneksi->query("DELETE FROM users WHERE idUser = '$idUser'");
    header("location:user.php");
}

if (isset($_POST['edit'])) {
    $idUser = $_POST['idUser'];
    $nmUser = $_POST['nmUser'];
    $status = $_POST['status'];
    $password = $_POST['password'];

    $koneksi->query("UPDATE users SET nmUser = '$nmUser', status = '$status', password = '$password' WHERE idUser = '$idUser'");
    header("location:user.php");
}
