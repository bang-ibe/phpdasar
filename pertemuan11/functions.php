<?php

$conn = mysqli_connect("localhost", "root", "", "phpdasar2");
 // pass kosong di windows - mac "root", root default username

function query($query){
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while($row = mysqli_fetch_assoc($result)){
        $rows[] = $row;
    }
    return $rows;
}



function tambah($data){
    global $conn;
    // ambil data dari tiap elemen dalam form
    $NIM =htmlspecialchars($data["NIM"]);
    $Nama = htmlspecialchars($data["Nama"]);
    $Email = htmlspecialchars($data["Email"]);
    $Jurusan = htmlspecialchars($data["Jurusan"]);
    $Gambar = htmlspecialchars($data["Gambar"]);

        // query insert data
        $query = "INSERT INTO mahasiswa 
        VALUES 
        ('', '$Nama','$NIM', '$Jurusan', '$Email', '$Gambar')
        ";
// var_dump($query);
mysqli_query($conn, $query);

return mysqli_affected_rows($conn);
}

function hapus($id){
    global $conn;
    mysqli_query($conn, "DELETE FROM mahasiswa WHERE id = $id");

    return mysqli_affected_rows($conn);
}

function ubah($data){
    global $conn;
    // ambil data dari tiap elemen dalam form
    $Id = $data["Id"];
    $NIM =htmlspecialchars($data["Nim"]);
    $Nama = htmlspecialchars($data["Nama"]);
    $Email = htmlspecialchars($data["Email"]);
    $Jurusan = htmlspecialchars($data["Jurusan"]);
    $Gambar = htmlspecialchars($data["Gambar"]);

        // query insert data
        $query = "UPDATE mahasiswa SET 
        nim = '$NIM',
        nama = '$Nama',
        email = '$Email',
        jurusan = '$Jurusan',
        gambar = '$Gambar' WHERE id = $Id" ;

// var_dump($query);
mysqli_query($conn, $query);

return mysqli_affected_rows($conn);
}

?>

