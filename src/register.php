<?php
session_start();

$servername="mysql-server";
$username="root";
$password="secret";
$database="store";

$conn=mysqli_connect($servername , $username , $password , $database);
// print_r($_POST["register"]);die;
if(isset($_POST)){
    $name=$_POST["name"];
    $email=$_POST["email"];
    $password=$_POST["password"];
    $errors = array();
    $confirm_password=$_POST["confirm_password"];

    if (empty($name)) { array_push($errors, "Username is required"); }
	if (empty($email)) { array_push($errors, "Email is required"); }
	if (empty($password)) { array_push($errors, "Password is required"); }
    if (empty($confirm_password)) { array_push($errors, "Password is required"); }


    $query= "INSERT INTO `Users` (`name`, `email`, `pass`, `confirm_password`) VALUES ('$name', '$email', '$password', '$confirm_password')";
    $result=mysqli_query($conn,$query);
    $_SESSION['name'] = $name;
    // print_r($result);die;
    if($result){
    if($password == $confirm_password) {
        
            $_SESSION['status']= "Registered Successfully! Now you can ";
            header("Location:signup.php");
        }
        else{
            $_SESSION['status']= "Something went wrong! ";
            header("Location:signup.php");

        }
    }
}




?>