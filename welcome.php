<?php
session_start();
if (!isset($_SESSION['user'])) {
    header("Location: index.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Bienvenue</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h2>Bienvenue, <?= htmlspecialchars($_SESSION['user']); ?> !</h2>
        <a href="logout.php">Se déconnecter</a>
    </div>
</body>
</html>
