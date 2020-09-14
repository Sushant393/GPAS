<?php
session_start();
?>
<html>
    <head>
    <style>
          <?php include 'styles.css'; ?>
    </style>
        <title>
            welcome user | GPAS account
        </title>
    </head>
    <body>
        <?php
        include('connect.php');
        // session_start();
        $name=$_SESSION['uname']; 
        $result=mysqli_query($con,"SELECT name,phone,email,clg,userimage,username from user WHERE username='$name'");
        if(mysqli_num_rows($result)>0){
            $row=mysqli_fetch_row($result);
            $name=$row[0];
            $phone=$row[1];
            $email=$row[2];
            $clg=$row[3];
            $dp=$row[4];
            $uname=$row[5];
            // echo $name."<br>";
            // echo $phone."<br>";
            // echo $clg."<br>";
            // echo $email."<br>";
            // echo $phone."<br>";
            // echo $uname."<br>";
            // echo $dp;
        }
        echo "<div class= 'wrap1'>
        <h1>GRAPHICAL PASSWORD AUTHENTICATION SYSTEM</h1>
        <div class='img'><img src=$dp height='300px' width='300px'></div>
             <div class='dets'>
            Username : $uname<br><br>
             Name     : $name<br><br>
             College  : $clg<br><br>
             Email-id : $email<br><br>
             Phone :  $phone</div><br><br>
             <div class='logout'><a href='index.html'>LOGOUT</a></div>
             <div class='mgs'>SCROLL DOWN FOR MORE OPTIONS</div>
                <div class='edit-dets1'>
                Change the profile picture::<br>
                <a href='#'>Click here</a></div>
                <div class='edit-dets1 edit-dets2'>
                Change the Image sequence::<br>
                <a href='chq_pass'>Click here</a>

                </div>";
        
        ?>
    </body>
</html>