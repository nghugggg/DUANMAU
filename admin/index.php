<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    *{
        margin: 0 auto;
    }
    header{
        width: 100%;
        display: flex;
    }
    nav{
        width: 20%;
        background-color: #f7f7f7;
    }
    article{
        width: 80%;
        background-color: #DCDCDC;
    }
    nav a{
        display: block;
        text-decoration: none;
        padding: 5px;
    }
    h1{
        background-color: 	#778899;
        color: white;
        text-align: center;
    }
</style>
<body>
    <h1>QUẢN LÍ TRANG CHỦ</h1>
    <header>
        
        <NAV>
            <!--Thanh điều hướng-->
            <a href="?ctrl=sinhvien">Quản lí sinh viên</a>
        </NAV>
        <article>
            <!--Hiển thị thông tin chính-->
            <!--ctrl tên thư mục
            act hành động-->
            <?php
            session_start();
            include_once("../connect.php");
            include_once("../model/sinhvien.php");
                if(isset($_GET["ctrl"])){
                    $ctrl = $_GET["ctrl"];
                }else
                    $ctrl = "";
                    
                if(isset($_GET["act"])){
                    $act = $_GET["act"];
                }else 
                    $act = "";

                if($act != ""){
                    include_once("./$ctrl/$act.php");
                }else
                
                if($ctrl != ""){
                    include_once("./$ctrl/index.php");
                }else
                     echo ("Đây là trang Dashboard");           
            ?>
        </article>
    </header>
</body>
</html>