<?php
include "../includes/connection.php";
include "../includes/header.php";
?>

<div class="card card-primary mx-auto my-5 w-50">
    <div class="card-header">
        <h3 class="card-title">Add Ad</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form method="POST" enctype="multipart/form-data">
        <div class="card-body shadow-lg">
            <div class="form-floating m-2">
                <input type="text" name="title" id="title" class="form-control" placeholder="Title">
                <label for="title">Title</label>
            </div>
            <div class="mb-3 form-control m-2">
                <label for="formFile" class="form-label">insert photo</label>
                <input class="form-control" name="img" type="file" id="formFile">
            </div>
            <div class="form-floating m-2">
                <input type="date" name="date" id="date" class="form-control" placeholder="date">
                <label for="date">date</label>
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
    $img = $_FILES['img'];
    $name = $img['name'];
    $tempName = $img['tmp_name'];
    $name = uniqid();
    $fileDestination = "upload/ads/$name.jpg";

    $title = $_POST['title'];
    $date = $_POST['date'];

    move_uploaded_file($tempName, "../../" . $fileDestination);
    $sql = "insert into n_b_d_ads(`a_title`, `a_date`, `a_image`) values ('$title','$date','$fileDestination')";
    $res = mysqli_query($conn, $sql);
    if ($res) {
        echo "<script> location.replace('../ads.php') </script>";
    } else {
        echo "sorry could not add ads details to database";
    }
}

if (isset($_POST['cancel'])) {
    echo "<script> location.replace('../ads.php') </script>";
}


?>