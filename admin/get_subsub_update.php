<?php
include 'conn.php';
$category_id = $_POST["subcategory_id"];
$result = mysqli_query($conn, "SELECT * FROM sub_subcategory WHERE sub_category_id = $category_id");
$options = '<option value="">Select sub Sub Category</option>';
while ($row = mysqli_fetch_array($result)) {
    $options .= '<option value="' . $row["id"] . '">' . $row["sub_subcategoryname"] . '</option>';
}
echo $options;
?>