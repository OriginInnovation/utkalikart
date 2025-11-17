<?php if (!empty($row3['product_price'])) { ?>
    <span class="wl-price">₹<?php echo $row3['product_discount_price']; ?></span>
    <span class="wl-price-original">₹<?php echo $row3['product_price']; ?></span>
<?php } else { ?>
    <span class="wl-price">₹<?php echo $row3['product_discount_price']; ?></span>
<?php } ?>



<?php
include 'admin/conn.php';
$sql5 = "SELECT * FROM product WHERE popul_pro='1'";
$result5 = $conn->query($sql5);
while ($row5 = $result5->fetch_assoc()) {
    ?>

<?php } ?>