<?php
    //lấy dữ liệu id cần xóa
    $svid = $_GET['sid'];
    
    //kết nối csdl
    require_once 'ketnoi.php';

    //câu lệnh sql
    $xoa_sql = "DELETE FROM sinhvien WHERE id = $svid";

    mysqli_query($conn, $xoa_sql);

    //khi xóa xong trở về trang liet ke luân
    header("location: lietke.php");
?>