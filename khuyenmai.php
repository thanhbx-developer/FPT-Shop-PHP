<?php
include_once("header.php");
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="row" style="padding: 0 15px;">
                    <?php
                    foreach (selectDb("SELECT * FROM products ORDER BY views DESC LIMIT 0,4") as $row) {
                    ?>
                        <div class="col-md-3" id="prdSmall">
                            <div class="col-md-12" style="padding: 0px;">
                                <div class="col-md-12" style="padding: 0px;">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <a href="#"><img src="public/images/Product/<?= $row['image'] ?>" alt="" style="padding: 15px 0;"></a>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12" style="padding-bottom: 15px;">
                                            <b>
                                                <h4 style="font-weight: bold;"><?= $row['name'] ?></h4>
                                            </b>
                                            <span style="margin-right: 20px; background-color: #ce180d; border-radius: 25px; color: white; font-size: 16px; padding: 3px 15px;"><?= number_format($row['origin_price']) ?>đ</span>
                                            <span style="font-size: 14px; color: #888888;"><strike><?= number_format($row['price']) ?>đ</strike></span>
                                            <button style="margin-top: 20px; background-color: #ce180d; border: #ce180d; outline: none; " type="button" name="" id="" class="btn btn-primary" btn-lg btn-block">THÊM GIỎ HÀNG</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Prd Small -->
                    <?php
                    }
                    ?>
                </div>
            </div>
            <div class="carousel-item">
                <div class="row" style="padding: 0 15px;">
                    <?php
                    foreach (selectDb("SELECT * FROM products ORDER BY views DESC LIMIT 4,7") as $row) {
                    ?>
                        <div class="col-md-3" id="prdSmall">
                            <div class="col-md-12" style="padding: 0px;">
                                <div class="col-md-12" style="padding: 0px;">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <a href="#"><img src="public/images/Product/<?= $row['image'] ?>" alt="" style="padding: 15px 0;"></a>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12" style="padding-bottom: 15px;">
                                            <b>
                                                <h4 style="font-weight: bold;"><?= $row['name'] ?></h4>
                                            </b>
                                            <span style="margin-right: 20px; background-color: #ce180d; border-radius: 25px; color: white; font-size: 16px; padding: 3px 15px;"><?= number_format($row['origin_price']) ?>đ</span>
                                            <span style="font-size: 14px; color: #888888;"><strike><?= number_format($row['price']) ?>đ</strike></span>
                                            <button style="margin-top: 20px; background-color: #ce180d; border: #ce180d; outline: none; " type="button" name="" id="" class="btn btn-primary" btn-lg btn-block">THÊM GIỎ HÀNG</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Prd Small -->
                    <?php
                    }
                    ?>
                </div>
            </div>
            <div class="carousel-item">
                <div class="row" style="padding: 0 15px;">
                    <?php
                    foreach (selectDb("SELECT * FROM products ORDER BY views DESC LIMIT 7,11") as $row) {
                    ?>
                        <div class="col-md-3" id="prdSmall">
                            <div class="col-md-12" style="padding: 0px;">
                                <div class="col-md-12" style="padding: 0px;">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <a href="#"><img src="public/images/Product/<?= $row['image'] ?>" alt="" style="padding: 15px 0;"></a>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12" style="padding-bottom: 15px;">
                                            <b>
                                                <h4 style="font-weight: bold;"><?= $row['name'] ?></h4>
                                            </b>
                                            <span style="margin-right: 20px; background-color: #ce180d; border-radius: 25px; color: white; font-size: 16px; padding: 3px 15px;"><?= number_format($row['origin_price']) ?>đ</span>
                                            <span style="font-size: 14px; color: #888888;"><strike><?= number_format($row['price']) ?>đ</strike></span>
                                            <button style="margin-top: 20px; background-color: #ce180d; border: #ce180d; outline: none; " type="button" name="" id="" class="btn btn-primary" btn-lg btn-block">THÊM GIỎ HÀNG</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Prd Small -->
                    <?php
                    }
                    ?>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>