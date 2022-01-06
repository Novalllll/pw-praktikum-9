<?php
require 'functions.php';
$karyawan = query("SELECT * FROM karyawan");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Praktikum 9</title>
</head>
<body>

<h1>Daftar Karyawan</h1>

<table border="1" cellpadding="10" cellspacing="0">
    <tr>
        <th>No.</th>
        <th>Action</th>
        <th>Name</th>
        <th>Email</th>
        <th>Address</th>
        <th>Gender</th>
        <th>Position</th>
        <th>Status</th>
    </tr>
    <?php $i = 1; ?>
    <?php foreach($karyawan as $row) : ?>
    <tr>
        <td><?= $i; ?></td>
        <td><?= $row["Name"]; ?></td>
        <td><?= $row["email"]; ?></td>
        <td><?= $row["address"]; ?></td>
        <td><?= $row["gender"]; ?></td>
        <td><?= $row["position"]; ?></td>
        <td><?= $row["status"]; ?></td>
        <td>
            <a href="">Update</a> |
            <a href="">Delete</a>
        </td>
    </tr>
    <?php $i++; ?>
    <?php endforeach; ?>

</table> 
<a href="add.php">Add Data</a>
<br><br>
  

    
</body>
</html>