<?php
include 'header.php';

// Check if ID is provided
if(isset($_GET['id'])) {
    // Get the entrepreneur ID from the URL
    $entrepreneur_id = $_GET['id'];

    // Include database connection
    include 'db.php';

    // SQL query to fetch entrepreneur data by ID
    $sql = "SELECT * FROM pitcher WHERE id = $entrepreneur_id";
    $result = $conn->query($sql);

    // Check if entrepreneur exists
    if ($result->num_rows > 0) {
        // Fetch entrepreneur data
        $row = $result->fetch_assoc();
        $name = $row['name'];
        $email = $row['email'];
        $mobile = $row['mobile'];
    } else {
        // Redirect to error page or handle error
        echo "Entrepreneur not found!";
        exit();
    }
} else {
    // Redirect to error page or handle error
    echo "Entrepreneur ID not provided!";
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
                    <h1 class="m-0">Edit Entrepreneur</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Edit Entrepreneur</li>
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
                            <h3 class="card-title">Update Entrepreneur Information</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <form action="update_entrepreneur.php" method="POST">
                                <input type="hidden" name="entrepreneur_id" value="<?php echo $entrepreneur_id; ?>">
                                <div class="form-group">
                                    <label for="name">Name:</label>
                                    <input type="text" class="form-control" id="name" name="name" value="<?php echo $name; ?>">
                                </div>
                                <div class="form-group">
                                    <label for="email">Email:</label>
                                    <input type="email" class="form-control" id="email" name="email" value="<?php echo $email; ?>">
                                </div>
                                <div class="form-group">
                                    <label for="mobile">Mobile:</label>
                                    <input type="tel" class="form-control" id="mobile" name="mobile" value="<?php echo $mobile; ?>">
                                </div>
                                <button type="submit" class="btn btn-primary">Update Entrepreneur</button>
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
include 'footer.php';
?>
