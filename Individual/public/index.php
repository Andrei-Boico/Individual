<?php include "../config/db.php"; ?>
<!DOCTYPE html>
<html>
<head><title>Gym Home</title></head>
<body>

<h1>Welcome to Gym Management System</h1>

<a href="login.php">Login</a> |
<a href="register.php">Register</a> |
<a href="memberships.php">Membership Plans</a>

<h2>Available Memberships</h2>

<?php
$stmt = $pdo->query("SELECT * FROM memberships");
while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    echo "<div>
            <h3>{$row['title']}</h3>
            <p>Duration: {$row['duration']} days</p>
            <p>Price: {$row['price']}$</p>
            <p>Trainer: {$row['trainer']}</p>
          </div><hr>";
}
?>

</body>
</html>