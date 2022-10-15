<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
require_once "../config.php";
if(isset($_GET['num']))
    if ($mysqli->query('SELECT COUNT(*) as c from users;')->fetch_assoc()['c']>1)
        $mysqli->query('DELETE from users where id = "'.$_GET['num'].'";');
?>