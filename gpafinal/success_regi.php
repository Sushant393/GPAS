<html>
<head>
<link rel="stylesheet" href="regstyle.css">
<style>
    <?php include 'regstyle.css'; ?>
</style>
</head>
<title>Success</title>
<body> 
<header>Graphical<br>Password<br>Authentication<br> System</header>

<?php
session_start();
include('connect.php');		

	$var=$_GET['var'];
    $_SESSION['a'][10]=$_GET['var'];
    $name=$_SESSION['a'][0];
    $password=$_SESSION['a'][1];
    $realname=$_SESSION['a'][2];
    $collname=$_SESSION['a'][3];
    $email=$_SESSION['a'][4];
    $phone=$_SESSION['a'][5];
    $image1=$_SESSION['a'][6];
    $image2=$_SESSION['a'][7];
    $image3=$_SESSION['a'][8];
    $image4=$_SESSION['a'][9];
    $image5=$_SESSION['a'][10];
    $query="INSERT into user(username,password,name,clg,email,phone,image1,image2,image3,image4,image5,userimage) 
    values('$name','$password','$realname','$collname','$email',$phone,'$image1','$image2','$image3','$image4','$image5','images/default.jpg')";
    $result=mysqli_query($con, $query);
    echo '<p>Registration Successfull<br><br>
            <a href="index.html">click here to login</a></p>';
?>
</body>
</html>