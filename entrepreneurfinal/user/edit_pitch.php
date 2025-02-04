<?php
// Include header
include 'header.php';

// Check if ID is provided
if(isset($_GET['id'])) {
    // Get the pitch ID from the URL
    $pitch_id = $_GET['id'];

    // Include database connection
    include 'db.php';

    // SQL query to fetch pitch data by ID
    $sql = "SELECT * FROM pitches WHERE id = $pitch_id AND uid = '$sessionemail'";
    $result = $conn->query($sql);

    // Check if pitch exists
    if ($result->num_rows > 0) {
        // Fetch pitch data
        $row = $result->fetch_assoc();
        $ideaName = $row['name'];
        $description = $row['desc'];
        $fundingRequired = $row['fund'];
        $areaCategory = $row['area'];
        $video = $row['video'];
    } else {
        // Redirect to error page or handle error
        echo "Pitch not found!";
        exit();
    }
} else {
    // Redirect to error page or handle error
    echo "Pitch ID not provided!";
    exit();
}
?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Edit Pitch</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Edit Pitch</li>
                    </ol>
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
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Update Pitch Information</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <form action="update_pitch.php" method="POST">
                                <input type="hidden" name="pitch_id" value="<?php echo $pitch_id; ?>">
                                <div class="form-group">
                                    <label for="ideaName">Idea Name:</label>
                                    <input type="text" class="form-control" id="ideaName" name="ideaName" value="<?php echo $ideaName; ?>">
                                </div>
                                <div class="form-group">
                                    <label for="description">Description:</label>
                                    <textarea class="form-control" id="description" name="description" rows="5"><?php echo $description; ?></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="fundingRequired">Funding Required ($):</label>
                                    <input type="number" class="form-control" id="fundingRequired" name="fundingRequired" value="<?php echo $fundingRequired; ?>">
                                </div>
                                <div class="form-group">
                                    <label for="areaCategory">Area / Category:</label>
                                    <input type="text" class="form-control" id="areaCategory" name="areaCategory" value="<?php echo $areaCategory; ?>">
                                </div>
                                <div class="form-group">
                                    <label for="video">Video URL:</label>
                                    <input type="url" class="form-control" id="video" name="video" value="<?php echo $video; ?>">
                                </div>
                                <button type="submit" class="btn btn-primary">Update Pitch</button>
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
