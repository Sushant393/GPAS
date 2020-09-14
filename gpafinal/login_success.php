<html>
    <head>
        <title>Login Successful!!</title>
        <link rel="stylesheet" href="regstyle.css">
        <style>
    p{
        font-size: 20px;
    }
    h1{
        font-family:bigjohn;
        text-transform: uppercase;
        color:#1B2932;
        font-size:45px;
        text-align: center;
        margin-top: 10px;;
    }
</style>
    </head>
    <body>
        <h1>Graphical Password Authentication System</h1>
        <?php
        session_start();
        include('connect.php');
        $_SESSION['layer5']=$_GET['var'];
        $name=$_SESSION['uname'];
        $layer1=$_SESSION['layer1'];
        $layer2=$_SESSION['layer2'];
        $layer3=$_SESSION['layer3'];
        $layer4=$_SESSION['layer4'];
        $layer5=$_SESSION['layer5'];
        $result=mysqli_query($con,"SELECT image1,image2,image3,image4,image5 from user WHERE username='$name'");
        if(mysqli_num_rows($result)>0){
            $row=mysqli_fetch_array($result);
            if($row[0]==$layer1 && $row[1]==$layer2 && $row[2]==$layer3 && $row[3]==$layer4 && $row[4]==$layer5){
            //     echo "images selected<br>"; 
            //     echo $layer1."<br>";
            //     echo $layer2."<br>";
            //     echo $layer3."<br>";
            //    echo $layer4."<br>";
            //    echo $layer5."<br>";
            //    echo "Sequence in db<br>";
            //    echo $row[0]."<br>";
            //    echo $row[1]."<br>";
            //    echo $row[2]."<br>";
            //    echo $row[3]."<br>";
            //    echo $row[4]."<br>";,
               header('location:account.php');
            }
            else{
                echo '<a href="layer1_login.php">back</a>';
                header('location:layer1_login.php');
                $_SESSION['selectagain']=1;
            }
        }
        ?>
    </body>

</html>