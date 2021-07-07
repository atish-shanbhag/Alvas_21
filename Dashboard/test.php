/*<?php
include('config.php');
$d=0;
if(isset($_POST['c']))
{
   $d= $_POST['c'];
  echo $d;
}
?>
*/













<?php
session_start();
echo $_POST['samsung'];
if(isset($_POST['samsung'])){
echo "selected";
}
else
{
  echo "not selected";
}
$samsung=NULL;
if(!empty($_POST['samsung']))
$samsung = $_POST['samsung'];
$_SESSION["samsung"] = $samsung;
$samsung1 = $_SESSION["samsung"];
echo $samsung1."<br />";
//}
$apple=NULL;
if(!empty($_POST['apple']))
$apple = $_POST['apple'];
$_SESSION["apple"] = $apple;
$apple1 = $_SESSION["apple"];
echo $apple1."<br />";
$low=NULL;
if(!empty($_POST['low']))
$low = $_POST['low'];
$_SESSION["low"] = $low;
$low1 = $_SESSION["low"];
echo $low1."<br />";

?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Checkbox</title>
</head>
<body>
<form   method="post">
Samsung<input type="checkbox" name="samsung" value="samsung" onchange="this.form.submit()" >
Apple<input type="checkbox" name="apple"  value="apple" onchange="this.form.submit()" <?php if(!empty($_SESSION["apple"])){echo "checked";} ?>>
5000-1000<input type="checkbox" name="low"  value="low" onchange="this.form.submit()" <?php if(!empty($_SESSION["low"])){echo "checked";} ?>>
</form>

</body>
</html>
















