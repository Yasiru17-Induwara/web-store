<?php 
session_start();
include "connection.php";

$username = $_POST["un"];
$password = $_POST["pw"];


if(empty($username)){
    echo("Enter Username");
}else if(empty($password)){
    echo("Enter password");
}else{

$rs = Database::search("SELECT * FROM `admin` WHERE `username` = '". $username ."' AND `password` = '". $password ."' " );

$num = $rs->num_rows;
if($num == 1){

    $d = $rs->fetch_assoc();
    echo("success");
    $_SESSION["data"] = $d;

}else{
    echo("Invalid username or password");
}


}
?>