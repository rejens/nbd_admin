<?php include "./includes/includes.php"; ?>

<?php $sql = "select * from n_b_d_donor;";

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
                            <h3 class="card-title">Donors List</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <div class="container tbl-container">
                                <div class="tbl-fixed">
                                    <table id="example2" class="table table-bordered table-hover" style="overflow-x:scroll; overflow-y:scroll">
                                        <thead>
                                            <tr>
                                                <th style="min-width: 100px;">Actions</th>
                                                <th style="min-width:125px;">Donor Id</th>
                                                <th style="min-width:200px;">Name</th>
                                                <th style="min-width:120px;">Province</th>
                                                <th style="min-width:120px;">District</th>
                                                <th style="min-width:100px;">B Group</th>
                                                <th style="min-width:120px;">Address</th>
                                                <th style="min-width:100px;">Email</th>
                                                <th style="min-width:100px;">Phone</th>
                                                <th style="min-width:100px;">DOB</th>
                                                <th style="min-width:100px;">Gender</th>
                                                <th style="min-width:150px;">Last Donate</th>
                                                <th style="min-width:100px;">Final Date</th>
                                                <th style="min-width:140px;">Join Date</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach ($rows as $row) {

                                            ?>
                                                <tr>
                                                    <td> <a href="delete/donors.php?id=<?php echo $row['S_No'] ?>"><button class="btn btn-danger"><i class="ion ion-trash-b"></i></button></a>
                                                    </td>
                                                    <td><?php echo $row['donor_id'] ?></td>
                                                    <td><?php echo $row['dname'] ?></td>
                                                    <td><?php echo $row['dprovidence'] ?></td>
                                                    <td><?php echo $row['ddistrict'] ?></td>
                                                    <td><?php echo $row['dbloodgroup'] ?></td>
                                                    <td><?php echo $row['daddress'] ?></td>
                                                    <td><?php echo $row['demail'] ?></td>
                                                    <td><?php echo $row['dphone'] ?></td>
                                                    <td><?php echo $row['ddob'] ?></td>
                                                    <td><?php echo $row['dgender'] ?></td>
                                                    <td><?php echo $row['dlastdonate'] ?></td>
                                                    <td><?php echo $row['dfianldate'] ?></td>
                                                    <td><?php echo $row['d_JoinDate'] ?></td>
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