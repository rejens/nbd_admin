<?php
include "../includes/connection.php";

$id = $_GET['id'];
echo $id;
$sql = "delete from n_b_d_ads where a_id='$id'";
$conn->query($sql);
echo "<script>location.replace('../ads.php') </script>";
