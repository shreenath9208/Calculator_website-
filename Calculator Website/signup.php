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

$name = $_POST['name'];
$email = $_POST['email'];
$pass = $_POST['password'];




$sql = "insert into cal (name , email ,password) value ('$name','$email','$pass')";
$email1 = "select * from cal where email='$email'";

$res = mysqli_query($conn, $email1);
if (mysqli_num_rows($res) > 0) {

    // You can also generate the alert using this type of query 

    // echo "<script type='text/jscript'>alert('Wrong Email!!.')</script>";



    // header('location:index.html');
    echo '<script type ="text/JavaScript">';
    echo 'alert(" This email is already registred with us You can login now ")';
    echo '</script>';


} else {
    $result = mysqli_query($conn, $sql);
    if (!$result) {
        echo " The failed to connect" . mysqli_error($conn);

    } else {
        $_SESSION['em'] = $_POST['email'];
        $_SESSION['pa'] = $_POST['password'];
        header("location:index2.php");
        // echo " hello you are here";
    }
}

mysqli_close($conn);

?>