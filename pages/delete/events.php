<?php
include "../includes/connection.php";

$id = $_GET['id'];
echo $id;
$sql = "delete from n_b_d_event where e_no='$id'";
$conn->query($sql);
echo "<script>location.replace('../events.php') </script>";
