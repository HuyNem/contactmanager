<?php 
    //nhận dữ liệu từ form
    $ht = $_POST["hoten"];
    $masv = $_POST["masv"];
    $lop = $_POST["lop"];

    //kết nối cơ sở dữ liệu
    require_once 'ketnoi.php';

    //lệnh sql để thêm dữ liệu
    $themsql = "INSERT INTO sinhvien (masv, hoten, lop) VALUES ('$masv', '$ht', '$lop')";


    //thực thi lệnh thêm
    mysqli_query($conn, $themsql);

    //in thông báo thành công
    //echo "<h1>Thêm thành công</h1>";

    //khi thêm xong trở về trang liet ke luân
    header("location: lietke.php");
?>