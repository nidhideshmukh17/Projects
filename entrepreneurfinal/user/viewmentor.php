<?php
// Include header
include 'header.php';
// Include database connection
include 'db.php';

// Fetch mentors from the database
$sql = "SELECT * FROM `mentor`";
$result = $conn->query($sql);
?>


<style>
    .star-rating {
      unicode-bidi: bidi-override;
      color: #f8ce0b;
      font-size: 30px;
      text-align: center;
      display: inline-block;
      padding-left: 5px;
      padding-right: 5px;
    }
    .star-rating span {
      padding-right: 5px;
      display: inline-block;
      position: relative;
    }
    .star-rating span:hover:before,
    .star-rating span:hover ~ span:before {
      content: "\2605";
      position: absolute;
      color: #f8ce0b;
    }
  </style>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">View Mentors</h1>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <?php
                // Output data of each mentor
                while ($row = $result->fetch_assoc()) {
                ?>
                <div class="col-md-6">
                    <div class="card">
                        <!-- Card Header with Avatar -->
                        
                        
                        <!-- /.card-header -->
                        <div class="card-body">

                            <img src="../i4.png"  alt="User Image" style="float: left;width: 40px;"> <p class="card-title" style="padding-top: 10px;">&nbsp;&nbsp;&nbsp;<b><?php echo $row["name"]; ?></b></p><br><hr>
                            
                            <p class="card-text"><strong>Email:</strong> <?php echo $row["email"]; ?><br><strong>Field of Expertise:</strong> <?php echo $row["field_of_expertise"]; ?>
                            <span style="line-height: 1px;"><?php echo generateStarRating($row["rating"]); ?></span>
                        </p>
                            <p class="card-text">
                                <a href="request.php?id=<?php echo $row["id"]; ?>&uid=<?php echo $sessionemail; ?>"><button class="btn-success" style="border-radius: 10px;float: right;"><h4> 
                                    
                                Request a call</h4></button></a>
                            </p>
                        </div>
                    </div>
                </div>
                <?php
                }
                ?>

                <?php
  function generateStarRating($rating) {
    $output = '';
    $fullStars = floor($rating);
    $emptyStars = 5 - $fullStars;
    for ($i = 0; $i < $fullStars; $i++) {
      $output .= '<span>&#9733;</span>'; // Full star
    }
    for ($i = 0; $i < $emptyStars; $i++) {
      $output .= '<span>&#9734;</span>'; // Empty star
    }
    return '<div class="star-rating">' . $output . '</div>';
  }
  ?>
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<?php
// Include footer
include 'footer.php';
?>
