
<form method="post">
Name: <input type="text" name="name" required><br><br>
<input type="radio" name="duration" value="6 Months" checked>6 Months
<input type="radio" name="duration" value="1 Year">1 Year
<input type="radio" name="duration" value="2 Years">2 Years<br><br>
<input type="submit" name="add" value="Add">
</form>
<?php
include 'db.php';
if(isset($_POST['add'])){
$n=$_POST['name'];
$d=$_POST['duration'];
mysqli_query($conn,"INSERT INTO membership VALUES(NULL,'$n','$d','Active')");
echo "Added";
}
?>
