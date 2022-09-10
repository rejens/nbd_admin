<?php
include "../includes/connection.php";
include "../includes/header.php";
$id = $_GET['id'];
$sql = "select * from n_b_d_bloodbank where S_No='$id'";
$res = $conn->query($sql);
$rows = $res->fetch_assoc();

?>


<div class="card card-primary mx-auto my-5 w-50">
    <div class="card-header">
        <h3 class="card-title">Edit Blood Bank</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form method="POST" enctype="multipart/form-data">
        <div class="card-body shadow-lg">
            <div class="form-floating m-2">
                <input type="text" name="name" id="name" class="form-control" placeholder="Name" value="<?php echo $rows['bname'] ?>">
                <label for="name">Name</label>
            </div>
            <div class="form-floating m-2">
                <input type="text" name="district" id="district" class="form-control" placeholder="district" value="<?php echo $rows['bdistrict'] ?>">
                <label for="district">District</label>
            </div>
            <div class="form-floating m-2">
                <input type="text" name="address" id="address" class="form-control" placeholder="address" value="<?php echo $rows['baddress'] ?>">
                <label for="address">Address</label>
            </div>
            <div class="form-floating m-2">
                <input type="text" name="email" id="email" class="form-control" placeholder="email" value="<?php echo $rows['bemail'] ?>">
                <label for="email">Email</label>
            </div>
            <div class="form-floating m-2">
                <input type="text" name="phone" id="phone" class="form-control" placeholder="phone" value="<?php echo $rows['bphone'] ?>">
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
if (isset($_POST["submit"])) {
    $name = $_POST['name'];
    $district = $_POST['district'];
    $address = $_POST['address'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $sql = "update n_b_d_bloodbank set bname='$name',bdistrict='$district', baddress='$address', bemail='$email',bphone='$phone' where S_No='$id'";
    if ($conn->query($sql)) {
        echo "<script>location.replace('../bloodBank.php') </script>";
    } else {
        echo "could not update blood bank details";
    }
}
if (isset($_POST['cancel'])) {
    echo "<script> location.replace('../bloodBank.php') </script>";
}
