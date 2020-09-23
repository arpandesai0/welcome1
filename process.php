
<?php
session_start();

    $server = "sql12.freemysqlhosting.net";
    $userrname = "sql12366566";
    $password="zbNSYpLgD4";
    $db = "sql12366566";
    $conn = mysqli_connect($server,$userrname,$password,$db);

    $username = $_POST['username'];
    $password = $_POST['password'];
    if($username==""||$password==""){
    exit("login failed");}

    $result = mysqli_query($conn,"SELECT * FROM data WHERE username='$username' && password='$password'");
    $row = mysqli_fetch_array($result);
    echo $row;
    if($row['username']==$username && $row['password']==$password){
    $conn->close();
    $_SESSION["usernamelog"]=$username;
    header("Location: welcome.php");}
    else{echo"login failed";}


    $conn->close();


?>





