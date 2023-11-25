<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    table{
    height: 100%;    
    }
    table td{
        width: 10%;
        text-align: center;
    }
    table td a{
        text-decoration: none;
    }
</style>
<body>
    <?php
        $rows_sv = getAll_sinhvien($db);
    ?>
    <table>
        <tr>
            <td>Mã sinh viên</td>
            <td>Tên sinh viên</td>
            <td>Ngày sinh</td>
            <td>Điểm</td>
            <td>Học lực</td>
            <td><a href="?ctrl=sinhvien&act=add">Đăng ký</a></td>
        </tr>
        <?php
            foreach($rows_sv as $v){
                echo "<tr>
                    <td>$v[0]</td>
                     <td>$v[1]</td>
                     <td>$v[2]</td>
                     <td>$v[3]</td>
                     <td>$v[4]</td>
                </tr>";
            }
        ?>
    </table>
</body>
</html>