<?php
$id = urldecode(base64_decode($_GET['id']));
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Indus-Supply | Viewservice</title>
    <link href="dist/img/titleimage.png" rel="icon">
    <script src="http://cdn.ckeditor.com/4.6.2/standard-all/ckeditor.js"></script>
</head>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AdminLTE 3 | Dashboard</title>
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- JQVMap -->
    <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/adminlte.min.css?v=<?php echo time(); ?>">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
    <!-- summernote -->
    <link rel="stylesheet" href="plugins/summernote/summernote-bs4.min.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
    <link rel="stylesheet" href="dist/css/style.css?v=<?php echo time(); ?>">
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">
        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" role="button"><i class="fas fa-bars"></i></a>
                </li>
            </ul>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="logout.php" role="button">
                        <img src="dist/img/logout.png" alt="Logout" style="height: 30px;">
                    </a>
                </li>
            </ul>
            <!-- Right navbar links -->
        </nav>
    </div>
    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <div class="nav-panel__logo heading_resize">
            <a href="index">
                <h2 class="text-white incolor">INDUS-SUPPLY</h2>
            </a>
        </div>
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
                                <a href="product.php" class="nav-link active">
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
                                <a href="servicesconformity.php" class="nav-link">
                                    <i class="fa fa-wrench nav-icon"></i>
                                    <p>Control And Conformity</p>
                                    <i class="right fas fa-angle-right"></i>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="enquiry.php" class="nav-link">
                                    <i class="fa fa-question-circle nav-icon"></i>
                                    <p>Product Enquiry</p>
                                    <i class="right fas fa-angle-right"></i>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="service_enquiry.php" class="nav-link">
                                    <i class="fa fa-question-circle nav-icon"></i>
                                    <p>Service Enquiry</p>
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
                                <?php
                                include 'conn.php';
                                $sql = "SELECT * FROM service WHERE id = '$id'";
                                $result = $conn->query($sql);
                                while ($row = $result->fetch_assoc()) {
                                    ?>
                                <h3 class="mb-3 home_color">View Service</h3>
                                <div class="product-details">
                                    <div class="row">
                                        <div class="col-6">
                                            <h6 class="text-black"><strong>Service Name:</strong></h6>
                                            <p class="pd-vi p-2"><?php echo $row['servicesp_name']; ?></p>
                                        </div>
                                        <div class="col-6">
                                            <h6 class="text-black"><strong>Service Heading:</strong></h6>
                                            <p class="pd-vi p-2"><?php echo $row["services_heading"]; ?></p>
                                        </div>
                                        <div class="col-12">
                                            <h6 class="text-black"><strong>Service Description:</strong></h6>
                                            <div class="pd-vi p-2">
                                                <?php echo nl2br(htmlspecialchars($row['services_description'])); ?>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <h6 class="text-black"><strong>Service Details:</strong></h6>
                                            <textarea class="pd-vi p-2" id="content" name="content" rows="5" cols="50"
                                                readonly>
                                                <?php echo htmlspecialchars($row['services_details']); ?>
                                                </textarea>
                                        </div>
                                        <div class="col-3">
                                            <strong>Image1:</strong>
                                            <?php if (!empty($row['image1']) && file_exists("upload/service/" . $row['image1'])): ?>
                                            <img src="upload/service/<?php echo $row['image1']; ?>" alt="Image1"
                                                width="50" height="50">
                                            <?php else: ?>
                                            <img src="dist/img/noimage1.png" alt="No Image" width="50" height="50">
                                            <?php endif; ?>
                                        </div>
                                        <div class="col-3">
                                            <strong>Image2:</strong>
                                            <?php if (!empty($row['image2']) && file_exists("upload/service/" . $row['image2'])): ?>
                                            <img src="upload/service/<?php echo $row['image2']; ?>" alt="Image2"
                                                width="50" height="50">
                                            <?php else: ?>
                                            <img src="dist/img/noimage1.png" alt="No Image" width="50" height="50">
                                            <?php endif; ?>
                                        </div>
                                        <div class="col-3">
                                            <strong>Image3:</strong>
                                            <?php if (!empty($row['image3']) && file_exists("upload/service/" . $row['image3'])): ?>
                                            <img src="upload/service/<?php echo $row['image3']; ?>" alt="Image3"
                                                width="50" height="50">
                                            <?php else: ?>
                                            <img src="dist/img/noimage1.png" alt="No Image" width="50" height="50">
                                            <?php endif; ?>
                                        </div>
                                        <div class="col-3">
                                            <strong>Image4:</strong>
                                            <?php if (!empty($row['image4']) && file_exists("upload/service/" . $row['image4'])): ?>
                                            <img src="upload/service/<?php echo $row['image4']; ?>" alt="Image4"
                                                width="50" height="50">
                                            <?php else: ?>
                                            <img src="dist/img/noimage1.png" alt="No Image" width="50" height="50">
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                </div>
                                <?php } ?>
                                <button type="button" class="btn btn-success"
                                    onclick="window.location.href='servicesconformity.php';">Back
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <?php include 'common/footer.php'; ?>
        <script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
        <script>
        CKEDITOR.replace('content', {
            height: 300,
            filebrowserUploadUrl: "upload.php"
        });
        </script>
        <!-- for catalogue dropdown -->
        <script>
        document.getElementById('catalogue-link').addEventListener('click', function(event) {
            event.preventDefault(); // Prevent default link behavior

            // Get the additional menu items
            var folderItem = document.getElementById('folder-item');
            var pdfUploadItem = document.getElementById('pdfupload-item');

            // Toggle the display property of the additional menu items
            if (folderItem.style.display === 'none' && pdfUploadItem.style.display === 'none') {
                folderItem.style.display = 'block';
                pdfUploadItem.style.display = 'block';
            } else {
                folderItem.style.display = 'none';
                pdfUploadItem.style.display = 'none';
            }
        });
        </script>
    </body>

</html>