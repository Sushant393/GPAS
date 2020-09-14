 
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
window.location.href = "layer5_regi.php?var=" + name;
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
<h1>Graphical Password Authentication System</h1>
<header>Image Layer 4/5</header><br><p>Complete all the layers to complete your registration!<br><br>
Please note Images you choose is your Password<br><br>
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
$_SESSION['a'][8]=$_GET['var'];
echo '</center></div>';
?>
</body>
</html>