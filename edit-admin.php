<?php session_start();
//DB conncetion
include_once('includes/config.php');
//validating Session
if (strlen($_SESSION['aid'] == 0)) {
    header('location:logout.php');
} else {

    //Code for updation
    if (isset($_POST['update'])) {
        $pid = intval($_GET['ID']);
        //getting post values
        $email = $_POST['Email'];
        $name = $_POST['fullname'];
        $mnumber = $_POST['mobilenumber'];
        $pass = $_POST['password'];
        $query = "update tbladmin set AdminuserName ='$name',Password ='$pass',Email ='$email',MobileNumber='$mnumber' where id='$pid'";
        $result = mysqli_query($con, $query);
        if ($result) {
            echo '<script>alert("Phlebotomist record updated successfully.")</script>';
            echo "<script>window.location.href='manage-admin.php'</script>";
        } else {
            echo "<script>alert('Something went wrong. Please try again.');</script>";
            echo "<script>window.location.href='manage-admin.php'</script>";
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
                        $pid = intval($_GET['ID']);
                        $query = mysqli_query($con, "select * from tbladmin where ID='$pid'");
                        $cnt = 1;
                        while ($row = mysqli_fetch_array($query)) {
                        ?>
                            <h1 class="h3 mb-4 text-gray-800"><?php echo $row['AdminuserName']; ?>'s Profile</h1>
                            <form name="editphlebotomist" method="post">
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

                                                    <?php echo $row['AdminRegdate']; ?>
                                                </div>



                                                <div class="form-group">
                                                    <label>Full Name</label>
                                                    <input type="text" class="form-control" id="fullname" name="fullname" placeholder="Enter your full name..." pattern="[A-Za-z ]+" title="letters only" value="<?php echo $row['AdminuserName']; ?>" required="true">
                                                </div>
                                                <div class="form-group">
                                                    <label>Mobile Number</label>
                                                    <input type="text" class="form-control" id="mobilenumber" name="mobilenumber" placeholder="Please enter your mobile number" pattern="[0-9]{10}" title="10 numeric characters only" value="<?php echo $row['MobileNumber']; ?>" required="true">

                                                </div>
                                                <div class="form-group">
                                                    <label>Email</label>
                                                    <input type="text" class="form-control" id="email" name="Email" placeholder="Please enter your mobile number"  value="<?php echo $row['Email']; ?>" required="true">

                                                </div>
                                                <div class="form-group">
                                                    <label>Password</label>
                                                    <input type="text" class="form-control" id="password" name="password" placeholder="Please enter your mobile number"  value="<?php echo $row['Password']; ?>" required="true">

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