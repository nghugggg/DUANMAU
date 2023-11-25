<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    div{
        border: 1px solid black;
        width: 200px;
    }
    li{
        
    }
</style>
<body>
    <?php
        session_start();
        include_once("connect.php");
        include_once("model/sinhvien.php");
        $rows_bm = getAll_sinhvien($db);
        ?>
            <nav>
                <ul>
                    <?php
                        foreach($rows_sv as $v){
                            echo "<li>$v[1]</li>";
                        }
                                       
                    ?>
                </ul>
            </nav>
            <header>

            </header>
            <article>

            </article>
            <footer>
                
            </footer>
</body>
</html>