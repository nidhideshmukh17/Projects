<?php
include 'header.php';
?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Add Pitch</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Add Pitch</li>
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
                    <!-- general form elements -->
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Add New Pitch</h3>
                        </div>

                        <form action="add_pitch_db.php" method="POST">
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="ideaName">Idea Name</label>
                                    <input type="text" name="ideaName" class="form-control" id="ideaName" placeholder="Enter idea name">
                                </div>
                                <div class="form-group">
                                    <label for="description">Description</label>
                                    <textarea class="form-control" name="description" id="description" rows="5" placeholder="Enter description"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="fundingRequired">Funding Required (₹)</label>
                                    <input type="number" name="fundingRequired" class="form-control" id="fundingRequired" placeholder="Enter funding required">
                                </div>
                                <div class="form-group">
                                    <label for="areaCategory">Area / Category</label>
                                    <input type="text" name="areaCategory" class="form-control" id="areaCategory" placeholder="Enter area or category">
                                </div>
                                <div class="form-group">
                                    <label for="video">Video URL</label>
                                    <input type="url" name="video" class="form-control" id="video" placeholder="Enter video URL">
                                </div>
                            </div>
                            <!-- /.card-body -->

                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Submit</button>
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
