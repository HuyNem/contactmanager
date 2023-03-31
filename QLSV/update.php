<?php 
    //nhận dữ liệu từ form
    $ht = $_POST["hoten"];
    $masv = $_POST["masv"];
    $lop = $_POST["lop"];
    $id = $_POST["sid"];

    //kết nối cơ sở dữ liệu
    require_once 'ketnoi.php';

    //lệnh sql để thêm dữ liệu
    $updatesql = "UPDATE sinhvien SET masv = '$masv', hoten = '$ht', lop = '$lop' WHERE id = $id";


    //thực thi lệnh thêm
    mysqli_query($conn, $updatesql);

    //in thông báo thành công
    //echo "<h1>Thêm thành công</h1>";

    //khi thêm xong trở về trang liet ke luân
    header("location: lietke.php");
?>