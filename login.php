
<?php
session_start();
include 'db.php';
$u=$_POST['username'];
$p=$_POST['password'];
$r=$_POST['role'];
$q=mysqli_query($conn,"SELECT * FROM users WHERE username='$u' AND password='$p' AND role='$r'");
if(mysqli_num_rows($q)==1){
 $_SESSION['role']=$r;
 if($r=='admin') header("Location: admin.php");
 else header("Location: user.php");
}
else echo "Invalid Login";
?>
