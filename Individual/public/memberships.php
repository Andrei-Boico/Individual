<?php include "../config/db.php"; ?>

<!DOCTYPE html>
<html>
<head>
    <title>Membership Plans</title>
</head>
<body>

<h1>Membership Plans</h1>

<form method="GET">
    <input type="text" name="search" placeholder="Search category...">
    <button type="submit">Search</button>
</form>

<br>

<?php
if (isset($_GET['search']) && $_GET['search'] != "") {
    $search = "%" . $_GET['search'] . "%";
    $stmt = $pdo->prepare("SELECT * FROM memberships WHERE category LIKE ?");
    $stmt->execute([$search]);
} else {
    $stmt = $pdo->query("SELECT * FROM memberships");
}

while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    echo "<div style='border:1px solid #000; padding:10px; margin:10px;'>
        <h3>{$row['title']}</h3>
        <p>Duration: {$row['duration']} days</p>
        <p>Price: {$row['price']} $</p>
        <p>Trainer: {$row['trainer']}</p>
        <p>Category: {$row['category']}</p>
    </div>";
}
?>

</body>
</html>