<?php
session_start();

$end_time = time();
$duration = $end_time - $_SESSION['start_time'];

$minutes = floor($duration / 60);
$seconds = $duration % 60;

$name = $_SESSION['username'];

session_unset();
session_destroy();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Logout Page</title>
</head>
<body>
    <h2>Thank You, <?php echo $name; ?>!</h2>
    <p>You have been logged out.</p>
    <p><strong>Duration of usage:</strong> <?php echo $minutes; ?> minute(s) and <?php echo $seconds; ?> second(s).</p>
    
    <a href="login.html">Go back to Login</a>
</body>
</html>