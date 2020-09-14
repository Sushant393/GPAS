<html>
<head>
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
<!-- js section, sending the selected image to next layer -->
<script>
function changeIt(img)
{
var name = img.src;
window.location.href = "layer4_login.php?var=" + name;
}
</script>
<title>
Layer 3!
</title>
</head>
<!-- Php section -->
<?php
session_start();

echo '<body> 
<h1>Graphical Password Authentication System</h1>';
echo'<header>Image Layer 3/5<br><p>Selecting any image will redirect you to next layer !<br><br><br>
Choose your Image ::<br><br>';
$var=$_GET['var'];
$_SESSION['a'][7]=$_GET['var'];
$_SESSION['layer2']=$_GET['var'];
$ar[0]="ironman.";
$ar[1]="hulk.";
$ar[2]="capam.";
$ar[3]="antman.";
$ar[4]="thor.";
shuffle($ar);
echo '<center>';
for($i=0;$i<=4;$i++)
{
echo '<img src="images\\'.$ar[$i].'png" onclick="changeIt(this)" height="120" width="120"> ';
}
echo '</center>
</body>';			
?>
</html>