<?php include "./includes/includes.php" ?>

<?php
$sql = "select * from n_b_d_message";
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
                                <div class="tbl-fixed">
                                    <table id="example2" class="table table-bordered table-hover " style="overflow-x:scroll; overflow-y:scroll">
                                        <thead>
                                            <tr>
                                                 <th style="min-width:110px;">actions</th>
                                                 <th style="min-width:110px;">Name</th>
                                                 <th style="min-width:110px;">Address</th>
                                                 <th style="min-width:110px;">Email</th>
                                                 <th style="min-width:110px;">Phone</th>
                                                 <th style="min-width:110px;">Message</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach ($rows as $row) {
                                            ?>
                                                <tr>
                                                    <td> <a href="delete/feedback.php?id=<?php echo $row['S_No'] ?>"><button class="btn btn-danger"><i class="ion ion-trash-b"></i></button></a></td>
                                                    <td><?php echo $row['mname'] ?></td>
                                                    <td><?php echo $row['maddress'] ?></td>
                                                    <td><?php echo $row['memail'] ?></td>
                                                    <td><?php echo $row['mphone'] ?></td>
                                                    <td><?php echo $row['mmessage'] ?></td>
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