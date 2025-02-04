<?php
include 'header.php';

$mid = $_GET['id'];
?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Feedback</h1>
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
                    <!-- general form elements -->
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Provide Feedback</h3>
                        </div>

                        <form action="feedback_db.php" method="POST">
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="rating">Rating (1-5)</label>
                                    <input type="number" name="rating" class="form-control" id="rating" min="1" max="5" placeholder="Enter rating">
                                    <input type="text" name="mid" value="<?php echo $mid; ?>" hidden="">
                                </div>
                                <div class="form-group">
                                    <label for="comments">Comments</label>
                                    <textarea class="form-control" name="comments" id="comments" rows="5" placeholder="Enter comments"></textarea>
                                </div>
                            </div>
                            <!-- /.card-body -->

                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Submit Feedback</button>
                            </div>
                        </form>

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
