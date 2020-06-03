<?php
$login = filter_var(trim ($_POST['login']),
FILTER_SANITIZE_STRING);

$email = filter_var(trim ($_POST['email']),
FILTER_SANITIZE_STRING);

$password = filter_var(trim ($_POST['password']),
FILTER_SANITIZE_STRING);





$password = md5($password."aisruifgo9egoiehrugeiporjg9jthpgioerdnpiguerio09u45fh434h09fg093420t0gbhui9rwhfg21fi34yqfgqgjwbe4780g34fgmpoierjh");



$mysql = new mysqli('localhost','root','root','electr_dnevnic.bd');

$mysql->query("INSERT INTO `user` (`Name`, `Login`, `Password`, `Email`, `Fname`, `Oname`, `Class` )
VALUES('$name', '$login', '$password', '$email', '$Fname', '$Oname', '$Class')");

$result = $mysql->query("SELECT * FROM `user` WHERE `Login` = '$login' AND `Email`= '$email' AND `Password` = '$password'");

$user = $result-> fetch_assoc();
if  (count($user)==0){
        echo "Такой пользователь не найден";
        exit();
}


setcookie('user', $user['Name'], time() + 3600, "/");

$mysql->close();

header('Location:http://sait/2%20%d0%be%d1%81%d0%bd%d0%be%d0%b2%d0%bd%d0%b0%d1%8f%20%d1%81%d1%82%d1%80%d0%b0%d0%bd%d0%b8%d1%86%d0%b0/2stranica.php');
exit();


?>