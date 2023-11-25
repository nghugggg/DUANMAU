<?PHP
function connect(){
    $dsn = "mysql:host=localhost;dbname=qlsv";
    $user = 'root';
    $pass = '';
    $db = new PDO($dsn , $user, $pass, 
            array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
    $db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    return $db;
}
$db = connect() or die("Không thể kết nối với CSDL");
?>