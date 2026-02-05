
<?php
include 'db.php';
$r=mysqli_query($conn,"SELECT * FROM membership");
while($row=mysqli_fetch_assoc($r)){
 echo $row['membership_no']." ".$row['name']." ".$row['duration']."<br>";
}
?>
