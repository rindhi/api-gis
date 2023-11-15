<?php
    $koneksi = mysqli_connect("localhost", "root", "", "sig");

    $sql = "SELECT * FROM lokasi";
    $x = mysqli_query($koneksi, $sql);
    while($k = mysqli_fetch_assoc($x)){
        $data[] = $k;
    }
    echo json_encode($data);
?>