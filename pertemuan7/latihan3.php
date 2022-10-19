<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POST</title>
</head>
<body>
    <?php if(isset($_POST["sumbit"])) :?>
        <h2>Halo, selamat datang <?= $_POST["nama"]; ?></h2>
    <?php endif; ?>
    <!-- more reliable and secure than GET, because there is no visible link url when it was send -->
    <form action="latihan4.php" method="post">
        masukkan nama :
        <input type="text" name="nama">
        <br>
        <button type="submit" name="submit">Kirim!</button>
    </form>
    
</body>
</html>