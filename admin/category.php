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
    <title>Utkalikart | Category</title>
    <link href="dist/img/titleimage1.png" rel="icon">
    <!-- toaster -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
    <script src="https://code.jquery.com/jquery-3.6.4.min.js?v=1.2"></script>
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
                            <h3 class="home_color">Categories</h3>
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
                                        <th class="text-center">Category Image</th>
                                        <th class="text-center">Category Name</th>
                                        <th class="text-center">Manage</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    include 'conn.php';
                                    $sql = "SELECT * FROM category";
                                    $result = $conn->query($sql);
                                    while ($row = $result->fetch_assoc()) {
                                        ?>
                                        <tr>
                                            <td class="serial-no text-center"></td>
                                            <td class="text-center"><img
                                                    src="upload/category/<?php echo $row['category_image']; ?>"
                                                    alt="profile image" width="50" height="50">
                                            <td class="text-center"><?php echo $row['category_name']; ?></td>
                                            <td class=text-center>
                                                <?php
                                                $status = $row['status'];
                                                $idm = $row['id'];
                                                $tb = 'category';
                                                $tbc = 'id';
                                                $tbc1 = 'status';
                                                $returnpage = 'category';
                                                if ($status == 1) {
                                                    echo "<a href='active?status=$idm&tb=$tb&tbc=$tbc&tbc1=$tbc1&returnpage=$returnpage' class='btn btn-success btn-sm' onclick='return confirmAction(\"active\", $idm, \"$tb\", \"$tbc\", \"$tbc1\", \"$returnpage\")'title='Active'>
                                                    <i class='fas fa-unlock'></i></a>";
                                                } else {
                                                    echo "<a href='inactive?status0=$idm&tb=$tb&tbc=$tbc&tbc1=$tbc1&returnpage=$returnpage' class='btn btn-danger btn-sm' onclick='return confirmAction(\"inactive\", $idm, \"$tb\", \"$tbc\", \"$tbc1\", \"$returnpage\")'title='Inactive'>
                                                    <i class='fas fa-lock'></i></a>";
                                                }
                                                ?>
                                                <button type="button" name="update3" class="btn btn-primary btn-sm m-2"
                                                    onclick="myfcn2(<?php echo $row['id']; ?>,'<?php echo $row['category_image']; ?>','<?php echo $row['category_name']; ?>')"
                                                    data-toggle="modal" data-target="#updatedecategory" title="Edit"
                                                    aria-hidden="true">
                                                    <i class='fas fa-edit'></i>
                                                </button>
                                                <a onclick="confirmDelete(<?php echo $row['id']; ?>, tb='category', tbc='id', returnpage='category');"
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
                                        <th class="text-center">Category Image</th>
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
                <h4 class="modal-title text-white">Category</h4>
                <button type="button" class="close text-white" data-dismiss="modal">&times;</button>
            </div>
            <form action="<?php $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data">
                <div class="modal-body">
                    <div class="card-body">
                        <div class="row">
                            <div class="form-group col-6">
                                <label for="exampleInputcname">Occasion Image:</label>
                                <input type="file" class="form-control" name="cat_img"
                                    accept="image/jpeg, image/jpg, image/png"
                                    onchange="document.getElementById('image18').src = window.URL.createObjectURL(this.files[0])"
                                    required>
                                <img id="image18" src="dist/img/noimage1.png" alt="image" width="50" height="50" />
                            </div>
                            <div class="form-group col-6">
                                <label for="exampleInputcname">Category Name:</label>
                                <input type="text" class="form-control" id="exampleInputcname" name="name" required>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    <button type="submit" name="category_update" class="btn btn-success">Add</button>
                </div>
            </form>
        </div>
    </div>
</div>

<?php
if (isset($_POST['category_update'])) {
    include 'conn.php';
    $name = htmlspecialchars($_POST["name"]);
    $check_query = "SELECT * FROM category WHERE category_name = '$name'";
    $result3 = $conn->query($check_query);
    if ($result3->num_rows > 0) {
        echo "<script>
                $(document).ready(function(){
                toastr.error('Category name already exists for this category');
                setTimeout(function(){
                window.location.href = 'category';
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
        $upload_dir = "upload/category/";
        // Handle image uploads
        $new_file_name = handleFileUpload('cat_img', $upload_dir);
        $sql = "INSERT INTO category (category_image, category_name, status) VALUES ('$new_file_name', '$name', '1')";
        if ($conn->query($sql) === true) {
            echo "<script>
                            $(document).ready(function(){
                            toastr.success('Form submitted successfully');
                            setTimeout(function(){
                            window.location.href = 'category';
                            }, 2000); // 2000 milliseconds = 1 second
                            });
                        </script>";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
}
$conn->close();
?>

<!--Update Modal -->
<div class="modal fade" data-backdrop="static" id="updatedecategory">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title text-white">Category</h4>
                <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?php $_SERVER['PHP_SELF']; ?>" method='post' enctype="multipart/form-data">
                <div class="modal-body p-4">
                    <input type="hidden" name="id2" id="id2">
                    <div class="row">
                        <div class="form-group col-6">
                            <label for="exampleInputcname">Category Image:</label>
                            <input type="file" class="form-control" name="catt_image" placeholder="image"
                                accept="image/jpeg, image/jpg, image/png"
                                onchange="document.getElementById('image19').src = window.URL.createObjectURL(this.files[0])">
                            <img id="image19" src="dist/img/noimage1.png" alt="image" width="50" height="50" />
                            <img id="category1_img" alt="image" width="50" height="50" />
                        </div>
                        <div class="form-group col-6">
                            <label for="text">Category Name:</label>
                            <input type="text" class="form-control" id="category_name" name="category_name">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    <button type="submit" name="update4" value="submit" class="btn btn-success">UPDATE</button>
                </div>
            </form>
        </div>
    </div>
</div>
<?php
if (isset($_POST['update4'])) {
    include 'conn.php';
    $image_name = $_FILES['catt_image']['name'];
    $id = $_POST["id2"];
    $category_name = htmlspecialchars($_POST["category_name"]);
    if ($image_name == NULL) {
        $sql1 = "UPDATE category SET category_name='$category_name' WHERE id='$id'";
        if ($conn->query($sql1) === true) {
            echo "<script>
                    $(document).ready(function(){
                    toastr.success('Form submitted successfully');
                    setTimeout(function(){
                    window.location.href = 'category';
                    }, 2000); // 2000 milliseconds = 2 second
                    });
                </script>";
        } else {
            echo $conn->error;
        }
        $conn->close();
    } else {

        $image_size = $_FILES['catt_image']['size'];
        $image_tmp = $_FILES['catt_image']['tmp_name'];
        $file_type = pathinfo($image_name, PATHINFO_EXTENSION);
        $new_file_name = uniqid() . '.' . $file_type;
        $upload_dir = "upload/category/";

        // Retrieve the previous file name from the database
        $sql_previous_image = "SELECT category_image FROM category WHERE id='$id'";
        $result = $conn->query($sql_previous_image);
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $previous_image = $upload_dir . $row['category_image'];

            // Delete previous photo from the upload folder
            if (file_exists($previous_image)) {
                unlink($previous_image);
            }
        }
        $target_file = $upload_dir . $new_file_name;
        if (move_uploaded_file($image_tmp, $target_file)) {

            $sql1 = "UPDATE category SET category_image='$new_file_name', category_name='$category_name' WHERE id='$id'";
            if ($conn->query($sql1) == true) {
                echo "<script>
                    $(document).ready(function(){
                    toastr.success('Form submitted successfully');
                    setTimeout(function(){
                    window.location.href = 'category';
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
<?php include 'common/footer.php'; ?>

</html>