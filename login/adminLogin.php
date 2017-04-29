<?php
/**
 * Created by PhpStorm.
 * User: xonls
 * Date: 17-4-27
 * Time: 下午4:00
 */
/*public class Login{
    private $username;
    private $password;
$username=$_POST['Name'];
$password = $_POST['Password'];
    function loginConnection(){
        if($username="admin" && $password="admin")
            echo "admin login success";
    }
}
$login = new Login();
$login.loginConnection();
*/
$username=$_POST['Name'];
$password = $_POST['Password'];
if($username=="admin" && $password=="admin") {
    header('Location:adminInterface.php');
}
?>