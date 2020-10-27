

<?php


$today = date("Y/m/d");

if ($today == '2020/10/28') {
  echo "<h1>Dashboard</h1>";
}
else{
    header("Location: login.php");
}
?>



