<?php
include "../includes/connection.php";
include "../includes/header.php";
?>

<div class="card card-primary mx-auto my-5 w-50">
    <div class="card-header">
        <h3 class="card-title">Add Ambulance</h3>
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
                <input type="text" name="provience" id="provience" class="form-control" placeholder="Provience">
                <label for="provience">Provience</label>
            </div>
            <div class="form-floating m-2">
                <input type="text" name="district" id="district" class="form-control" placeholder="District">
                <label for="district">District</label>
            </div>
            <div class="form-floating m-2">
                <input type="text" name="village" id="village" class="form-control" placeholder="Village">
                <label for="village">Village</label>
            </div>
            <div class="form-floating m-2">
                <input type="text" name="person" id="person" class="form-control" placeholder="Person">
                <label for="person">Person</label>
            </div>
            <div class="form-floating m-2">
                <input type="text" name="ambulancePerson" id="ambulancePerson" class="form-control" placeholder="Ambulance Number">
                <label for="ambulancePerson">Ambulance Number</label>
            </div>
            <div class="form-floating m-2">
                <input type="tel" name="ambulancePhone" id="ambulancePhone" class="form-control" placeholder="Phone">
                <label for="ambulancePhone"> Phone</label>
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
    $provience = $_POST['provience'];
    $district = $_POST['district'];
    $village = $_POST['village'];
    $person = $_POST['person'];
    $ambulanceNumber = $_POST['ambulanceNumber'];
    $ambulancePhone = $_POST['ambulancePhone'];

    $sql = "insert into n_b_d_news(`ntitle`, `ndate`, `nimg`, `ndescription`) values ('$title','$date','$fileDestination','$description')";
    $res = mysqli_query($conn, $sql);
    // $conn->query($sql);
    if ($res) {
        echo "<script> location.replace('../ambulance.php') </script>";
    } else {
        echo "sorry could not add ambulance details to database";
    }
}

if (isset($_POST['cancel'])) {
    echo "<script> location.replace('../ambulance.php') </script>";
}


?>