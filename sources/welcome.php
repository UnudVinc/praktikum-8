<?php
include_once ("./../pages/main.html");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Landing Page</title>
</head>
<body>
<div class="page-title">Not Logged In</div>
<br />
<div class="page-option">
    <form action="../index.php" method="get">
        <button type="submit" class="page" name="login" value="login">Login</button>
        <br />
        <button type="submit" class="page" name="signup" value="reg">Registration</button>
    </form>
</div>
</body>
</html>
