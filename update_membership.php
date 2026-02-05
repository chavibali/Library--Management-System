
<form method="post">
Membership No: <input type="number" name="mno" required>
<input type="submit" name="upd" value="Extend">
</form>
<?php
include 'db.php';
if(isset($_POST['upd'])){
$m=$_POST['mno'];
mysqli_query($conn,"UPDATE membership SET duration='Extended 6 Months' WHERE membership_no=$m");
echo "Updated";
}
?>
