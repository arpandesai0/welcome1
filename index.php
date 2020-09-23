<?php
session_start();
if(isset($_SESSION["usernamelog"]))
{

   header("Location:welcome.php");

}
else
{
header("Location:home.php");

}
?>