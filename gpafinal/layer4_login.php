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
window.location.href = "layer5-login.php?var=" + name;
}
</script>
<title>
Layer 4!
</title>
</head>
<body>
<!-- Php section -->
<?php
session_start();

echo '<div class="wrap1">
<h1>GRAPHICAL PASSWORD AUTHENTICATION SYSTEM</h1>';
echo'<header>Image Layer 4/5</header><br><p>Selecting any image will redirect you to next layer !<br><br><br>
Choose your Image ::</p><br><br>';
$var=$_GET['var'];
$_SESSION['a'][8]=$_GET['var'];
$_SESSION['layer3']=$_GET['var'];
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