<!-- manage_pitches.php -->

<?php
// Include header
include 'header.php';
// Include database connection
include 'db.php';

// Fetch pitches from the database
$sql = "SELECT * FROM `pitches` WHERE `uid` = '$sessionemail'";
$result = $conn->query($sql);
?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Manage Pitches</h1>
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
                            <h3 class="card-title">Pitch List</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>Idea Name</th>
                                        <th>Description</th>
                                        <th>Funding Required</th>
                                        <th>Area/Category</th>
                                        <th>View Video</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    // Output data of each row
                                    while ($row = $result->fetch_assoc()) {
                                        echo "<tr>";
                                        echo "<td>" . $row["name"] . "</td>";
                                        echo "<td>" . $row["desc"] . "</td>";
                                        echo "<td>" . $row["fund"] . "</td>";
                                        echo "<td>" . $row["area"] . "</td>";
                                        echo "<td><a href='" . $row["video"] . "' target='_blank'>Click Here </a></td>";
                                        echo "<td><a href='edit_pitch.php?id=" . $row['id'] . "' class='btn btn-primary'>Edit</a> <a href='delete_pitch.php?id=" . $row['id'] . "' class='btn btn-danger' onclick='return confirm(\"Are you sure you want to delete this pitch?\")'>Delete</a></td>";
                                        echo "</tr>";
                                    }
                                    ?>
                                </tbody>
                            </table>
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
