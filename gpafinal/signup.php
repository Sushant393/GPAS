<?php
session_start();
ob_start();
?>
<?php
	include('connect.php');
	session_start();
    $name=$_POST['name'];
	$pass=$_POST['password'];
	$password=md5($pass);
	$collname=$_POST['collname'];
	$email=$_POST['email'];
	$phone=$_POST['phone'];
	$realname=$_POST['realname'];
	$result=mysqli_query($con,"select * from user where name='$name' ");
	if (mysqli_num_rows($result)>0)
		{
            echo'<script>alert("Username already registered, Enter unique username!")
            window.location.href="signup.html"
            </script>';
		    exit;return;
		}
	    $result=mysqli_query($con,"select * from user where email='$email'");
	if (mysqli_num_rows($result)>0)
	{
        echo'<script>alert("Email id has been previously used")
            window.location.href="signup.html"
        </script>';
	     exit;return;
	}
	$result=mysqli_query($con,"select * from user where phone='$phone' ");
	if (mysqli_num_rows($result)>0)
	{
        echo'<script>alert("The phone number is already registered, please use unique phone number!")
        window.location.href="signup.html"
        </script>';
		exit;return;
    }
    // else{
    //     $query="INSERT into user(username,password,name,clg,email,phone,image1,image2,image3,image4,image5,userimage) 
    //     values('$name','$password','$realname','$collname','$email',$ph`one,'$image1','$image2','$image3','$image4','$image5','images/default.jpg')";
    //     $result=mysqli_query($con,$query);
    // }
        
		    $_SESSION['a'][0]=$name;
		    $_SESSION['a'][1]=$password;
		    $_SESSION['a'][2]=$realname;
		    $_SESSION['a'][3]=$collname;
		    $_SESSION['a'][4]=$email;
		    $_SESSION['a'][5]=$phone;
            header('Location:layer1_reg.php');
?>