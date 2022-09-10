<?php
include "../includes/connection.php";
include "../includes/header.php";
$id = $_GET['id'];
$sql = "select * from n_b_d_news where s_no='$id'";
$res = $conn->query($sql);
$rows = $res->fetch_assoc();

?>


<div class="card card-primary mx-auto my-5 w-50">
    <div class="card-header">
        <h3 class="card-title">Edit Blood Bank</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form method="POST">
        <div class="card-body shadow-lg">
            <div class="form-floating m-2">
                <input type="text" name="title" id="title" class="form-control" placeholder="title" value="<?php echo $rows['ntitle'] ?>">
                <label for="title">Title</label>
            </div>
            <div class="form-control m-2">
                <textarea class="form-control" rows="5" placeholder="Leave a comment here" name="description" id="description"><?php echo $rows['ndescription'] ?></textarea>
                <label for="description">Description</label>
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
    $description = $_POST['description'];
    $sql = "update n_b_d_news set ntitle='$title',ndescription='$description' where s_no='$id'";
    if ($conn->query($sql)) {
        echo "<script>location.replace('../news.php') </script>";
    } else {
        echo "could not update news details";
    }
}
if (isset($_POST['cancel'])) {
    echo "<script> location.replace('../news.php') </script>";
}
