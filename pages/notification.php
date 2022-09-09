<?php include "./includes/includes.php" ?>

<?php
$sql = "select * from n_b_d_notification";
$result = $conn->query($sql);
$rows = $result->fetch_all(MYSQLI_ASSOC);
?>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>DataTables</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">DataTables</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Donor's Details</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <div class="container tbl-container">
                                <div class="d-flex justify-content-end m-2">
                                    <a href="add/notification.php"> <button type="submit" class="btn btn-primary">add</button></a>
                                </div>
                                <div class="tbl-fixed">
                                    <table id="example2" class="table table-bordered table-hover " style="overflow-x:scroll; overflow-y:scroll">
                                        <thead>
                                            <tr>
                                                <th>Actions</th>
                                                <th>Title</th>
                                                <th>Description</th>
                                                <th>Image</th>
                                                <th>Date</th>


                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach ($rows as $row) {
                                            ?>
                                                <tr>
                                                    <td>
                                                        <a href="edit/notification.php?id=<?php echo $row['n_no'] ?>"><button class="btn btn-secondary"><i class="ion ion-edit"></i></button></a>
                                                        <a href="delete/notification.php?id=<?php echo $row['n_no'] ?>"><button class="btn btn-danger"><i class="ion ion-trash-b"></i></button></a>
                                                    </td>
                                                    <td><?php echo $row['n_title'] ?></td>
                                                    <td><?php echo $row['n_description'] ?></td>
                                                    <td> <a href="../<?php echo $row['n_image'] ?>"> <img src="../<?php echo $row['n_image'] ?>" alt="" height="50px" width="50px"></a></td>
                                                    <td><?php echo $row['n_date'] ?></td>
                                                </tr>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                        </div>
                        <!-- /.card-body -->
                    </div>

                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
<?php include "./includes/footer.php" ?>