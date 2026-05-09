<?php
include "../config/db.php";
include "../includes/auth.php";

if ($_SESSION['user']['role'] !== 'admin') {
    die("Access denied!");
}
?>

<h1>Admin Dashboard</h1>

<a href="memberships.php">Manage Memberships</a><br>
<a href="users.php">Manage Users</a><br>
<a href="create_admin.php">Create Admin</a><br>
<a href="../public/logout.php">Logout</a>