<?php
    error_reporting(E_DEPRECATED);
    require_once'../model/connect.php';
    error_reporting(2);

    //xóa sản phẩm thei id
    if (isset($GET['idProducts'])) {
        $idProduct = $GET['idProducts'];
        $sql = 'DELETE FROM products WHERE id = ' . $idProduct;
        $result = mysqli_query($conn,$sql);
        if ($result){
?>
    <script type="text/javascript">
        window.location = 'product-list.php?ps=success';
    </script>
<?php
        } else {
?>
    <script type="text/javascript">
        window.location = 'product-list.php?pf=fail';
    </script>
<?php
        }
    }
?>
