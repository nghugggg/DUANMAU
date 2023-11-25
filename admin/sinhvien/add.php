<!DOCTYPE html> 
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        if(isset($_POST["btnThem"])){
            $ten = $_POST["txtTen"];
            $ngaysinh = $_POST["txtNgaySinh"];
            $diem = $_POST["txtDiem"];
            $hocluc = $_POST["txtHocLuc"];
            $result = add_sinhvien($db, $ten, $ngaysinh, $diem, $hocluc); 
            if($result == false){
                echo "Thêm thất bại";
            }else
                echo "Thêm thành công";
                header("location:?ctrl=sinhvien");
                
        }
    ?>
    <form action="" method="post">
        Tên sinh viên: <input type="text" name="txtTen"><br>
        Ngày sinh: <input type="date" name="txtNgaySinh"><br>
        Điểm: <input type="text" name="txtDiem"><br>
        Học lực: <input type="text" name="txtHocLuc"><br>
        <input type="submit" name="btnThem" value="Thêm">
    </form>
</body>
</html>