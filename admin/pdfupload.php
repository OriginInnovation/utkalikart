<?php
session_start();
include 'conn.php';
$userid = $_SESSION['user'];
if ($userid === NULL) {
    header("location:login.php");
}

$sql200 = "SELECT id FROM folder";
$result200 = $conn->query($sql200);
while ($row200 = $result200->fetch_assoc()) {
    $id200 = $row200['id'];
    $sql201 = "SELECT folder_id FROM pdfupload WHERE folder_id= '$id200' AND status = '1'";
    $result201 = $conn->query($sql201);
    if ($result201->num_rows == 0) {
        $sql202 = "UPDATE folder SET status='0' WHERE id= '$id200'";
        if ($conn->query($sql202) === TRUE) {
            // echo "success";
        } else {
            echo "Error updating record: " . $conn->error;
        }
    } else {
        $sql203 = "UPDATE folder SET status='1' WHERE id= '$id200'";
        if ($conn->query($sql203) === TRUE) {
            // echo "success";
        } else {
            echo "Error updating record: " . $conn->error;
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Indus-Supply | Catalogue Upload</title>
    <link href="dist/img/titleimage.png" rel="icon">
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
            <h2 class="text-white incolor">INDUS-SUPPLY</h2>
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
                            <a href="index" class="nav-link">
                                <i class="fas fa-tachometer-alt nav-icon"></i>
                                <p>Dashboard</p>
                                <i class="right fas fa-angle-right"></i>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="banner" class="nav-link">
                                <i class="fa fa-image nav-icon"></i>
                                <p>Banner</p>
                                <i class="right fas fa-angle-right"></i>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="category" class="nav-link">
                                <i class="fa fa-list-alt nav-icon"></i>
                                <p>Categories</p>
                                <i class="right fas fa-angle-right"></i>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="subcategory" class="nav-link">
                                <i class="fa fa-indent nav-icon"></i>
                                <p>Sub-Categories</p>
                                <i class="right fas fa-angle-right"></i>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="sub_subcategory" class="nav-link">
                                <i class="fa fa-indent nav-icon"></i>
                                <p>Sub-Subcategories</p>
                                <i class="right fas fa-angle-right"></i>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="product" class="nav-link">
                                <i class="fab fa-product-hunt nav-icon"></i>
                                <p>Products</p>
                                <i class="right fas fa-angle-right"></i>
                            </a>
                        </li>
                        <li class="nav-item" id="catalogue-item">
                            <a href="product" class="nav-link active" id="catalogue-link">
                                <i class="fa fa-book nav-icon"></i>
                                <p>Catalogue</p>
                                <i class="right fas fa-angle-right"></i>
                            </a>
                        </li>
                        <li class="nav-item" id="folder-item" style="display:none;">
                            <a href="folder" class="nav-link" style="background-color: white; color: black;">
                                <i class="fa fa-folder nav-icon"></i>
                                <p>Folder Name</p>
                            </a>
                        </li>
                        <li class="nav-item" id="pdfupload-item" style="display:none;">
                            <a href="pdfupload" class="nav-link" style="background-color: white; color: black;">
                                <i class="fa fa-upload nav-icon"></i>
                                <p>Catalogue Upload</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="servicesconformity" class="nav-link">
                                <i class="fa fa-wrench nav-icon"></i>
                                <p>Control And Conformity</p>
                                <i class="right fas fa-angle-right"></i>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="enquiry" class="nav-link">
                                <i class="fa fa-question-circle nav-icon"></i>
                                <p>Product Enquiry</p>
                                <i class="right fas fa-angle-right"></i>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="service_enquiry" class="nav-link">
                                <i class="fa fa-question-circle nav-icon"></i>
                                <p>Service Enquiry</p>
                                <i class="right fas fa-angle-right"></i>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="contact" class="nav-link">
                                <i class="fa fa-envelope nav-icon"></i>
                                <p>Contact Us</p>
                                <i class="right fas fa-angle-right"></i>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="newsletter" class="nav-link">
                                <i class="fa fa-address-card nav-icon"></i>
                                <p>Newsletter</p>
                                <i class="right fas fa-angle-right"></i>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="metatags" class="nav-link">
                                <i class="fa fa-address-card nav-icon"></i>
                                <p>Meta Tags</p>
                                <i class="right fas fa-angle-right"></i>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="profile" class="nav-link">
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

<div class="content-wrapper">
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card mt-3">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <h3 class="home_color">Pdf Upload</h3>
                            <button type="button" class="btn btn-success ml-auto" data-toggle="modal"
                                data-target="#myModal">
                                <i class="fa fa-plus" aria-hidden="true"></i> Add
                            </button>
                        </div>
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th class="text-center">Sl.No</th>
                                        <th class="text-center">Folder Name</th>
                                        <th class="text-center">Catalogue Name</th>
                                        <th class="text-center">Catalogue Upload</th>
                                        <th class="text-center">Manage</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    include 'conn.php';
                                    $sql = "SELECT * FROM pdfupload";
                                    $result = $conn->query($sql);
                                    while ($row = $result->fetch_assoc()) {
                                        ?>
                                        <tr>
                                            <td class="serial-no text-center"></td>
                                            <?php
                                            $folder_id = $row["folder_id"];
                                            $sql1 = "SELECT * FROM folder WHERE id = $folder_id";
                                            $result1 = $conn->query($sql1);
                                            $row1 = $result1->fetch_assoc();
                                            ?>
                                            <td class="text-center"><?php echo $row1['folder_name']; ?></td>
                                            <td class="text-center"><?php echo $row['pdf_name']; ?></td>
                                            <td class="text-center">
                                                <a href="upload/catalogue/pdf/<?php echo $row['pdf_upload']; ?>"
                                                    target="_blank"><i class="far fa-file-pdf"></i></a>
                                            </td>
                                            <td class=text-center>
                                                <?php
                                                $status = $row['status'];
                                                $idm = $row['id'];
                                                $tb = 'pdfupload';
                                                $tbc = 'id';
                                                $tbc1 = 'status';
                                                $returnpage = 'pdfupload.php';
                                                if ($status == 1) {
                                                    echo "<a href='active.php?status=$idm&tb=$tb&tbc=$tbc&tbc1=$tbc1&returnpage=$returnpage' class='btn btn-success btn-sm' onclick='return confirmAction(\"active\", $idm, \"$tb\", \"$tbc\", \"$tbc1\", \"$returnpage\")'title='Active'>
                                                    <i class='fas fa-unlock'></i></a>";
                                                } else {
                                                    echo "<a href='inactive.php?status0=$idm&tb=$tb&tbc=$tbc&tbc1=$tbc1&returnpage=$returnpage' class='btn btn-danger btn-sm' onclick='return confirmAction(\"inactive\", $idm, \"$tb\", \"$tbc\", \"$tbc1\", \"$returnpage\")'title='Inactive'>
                                                    <i class='fas fa-lock'></i></a>";
                                                }
                                                ?>
                                                <button type="button" name="update9" class="btn btn-primary btn-sm m-2"
                                                    onclick="myfcn7(<?php echo $row['id']; ?>,<?php echo $row['folder_id']; ?>,'<?php echo $row['pdf_name']; ?>','<?php echo $row['pdf_upload']; ?>')"
                                                    data-toggle="modal" data-target="#updatepdfupload" title="Edit"
                                                    aria-hidden="true">
                                                    <i class='fas fa-edit'></i>
                                                </button>
                                                <a onclick="confirmDelete(<?php echo $row['id']; ?>, tb='pdfupload', tbc='id', returnpage='pdfupload.php');"
                                                    title="Delete">
                                                    <i class="fas fa-trash-alt btn btn-danger btn-sm"
                                                        aria-hidden="true"></i>
                                                </a>
                                            </td>
                                        </tr>
                                    <?php } ?>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th class="text-center">Sl.No</th>
                                        <th class="text-center">Folder Name</th>
                                        <th class="text-center">Catalogue Name</th>
                                        <th class="text-center">Catalogue Upload</th>
                                        <th class="text-center">Manage</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<!-- Insert Modal -->
<div class="modal fade" data-backdrop="static" id="myModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title text-white">File Upload</h4>
                <button type="button" class="close text-white" data-dismiss="modal">&times;</button>
            </div>
            <form action="pdfupload.php" method="post" enctype="multipart/form-data">
                <div class="modal-body">
                    <div class="card-body">
                        <div class="row">
                            <div class="form-group col-12">
                                <label for="foldername_name">Folder Name:</label>
                                <select class="form-control" name="folder_name">
                                    <option value="">Select Folder</option>
                                    <?php
                                    include 'conn.php';
                                    $foldersql = "SELECT * FROM folder";
                                    $folderresult = $conn->query($foldersql);
                                    while ($folderrow = $folderresult->fetch_assoc()) {
                                        ?>
                                        <option value="<?php echo $folderrow['id']; ?>">
                                            <?php echo $folderrow['folder_name']; ?>
                                        </option>
                                    <?php } ?>
                                </select>
                            </div>
                            <div class="form-group col-12">
                                <label for="exampleInputcname">Catalogue Name:</label>
                                <input type="text" class="form-control" name="catalogue" required>
                            </div>
                            <div class="form-group col-12">
                                <label for="exampleInputtext">Upload File:
                                    <span class="required"></span>
                                </label>
                                <input type="file" class="form-control" placeholder="MOU" name="pdf_upload"
                                    accept=".pdf,.docx,.doc" onchange="checkFileType(this)">
                                <span id="fileName"></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    <button type="submit" name="folder_insert" class="btn btn-success">Add</button>
                </div>
            </form>
        </div>
    </div>
</div>

<?php
if (isset($_POST['folder_insert'])) {
    include 'conn.php';
    $foldername = $_POST["folder_name"];
    $cataloguename = $_POST["catalogue"];
    if (isset($_FILES['pdf_upload'])) {
        $pdf1File = $_FILES['pdf_upload'];
        $pdf1FileName = $pdf1File['name'];
        $pdf1FileTmp = $pdf1File['tmp_name'];
        if ($pdf1FileName) {
            $pdf1FileType = pathinfo($pdf1FileName, PATHINFO_EXTENSION);
            $pdf1NewFileName = uniqid() . '.' . $pdf1FileType;
            $pdf1UploadDir = "upload/catalogue/pdf/";
            if (!is_dir($pdf1UploadDir)) {
                mkdir($pdf1UploadDir);
            }
            $pdf1TargetFile = $pdf1UploadDir . $pdf1NewFileName;
            if (move_uploaded_file($pdf1FileTmp, $pdf1TargetFile)) {
                // Insert into folder table
                $sql = "INSERT INTO pdfupload (folder_id, pdf_name, pdf_upload) VALUES ('$foldername', '$cataloguename', '$pdf1NewFileName')";
                if ($conn->query($sql) === TRUE) {
                    echo "<script>
                            $(document).ready(function(){
                                toastr.success('Form submitted successfully');
                                setTimeout(function(){
                                    window.location.href = 'pdfupload.php';
                                }, 1000); // 1000 milliseconds = 1 second
                            });
                        </script>";
                } else {
                    echo "Error: " . $sql . "<br>" . $conn->error;
                }
                $conn->close();
            } else {
                echo "Error uploading file.";
            }
        } else {
            echo "No file uploaded.";
        }
    } else {
        echo "No file uploaded.";
    }
} else {
    echo "No folder insert request.";
}
?>

<!--Update Modal -->
<div class="modal fade" data-backdrop="static" id="updatepdfupload">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title text-white">File Upload</h4>
                <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?php $_SERVER['PHP_SELF']; ?>" method='post' enctype="multipart/form-data">
                <div class="modal-body p-4">
                    <input type="hidden" name="id7" id="id7">
                    <div class="form-group">
                        <label for="folder_name1">Folder Name:</label>
                        <select class="form-control" id="folder_name1" name="folder_name1">
                            <option value="">Select Folder</option>
                            <?php
                            include 'conn.php';
                            $sql8 = "SELECT * FROM folder";
                            $result8 = $conn->query($sql8);
                            if ($result8->num_rows > 0) {
                                while ($row8 = $result8->fetch_assoc()) {
                                    echo '<option value="' . $row8["id"] . '">' . $row8["folder_name"] . '</option>';
                                }
                            } else {
                                echo '<option value="">No folders found</option>';
                            }
                            $conn->close();
                            ?>
                        </select>
                    </div>
                    <div class="form-group col-12">
                        <label for="exampleInputcname">Catalogue Name:</label>
                        <input type="text" class="form-control" id="cataloguename" name="catalogue" required>
                    </div>
                    <div class="form-group col-12">
                        <label for="exampleInputtext">Upload File:
                            <span class="required"></span>
                        </label>
                        <input type="file" class="form-control" id="pdf" placeholder="pdf" name="pdf"
                            accept=".pdf,.docx,.doc" onchange="checkFileType(this)">
                        <span id="fileName"></span>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    <button type="submit" name="update10" value="submit" class="btn btn-success">UPDATE</button>
                </div>
            </form>
        </div>
    </div>
</div>

<?php
if (isset($_POST['update10'])) {
    include 'conn.php';
    // Sanitize inputs
    $id = $conn->real_escape_string($_POST["id7"]);
    $name = $conn->real_escape_string($_POST["folder_name1"]);
    $cataloguename = $conn->real_escape_string($_POST["catalogue"]);
    // File handling - PDF
    $pdf_name = $_FILES['pdf']['name'];
    $pdf_tmp = $_FILES['pdf']['tmp_name'];
    $pdf_type = pathinfo($pdf_name, PATHINFO_EXTENSION);
    $new_pdf_name = null; // Initialize variable for new PDF name
    // Check if PDF file is uploaded
    if (!empty($pdf_name)) {
        // Generate a unique name for the PDF file
        $new_pdf_name = uniqid() . '.' . $pdf_type;
        $upload_dir = "upload/catalogue/pdf/";
        // Create directory if it doesn't exist
        if (!is_dir($upload_dir)) {
            mkdir($upload_dir, 0777, true); // Ensure directory is writable
        }
        $target_pdf_file = $upload_dir . $new_pdf_name;
        // Retrieve current PDF name from database
        $sql_previous_pdf = "SELECT pdf_upload FROM pdfupload WHERE id='$id'";
        $result = $conn->query($sql_previous_pdf);
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $previous_pdf = $upload_dir . $row['pdf_upload'];

            // Delete previous PDF file
            if (file_exists($previous_pdf)) {
                unlink($previous_pdf);
            }
        }
        // Move uploaded file to the upload directory
        if (move_uploaded_file($pdf_tmp, $target_pdf_file)) {
            // File uploaded successfully
        } else {
            // Error in uploading file
            echo "<script>alert('PDF file upload failed');</script>";
        }
    }
    // Prepare SQL update query
    if (!empty($new_pdf_name)) {
        // If a new PDF file is uploaded, update both name and pdf fields
        $sql = "UPDATE pdfupload SET folder_id='$name', pdf_name='$cataloguename', pdf_upload='$new_pdf_name' WHERE id='$id'";
    } else {
        // If no new PDF file is uploaded, update only the name field
        $sql = "UPDATE pdfupload SET folder_id='$name', pdf_name='$cataloguename' WHERE id='$id'";
    }
    // Execute SQL query
    if ($conn->query($sql) === true) {
        // Success message with redirect after 1 second
        echo "<script>
            $(document).ready(function(){
                toastr.success('Form submitted successfully');
                setTimeout(function(){
                    window.location.href = 'pdfupload.php';
                }, 1000); // 1000 milliseconds = 1 second
            });
        </script>";
    } else {
        // Error message if SQL query fails
        echo "Error updating record: " . $conn->error;
    }
    // Close database connection
    $conn->close();
}
?>

<!-- for catalogue dropdown -->
<script>
    document.getElementById('catalogue-link').addEventListener('click', function (event) {
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
<?php include 'common/footer.php'; ?>

</html>