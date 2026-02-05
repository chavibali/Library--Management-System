
<?php session_start(); if($_SESSION['role']!='admin') die("Access Denied"); ?>
<h2>Admin Dashboard</h2>
<a href="add_membership.php">Add Membership</a><br>
<a href="update_membership.php">Update Membership</a><br>
<a href="reports.php">Reports</a><br>
<a href="logout.php">Logout</a>
