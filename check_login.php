<?php
$servername = "localhost";
$user = "root";
$pass = "";
$dbname = "user";

// Create connection
$conn = mysqli_connect($servername, $user, $pass, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
} else{
    echo "Connected successfully";
}

$username = $_POST['username'];
$password = $_POST['password'];

$sql = "SELECT * FROM user WHERE username=$username AND user_pass=$password";
$result = $conn->query($sql);

if ($result->num_rows == false) {
    header('location:dist/index.html');
} elseif ($username == "" and $password == "") {
    echo "<script>alert('ยังไม่ได้ใส่อะไรเลยยยย '); location.href='login.php';</scripheader>";
} elseif ($password == "") {
    echo "<script>alert('ยังไม่ได้ใส่ password '); location.href='login.php';</script>";
} elseif ($username == "") {
    echo "<script>alert('ยังไม่ได้ใส่ username '); location.href='login.php';</script>";
} else {
    echo "<script>alert('failed login')</script>";
}
?>