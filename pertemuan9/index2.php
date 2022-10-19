<?php

$conn = mysqli_connect("localhost", "root", "", "phpdasar2"); // pass kosong di windows - mac "root", root default username

// ambil data dari tabel mahasiswa / query data mahasiswa
$result = mysqli_query($conn, "SELECT * FROM mahasiswa");
// var_dump($result);

// ambil data mahasiswa dari object result
// mysqli_fetch_row() mengembalikan array numerik
// mysqli_fetch_row()
// mysqli_fetch_array()
// mysqli_fetch_object()

// $mhs = mysqli_fetch_row($result);
// // var_dump($mhs);
// var_dump($mhs[1]);

// $mhs = mysqli_fetch_assoc($result);
// var_dump($mhs);
// var_dump($mhs["Jurusan"]);
// var_dump($mhs[4]); 

// $mhs = mysqli_fetch_object($result);
// var_dump($mhs-> nama);

    // while ($mhs = mysqli_fetch_assoc($result)){
        // var_dump($mhs);
        // var_dump($mhs["Nama"]);
    // }
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Admin</title>
</head>
<body>
    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>No.</th>
            <th>Action</th>
            <th>Gambar</th>
            <th>NIM</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Jurusan</th>
        </tr>

        <?php $i=1 ?>
        <?php while($row = mysqli_fetch_assoc($result)) : ?>
        <tr>
            <td><?= $i; ?> </td>
            <td>
                <a href="">Ubah</a> |
                <a href="">Hapus</a>
            </td>
            <td><img src="img/<?php echo $row["Gambar"] ?>" width="50" alt="adin"></td>
            <!-- <td>165090807111001</td>
            <td>Adin</td>
            <td>adin@gmail.com</td>
            <td>Fisika</td> -->
            <td><?= $row["NIM"]; ?></td>
            <td><?= $row["Nama"]; ?></td>
            <td><?= $row["Email"]; ?></td>
            <td><?= $row["Jurusan"]; ?></td>
        </tr>
        <?php $i++;?>
        <?php endwhile; ?>
    </table>
</body>
</html>