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
    <title>Banner | Banner</title>
    <link href="dist/img/titleimage.png" rel="icon">
    <!-- toaster -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Toastr CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" rel="stylesheet" />
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
                    <div class="card table-size mt-3">
                        <div class="card-header">
                            <h3 class="home_color">Banner</h3>
                        </div>
                        <div class="card-body">
                            <table class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th class="text-center">Sl.No</th>
                                        <th class="text-center">Banner Image</th>
                                        <th class="text-center">Update</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    include 'conn.php';
                                    $sql = "SELECT * FROM banner";
                                    $result = $conn->query($sql);
                                    while ($row = $result->fetch_assoc()) {
                                        ?>
                                        <tr>
                                            <td class="serial-no text-center"></td>
                                            <td class="text-center"><img
                                                    src="upload/banner/<?php echo $row['banner_image']; ?>"
                                                    alt="profile image" width="50" height="50">
                                            </td>
                                            <td class=text-center>
                                                <button type="button" name="update1" class="btn btn-primary btn-sm m-2"
                                                    onclick="myfcn1(<?php echo $row['id']; ?>, '<?php echo $row['banner_image']; ?>')"
                                                    data-toggle="modal" data-target="#updatebanner" title="Edit"
                                                    aria-hidden="true">
                                                    <i class='fas fa-edit'></i>
                                                </button>
                                            </td>
                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<!--Update Modal -->
<div class="modal fade" data-backdrop="static" id="updatebanner">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title text-white">Banner</h4>
                <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?php $_SERVER['PHP_SELF']; ?>" method='post' enctype="multipart/form-data">
                <div class="modal-body p-4">
                    <input type="hidden" name="id1" id="id1">
                    <div class="row">
                        <div class="form-group col-12">
                            <label for="image">Banner Image:</label>
                            <input type="file" name="image" class="form-control" placeholder="image"
                                accept=".png, .jpg, .jpeg"
                                onchange="document.getElementById('image2').src = window.URL.createObjectURL(this.files[0])">
                            <img id="image2" src="dist/img/noimage1.png" alt="New image" width="50" height="50" />
                            <img src="#" id="image1" alt="Profile Image" width="50" height="50" class="mt-2 img-fluid">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    <button type="submit" name="banner_update" value="submit" class="btn btn-primary">UPDATE</button>
                </div>
            </form>
        </div>
    </div>
</div>

<?php
if (isset($_POST['banner_update'])) {
    // Ensure the database connection is established
    require_once 'conn.php'; // Replace with your actual DB connection file

    // Sanitize the ID
    $id = intval($_POST['id1']);

    $image_name = $_FILES['image']['name'];
    $image_size = $_FILES['image']['size'];
    $image_tmp = $_FILES['image']['tmp_name'];
    $file_type = pathinfo($image_name, PATHINFO_EXTENSION);
    $new_file_name = uniqid() . '.' . $file_type;
    $upload_dir = "upload/banner/";
    $target_file = $upload_dir . $new_file_name;

    // Retrieve the previous image file name from the database
    $sql_previous_image = "SELECT banner_image FROM banner WHERE id = '$id'";
    $result = mysqli_query($conn, $sql_previous_image);

    if ($result && mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $previous_image = $upload_dir . $row['banner_image'];

        // Delete the previous image from the folder
        if (file_exists($previous_image)) {
            unlink($previous_image);
        }
    }

    // Move uploaded file to target directory
    if (move_uploaded_file($image_tmp, $target_file)) {
        // Update the new image name in the database
        $update_sql = "UPDATE banner SET banner_image = '$new_file_name' WHERE id = '$id'";
        if (mysqli_query($conn, $update_sql)) {
            echo '
    <div id="successAlert" class="alert alert-light alert-dismissible fade show small position-fixed top-0 end-0 m-3 shadow" role="alert" style="z-index: 1055;">
        <i class="fa fa-check-circle me-2"></i>Bannner updated successfully!
        <button type="button" class="btn-close btn-sm" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>

    <script>
        setTimeout(function() {
            var alert = document.getElementById("successAlert");
            if (alert) {
                var bsAlert = bootstrap.Alert.getOrCreateInstance(alert);
                bsAlert.close();
            }
        }, 3000); // Hide after 3 sec

        setTimeout(function() {
            window.location.href = "banner"; // Redirect after 4 sec
        }, 4000);
    </script>';
        } else {
            echo '
    <div id="errorAlert" class="alert alert-danger alert-dismissible fade show small position-fixed top-0 end-0 m-3 shadow" role="alert" style="z-index: 1055;">
        <i class="fa fa-exclamation-circle me-2"></i>Something went wrong!
        <button type="button" class="btn-close btn-sm" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
        }

        $conn->close();
    }
}
?>
<!-- Toastr JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<?php include 'common/footer.php'; ?>

</html>