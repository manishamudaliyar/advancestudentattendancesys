<?php
include "connection.php";
$id=$_GET["id"];

$query="delete from table1 where id=$id";
$res=mysqli_query($link,$query);
?>

<script type = "text/javascript">
window.location="studupdate.php";

</script>