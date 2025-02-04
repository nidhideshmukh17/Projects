 <?php
include 'db.php';
include 'header.php';

$today = date("Y-m-d");


$sql = "SELECT * FROM `mentor`";
$result = $conn->query($sql);
$tmentor = $result->num_rows;


$sql = "SELECT * FROM `pitches` WHERE `approval_status`='not_approved'";
$result = $conn->query($sql);
$tpitch = $result->num_rows;

$sql = "SELECT * FROM `pitches` WHERE `approval_status`='approved'";
$result = $conn->query($sql);
$apitch = $result->num_rows;

$sql = "SELECT * FROM `pitches` WHERE `approval_status`='booked'";
$result = $conn->query($sql);
$bpitch = $result->num_rows;


 ?>


 <!-- Content Wrapper. Contains page content -->
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
              <li class="breadcrumb-item active">Dashboard</li>
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
                <h3><?php echo $tmentor; ?></h3>

                <p>Total Mentors</p>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
             
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3><?php echo $tpitch; ?></h3>

                <p>Available Pitches</p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3><?php echo $apitch; ?></h3>

                <p>Approved Pitches</p>
              </div>
              <div class="icon">
                <i class="fa fa-check" aria-hidden="true"></i>
              </div>
              
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3><?php echo $bpitch; ?></h3>

                <p>Sessions Booked</p>
              </div>
              <div class="icon">
                <i class="ion ion-pie-graph"></i>
              </div>
              
            </div>
          </div>
          <!-- ./col -->
        </div>
        <!-- /.row -->
        

        <!-- Main row -->
        
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->


  <?php

include 'footer.php';

?>