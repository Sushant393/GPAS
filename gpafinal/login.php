<?php
    include("connect.php");
    session_start();
    $name=$_POST["name"];
    echo $name;
    $pass=$_POST["password"];
    $password=md5($pass);
    $query= "SELECT * from user WHERE username='$name' and password='$password'";
    $result=mysqli_query($con,$query);
    $rows=mysqli_num_rows($result);
    echo $rows;
    if($rows>0){
        $row=mysqli_fetch_array($result);
        $_SESSION['uname']=$name;
        header('location:layer1_login.php');
    }
    else{
        echo '<script>alert("Uh oh Please provide us valid credentials")
        window.location.href="index.html"
        </script>';
    }
?>