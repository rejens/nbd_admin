<?php
include "../includes/connection.php";
include "../includes/header.php";
?>

<div class="card card-primary mx-auto my-5 w-50">
    <div class="card-header">
        <h3 class="card-title">Add Blood Bank</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form method="POST">
        <div class="card-body shadow-lg">
            <div class="form-floating m-2">
                <input type="text" name="name" id="name" class="form-control" placeholder="Name">
                <label for="name">Name</label>
            </div>
            <div class="form-floating m-2">
                <input type="text" name="district" id="district" class="form-control" placeholder="District">
                <label for="district">District</label>
            </div>
            <div class="form-floating m-2">
                <input type="text" name="address" id="address" class="form-control" placeholder="Address">
                <label for="address">Address</label>
            </div>
            <div class="form-floating m-2">
                <input type="email" name="email" id="email" class="form-control" placeholder="Email">
                <label for="email">Email</label>
            </div>
            <div class="form-floating m-2">
                <input type="tel" name="phone" id="phone" class="form-control" placeholder="Phone">
                <label for="phone">Phone</label>
            </div>
        </div>

        <!-- /.card-body -->

        <div class="card-footer">
            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
            <button type="submit" class="btn btn-secondary" name="cancel">cancel</button>

        </div>
    </form>
</div>

<?php

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $district = $_POST['district'];
    $address = $_POST['address'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];

    $sql = "insert into n_b_d_bloodBank(`bname`, `bdistrict`, `baddress`, `bemail`,`bphone`) values ('$name','$district','$address','$email','$phone')";
    $res = mysqli_query($conn, $sql);
    // $conn->query($sql);
    if ($res) {
        echo "<script> location.replace('../bloodBank.php') </script>";
    } else {
        echo "sorry could not add blood bank details to database";
    }
}

if (isset($_POST['cancel'])) {
    echo "<script> location.replace('../bloodBank.php') </script>";
}


?>