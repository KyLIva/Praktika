<?php
$login = filter_var(trim ($_POST['login']),
FILTER_SANITIZE_STRING);

$name = filter_var(trim ($_POST['name']),
FILTER_SANITIZE_STRING);

$Fname = filter_var(trim ($_POST['Fname']),
FILTER_SANITIZE_STRING);

$Oname = filter_var(trim ($_POST['Oname']),
FILTER_SANITIZE_STRING);

$class = filter_var(trim ($_POST['class']),
FILTER_SANITIZE_STRING);

$email = filter_var(trim ($_POST['email']),
FILTER_SANITIZE_STRING);

$password = filter_var(trim ($_POST['password']),
FILTER_SANITIZE_STRING);





if(mb_strlen($login)<4 || mb_strlen($login)>90){

        echo "Недопустимая длина логина (от 4 символов)";
        exit();
}else if (mb_strlen($name)<3 || mb_strlen($name)>90){

        echo "Недопустимая длина Имени";
        exit();
}else if (mb_strlen($Fname)<2 || mb_strlen($Fname)>90){

        echo "Недопустимая длина Фамилии";
        exit();

}else if (mb_strlen($Oname)<3 || mb_strlen($Oname)>90){

        echo "Недопустимая длина Отчества";
        exit();
}else if (mb_strlen($class)<1 || mb_strlen($class)>4){

        echo "Недопустимая длина класса(от 2 до 3 символов)";
        exit();
}else if (mb_strlen($email)<5 || mb_strlen($email)>90){

        echo "Недопустимая длина Email";
        exit();

}else if (mb_strlen($password)<5 || mb_strlen($password)>90){

        echo "Недопустимая длина Пароля (от 5 символов)";
        exit();
}

$password = md5($password."aisruifgo9egoiehrugeiporjg9jthpgioerdnpiguerio09u45fh434h09fg093420t0gbhui9rwhfg21fi34yqfgqgjwbe4780g34fgmpoierjh");



$mysql = new mysqli('localhost','root','root','electr_dnevnic.bd');

$mysql->query("INSERT INTO `user` (`Name`, `Login`, `Password`, `Email`, `Fname`, `Oname`, `Class` )
VALUES('$name', '$login', '$password', '$email', '$Fname', '$Oname', '$Class')");

$query = 'INSERT INTO users SET login="'.$login.'", password="'.$password.'", email="'.$email.'", Status=1';

        $query = 'UPDATE FROM users WHERE id="'.$_REQUEST['id'].'"';
	$query = 'DELETE FROM users WHERE id="'.$_REQUEST['id'].'"';

$mysql->close();

header('Location:http://sait/Vxof/Vxod1.php');
exit();
?>