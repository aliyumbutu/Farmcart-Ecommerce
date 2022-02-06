<?php  $ps_id = $_GET["ps_id"]; 





require_once("function.php");

$sql = "DELETE FROM `add` WHERE id = '$ps_id'";

$query = mysqli_query($conn, $sql)or die("Invalid query");

header("location:delete.php");


?>