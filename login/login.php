<?php
/**
 * Created by PhpStorm.
 * User: xonls
 * Date: 17-4-29
 * Time: 下午1:25
 */
namespace Login;
const PATH ='/login';
public class Login{
    private $username;
    private $password;
    $username=$_POST['Name'];
    $password = $_POST['Password'];
    function loginConnection(){
        if($username="admin" && $password="admin")
            echo "admin login success";
    }
}

?>