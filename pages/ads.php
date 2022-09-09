<?php include "./includes/includes.php" ?>

<?php
$sql = "select * from n_b_d_ads";
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
                            <h3 class="card-title">ad's Details</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <div class="container tbl-container">
                                <div class="tbl-fixed">
                                    <div class="d-flex justify-content-end m-2">
                                        <a href="add/ambulance.php"> <button type="submit" class="btn btn-primary">add</button></a>
                                    </div>
                                    <table id="example2" class="table table-bordered table-hover " style="overflow-x:scroll; overflow-y:scroll">
                                        <thead>
                                            <tr>
                                                <th style="min-width:125px">actions</th>
                                                <th style="min-width:150px">Title</th>
                                                <th style="min-width:100px">Photo</th>
                                                <th style="min-width:125px">Date</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach ($rows as $row) {
                                            ?>
                                                <tr>
                                                    <td> <a href="edit/ambulance.php?id=<?php echo $row['s_no'] ?>"> <button type="submit" class="btn btn-primary"><i class="ion ion-edit"></i></button></a>
                                                        <a href="delete/ambulance.php?id=<?php echo $row['s_no'] ?>"><button class="btn btn-danger"><i class="ion ion-trash-b"></i></button></a>
                                                    </td>
                                                    <td><?php echo $row['aname'] ?></td>
                                                    <td><?php echo $row['aprovince'] ?></td>
                                                    <td><?php echo $row['adistrict'] ?></td>
                                                    <td><?php echo $row['avillage'] ?></td>
                                                    <td><?php echo $row['aperson'] ?></td>
                                                    <td><?php echo $row['ambulancenum'] ?></td>
                                                    <td><?php echo $row['aphone'] ?></td>
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