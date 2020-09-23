<?php
session_start();
if(!isset($_SESSION["usernamelog"])){header("Location: login.php");}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
    <link rel="icon" href="insta.png">
    <link rel="stylesheet" href="welcome.css">

</head>
<body>
    <p id="gr">Get ready for adventure!</p>
    <div id="slider"></div>
    <div class="profile">
    <div id="image">
    <img id="profileicon" src="profile_icon.png" value="<?php echo $_SESSION["usernamelog"]; ?>">
    </div>
    <div id="list">
    <ul>
            <li >Profile</li>
            <li>Verify</li>
            <li>Settings</li>
            <li onclick="window.location.href='logout_process.php';">Logout</li>
     </ul

     </div>
    </div>

</body>
</html>