<?php

//koneksi ke database
$database = mysqli_connect("localhost", "root", "", "praktikum_9")

//cek apakah tombol submit sudah ditekan atau belum
//if ( isset($_POST["submit"])){
    //var_dump($_POST);

//ambil data dari tiap elemen form
   // $name = $_POST["Name"];
   // $email = $_POST["email"];
    //$address = $_POST["address"];
    //$gender = $_POST["gender"];
    //$position = $_POST["position"];
    //$status = $_POST["status"];
    
    
//query insert data
   // $query = "INSERT INTO karyawan VALUES('', '$name', '$email', '$address', '$gender', '$position', '$status')";
    //mysqli_query($database, $query);
//}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Data</title>
</head>
<body>
    <h1>Tambah Data</h1>

    <form action="" method="post">
        <ul>
            <li>
                <label for="Name">Name :</label>
                <input type="text" name="Name" id="Name">
            </li>
            <li>
                <label for="email">Email :</label>
                <input type="text" name="email" id="email">
            </li>
            <li>
                <label for="address">Address :</label>
                <input type="text" name="address" id="address">
            </li>
            <li>
                <label for="gender">Gender :</label>
                <input type="text" name="gender" id="gender">
            </li>
            <li>
                <label for="position">Position :</label>
                <input type="text" name="position" id="position">
            </li>
            <li>
                <label for="status">Status :</label>
                <input type="text" name="status" id="status">
            </li>
            <li>
                <button type="submit" name="submit">Submit</button>
            </li>
            
        </ul>


    
    </form>
    
</body>
</html>