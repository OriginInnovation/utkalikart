<?php
session_start();
include 'conn.php';
$userid = $_SESSION['user'];
if ($userid === NULL) {
    header("location:login.php");
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Indus-Supply | Add Service</title>
    <link href="dist/img/titleimage.png" rel="icon">
    <script src="http://cdn.ckeditor.com/4.6.2/standard-all/ckeditor.js"></script>
    <!-- toaster -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<?php include 'common/navbar.php'; ?>
<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <div class="nav-panel__logo heading_resize">
        <a href="index">
            <img src="indus_img/induslogo.png" alt="INDUS SUPPLY Logo" class="newlogo_size">
        </a>
    </div>
    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column">
                <li class="nav-item menu-open">
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="index.php" class="nav-link">
                                <i class="fas fa-tachometer-alt nav-icon"></i>
                                <p>Dashboard</p>
                                <i class="right fas fa-angle-right"></i>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="banner.php" class="nav-link">
                                <i class="fa fa-image nav-icon"></i>
                                <p>Banner</p>
                                <i class="right fas fa-angle-right"></i>

                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="category.php" class="nav-link">
                                <i class="fa fa-list-alt nav-icon"></i>
                                <p>Category</p>
                                <i class="right fas fa-angle-right"></i>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="subcategory.php" class="nav-link">
                                <i class="fa fa-indent nav-icon"></i>
                                <p>Sub-Category</p>
                                <i class="right fas fa-angle-right"></i>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="sub_subcategory.php" class="nav-link">
                                <i class="fa fa-indent nav-icon"></i>
                                <p>Sub_Subcategories</p>
                                <i class="right fas fa-angle-right"></i>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="product.php" class="nav-link">
                                <i class="fab fa-product-hunt nav-icon"></i>
                                <p>Products</p>
                                <i class="right fas fa-angle-right"></i>
                            </a>
                        </li>
                        <li class="nav-item" id="catalogue-item">
                            <a href="product.php" class="nav-link" id="catalogue-link">
                                <i class="fa fa-book nav-icon"></i>
                                <p>Catalogue</p>
                                <i class="right fas fa-angle-right"></i>
                            </a>
                        </li>
                        <li class="nav-item" id="folder-item" style="display:none;">
                            <a href="folder.php" class="nav-link" style="background-color: white; color: black;">
                                <i class="fa fa-folder nav-icon"></i>
                                <p>Folder Name</p>
                            </a>
                        </li>
                        <li class="nav-item" id="pdfupload-item" style="display:none;">
                            <a href="pdfupload.php" class="nav-link" style="background-color: white; color: black;">
                                <i class="fa fa-upload nav-icon"></i>
                                <p>Catalogue Upload</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="servicesconformity.php" class="nav-link active">
                                <i class="fa fa-wrench nav-icon"></i>
                                <p>Control And Conformity</p>
                                <i class="right fas fa-angle-right"></i>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="enquiry.php" class="nav-link">
                                <i class="fa fa-question-circle nav-icon"></i>
                                <p>Enquiry</p>
                                <i class="right fas fa-angle-right"></i>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="contact.php" class="nav-link">
                                <i class="fa fa-envelope nav-icon"></i>
                                <p>Contact Us</p>
                                <i class="right fas fa-angle-right"></i>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="newsletter.php" class="nav-link">
                                <i class="fa fa-address-card nav-icon"></i>
                                <p>Newsletter</p>
                                <i class="right fas fa-angle-right"></i>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="profile.php" class="nav-link">
                                <i class="fa fa-cog nav-icon"></i>
                                <p>Settings</p>
                                <i class="right fas fa-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
    </div>
</aside>

<body>
    <div class="content-wrapper">
        <section class="content">
            <div class="row">
                <div class="col-12">
                    <div class="card mt-3">
                        <div class="card-body">
                            <h3 class="mb-3 home_color">Add Service</h3>
                            <form action="<?php $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data">
                                <div class="modal-body p-0">
                                    <div class="card-body p-0">
                                        <div class="row">
                                            <div class="form-group col-6">
                                                <input type="text" class="form-control" id="exampleInputproductname"
                                                    placeholder="Enter Service Product Name" name="servicename"
                                                    title="Enter a valid name (up to 50 characters)" required>
                                            </div>
                                            <div class="form-group col-6">
                                                <input type="text" class="form-control" id="exampleInputserviceheading"
                                                    placeholder="Enter Service Heading" name="serviceheading">
                                            </div>
                                            <div class="form-group col-12">
                                                <label for="exampleInputcname">Service Description:</label>
                                                <textarea id="servicedescription" name="servicedescription"
                                                    class="form-control" required></textarea>
                                            </div>
                                            <div class="form-group col-12">
                                                <label for="exampleInputcname">Service Details:</label>
                                                <textarea id="content" name="content" class="form-control"
                                                    required></textarea>
                                            </div>
                                            <div class="form-group col-3">
                                                <label for="image">Service Image1:</label>
                                                <input type="file" name="image1" class="form-control"
                                                    placeholder="image" accept="image/jpeg, image/jpg, image/png"
                                                    onchange="document.getElementById('image15').src = window.URL.createObjectURL(this.files[0])">
                                                <img id="image15" src="dist/img/noimage1.png" alt="image" width="50"
                                                    height="50" />
                                            </div>
                                            <div class="form-group col-3">
                                                <label for="image">Service Image2:</label>
                                                <input type="file" name="image2" class="form-control"
                                                    placeholder="image" accept="image/jpeg, image/jpg, image/png"
                                                    onchange="document.getElementById('image16').src = window.URL.createObjectURL(this.files[0])">
                                                <img id="image16" src="dist/img/noimage1.png" alt="image" width="50"
                                                    height="50" />
                                            </div>
                                            <div class="form-group col-3">
                                                <label for="image">Service Image3:</label>
                                                <input type="file" name="image3" class="form-control"
                                                    placeholder="image" accept="image/jpeg, image/jpg, image/png"
                                                    onchange="document.getElementById('image17').src = window.URL.createObjectURL(this.files[0])">
                                                <img id="image17" src="dist/img/noimage1.png" alt="image" width="50"
                                                    height="50" />
                                            </div>
                                            <div class="form-group col-3">
                                                <label for="image">Service Image4:</label>
                                                <input type="file" name="image4" class="form-control"
                                                    placeholder="image" accept="image/jpeg, image/jpg, image/png"
                                                    onchange="document.getElementById('image18').src = window.URL.createObjectURL(this.files[0])">
                                                <img id="image18" src="dist/img/noimage1.png" alt="image" width="50"
                                                    height="50" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-danger" id="closeModalBtn"
                                            data-dismiss="modal">Close</button>
                                        <button type="submit" name="service_update" class="btn btn-success">Add</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <?php
    if (isset($_POST['service_update'])) {
        include 'conn.php';
        $upload_dir = "upload/service";
        // Create the directory if it doesn't exist
        if (!is_dir($upload_dir)) {
            mkdir($upload_dir, 0777, true);
        }
        $uploaded_files = [];
        // Check each image file input
        for ($i = 1; $i <= 4; $i++) {
            if (isset($_FILES['image' . $i]) && $_FILES['image' . $i]['error'] == 0) {
                $image_name = $_FILES['image' . $i]['name'];
                $image_tmp = $_FILES['image' . $i]['tmp_name'];
                $file_type = pathinfo($image_name, PATHINFO_EXTENSION);
                $new_file_name = uniqid() . '.' . $file_type;

                $target_file = $upload_dir . '/' . $new_file_name;
                if (move_uploaded_file($image_tmp, $target_file)) {
                    $uploaded_files['image' . $i] = $new_file_name;
                } else {
                    echo "Failed to upload image $i";
                    exit;
                }
            }
        }

        $servicename = htmlspecialchars($conn->real_escape_string($_POST["servicename"]));
        $serviceheading = $conn->real_escape_string($_POST["serviceheading"]);
        $servicedescription = $conn->real_escape_string($_POST["servicedescription"]);
        $servicedetails = $conn->real_escape_string($_POST["content"]);

        // Prepare SQL statement with placeholders for uploaded images
        $sql = "INSERT INTO service (servicesp_name, services_heading, services_description, services_details";
        foreach ($uploaded_files as $key => $file) {
            $sql .= ", $key";
        }
        $sql .= ", status) VALUES ('$servicename', '$serviceheading', '$servicedescription', '$servicedetails'";
        foreach ($uploaded_files as $file) {
            $sql .= ", '$file'";
        }
        $sql .= ", '1')";

        if ($conn->query($sql) === true) {
            echo "<script>
            $(document).ready(function(){
            toastr.success('Form submitted successfully');
            setTimeout(function(){
            window.location.href = 'servicesconformity.php';
            }, 2000); // 2000 milliseconds = 2 seconds
            });
        </script>";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
        $conn->close();
    }
    ?>

    <script>
    CKEDITOR.replace('content', {
        height: 300,
        filebrowserUploadUrl: "upload.php"
    });
    </script>
</body>
<?php include 'common/footer.php'; ?>
<!-- for catalogue dropdown -->
<script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>

</html>