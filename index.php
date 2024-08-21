<?php
 $conn = mysqli_connect("localhost", "root", "", "azhar");

 $result = mysqli_query($conn, "SELECT * FROM siswa");


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Sintesa</h1>
    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>id</th>
            <th>nama</th>
            <th>alamat</th>
        </tr>

        <?php while ( $row = mysqli_fetch_assoc($result) ) :
        ?>
        <tr>
            <td><?= $row["id"]?></td>
            <td><?= $row["nama"]; ?></td>
            <td><?= $row["alamat"]; ?></td>
        </tr>
        <?php endwhile; ?>
    </table>

</body>
</html>