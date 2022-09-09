<?php
include "../includes/connection.php";

$id = $_GET['id'];
echo $id;
$sql = "delete from n_b_d_message where S_No='$id'";
$conn->query($sql);
echo "<script>location.replace('../feedback.php') </script>";
