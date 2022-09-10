<?php include "./includes/includes.php"; ?>

<?php $sql = "select * from n_b_d_bloodrequest;";

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
                            <h3 class="card-title">Blood Request</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <div class="container tbl-container">
                                <div class="tbl-fixed">
                                    <table id="example2" class="table table-bordered table-hover " style="overflow-x:scroll; overflow-y:scroll">
                                        <thead>
                                            <tr>
                                                <th style="min-width:70px;">Actions</th>
                                                <th style="min-width:140px;">Donor's Name</th>
                                                <th style="min-width:140px;">Patient's Name</th>
                                                <th style="min-width:100px;">Province</th>
                                                <th style="min-width:100px;">District</th>
                                                <th style="min-width:100px;">B Group</th>
                                                <th style="min-width:100px;">Address</th>
                                                <th style="min-width:150px;">Hospital</th>
                                                <th style="min-width:100px;">Unit</th>
                                                <th style="min-width:100px;">Phone</th>
                                                <th style="min-width:250px;">Details</th>
                                                <th style="min-width:140px;">Require Date</th>
                                                <th style="min-width:140px;">Request Date</th>
                                                <th style="min-width:130px;">Posted By</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach ($rows as $row) {

                                            ?>
                                                <tr>
                                                    <td> <a href="delete/request.php?id=<?php echo $row['S_No'] ?>"><button class="btn btn-danger"><i class="ion ion-trash-b"></i></button></a>
                                                    </td>
                                                    <td><?php echo $row['rcname'] ?></td>
                                                    <td><?php echo $row['rname'] ?></td>
                                                    <td><?php echo $row['rprovince'] ?></td>
                                                    <td><?php echo $row['rdistrict'] ?></td>
                                                    <td><?php echo $row['rblood'] ?></td>
                                                    <td><?php echo $row['raddress'] ?></td>
                                                    <td><?php echo $row['rhospital'] ?></td>
                                                    <td><?php echo $row['runit'] ?></td>
                                                    <td><?php echo $row['rphone'] ?></td>
                                                    <td><?php echo $row['rdetail'] ?></td>
                                                    <td><?php echo $row['rdate'] ?></td>
                                                    <td><?php echo $row['reqDate'] ?></td>
                                                    <td><?php echo $row['r_postPerson'] ?></td>
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