<?php
session_start();
include 'conn.php';
$userid = $_SESSION['user'];
if ($userid === NULL) {
    header("location:login.php");
}
?>
<?php
$id = urldecode(base64_decode($_GET['id']));
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Indus-Supply | Updateproduct</title>
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
<?php include 'common/sidebar.php'; ?>
<body>
    <div class="content-wrapper">
        <section class="content">
            <div class="row">
                <div class="col-12">
                    <div class="card mt-3">
                        <div class="card-body">
                            <h3 class="home_color">Update Product</h3>
                            <?php
                            include 'conn.php';
                            $sql = "SELECT * FROM product WHERE id = '$id'";
                            $result = $conn->query($sql);
                            while ($row = $result->fetch_assoc()) {
                                ?>
                            <form action="<?php $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data">
                                <div class="modal-body">
                                    <input type="hidden" name="id4" value="<?php echo $row["id"]; ?>" id="id4">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="form-group col-6">
                                                <label for="exampleInputcname">Product Name:</label>
                                                <input type="text" class="form-control" id="productname"
                                                    placeholder="Enter Product Name" name="productname"
                                                    value="<?php echo $row["product_name"]; ?>"
                                                    title="Enter a valid name (up to 50 characters)" required>
                                            </div>
                                            <div class="form-group col-6">
                                                <label for="exampleInputcname">Product Short Description:</label>
                                                <input type="text" class="form-control" id="product_short_desc"
                                                    placeholder="Enter Product Description" name="productshortname"
                                                    value="<?php echo $row["product_short_nm"]; ?>" title="Enter a valid name (up to 50 characters)" required>
                                            </div>
                                            <div class="form-group col-3">
                                                <label for="subcategoryDropdown">Select Category:</label>
                                                <select class="form-control" name="category" id="categoryDropdown1">
                                                    <option value="">Select Category</option>
                                                    <?php
                                                        $sql1 = "SELECT * FROM category";
                                                        $result1 = $conn->query($sql1);
                                                        while ($row1 = $result1->fetch_assoc()) {
                                                            $selectedCategory = ($row1["id"] == $row["category_id"]) ? "selected" : "";
                                                            ?>
                                                    <option value="<?php echo $row1["id"]; ?>"
                                                        <?php echo $selectedCategory; ?>>
                                                        <?php echo $row1["category_name"]; ?>
                                                    </option>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                            <div class="form-group col-3">
                                                <label for="SUBCATEGORY">Sub-Category:</label>
                                                <select class="form-control" name="subcategory"
                                                    id="sub-category-dropdown1">
                                                    <?php
                                                        $selectedSubcategoryId = $row["sub_category_id"];
                                                        $sql2 = "SELECT * FROM sub_category WHERE category_id = '" . $row['category_id'] . "'";
                                                        $result2 = $conn->query($sql2);
                                                        while ($row2 = $result2->fetch_assoc()) {
                                                            $selectedSubcategory = ($row2["id"] == $selectedSubcategoryId) ? "selected" : "";
                                                            echo '<option value="' . $row2["id"] . '" ' . $selectedSubcategory . '>';
                                                            echo $row2["sub_category_name"];
                                                            echo '</option>';
                                                        }
                                                        ?>
                                                </select>
                                            </div>
                                            <div class="form-group col-3">
                                                <label for="sub SUBCATEGORY">Sub Sub-Category:</label>
                                                <select class="form-control" name="subsubcategory"
                                                    id="sub-sub-category-dropdown1">
                                                    <?php
                                                        $selectedsubSubcategoryId = $row["sub_subcategory_id"];
                                                        $sql3 = "SELECT * FROM sub_subcategory WHERE sub_category_id = '" . $row['sub_category_id'] . "'";
                                                        $result3 = $conn->query($sql3);
                                                        while ($row3 = $result3->fetch_assoc()) {
                                                            $selectedsubSubcategory = ($row3["id"] == $selectedsubSubcategoryId) ? "selected" : "";
                                                            echo '<option value="' . $row3["id"] . '" ' . $selectedsubSubcategory . '>';
                                                            echo $row3["sub_subcategoryname"];
                                                            echo '</option>';
                                                        }
                                                        ?>
                                                </select>
                                            </div>
                                            <div class="form-group col-3">
                                                <label for="exampleInputcname">SKQ Code:</label>
                                                <input type="text" class="form-control" id="skqcode"
                                                    placeholder="Enter Product Name" name="skqcode1"
                                                    value="<?php echo $row["skq_code"]; ?>" title="Enter a valid name (up to 50 characters)" required>
                                            </div>
                                            <div class="form-group col-3">
                                                <label for="exampleInputcname">Product Code:</label>
                                                <input type="text" class="form-control" id="productcode"
                                                    placeholder="Enter Product Code"
                                                    value="<?php echo $row["product_code"]; ?>" name="productcode1"
                                                    required>
                                            </div>
                                            <div class="form-group col-3">
                                                <label for="exampleInputcname">Product Price:</label>
                                                <input type="text" class="form-control" id="productprice"
                                                    placeholder="Enter Product Color"
                                                    value="<?php echo $row["product_price"]; ?>" name="productprice1"
                                                    pattern="\d+" title="Enter an integer value for the product price">
                                            </div>
                                            <div class="form-group col-3">
                                                <label for="exampleInputcname">Product Discount:</label>
                                                <input type="text" class="form-control" id="productdiscount"
                                                    placeholder="Enter Product Size"
                                                    value="<?php echo $row["discount_idd"]; ?>"
                                                    name="productdiscount1" pattern="\d+"
                                                    title="Enter an integer value for the product price">
                                            </div>
                                            <div class="form-group col-3">
                                                <label for="exampleInputcname">Product Discount Price:</label>
                                                <input type="text" class="form-control" id="productdisprice"
                                                    placeholder="Enter Product Color"
                                                    value="<?php echo $row["product_discount_price"]; ?>" name="productdisprice1">
                                            </div>
                                            <div class="form-group col-12">
                                                <label for="exampleInputcname">Product Description Or
                                                    Specification:</label>
                                                <textarea id="content" name="content"
                                                    class="form-control"><?php echo $row["product_description"]; ?></textarea>
                                            </div>
                                            <div class="form-group col-3">
                                                <label for="image">Product Image1:</label>
                                                <input type="file" name="image1" class="form-control"
                                                    placeholder="image" accept="image/jpeg, image/jpg, image/png"
                                                    onchange="document.getElementById('image3').src = window.URL.createObjectURL(this.files[0])">
                                                <img id="image3" src="dist/img/noimage1.png" alt="New image" width="50"
                                                    height="50" />
                                                <?php
                                                    if (!empty($row['product_image1'])) {
                                                        $imagePath = 'upload/product/' . $row['product_image1'];
                                                        $extension = pathinfo($imagePath, PATHINFO_EXTENSION);
                                                        if (!empty($extension)) {
                                                            echo '<img src="' . $imagePath . '" alt="Profile Image" width="50" height="50" class="mt-2 img-fluid">';
                                                        }
                                                    }
                                                    ?>
                                            </div>
                                            <div class="form-group col-3">
                                                <label for="image">Product Image2:</label>
                                                <input type="file" name="image2" class="form-control"
                                                    placeholder="image" accept="image/jpeg, image/jpg, image/png"
                                                    onchange="document.getElementById('image4').src = window.URL.createObjectURL(this.files[0])">
                                                <img id="image4" src="dist/img/noimage1.png" alt="New image" width="50"
                                                    height="50" />
                                                <?php
                                                    if (!empty($row['product_image2'])) {
                                                        $imagePath = 'upload/product/' . $row['product_image2'];
                                                        $extension = pathinfo($imagePath, PATHINFO_EXTENSION);
                                                        if (!empty($extension)) {
                                                            echo '<img src="' . $imagePath . '" alt="Profile Image" width="50" height="50" class="mt-2 img-fluid">';
                                                        }
                                                    }
                                                    ?>
                                            </div>
                                            <div class="form-group col-3">
                                                <label for="image">Product Image3:</label>
                                                <input type="file" name="image3" class="form-control"
                                                    placeholder="image" accept="image/jpeg, image/jpg, image/png"
                                                    onchange="document.getElementById('image5').src = window.URL.createObjectURL(this.files[0])">
                                                <img id="image5" src="dist/img/noimage1.png" alt="New image" width="50"
                                                    height="50" />
                                                <?php
                                                    if (!empty($row['product_image3'])) {
                                                        $imagePath = 'upload/product/' . $row['product_image3'];
                                                        $extension = pathinfo($imagePath, PATHINFO_EXTENSION);
                                                        if (!empty($extension)) {
                                                            echo '<img src="' . $imagePath . '" alt="Profile Image" width="50" height="50" class="mt-2 img-fluid">';
                                                        }
                                                    }
                                                    ?>
                                            </div>
                                            <div class="form-group col-3">
                                                <label for="image">Product Image4:</label>
                                                <input type="file" name="image4" class="form-control"
                                                    placeholder="image" accept="image/jpeg, image/jpg, image/png"
                                                    onchange="document.getElementById('image6').src = window.URL.createObjectURL(this.files[0])">
                                                <img id="image6" src="dist/img/noimage1.png" alt="New image" width="50"
                                                    height="50" />
                                                <?php
                                                    if (!empty($row['product_image4'])) {
                                                        $imagePath = 'upload/product/' . $row['product_image4'];
                                                        $extension = pathinfo($imagePath, PATHINFO_EXTENSION);
                                                        if (!empty($extension)) {
                                                            echo '<img src="' . $imagePath . '" alt="Profile Image" width="50" height="50" class="mt-2 img-fluid">';
                                                        }
                                                    }
                                                    ?>
                                            </div>
                                            <div class="form-group col-3">
                                                <label for="image">Product Image5:</label>
                                                <input type="file" name="image5" class="form-control"
                                                    placeholder="image" accept="image/jpeg, image/jpg, image/png"
                                                    onchange="document.getElementById('image7').src = window.URL.createObjectURL(this.files[0])">
                                                <img id="image7" src="dist/img/noimage1.png" alt="New image" width="50"
                                                    height="50" />
                                                <?php
                                                    if (!empty($row['product_image5'])) {
                                                        $imagePath = 'upload/product/' . $row['product_image5'];
                                                        $extension = pathinfo($imagePath, PATHINFO_EXTENSION);
                                                        if (!empty($extension)) {
                                                            echo '<img src="' . $imagePath . '" alt="Profile Image" width="50" height="50" class="mt-2 img-fluid">';
                                                        }
                                                    }
                                                    ?>
                                            </div>
                                            <div class="col-4">
                                                <label for="text">Others:</label>
                                                <?php $featured_product = $row["featured_product"]; ?>
                                                <?php $top_sell2 = $row["top_sell"]; ?>
                                                <?php $pop_pro = $row["popul_pro"]; ?>
                                                <?php $bestsellers = $row["bestsellers"]; ?>
                                                <div class="checkbox-container">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox"
                                                            id="featured_product" name="featured" value="1" <?php if ($featured_product == 1)
                                                                    echo "checked"; ?>>
                                                        <label class="form-check-label" for="featured_product">Featured
                                                            Product</label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox"
                                                            id="top_sell2" name="toppsell" value="1" <?php if ($top_sell2 == 1)
                                                            echo "checked"; ?>>
                                                        <label class="form-check-label" for="top_selling">Top Selling
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox"
                                                            id="pop_pro" name="popularproduct" value="1" <?php if ($pop_pro == 1)
                                                            echo "checked"; ?>>
                                                        <label class="form-check-label" for="popprou">Popular
                                                            Product</label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" id="bestsellers"
                                                            name="bestsellers" value="1" <?php if ($bestsellers == 1)
                                                                    echo "checked"; ?>>
                                                        <label class="form-check-label"
                                                            for="bestsellers">New Arrivals</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-4">
                                                <label for="text">Size:</label>
                                                <?php $extra_small = $row["extra_small"]; ?>
                                                <?php $small = $row["small"]; ?>
                                                <?php $medium = $row["medium"]; ?>
                                                <?php $large = $row["large"]; ?>
                                                <?php $extra_large = $row["extra_large"]; ?>
                                                <?php $extra_large_large = $row["extra_large_large"]; ?>

                                                <div class="checkbox-container">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" id="ex_small" name="extra_small" value="1" <?php if ($extra_small == 1)
                                                            echo "checked"; ?>>
                                                        <label class="form-check-label" for="extrasmall">XS</label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" id="smalll" name="small" value="1" <?php if ($small == 1)
                                                            echo "checked"; ?>>
                                                        <label class="form-check-label" for="small">S</label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" id="mediumm" name="medium" value="1" <?php if ($medium == 1)
                                                            echo "checked"; ?>>
                                                        <label class="form-check-label" for="medium">M</label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" id="largee" name="large" value="1" <?php if ($large == 1)
                                                            echo "checked"; ?>>
                                                        <label class="form-check-label" for="large">L</label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" id="extralargee" name="ext_largee" value="1" <?php if ($extra_large == 1)
                                                            echo "checked"; ?>>
                                                        <label class="form-check-label" for="ext_largee">XL</label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" id="extralargee11" name="ext_largee_extra" value="1" <?php if ($extra_large_large == 1)
                                                            echo "checked"; ?>>
                                                        <label class="form-check-label" for="ext_largee_extra">XXL</label>
                                                    </div>
                                                </div>
                                            </div>
                                             <div class="form-group col-3">
                                                <label for="subcategoryDropdown">Select Occasion:</label>
                                                <select class="form-control" name="category" id="categoryDropdown1">
                                                    <option value="">Select Occasion</option>
                                                    <?php
                                                        $sql5 = "SELECT * FROM occasion";
                                                        $result5 = $conn->query($sql5);
                                                        while ($row5 = $result5->fetch_assoc()) {
                                                            $selectedOccasion = ($row5["id"] == $row["occ_id"]) ? "selected" : "";
                                                            ?>
                                                    <option value="<?php echo $row5["id"]; ?>"
                                                        <?php echo $selectedOccasion; ?>>
                                                        <?php echo $row5["name"]; ?>
                                                    </option>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                            <div class="form-group col-12">
                                                <label for="exampleInputcname">Slug:</label>
                                                <input type="text" class="form-control" id="slug" name="slug"
                                                    value="<?php echo $row["slug"]; ?>" required>
                                            </div>
                                            <div class="form-group col-12">
                                                <label for="text">Keywords:</label>
                                                <input type="text" class="form-control" id="tag-input1" name="keywords1"
                                                    value="<?php echo $row["keywords"]; ?>" id="keywords1">
                                            </div>
                                            <div class="form-group col-12">
                                                <label for="exampleInputcname">Meta Description:</label>
                                                <textarea name="metadescription" id="metadescription"
                                                    class="form-control"
                                                    required><?php echo htmlspecialchars($row["meta_description"]); ?></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-danger" id="closeModalBtn"
                                            data-dismiss="modal">Close</button>
                                        <button type="submit" name="productupdate" value="submit"
                                            class="btn btn-success">Update</button>
                                    </div>
                            </form>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <!-- php code of update -->
    <?php
    if (isset($_POST['productupdate'])) {
        include 'conn.php';
        $upload_dir = "upload/product/";

        // Function to handle file upload and update
        function handleFileUpload($fieldName, $targetColumnName, $isUploading)
        {
            global $conn, $upload_dir;
            $image_name = $_FILES[$fieldName]['name'];
            $image_tmp = $_FILES[$fieldName]['tmp_name'];
            $file_type = pathinfo($image_name, PATHINFO_EXTENSION);
            $new_file_name = uniqid() . '.' . $file_type;

            // Retrieve the previous file name from the database
            $sql_previous_image = "SELECT $targetColumnName FROM product WHERE id='{$_POST['id4']}'";
            $result = $conn->query($sql_previous_image);
            if ($result->num_rows > 0) {
                $row = $result->fetch_assoc();
                $previous_image = $upload_dir . $row[$targetColumnName];
                // Delete previous file from the upload folder if uploading a new file
                if ($isUploading && !empty($image_name) && $new_file_name !== $row[$targetColumnName]) {
                    if (file_exists($previous_image)) {
                        unlink($previous_image);
                    }
                }
            }
            $target_file = $upload_dir . $new_file_name;
            if (move_uploaded_file($image_tmp, $target_file)) {
                return $new_file_name;
            } else {
                return false;
            }
        }

        // Handle file uploads and get new file names
        $new_file_name1 = handleFileUpload('image1', 'product_image1', !empty($_FILES['image1']['name']));
        $new_file_name2 = handleFileUpload('image2', 'product_image2', !empty($_FILES['image2']['name']));
        $new_file_name3 = handleFileUpload('image3', 'product_image3', !empty($_FILES['image3']['name']));
        $new_file_name4 = handleFileUpload('image4', 'product_image4', !empty($_FILES['image4']['name']));
        $new_file_name5 = handleFileUpload('image5', 'product_image5', !empty($_FILES['image5']['name']));

        // Other form data
        $id = $_POST["id4"];
        $productname = htmlspecialchars($_POST["productname"]);
        $productshortname = htmlspecialchars($_POST["productshortname"]);
        $category = $_POST["category"];
        $subcategory = $_POST["subcategory"];
        $subsubcategory = $_POST["subsubcategory"];
        $productcode = $_POST["productcode"];
        $productprice = $_POST["productprice"];
        $productdiscountprice = $_POST["productdiscountprice"];
        $productdescription = $_POST["content"];
        $featured = isset($_POST["featured"]) ? $_POST["featured"] : 0;
        $toppsell = isset($_POST["toppsell"]) ? $_POST["toppsell"] : 0;
        $popularproduct = isset($_POST["popularproduct"]) ? $_POST["popularproduct"] : 0;
        $bestsellers = isset($_POST["bestsellers"]) ? $_POST["bestsellers"] : 0;
        $extra_small = isset($_POST["extra_small"]) ? $_POST["extra_small"] : 0;
        $small = isset($_POST["small"]) ? $_POST["small"] : 0;
        $medium = isset($_POST["medium"]) ? $_POST["medium"] : 0;
        $large = isset($_POST["large"]) ? $_POST["large"] : 0;
        $ext_largee = isset($_POST["ext_largee"]) ? $_POST["ext_largee"] : 0;
        $ext_largee_extra = isset($_POST["ext_largee_extra"]) ? $_POST["ext_largee_extra"] : 0;
        $occasion = $_POST["occasion"];
        $slug = $_POST["slug"];
        $keywords = $_POST["keywords1"];
        $metadescription = $_POST["metadescription"];

        // Update query
        $sql = "UPDATE product SET product_name='$productname', product_short_nm='$productshortname', category_id='$category', sub_category_id='$subcategory', sub_subcategory_id='$subsubcategory', product_code='$productcode', product_price='$productprice', product_discount_price='$productdiscountprice', product_description='$productdescription', featured_product='$featured', top_sell='$toppsell', popul_pro='$popularproduct', bestsellers='$bestsellers', extra_small='$extra_small', small='$small', medium='$medium', large='$large', extra_large='$ext_largee', extra_large_large='$ext_largee_extra', occ_id='$occasion', slug='$slug', keywords='$keywords', meta_description='$metadescription'";

        if ($new_file_name1 !== false) {
            $sql .= ", product_image1='$new_file_name1'";
        }
        if ($new_file_name2 !== false) {
            $sql .= ", product_image2='$new_file_name2'";
        }
        if ($new_file_name3 !== false) {
            $sql .= ", product_image3='$new_file_name3'";
        }
        if ($new_file_name4 !== false) {
            $sql .= ", product_image4='$new_file_name4'";
        }
        if ($new_file_name5 !== false) {
            $sql .= ", product_image5='$new_file_name5'";
        }

        $sql .= " WHERE id='$id'";

        // Execute the update query
        if ($conn->query($sql) === TRUE) {
            echo "<script>
                    $(document).ready(function(){
                    toastr.success('Form submitted successfully');
                    setTimeout(function(){
                    window.location.href = 'product.php';
                    }, 2000); // 2000 milliseconds = 1 second
                    });
                </script>";
        } else {
            echo "Error updating record: " . $conn->error;
        }
        $conn->close();
    }
    ?>
    <?php include 'common/footer.php'; ?>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
    <script>
    CKEDITOR.replace('content', {
        height: 300,
        filebrowserUploadUrl: "upload.php"
    });
    </script>
    <script>
    //for keywords
    (function() {
        "use strict"
        // Plugin Constructor
        var TagsInput = function(opts) {
            this.options = Object.assign(TagsInput.defaults, opts);
            this.init();
        }

        // Initialize the plugin
        TagsInput.prototype.init = function(opts) {
            this.options = opts ? Object.assign(this.options, opts) : this.options;

            if (this.initialized)
                this.destroy();

            if (!(this.orignal_input = document.getElementById(this.options.selector))) {
                console.error("tags-input couldn't find an element with the specified ID");
                return this;
            }
            this.arr = [];
            this.wrapper = document.createElement('div');
            this.input = document.createElement('input');
            init(this);
            initEvents(this);
            // Check if there's existing data and populate the input field with tags
            if (this.orignal_input.value) {
                var existingTags = this.orignal_input.value.split(',');
                for (var i = 0; i < existingTags.length; i++) {
                    this.addTag(existingTags[i]);
                }
            }
            this.initialized = true;
            return this;
        }

        // Add Tags
        TagsInput.prototype.addTag = function(string) {
            if (this.anyErrors(string))
                return;

            this.arr.push(string);
            var tagInput = this;

            var tag = document.createElement('span');
            tag.className = this.options.tagClass;
            tag.innerText = string;

            var closeIcon = document.createElement('a');
            closeIcon.innerHTML = '&times;';

            // delete the tag when icon is clicked
            closeIcon.addEventListener('click', function(e) {
                e.preventDefault();
                var tag = this.parentNode;

                for (var i = 0; i < tagInput.wrapper.childNodes.length; i++) {
                    if (tagInput.wrapper.childNodes[i] == tag)
                        tagInput.deleteTag(tag, i);
                }
            })
            tag.appendChild(closeIcon);
            this.wrapper.insertBefore(tag, this.input);
            this.orignal_input.value = this.arr.join(',');

            return this;
        }

        // Delete Tags
        TagsInput.prototype.deleteTag = function(tag, i) {
            tag.remove();
            this.arr.splice(i, 1);
            this.orignal_input.value = this.arr.join(',');
            return this;
        }

        // Make sure input string have no error with the plugin
        TagsInput.prototype.anyErrors = function(string) {
            if (this.options.max != null && this.arr.length >= this.options.max) {
                console.log('max tags limit reached');
                return true;
            }
            if (!this.options.duplicate && this.arr.indexOf(string) != -1) {
                console.log('duplicate found " ' + string + ' " ')
                return true;
            }

            return false;
        }

        // Add tags programmatically 
        TagsInput.prototype.addData = function(array) {
            var plugin = this;

            array.forEach(function(string) {
                plugin.addTag(string);
            })
            return this;
        }

        // Get the Input String
        TagsInput.prototype.getInputString = function() {
            return this.arr.join(',');
        }

        // destroy the plugin
        TagsInput.prototype.destroy = function() {
            this.orignal_input.removeAttribute('hidden');

            delete this.orignal_input;
            var self = this;

            Object.keys(this).forEach(function(key) {
                if (self[key] instanceof HTMLElement)
                    self[key].remove();

                if (key != 'options')
                    delete self[key];
            });

            this.initialized = false;
        }

        // Private function to initialize the tag input plugin
        function init(tags) {
            tags.wrapper.append(tags.input);
            tags.wrapper.classList.add(tags.options.wrapperClass);
            tags.orignal_input.setAttribute('hidden', 'true');
            tags.orignal_input.parentNode.insertBefore(tags.wrapper, tags.orignal_input);
        }

        // initialize the Events
        function initEvents(tags) {
            tags.wrapper.addEventListener('click', function() {
                tags.input.focus();
            });

            tags.input.addEventListener('keydown', function(e) {
                var str = tags.input.value.trim();

                if (!!(~[9, 13, 188].indexOf(e.keyCode))) {
                    e.preventDefault();
                    tags.input.value = "";
                    if (str != "")
                        tags.addTag(str);
                }

            });
        }
        // Set All the Default Values
        TagsInput.defaults = {
            selector: '',
            wrapperClass: 'tags-input-wrapper',
            tagClass: 'tag',
            max: null,
            duplicate: false
        }

        window.TagsInput = TagsInput;

    })();
    var tagInput1 = new TagsInput({
        selector: 'tag-input1',
        duplicate: false,
        max: 10
    });
    tagInput1.addData([])
    </script>
</body>

</html>