<?php

include "koneksi.php";

$email = $_POST['username'];
$password = md5($_POST['password']);

$cek = mysqli_num_rows(mysqli_query($koneksi, "SELECT * FROM tbl_users WHERE email = '$email' AND password = '$password'"));

if ($cek > 0) {
    echo "Login berhasil dengan email " . $email . " dan password " . $password;
} else {
    // header ('location:index.php?error=1');
    echo "Login gagal dengan email " . $email . " dan password " . $password;

}


?>