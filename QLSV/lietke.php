<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.3/dist/jquery.slim.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <title>Danh sách sinh viên</title>
</head>

<body>
    <?php require 'header.php'; ?>
    <div class="container">
        <h3>Danh sách sinh viên</h3>
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
            Thêm
        </button>
        <br>
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th>Mã sinh viên</th>
                    <th>Họ Tên</th>
                    <th>Lớp</th>
                    <th>Chức năng</th>
                </tr>
            </thead>
            <tbody>
                <?php
                //kết nối csdl
                require_once('ketnoi.php');

                //câu lệnh liệt kê
                $lietke_sql = "SELECT * FROM sinhvien ORDER BY masv, hoten";

                //thực thi câu lệnh
                $result = mysqli_query($conn, $lietke_sql);

                //duyệt qua result và in ra
                while ($r = mysqli_fetch_assoc($result)) { //đưa từng hàng vào trong $r
                ?>
                    <tr>
                        <td><?php echo $r['masv']; ?></td>
                        <td><?php echo $r['hoten']; ?></td>
                        <td><?php echo $r['lop']; ?></td>
                        <td>
                            <a href="sua.php?sid=<?php echo $r['id']; ?>"> <button type="button" class="btn btn-primary">Sửa</button></a>
                            <a onclick="return confirm('Bạn có muốn xóa không?');" href="xoa.php?sid=<?php echo $r['id']; ?>"><button type="button" class="btn btn-danger">Xóa</button></a>
                        </td>
                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
    </div>
    <?php require 'footer.php'; ?>
</body>

<div class="modal" id="myModal">
    <div class="modal-dialog">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Thêm sinh viên</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
                <form action="them.php" method="post">
                    <div class="form-group">
                        <lable for="hoten">Họ tên</lable>
                        <input type="text" id="hoten" class="form-control" name="hoten">
                    </div>
                    <div class="form-group">
                        <lable for="masv">Mã sinh viên</lable>
                        <input type="text" id="masv" class="form-control" name="masv">
                    </div>
                    <div class="form-group">
                        <lable for="lop">Lớp</lable>
                        <input type="text" id="lop" class="form-control" name="lop">
                    </div>
                    <button type="them" class="btn btn-primary">Thêm</button>
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                </form>
            </div>

        </div>
    </div>
</div>

</html>