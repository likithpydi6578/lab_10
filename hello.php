<?php
session_start();
date_default_timezone_set("Asia/Kolkata");

if (isset($_POST['username'])) {
    $_SESSION['username'] = $_POST['username'];
    $_SESSION['start_time'] = time();
    $_SESSION['formatted_time'] = date("h:i:s A");
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Hello Page</title>
</head>
<body>
    <div style="text-align: right;">
        <strong>Start Time:</strong> <?php echo $_SESSION['formatted_time']; ?>
    </div>

    <h2>Hello, <?php echo $_SESSION['username']; ?>!</h2>
    <p>Your session is currently active.</p>

    <form action="logout.php" method="post">
        <button type="submit">Logout</button>
    </form>
</body>
</html>