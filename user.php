
<?php session_start(); if($_SESSION['role']!='user') die("Access Denied"); ?>
<h2>User Dashboard</h2>
<a href="reports.php">Reports</a><br>
<a href="logout.php">Logout</a>
