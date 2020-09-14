 <html>
<head>
<style>   
    <?php include 'styles.css'; ?>
</style>
<!-- js section, sending the selected image to next layer -->
<script>
function changeIt(img)
{
var name = img.src;
window.location.href = "layer2_login.php?var=" + name;
}
</script>
<title>
Layer 1!
</title>
</head>
<body> 
    <!-- Php section -->
<?php
session_start();
echo '<div class="wrap1">
<h1>GRAPHICAL PASSWORD AUTHENTICAION SYSTEM</h1>';
if($_SESSION['selectagain']==1)
{
    echo '<script>
    alert(Your last selction sequence of image was wrong!
    click OK to try again!!)
    </script>';
    $_SESSION['selectagain']==0;
}

echo'<header>Image Layer 1/5</header><br><p>Selecting any image will redirect you to next layer !<br><br><br>
Choose your Image ::</p><br><br>';

$ar[0]="ironman.";
$ar[1]="hulk.";
$ar[2]="capam.";
$ar[3]="antman.";
$ar[4]="thor.";
shuffle($ar);
echo '<center>';
for($i=0;$i<=4;$i++)
{
echo '<img class="img-grid" src="images\\'.$ar[$i].'png" onclick="changeIt(this)" height="120" width="120">'; 
}
echo '</center></div>';
?>
</body>		
</html>