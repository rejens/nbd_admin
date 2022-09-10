<?php include "./includes/includes.php" ?>

<?php
$sql = "select * from n_b_d_event";
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
                                                <th style="min-width:70px;">Actions</th>
                                                <th style="min-width:130px;">Is Approved</th>
                                                <th style="min-width:150px;">Title</th>
                                                <th style="min-width:300px;">Description</th>
                                                <th style="min-width:110px;">Provience</th>
                                                <th style="min-width:110px;">District</th>
                                                <th style="min-width:130px;">Local Level</th>
                                                <th style="min-width:130px;">Street add</th>
                                                <th style="min-width:120px;">Banner</th>
                                                <th style="min-width:120px;">Date</th>
                                                <th style="min-width:120px;">Time</th>
                                                <th style="min-width:120px;">Contact</th>
                                                <th style="min-width:120px;">Post Date</th>
                                                <th style="min-width:140px;">Post Person</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach ($rows as $row) {
                                            ?>
                                                <tr>
                                                    <td>
                                                        <a href="edit/approve_events.php?id=<?php echo $row['e_no'] ?>"><button class="btn btn-success"><i class="ion ion-checkmark-round"></i></button></a>
                                                    </td>
                                                    <td><?php echo $row['isApproved'] ?></td>
                                                    <td><?php echo $row['e_title'] ?></td>
                                                    <td><?php echo $row['e_description'] ?></td>
                                                    <td><?php echo $row['e_providence'] ?></td>
                                                    <td><?php echo $row['e_district'] ?></td>
                                                    <td><?php echo $row['e_locallavel'] ?></td>
                                                    <td><?php echo $row['e_streetaddress'] ?></td>
                                                    <td> <a href="../<?php echo $row['e_banner'] ?>"> <img src="../<?php echo $row['e_banner'] ?>" alt="" height="50px" width="50px"></a></td>
                                                    <td><?php echo $row['e_date'] ?></td>
                                                    <td><?php echo $row['e_time'] ?></td>
                                                    <td><?php echo $row['e_contact'] ?></td>
                                                    <td><?php echo $row['e_postdate'] ?></td>
                                                    <td><?php echo $row['e_postperson'] ?></td>
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