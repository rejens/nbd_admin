<?php include "./includes/includes.php"; ?>

<?php

$sql = "select count(*) as no_of_donors from n_b_d_donor;";
$result = $conn->query($sql);
$no_of_donors = $result->fetch_assoc()['no_of_donors'];

$sql = "select count(*) as blood_request from n_b_d_bloodrequest;";
$result = $conn->query($sql);
$no_of_request = $result->fetch_assoc()['blood_request'];

$sql = "select count(*) as event from n_b_d_event;";
$result = $conn->query($sql);
$no_of_events = $result->fetch_assoc()['event'];

$sql = "select count(*) as news from n_b_d_news;";
$result = $conn->query($sql);
$no_of_news = $result->fetch_assoc()['news'];

$sql = "select count(*) as feedback from n_b_d_message;";
$result = $conn->query($sql);
$no_of_feedback = $result->fetch_assoc()['feedback'];

$sql = "select count(*) as notification from n_b_d_notification;";
$result = $conn->query($sql);
$no_of_notification = $result->fetch_assoc()['notification'];

?>

<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Dashboard</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Dashboard v1</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="small-box bg-info">
            <div class="inner">
              <h3><?php echo $no_of_donors ?></h3>
              <p>Donors</p>
            </div>
            <div class="icon">
              <i class="ion ion-waterdrop"></i>
            </div>
            <a href="donors.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="small-box bg-success">
            <div class="inner">
              <h3><?php echo $no_of_request ?></h3>

              <p>Request</p>
            </div>
            <div class="icon">
              <i class="ion ion-pull-request"></i>
            </div>
            <a href="request.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="small-box bg-warning">
            <div class="inner">
              <h3><?php echo $no_of_events ?></h3>

              <p>Events</p>
            </div>
            <div class="icon">
              <i class="ion ion-wand"></i>
            </div>
            <a href="events.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="small-box bg-danger">
            <div class="inner">
              <h3><?php echo $no_of_news ?></h3>

              <p>News</p>
            </div>
            <div class="icon">
              <i class="ion ion-ios-paper"></i>
            </div>
            <a href="news.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
      </div>
      <div class="row d-flex justify-content-center">
        <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="small-box bg-info">
            <div class="inner">
              <h3><?php echo $no_of_feedback ?></h3>

              <p>Feedback</p>
            </div>
            <div class="icon">
              <i class="ion ion-android-chat"></i>
            </div>
            <a href="feedback.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="small-box bg-success">
            <div class="inner">
              <h3><?php echo $no_of_notification ?></h3>

              <p>Notify</p>
            </div>
            <div class="icon">
              <i class="ion ion-android-notifications"></i>
            </div>
            <a href="notification.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->

        <!-- ./col -->
      </div>
      <!-- /.row -->
      <!-- Main row -->

      <!-- /.row (main row) -->
    </div><!-- /.container-fluid -->
  </section>
  <!-- /.content -->
</div>

<?php include "./includes/footer.php" ?>