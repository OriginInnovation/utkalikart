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
    <title>Utkalikart | Subcategory</title>
    <link href="dist/img/titleimage1.png" rel="icon">
    <!-- toaster -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<?php include 'common/navbar.php'; ?>
<!-- Main Sidebar Container -->
<?php include 'common/sidebar.php'; ?>
<div class="content-wrapper">
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card mt-3">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <h3 class="home_color">Sub-Categories</h3>
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
                                        <th class="text-center">Sub-Category Image</th>
                                        <th class="text-center">Sub-Category Name</th>
                                        <th class="text-center">Category Name</th>
                                        <th class="text-center">Manage</th>
                                    </tr>
                                </thead>
                                <?php
                                include 'conn.php';
                                $sql = "SELECT * FROM sub_category";
                                $result = $conn->query($sql);
                                ?>
                                <tbody>
                                    <?php while ($row = $result->fetch_assoc()) {
                                        // Escape special characters for JavaScript
                                        $sub_category_name = htmlspecialchars($row['sub_category_name'], ENT_QUOTES, 'UTF-8');
                                        ?>
                                        <tr>
                                            <td class="serial-no text-center"></td>
                                            <td class="text-center"><img
                                                    src="upload/sub_category/<?php echo $row['sub_image']; ?>"
                                                    alt="profile image" width="50" height="50">
                                            <td class="text-center"><?php echo $sub_category_name; ?></td>
                                            <td class="text-center">
                                                <?php
                                                $category_id = $row["category_id"];
                                                $sql1 = "SELECT * FROM category WHERE id = $category_id";
                                                $result1 = $conn->query($sql1);
                                                $row1 = $result1->fetch_assoc();
                                                echo htmlspecialchars($row1["category_name"], ENT_QUOTES, 'UTF-8');
                                                ?>
                                            </td>
                                            <td class="text-center">
                                                <?php
                                                $status = $row['status'];
                                                $idm = $row['id'];
                                                $tb = 'sub_category';
                                                $tbc = 'id';
                                                $tbc1 = 'status';
                                                $returnpage = 'subcategory';
                                                $extra = $row['category_id'];
                                                if ($status == 1) {
                                                    echo "<a href='active?status=$idm&tb=$tb&tbc=$tbc&tbc1=$tbc1&returnpage=$returnpage' class='btn btn-success btn-sm' onclick='return confirmAction(\"active\", $idm, \"$tb\", \"$tbc\", \"$tbc1\", \"$returnpage\", \"$extra\")' title='Active'>
                                                    <i class='fas fa-unlock'></i></a>";
                                                } else {
                                                    echo "<a href='inactive?status0=$idm&tb=$tb&tbc=$tbc&tbc1=$tbc1&returnpage=$returnpage' class='btn btn-danger btn-sm' onclick='return confirmAction(\"inactive\", $idm, \"$tb\", \"$tbc\", \"$tbc1\", \"$returnpage\", \"$extra\")' title='Inactive'>
                                                    <i class='fas fa-lock'></i></a>";
                                                }
                                                ?>
                                                <button type="button" name="update1" class="btn btn-primary btn-sm m-2"
                                                    onclick="myfcn3(<?php echo $row['id']; ?>, '<?php echo $row['sub_image']; ?>',  '<?php echo $sub_category_name; ?>', <?php echo $row['category_id']; ?>)"
                                                    data-toggle="modal" data-target="#updatedesubcategory" title="Edit"
                                                    aria-hidden="true">
                                                    <i class='fas fa-edit'></i>
                                                </button>
                                                <a onclick="confirmDelete(<?php echo $row['id']; ?>, tb='sub_category', tbc='id', returnpage='subcategory');"
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
                                        <th class="text-center">Sub-Category Image</th>
                                        <th class="text-center">Sub-Category Name</th>
                                        <th class="text-center">Category Name</th>
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
                <h4 class="modal-title text-white">Sub-Category</h4>
                <button type="button" class="close text-white" data-dismiss="modal">&times;</button>
            </div>
            <form action="<?php $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data">
                <div class="modal-body">
                    <div class="card-body">
                        <div class="form-group">
                            <label for="exampleInputcname">Sub_category Image:</label>
                            <input type="file" class="form-control" name="sub_cat_img"
                                accept="image/jpeg, image/jpg, image/png"
                                onchange="document.getElementById('image11').src = window.URL.createObjectURL(this.files[0])"
                                required>
                            <img id="image11" src="dist/img/noimage1.png" alt="image" width="50" height="50" />
                            <label for="subcategoryDropdown">Category Name:</label>
                            <select class="form-control" name="value" required>
                                <option value="">Select Category</option>
                                <?php
                                $sql2 = "SELECT * FROM category";
                                $result2 = $conn->query($sql2);
                                while ($row2 = $result2->fetch_assoc()) {
                                    ?>
                                    <option value="<?php echo $row2["id"]; ?>">
                                        <?php echo $row2["category_name"]; ?>
                                    </option>
                                <?php } ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputcname">Sub-Category Name:</label>
                            <input type="text" class="form-control" id="exampleInputcname" name="subcategory" required>
                        </div>
                    </div>
                </div>
                <!-- Modal footer -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    <button type="submit" name="subcategory_insert" class="btn btn-success">Add</button>
                </div>
            </form>
        </div>
    </div>
</div>

<?php
if (isset($_POST['subcategory_insert'])) {
    include 'conn.php';
    $name = htmlspecialchars($_POST["subcategory"]);
    $value = $_POST["value"];
    $check_query = "SELECT * FROM sub_category WHERE sub_category_name = '$name' AND category_id = '$value'";
    $result3 = $conn->query($check_query);
    if ($result3->num_rows > 0) {
        echo "<script>
                $(document).ready(function(){
                toastr.error('Sub-category name already exists for this category');
                setTimeout(function(){
                window.location.href = 'subcategory';
                }, 3000);
                });
            </script>";
    } else {
        function handleFileUpload($fieldName, $uploadDir)
        {
            global $conn;
            $image_name = $_FILES[$fieldName]['name'];
            $image_size = $_FILES[$fieldName]['size'];
            $image_tmp = $_FILES[$fieldName]['tmp_name'];
            $file_type = pathinfo($image_name, PATHINFO_EXTENSION);
            $new_file_name = uniqid() . '.' . $file_type;

            // Ensure upload directory exists
            if (!is_dir($uploadDir)) {
                mkdir($uploadDir, 0777, true); // Ensure directory is writable
            }

            $target_file = $uploadDir . $new_file_name;

            if (move_uploaded_file($image_tmp, $target_file)) {
                return $new_file_name; // Return the generated file name if upload succeeds
            } else {
                return null; // Return null if upload fails
            }
        }


        // File upload directory
        $upload_dir = "upload/sub_category/";
        // Handle image uploads
        $new_file_name = handleFileUpload('sub_cat_img', $upload_dir);
        $sql = "INSERT INTO sub_category (sub_image, sub_category_name, category_id, status) VALUES ('$new_file_name', '$name','$value','1')";
        if ($conn->query($sql) === true) {
            echo "<script>
                    $(document).ready(function(){
                    toastr.success('Form submitted successfully');
                    setTimeout(function(){
                    window.location.href = 'subcategory';
                    }, 2000); // 2000 milliseconds = 1 second
                    });
                </script>";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
    $conn->close();
}
?>

<!-- Update Modal -->
<div class="modal fade" data-backdrop="static" id="updatedesubcategory">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title text-white">Sub-Category</h4>
                <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data">
                <div class="modal-body p-4">
                    <input type="hidden" name="id3" id="id3">
                    <div class="form-group">
                        <label for="exampleInputcname">Sub_Category Image:</label>
                        <input type="file" class="form-control" name="sub_catt_image" placeholder="image"
                            accept="image/jpeg, image/jpg, image/png"
                            onchange="document.getElementById('image12').src = window.URL.createObjectURL(this.files[0])">
                        <img id="image12" src="dist/img/noimage1.png" alt="image" width="50" height="50" />
                        <img id="sub_category1_img" alt="image" width="50" height="50" />
                    </div>
                    <div class="form-group">
                        <label for="category_name2">Category Name:</label>
                        <select class="form-control" id="category_name2" name="category_name">
                            <option value="">Select Category</option>
                            <?php
                            $sql8 = "SELECT * FROM category";
                            $result8 = $conn->query($sql8);
                            while ($row8 = $result8->fetch_assoc()) {
                                ?>
                                <option value="<?php echo $row8["id"]; ?>">
                                    <?php echo htmlspecialchars($row8["category_name"], ENT_QUOTES, 'UTF-8'); ?>
                                </option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="subcategory_name">Sub-Category Name:</label>
                        <input type="text" class="form-control" id="subcategory_name" name="subcategory_name">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    <button type="submit" name="subcategory_update" value="submit"
                        class="btn btn-success">UPDATE</button>
                </div>
            </form>
        </div>
    </div>
</div>

<?php
if (isset($_POST['subcategory_update'])) {
    include 'conn.php';
    $image_name = $_FILES['sub_catt_image']['name'];
    $id = $_POST["id3"];
    $subcategory_name = htmlspecialchars($_POST["subcategory_name"]);
    $category_name = htmlspecialchars($_POST["category_name"]);
    if ($image_name == NULL) {
        $sql1 = "UPDATE sub_category SET sub_category_name='$subcategory_name', category_id='$category_name' WHERE id='$id'";
        if ($conn->query($sql1) === true) {
            echo "<script>
                    $(document).ready(function(){
                    toastr.success('Form submitted successfully');
                    setTimeout(function(){
                    window.location.href = 'subcategory';
                    }, 2000); // 2000 milliseconds = 2 second
                    });
                </script>";
        } else {
            echo $conn->error;
        }
        $conn->close();
    } else {

        $image_size = $_FILES['sub_catt_image']['size'];
        $image_tmp = $_FILES['sub_catt_image']['tmp_name'];
        $file_type = pathinfo($image_name, PATHINFO_EXTENSION);
        $new_file_name = uniqid() . '.' . $file_type;
        $upload_dir = "upload/sub_category/";

        // Retrieve the previous file name from the database
        $sql_previous_image = "SELECT sub_image FROM sub_category WHERE id='$id'";
        $result = $conn->query($sql_previous_image);
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $previous_image = $upload_dir . $row['sub_image'];

            // Delete previous photo from the upload folder
            if (file_exists($previous_image)) {
                unlink($previous_image);
            }
        }
        $target_file = $upload_dir . $new_file_name;
        if (move_uploaded_file($image_tmp, $target_file)) {

            $sql1 = "UPDATE sub_category SET sub_image='$new_file_name', sub_category_name='$subcategory_name', category_id='$category_name' WHERE id='$id'";
            if ($conn->query($sql1) == true) {
                echo "<script>
                    $(document).ready(function(){
                    toastr.success('Form submitted successfully');
                    setTimeout(function(){
                    window.location.href = 'subcategory';
                    }, 2000); // 2000 milliseconds = 2 second
                    });
                </script>";
            } else {
                echo $conn->error;
            }
            $conn->close();
        } else {
            echo "<script>alert('Image not uploaded');</script>";
        }
    }
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