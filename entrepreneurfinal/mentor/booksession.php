<?php
// Include header
include 'header.php';
// Include database connection
include 'db.php';

// Check if pitch ID is provided
if(isset($_GET['id'])) {
    // Get the pitch ID from the URL
    $pitch_id = $_GET['id'];

    // Fetch pitch details
    $sql = "SELECT * FROM `pitches` WHERE `id` = $pitch_id";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $pitch_name = $row['name'];
    } else {
        echo "Pitch not found!";
        exit();
    }
} else {
    echo "Pitch ID not provided!";
    exit();
}



// Close database connection
$conn->close();
?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Book Session for <?php echo $pitch_name; ?></h1>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Session Details</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <form action="booksessiondb.php" method="POST">
                                <div class="form-group">
                                    <label for="date">Date:</label>
                                    <input type="text" name="pid" value="<?php echo $pitch_id ;  ?>" hidden="">
                                    <input type="date" class="form-control" id="date" name="date" required>
                                </div>
                                <div class="form-group">
                                    <label for="time">Time:</label>
                                    <input type="time" class="form-control" id="time" name="time" required>
                                </div>
                                <button type="submit" class="btn btn-primary">Book Session</button>
                            </form>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
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
