<?php
session_start();

if (!isset($_SESSION['username'])) {
    header("Location: Page_De_Connexion.php");
    exit();
}

?>

<?php
echo "<h1>Welcome, " .htmlspecialchars($_SESSION['username']) . "!</h1>";
echo "<p>You are now logged in to the dashboard.</p>";
echo "<a href='logout.php'>Logout</a>";
