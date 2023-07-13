<?php
include 'koneksi.php';

session_start();

// Mengambil data Login
$name = $_POST['name'];
$password = md5($_POST['password']);

// Mengambil data dari tabel users
$query = mysqli_query($koneksi, "SELECT * FROM users WHERE nmUSer = '$name' AND password = '$password'");
// Menghitung jumlah data
$cek = mysqli_num_rows($query);

// Jika User ditemukan lebih dari 1 maka user di temukann
if ($cek > 0) {
    $qry = mysqli_fetch_array($query);
    $_SESSION['idUser'] = $qry['idUser'];
    $_SESSION['nmUser'] = $qry['nmUser'];
    $_SESSION['password'] = $qry['password'];
    $_SESSION['status'] = $qry['status'];

    header("location:pasien.php");
} else {
    header("location:login.php?pesan=gagal");
}
