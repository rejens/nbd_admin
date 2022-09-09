<?php
include "../includes/connection.php";

$id = $_GET['id'];
echo $id;
$sql = "delete from n_b_d_notification where n_no='$id'";
$conn->query($sql);
echo "<script>location.replace('../notification.php') </script>";
