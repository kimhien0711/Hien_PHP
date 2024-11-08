<div class="container">
    <div class="banner wow lightSpeedIn">
        <div class="row">
            <?php
            error_reporting(0);
                require_once("model/connect.php");
                $sql = "SELECT image FROM slides WHERE status=2";
                $result = mysqli_query($conn,$sql);
                
                while ($kq = mysqli_fetch_assoc($result)) {
                    
            ?>                        
                    <div class="col-md-3 col-sm-4">
                        <div class="thumbnail">
                            <div class="banner">
                                <img src= "<?php echo $kq['image']; ?>" alt="Generic placeholder thumbnail" width="100%" height="160">
                            </div>
                        </div>
                    </div>
                <?php } ?>
        </div>
    </div>
</div>
<link rel="stylesheet" href="./">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.theme.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="wow.min.js"></script>