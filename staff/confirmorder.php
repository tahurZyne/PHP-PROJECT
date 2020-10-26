<?php
include('../staff_session.php');
$id = $_GET["id"];
mysqli_query($conn, "UPDATE `order` SET order_status=1 WHERE `orderid` = $id");
?>
<script>
    window.alert("Order Confirmed successful");
    window.history.back();
</script>