<?php
    require 'load/Load.php';
    if (Input::get('submit')) {
        $data = array(
            "nama" => Input::get('nama'),
            "alamat" => Input::get('alamat'),
            "nohp" => Input::get('nohp')
        );

        if ($user->insertUser($data)) {
            die('berhasil');
        }else{
            die('gagal');
        }
    }

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
   
</head>
<body>
    <h1>Belajar PHP OOP</h1>
   <form action="" method="post">
   <input type="text" name="nama" placeholder="nama" id=""><br>
    <input type="text" name="alamat" placeholder="alamat" id=""><br>
    <input type="text" name="nohp" placeholder="nohp" id=""><br>
    <input type="submit" value="Kirim" name="submit">
   </form>

</body>
</html>