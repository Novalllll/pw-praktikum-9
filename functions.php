<?php
//koneksi ke database
$database = mysqli_connect("localhost", "root", "", "praktikum_9");

// ambil data (fetch) karyawan dari objek result
// ada 4 cara untuk mengambil data dari database yaitu :
// mysqli_fetch_row() // mengembalikan array numerik
// mysqli_fetch_assoc() // mengembalikan array associative
// mysqli_fetch_array() // mengembalikan array numerik dan array associative
// mysqli_fetch_object() // mengembalikan array object

function query($query){
    global $database;
    $result = mysqli_query($database, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)){
        $rows[] = $row;
    }
    return $rows;
}
?>