<?php
session_start();
// DB connection
include_once('includes/config.php');
// Validating Session
if (strlen($_SESSION['aid'] == 0)) {
    header('location:logout.php');
} else {

    // Code for updating
    if (isset($_POST['update'])) {
        $pid = intval($_GET['id']);
        // Getting post values
        $image_path = ''; // Default image path

        if (isset($_FILES['image']['name']) && !empty($_FILES['image']['name'])) {
            $image = $_FILES['image']['name'];
            $image_temp = $_FILES['image']['tmp_name'];
            $image_path = "images/" . $image;

            move_uploaded_file($image_temp, $image_path);
        } else {
            // If no new image is selected, keep the existing image
            $query_select_image = "SELECT image FROM blog WHERE id='$pid'";
            $result_select_image = mysqli_query($con, $query_select_image);
            if ($result_select_image && mysqli_num_rows($result_select_image) > 0) {
                $row = mysqli_fetch_assoc($result_select_image);
                $image_path = $row['image'];
            }
        }

        $name = $_POST['name'];
        $content = $_POST['content'];
        $query = "UPDATE blog SET image='$image_path', name='$name', content='$content' WHERE id='$pid'";
        $result = mysqli_query($con, $query);
        if ($result) {
            echo '<script>alert("Blog record updated successfully.")</script>';
            echo "<script>window.location.href='manage-blog.php'</script>";
        } else {
            echo "<script>alert('Something went wrong. Please try again.');</script>";
            echo "<script>window.location.href='manage-blog.php'</script>";
        }
    }


?>
    <!DOCTYPE html>
    <html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Covid-19 Testing Management System | Edit Phlebotomist</title>

        <!-- Custom fonts for this template-->
        <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

        <!-- Custom styles for this template-->
        <link href="css/sb-admin-2.min.css" rel="stylesheet">
        <style type="text/css">
            label {
                font-size: 16px;
                font-weight: bold;
                color: #000;
            }
        </style>

    </head>

    <body id="page-top">

        <!-- Page Wrapper -->
        <div id="wrapper">

            <?php include_once('includes/sidebar.php'); ?>

            <!-- Content Wrapper -->
            <div id="content-wrapper" class="d-flex flex-column">

                <!-- Main Content -->
                <div id="content">

                    <!-- Topbar -->
                    <?php include_once('includes/topbar.php'); ?>
                    <!-- End of Topbar -->

                    <!-- Begin Page Content -->
                    <div class="container-fluid">

                        <!-- Page Heading -->
                        <?php
                        $pid = intval($_GET['id']);
                        $query = mysqli_query($con, "select * from blog where id='$pid'");
                        $cnt = 1;
                        while ($row = mysqli_fetch_array($query)) {
                        ?>
                            <h1 class="h3 mb-4 text-gray-800"><?php echo $row['name']; ?>'s Profile</h1>
                            <form name="editphlebotomist" method="post" enctype="multipart/form-data">
                                <div class="row">

                                    <div class="col-lg-8">

                                        <!-- Basic Card Example -->
                                        <div class="card shadow mb-4">
                                            <div class="card-header py-3">
                                                <h6 class="m-0 font-weight-bold text-primary">Personal Information</h6>
                                            </div>
                                            <div class="card-body">

                                                <div class="form-group">
                                                    <label>Registration Date: </label>

                                                    <?php echo $row['dt']; ?>
                                                </div>
                                                <div class="form-group">
                                                    <label for="myfile">Select Image:</label>
                                                    <input type="file" class="image" id="image" name="image" class="form-control">
                                                </div>
                                                <div class="form-group">
                                                    <label>Full Name</label>
                                                    <input type="text" class="form-control" id="fullname" name="name" value="<?php echo $row['name']; ?>" placeholder="Enter your full name..." required="true">
                                                </div>

                                                <div class="mb-3">
                                                    <label for="exampleFormControlTextarea1" class="form-label">Content</label>
                                                    <!-- Use htmlspecialchars to escape special characters in the content -->
                                                    <textarea class="form-control" name="content" id="exampleFormControlTextarea1" rows="3"><?php echo htmlspecialchars($row['content']); ?></textarea>
                                                </div>



                                                <div class="form-group">
                                                    <input type="submit" class="btn btn-primary btn-user btn-block" name="update" id="update" value="Update">
                                                </div>

                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </form>
                        <?php } ?>

                    </div>
                    <!-- /.container-fluid -->

                </div>
                <!-- End of Main Content -->

                <?php include_once('includes/footer.php'); ?>

            </div>
            <!-- End of Content Wrapper -->

        </div>
        <!-- End of Page Wrapper -->

        <!-- Scroll to Top Button-->
        <?php include_once('includes/footer2.php'); ?>


        <!-- Bootstrap core JavaScript-->
        <script src="vendor/jquery/jquery.min.js"></script>
        <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

        <!-- Core plugin JavaScript-->
        <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

        <!-- Custom scripts for all pages-->
        <script src="js/sb-admin-2.min.js"></script>

    </body>

    </html>
<?php } ?>