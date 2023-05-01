<?php 

if($_SERVER['REQUEST_METHOD']=="POST")
{
    $name = $_POST['name'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];
    $mobile = $_POST['mobile'];
    $password = $_POST['password'];

    $HOSTNAME = "localhost";
    $USERNAME = "root";
    $PASSWORD = "";
    $DATABASENAME = "form";

    $con = mysqli_connect($HOSTNAME,$USERNAME,$PASSWORD,$DATABASENAME);
    if($con){
        // echo "Connection successful!";
        $sql = "insert into `data`(name,email,gender,mobile,password) values('$name','$email','$gender','$mobile','$password')";
        $result = mysqli_query($con,$sql);
        if($result){
            echo "Data is inserted";
        }
        else
        {
            echo "There is a problem!";
        }
    }
    else{
        //die(mysqli_error($con));
    }
}
?>