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
    <title>Utkalikart | Add Product</title>
    <link href="dist/img/titleimage.png" rel="icon">
    <script src="http://cdn.ckeditor.com/4.6.2/standard-all/ckeditor.js"></script>
    <script src="https://cdn.ckeditor.com/ckeditor5/42.0.0/classic/ckeditor.js"></script>
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
                            <h3 class="mb-3 home_color">Add Product</h3>
                            <form action="<?php $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data">
                                <div class="modal-body p-0">
                                    <div class="card-body p-0">
                                        <div class="row">
                                            <div class="form-group col-3">
                                                <input type="text" class="form-control" id="exampleInputproductname"
                                                    placeholder="Enter Product Name" name="productname"
                                                    title="Enter a valid name (up to 50 characters)" required>
                                            </div>
                                            <div class="form-group col-3">
                                                <input type="text" class="form-control" id="exampleInputproductname"
                                                    placeholder="Enter Product Short Description" name="descc1">
                                            </div>
                                            <div class="form-group col-3">
                                                <input type="text" class="form-control" id="exampleInputproductname"
                                                    placeholder="Enter Ratings" name="ratingss">
                                            </div>
                                            <div class="form-group col-3">
                                                <input type="text" class="form-control" id="exampleInputproductname"
                                                    placeholder="Enter Reviews" name="reviewss">
                                            </div>
                                            <div class="form-group col-3">
                                                <select class="form-control" name="category" id="category-dropdown"
                                                    required>
                                                    <option value="">Select Category</option>
                                                    <?php
                                                    include "conn.php";
                                                    $result = mysqli_query($conn, "SELECT * FROM category");
                                                    while ($row = mysqli_fetch_array($result)) {
                                                        ?>
                                                        <option value="<?php echo $row['id']; ?>">
                                                            <?php echo $row["category_name"]; ?>
                                                        </option>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                            <div class="form-group col-3">
                                                <select class="form-control" name="subcategory"
                                                    id="sub-category-dropdown">
                                                    <option value="">Select Sub-Category</option>
                                                </select>
                                            </div>
                                            <div class="form-group col-3">
                                                <select class="form-control" name="subsubcategory"
                                                    id="sub-sub-category-dropdown">
                                                    <option value="">Select Sub Sub Category</option>
                                                    <option value="0">None</option>
                                                </select>
                                            </div>
                                            <div class="form-group col-3">
                                                <input type="text" class="form-control" id="exampleInputproductcode"
                                                    placeholder="Enter Product Code" name="productcode" required>
                                            </div>
                                            <div class="form-group col-3">
                                                <input type="text" class="form-control"
                                                    placeholder="Enter Product Price" id="productprice"
                                                    name="productprice">
                                            </div>
                                            <div class="form-group col-3">
                                                <input type="text" class="form-control"
                                                    placeholder="Enter Product Discount" id="discountt"
                                                    name="discount1">
                                            </div>
                                            <div class="form-group col-3">
                                                <input type="text" class="form-control"
                                                    placeholder="Enter Product Discount Price"
                                                    id="productdiscountprice1" name="productdiscountprice">
                                            </div>
                                            <!-- <div class="form-group col-12">
                                                <label for="exampleInputcname">Product Details:</label>
                                                <textarea id="content" name="content" class="form-control" rows="6"
                                                    required></textarea>
                                            </div> -->
                                            <div class="form-group col-12">
                                                <input type="text" class="form-control"
                                                    placeholder="Enter Product Details" id="productdetaill"
                                                    name="product_detail">
                                            </div>
                                            <div class="form-group col-3">
                                                <label for="image">Product Image1:</label>
                                                <input type="file" name="image1" class="form-control"
                                                    placeholder="image" accept="image/jpeg, image/jpg, image/png"
                                                    onchange="document.getElementById('image15').src = window.URL.createObjectURL(this.files[0])">
                                                <img id="image15" src="dist/img/noimage1.png" alt="image" width="50"
                                                    height="50" />
                                            </div>
                                            <div class="form-group col-3">
                                                <label for="image">Product Image2:</label>
                                                <input type="file" name="image2" class="form-control"
                                                    placeholder="image" accept="image/jpeg, image/jpg, image/png"
                                                    onchange="document.getElementById('image16').src = window.URL.createObjectURL(this.files[0])">
                                                <img id="image16" src="dist/img/noimage1.png" alt="image" width="50"
                                                    height="50" />
                                            </div>
                                            <div class="form-group col-3">
                                                <label for="image">Product Image3:</label>
                                                <input type="file" name="image3" class="form-control"
                                                    placeholder="image" accept="image/jpeg, image/jpg, image/png"
                                                    onchange="document.getElementById('image17').src = window.URL.createObjectURL(this.files[0])">
                                                <img id="image17" src="dist/img/noimage1.png" alt="image" width="50"
                                                    height="50" />
                                            </div>
                                            <div class="form-group col-3">
                                                <label for="image">Product Image4:</label>
                                                <input type="file" name="image4" class="form-control"
                                                    placeholder="image" accept="image/jpeg, image/jpg, image/png"
                                                    onchange="document.getElementById('image18').src = window.URL.createObjectURL(this.files[0])">
                                                <img id="image18" src="dist/img/noimage1.png" alt="image" width="50"
                                                    height="50" />
                                            </div>
                                            <div class="form-group col-4">
                                                <label>Video 5:</label>
                                                <input type="file" name="video5" class="form-control" accept="video/mp4"
                                                    onchange="previewVideo5(this)">
                                                <video id="video19" width="100" height="70" controls
                                                    style="display:none;"></video>
                                            </div>
                                            <div class="form-group col-4">
                                                <label for="text">Type:</label>
                                                <div class="checkbox-container">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" id="pro_neww"
                                                            name="pro_new" value="1">
                                                        <label class="form-check-label"
                                                            for="featured_product">New</label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox"
                                                            id="pro_premiumm" name="pro_premium" value="1">
                                                        <label class="form-check-label" for="topselling">Premium</label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" id="pro_hott"
                                                            name="pro_hot" value="1">
                                                        <label class="form-check-label" for="popularproduct">Hot</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group col-3">
                                                <input type="text" class="form-control"
                                                    placeholder="Enter Product Fabric" id="fabricc" name="fabric">
                                            </div>
                                            <div class="form-group col-3">
                                                <input type="text" class="form-control" placeholder="Blouse"
                                                    id="blousree" name="blouse">
                                            </div>
                                            <div class="form-group col-3">
                                                <input type="text" class="form-control" placeholder="Care" id="caree"
                                                    name="care">
                                            </div>
                                            <div class="form-group col-3">
                                                <input type="text" class="form-control" placeholder="Dimensions"
                                                    id="dimensionnss" name="dimension">
                                            </div>
                                            <div class="form-group col-3">
                                                <input type="text" class="form-control" placeholder="Available Offers"
                                                    id="aveable_offer" name="ava_offerr">
                                            </div>
                                            <div class="form-group col-3">
                                                <input type="text" class="form-control" placeholder="About Item"
                                                    id="abou_itm" name="about_item">
                                            </div>
                                            <div class="form-group col-3">
                                                <input type="text" class="form-control" placeholder="Size" id="sizee"
                                                    name="size">
                                            </div>
                                            <div class="form-group col-3">
                                                <input type="text" class="form-control" placeholder="Under Price"
                                                    id="un_pricee" name="under_price">
                                            </div>
                                            <div class="form-group col-3">
                                                <input type="text" class="form-control" placeholder="Color" id="colorr"
                                                    name="color">
                                            </div>
                                            <div class="form-group col-3">
                                                <input type="text" class="form-control" placeholder="Stock" id="stockk"
                                                    name="stock">
                                            </div>
                                            <div class="form-group col-3">
                                                <input type="text" class="form-control" placeholder="Manufacture"
                                                    id="manufacturee" name="manufacture">
                                            </div>
                                            <div class="form-group col-3">
                                                <input type="text" class="form-control" placeholder="Packer"
                                                    id="packerr" name="packer">
                                            </div>
                                            <div class="form-group col-3">
                                                <input type="text" class="form-control" placeholder="Item Weight"
                                                    id="item_weightt" name="item_weight">
                                            </div>
                                            <div class="form-group col-3">
                                                <input type="text" class="form-control" placeholder="Net Quentity"
                                                    id="net_quenn" name="net_quentity">
                                            </div>
                                            <div class="form-group col-3">
                                                <input type="text" class="form-control" placeholder="Generic Name"
                                                    id="gen_nm" name="generic_nm">
                                            </div>
                                            <div class="form-group col-3">
                                                <input type="text" class="form-control" placeholder="Keywords"
                                                    id="keywordss" name="keyword">
                                            </div>
                                            <div class="form-group col-3">
                                                <input type="text" class="form-control" placeholder="Meta Description"
                                                    id="meta_descc" name="meta_desc">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-danger" id="closeModalBtn"
                                            data-dismiss="modal">Close</button>
                                        <button type="submit" name="product_update" class="btn btn-success">Add</button>
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
    if (isset($_POST['product_update'])) {
        include 'conn.php';
        // Function to handle file uploads
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
        $upload_dir = "upload/product/";
        // Handle image uploads
        $new_file_name1 = handleFileUpload('image1', $upload_dir);
        $new_file_name2 = handleFileUpload('image2', $upload_dir);
        $new_file_name3 = handleFileUpload('image3', $upload_dir);
        $new_file_name4 = handleFileUpload('image4', $upload_dir);


        // Sanitize inputs
        $productname = htmlspecialchars($conn->real_escape_string($_POST["productname"]));
        $descc1 = htmlspecialchars($conn->real_escape_string($_POST["descc1"]));
        $ratingss = htmlspecialchars($conn->real_escape_string($_POST["ratingss"]));
        $reviewss = htmlspecialchars($conn->real_escape_string($_POST["reviewss"]));
        $category = $conn->real_escape_string($_POST["category"]);
        $category = $conn->real_escape_string($_POST["category"]);
        $subcategory = $conn->real_escape_string($_POST["subcategory"]);
        $subsubcategory = $conn->real_escape_string($_POST["subsubcategory"]);

        $productcode = $conn->real_escape_string($_POST["productcode"]);
        $productprice = $conn->real_escape_string($_POST["productprice"]);
        $discount1 = $conn->real_escape_string($_POST["discount1"]);
        $productdiscountprice = $conn->real_escape_string($_POST["productdiscountprice"]);
        $product_detail = $conn->real_escape_string($_POST["product_detail"]);

        $pro_new = isset($_POST["pro_new"]) ? $_POST["pro_new"] : 0;
        $pro_premium = isset($_POST["pro_premium"]) ? $_POST["pro_premium"] : 0;
        $pro_hot = isset($_POST["pro_hot"]) ? $_POST["pro_hot"] : 0;

        $fabric = $conn->real_escape_string($_POST["fabric"]);
        $blouse = $conn->real_escape_string($_POST["blouse"]);
        $care = $conn->real_escape_string($_POST["care"]);
        $dimension = $conn->real_escape_string($_POST["dimension"]);
        $ava_offerr = $conn->real_escape_string($_POST["ava_offerr"]);
        $about_item = $conn->real_escape_string($_POST["about_item"]);
        $size = $conn->real_escape_string($_POST["size"]);
        $under_price = $conn->real_escape_string($_POST["under_price"]);
        $color = $conn->real_escape_string($_POST["color"]);
        $stock = $conn->real_escape_string($_POST["stock"]);
        $manufacture = $conn->real_escape_string($_POST["manufacture"]);
        $packer = $conn->real_escape_string($_POST["packer"]);
        $item_weight = $conn->real_escape_string($_POST["item_weight"]);
        $net_quentity = $conn->real_escape_string($_POST["net_quentity"]);
        $generic_nm = $conn->real_escape_string($_POST["generic_nm"]);


        $keywords = $conn->real_escape_string($_POST["keyword"]);
        $metadescription = $conn->real_escape_string($_POST["meta_desc"]);

        // Insert into database
        $sql = "INSERT INTO product (pro_name, product_short_nm, rating, review, category_id, sub_category_id, sub_subcategory_id, product_code, product_price, pro_discount, product_discount_price, pro_details, neww, premiumm, hott, fabric, blousee, caree, dimenn, ave_offer, about_item, sizee, pricee, colorr, stockk, manuufacturee, packer, item_weight, net_quentity, generic_nm, keywordss, meta_desc, product_image1, product_image2, product_image3, product_image4, status) 
            VALUES ('$productname', '$descc1', '$ratingss', '$reviewss', '$category', '$subcategory', '$subsubcategory', '$productcode', '$productprice', '$discount1', '$productdiscountprice', '$product_detail', '$pro_new', '$pro_premium', '$pro_hot', '$fabric', '$blouse', '$care', '$dimension', '$ava_offerr', '$about_item', '$size', '$under_price', '$color', '$stock', '$manufacture', '$packer', '$item_weight', '$net_quentity', '$generic_nm', '$keywords', '$metadescription','$new_file_name1','$new_file_name2','$new_file_name3','$new_file_name4','1')";

        if ($conn->query($sql) === true) {
            echo "<script>
                $(document).ready(function(){
                    toastr.success('Product added successfully');
                    setTimeout(function(){
                        window.location.href = 'product';
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

        //for keywords
        (function () {
            "use strict"
            var TagsInput = function (opts) {
                this.options = Object.assign(TagsInput.defaults, opts);
                this.init();
            }
            TagsInput.prototype.init = function (opts) {
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

                this.initialized = true;
                return this;
            }
            // Add Tags
            TagsInput.prototype.addTag = function (string) {

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
                closeIcon.addEventListener('click', function (e) {
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
            TagsInput.prototype.deleteTag = function (tag, i) {
                tag.remove();
                this.arr.splice(i, 1);
                this.orignal_input.value = this.arr.join(',');
                return this;
            }

            // Make sure input string have no error with the plugin
            TagsInput.prototype.anyErrors = function (string) {
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
            TagsInput.prototype.addData = function (array) {
                var plugin = this;

                array.forEach(function (string) {
                    plugin.addTag(string);
                })
                return this;
            }

            // Get the Input String
            TagsInput.prototype.getInputString = function () {
                return this.arr.join(',');
            }


            // destroy the plugin
            TagsInput.prototype.destroy = function () {
                this.orignal_input.removeAttribute('hidden');

                delete this.orignal_input;
                var self = this;

                Object.keys(this).forEach(function (key) {
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
                tags.wrapper.addEventListener('click', function () {
                    tags.input.focus();
                });
                tags.input.addEventListener('keydown', function (e) {
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
<?php include 'common/footer.php'; ?>
<!-- for catalogue dropdown -->
<script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
<script>

</script>

</html>