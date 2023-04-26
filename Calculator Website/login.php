<?php
session_start();


$db_hostname = "localhost";
$db_username = "root";
$db_password = "shree@2002";
$db_name = "session";

$conn = mysqli_connect($db_hostname, $db_username, $db_password, $db_name);
if (!$conn) {
    echo "the connection is failed " . mysqli_connect_error();
    exit;

}

$email = $_POST['email'];
$pass = $_POST['password'];


$sql = "select * from cal Where email='$email' and password='$pass'";

$result = mysqli_query($conn, $sql);
if (!$result) {
    echo " the failed to connect" . mysqli_error($conn);


} elseif (mysqli_num_rows($result) < 1) {
    echo '<script type ="text/JavaScript">';
    echo 'alert("Please Signup ")';
    echo '</script>';


} else {
    $_SESSION['em'] = $_POST['email'];
    $_SESSION['pa'] = $_POST['password'];
    header("location:index2.php");

}




mysqli_close($conn);

?>