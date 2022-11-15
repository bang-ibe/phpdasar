<?php
// Connect to DBMS
require 'functions.php';
// $conn = mysqli_connect("localhost", "root", "", "phpdasar2");
// cek apakah tombol submit sudah ditekan atau belum
if (isset($_POST["submit"])){
    // debugging purposes
    // var_dump($_POST);

    // // ambil data dari tiap elemen dalam form
    // $NIM = $_POST["NIM"];
    // $Nama = $_POST["Nama"];
    // $Email = $_POST["Email"];
    // $Jurusan = $_POST["Jurusan"];
    // $Gambar = $_POST["Gambar"];

    // // query insert data
    // $query = "INSERT INTO mahasiswa 
    //         VALUES 
    //         ('', '$Nama','$NIM', '$Jurusan', '$Email', '$Gambar')
    //         ";
    // // var_dump($query);
    // mysqli_query($conn, $query);

    // cek if data succeed
    // if (mysqli_affected_rows($conn)>0){
    //     echo "berhasil";
    // } else {
    //     echo "gagal!";
    //     echo "<br>";
    //     echo mysqli_error($conn);
    // }

    if(tambah($_POST)>0){
        echo "<script> alert('data berhasil ditambahkan!');
        document.location.href='index.php' </script>";
    } else{
        echo "<script> alert('data gagal ditambahkan!');
        document.location.href='index.php' </script>";
    }

}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Tambah Data Mahasiswa</h1>

    <form action="" method="POST">
        <ul>
            <li>
                <!-- required biar ga bisa kosong -->
                <!-- name sesuai structure di table structure php my admin -->
                <!-- for paired with id -->
                <label for="NIM">NIM : </label>
                <input type="text" name="NIM" id="NIM" required>
            </li>
            <li>
                <label for="Nama">Nama : </label>
                <input type="text" name="Nama" id="Nama" required>
            </li>
            <li>
                <label for="Email">Email : </label>
                <input type="text" name="Email" id="Email" required>
            </li>
            <li>
                <label for="Jurusan">Jurusan : </label>
                <input type="text" name="Jurusan" id="Jurusan" required>
            </li>
            <li>
            <label for="Gambar">Gambar : </label>
                <input type="text" name="Gambar" id="Gambar" required>
            </li>
            <li>
                <!-- key name = submit -->
                <button type="submit" name="submit">Tambah Data!</button>
            </li>
        </ul>
    </form>
    
</body>
</html>