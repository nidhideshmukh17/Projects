<?php
// Include header
include 'header.php';

// Check if ID is provided
if(isset($_GET['id'])) {
    // Get the mentor ID from the URL
    $mentor_id = $_GET['id'];

    // Include database connection
    include 'db.php';

    // SQL query to fetch mentor data by ID
    $sql = "SELECT * FROM mentor WHERE id = $mentor_id";
    $result = $conn->query($sql);

    // Check if mentor exists
    if ($result->num_rows > 0) {
        // Fetch mentor data
        $row = $result->fetch_assoc();
        $name = $row['name'];
        $email = $row['email'];
        $expertise = $row['field_of_expertise'];
        $mobile = $row['mobile'];
    } else {
        // Redirect to error page or handle error
        echo "Mentor not found!";
        exit();
    }
} else {
    // Redirect to error page or handle error
    echo "Mentor ID not provided!";
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
                    <h1 class="m-0">Edit Mentor</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Edit Mentor</li>
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
                            <h3 class="card-title">Update Mentor Information</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <form action="update_mentor.php" method="POST">
                                <input type="hidden" name="mentor_id" value="<?php echo $mentor_id; ?>">
                                <div class="form-group">
                                    <label for="name">Name:</label>
                                    <input type="text" class="form-control" id="name" name="name" value="<?php echo $name; ?>">
                                </div>
                                <div class="form-group">
                                    <label for="email">Email:</label>
                                    <input type="email" class="form-control" id="email" name="email" value="<?php echo $email; ?>">
                                </div>
                                <div class="form-group">
                                    <label for="expertise">Field of Expertise:</label>
                                    <input type="text" class="form-control" id="expertise" name="expertise" value="<?php echo $expertise; ?>">
                                </div>
                                <div class="form-group">
                                    <label for="mobile">Mobile:</label>
                                    <input type="text" class="form-control" id="mobile" name="mobile" value="<?php echo $mobile; ?>">
                                </div>
                                <button type="submit" class="btn btn-primary">Update Mentor</button>
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
