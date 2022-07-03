<?php
session_start();
require "connect.php";

$Error ="";
if(empty($_POST["floatingInput"])|| empty($_POST["floatingInputEmail"]) || empty($_POST["floatingPassword"])){
    echo "can't be empty";

}else{
    if(strlen($_POST["floatingInput"])< 4){
        $Error ="اسم المستخدم يجب ان يكون اكثر من  اربعة حروف<br>";
    }
    if(is_numeric($_POST["floatingInput"][0])){
        $Error.= "اسم المستخدم يجب ان يبدا بحرف";


    }
    if(!preg_match("/^[a-zA-Z]+$/",$_POST["floatingInput"])){
        $Error.= "اسم المستخدم لا يجب ان يحتوي على رموز خاصة";
    }
    if(empty($Error)){
        $username=$_POST["floatingInput"];
        $email=$_POST["floatingInputEmail"];
        $password=$_POST["floatingPassword"];

        $sql = "INSERT INTO signUp(name, email ,password)VALUES('$username','$email','$password')";
        if(mysqli_query($conn,$sql)){
            $_SESSION['Name']=$email;
            header('Location:profile1.php');
          
        }
    }
}
echo $Error;

?>