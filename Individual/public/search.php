<?php include "../config/db.php"; ?>
<form method="GET">
    <input type="text" name="keyword" placeholder="Search by category">
    <button type="submit">Search</button>
</form>

<?php
if(isset($_GET['keyword'])) {
    $keyword = "%" . $_GET['keyword'] . "%";
    $stmt = $pdo->prepare("SELECT * FROM memberships WHERE category LIKE ?");
    $stmt->execute([$keyword]);

    while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        echo "<p>{$row['title']} - {$row['category']}</p>";
    }
}
?>