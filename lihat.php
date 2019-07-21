<?php
require 'load/Load.php';

$data = $user->selectUser();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <table border="1">
    <tr>
        <th>nama</th>
        <th>alamat</th>
        <th>nohp</th>
    </tr>
    <?php
        while ($value = $data->fetch_assoc()) {
    ?>
        <tr>
            <td><?php echo $value['nama']; ?></td>
            <td><?php echo $value['alamat']; ?></td>
            <td><?php echo $value['nohp']; ?></td>
        </tr>

    <?php
        }
    ?>
    </table>
</body>
</html>