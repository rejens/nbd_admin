<?php
include "../includes/connection.php";

$id = $_GET['id'];
echo $id;
$sql = "update n_b_d_event set isApproved=1 where e_no='$id'";
$conn->query($sql);
echo "<script>location.replace('../events.php') </script>";
