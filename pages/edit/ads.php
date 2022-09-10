<?php
include "../includes/connection.php";
include "../includes/header.php";
$id = $_GET['id'];
$sql = "select * from n_b_d_ads where a_id ='$id'";
$res = $conn->query($sql);
$rows = $res->fetch_assoc();

?>


<div class="card card-primary mx-auto my-5 w-50">
    <div class="card-header">
        <h3 class="card-title">Edit Ads</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form method="POST">
        <div class="card-body shadow-lg">
            <div class="form-floating m-2">
                <input type="text" name="title" id="title" class="form-control" placeholder="title" value="<?php echo $rows['a_title'] ?>">
                <label for="title">Title</label>
            </div>
            <div class="form-floating m-2">
                <input type="date" name="date" id="date" class="form-control" placeholder="date" value="<?php echo $rows['a_date'] ?>">
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
if (isset($_POST["submit"])) {
    $title = $_POST['title'];
    $date = $_POST['date'];
    $sql = "update n_b_d_ads set a_title='$title',a_date='$date' where s_no='$id'";
    if ($conn->query($sql)) {
        echo "<script>location.replace('../ads.php') </script>";
    } else {
        echo "could not update ads details";
    }
}
if (isset($_POST['cancel'])) {
    echo "<script> location.replace('../ads.php') </script>";
}
