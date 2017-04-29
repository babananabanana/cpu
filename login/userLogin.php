<?php
 /*   public class Login{
        private $username;
        private $password;
        $username=$_POST['Name'];
        $password = $_POST['Password'];
        function loginConnection(){
            if($username="user" && $password="user")
                echo "user login success";
        }
    }
    $login = new Login();
    $login.loginConnection();
 */
$username=$_POST['Name'];
$password = $_POST['Password'];
if($username=="user" && $password=="user") {
    header('Location:userInterface.php');
}
?>