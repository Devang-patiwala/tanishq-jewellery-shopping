<!-- <php
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'tanishq_jewellery');

$conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

session_start();
 -->
 <?php
$username='localhost';
$host='root';
$password='';
$database='tanishq_jewellery';

$conn = mysqli_connect($username,$host,$password,$database);
if($conn)
{
    echo " ";
}
else
{
    echo "not ok";
}
session_start();
?>