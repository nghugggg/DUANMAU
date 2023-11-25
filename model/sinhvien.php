<?php
    function getAll_sinhvien($db){
        //Tạo lệnh
            $sql = "select * from sinhvien";
        //Gửi lệnh đi
        $result = $db -> query($sql);
        //Lấy kết quả
        $rows_sv = $result -> fetchAll();
        return $rows_sv;
    }   
    function add_sinhvien($db, $ten, $ngaysinh, $diem, $hocluc){
        echo $sql = "Insert into sinhvien values (null, '$ten', '$ngaysinh', '$diem', '$hocluc');";
        $result = $db -> exec($sql);
        return $result;
    }
?>