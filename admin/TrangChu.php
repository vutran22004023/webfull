<?php
require '../admin/header.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Fashion MyLiShop</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="title" content="Fashion MyLiShop - fashion mylishop" />
    <meta name="description" content="Fashion MyLiShop - fashion mylishop" />
    <meta name="keywords" content="Fashion MyLiShop - fashion mylishop" />
    <meta name="author" content="Hôih My" />
    <meta name="author" content="Y Blir" />
    <link rel="icon" type="image/png" href="images/logohong.png">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

</head>

<body>
    <!-- button top -->
    <!-- <a href="#" class="back-to-top"><i class="fa fa-arrow-up"></i></a> -->

    <!-- background -->
    <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <?php
            $sql = "SELECT image FROM slides WHERE status=1";
            $result = mysqli_query($conn, $sql);
            $index = 1;
            while ($row = mysqli_fetch_assoc($result)) {
                if ($index == 1) {
                    ?>
                    <div class="carousel-item active" data-bs-interval="3000">
                        <img class="d-block banner-img" src="<?php echo $row['image']; ?>" alt="">
                    </div>
                    <?php $index++;
                } else { ?>
                    <div class="carousel-item" data-bs-interval="3000">
                        <img class="d-block banner-img" src="<?php echo $row['image']; ?>" alt="">
                    </div>
                <?php } ?>

            <?php } ?>
        </div>
    </div>

    <div class="main">
        <!-- Content -->
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="product-main">

                        <!-- sản phẩm mới -->
                        <div class="title-product-main d-inline-block m-2 p-2">
                            <h3 class="section-title m-0">Sản phẩm mới</h3>
                        </div>
                        <div class="content-product-main">
                            <div class="row row-gap-3">
                                <?php
                                $sql = "SELECT id,image,name,price FROM products WHERE category_id=3 AND status = 0";
                                $result = mysqli_query($conn, $sql);

                                while ($kq = mysqli_fetch_assoc($result)) {

                                    ?>
                                    <div class="col-md-3 col-sm-6 text-center">
                                        <div class="thumbnail pb-2">
                                            <div class="hoverimage1">
                                                <img src="<?php echo $kq['image']; ?>" alt="Generic placeholder thumbnail"
                                                    width="100%" height="300">
                                            </div>
                                            <div class="name-product">
                                                <?php echo $kq['name']; ?>
                                            </div>
                                            <div class="price text-danger fw-medium mb-2">
                                                Giá:
                                                <?php echo $kq['price']; ?><sup> đ</sup>
                                            </div>
                                            <div class="product-info">
                                                <a href="addcart.php?id=<?php echo $kq['id']; ?>">
                                                    <button type="button" class="btn btn-primary btn-sm">
                                                        <label style="color: red;">&hearts;</label> Mua hàng <label
                                                            style="color: red;">&hearts;</label>
                                                    </button>
                                                </a>
                                                <a href="detail.php?id=<?php echo $kq['id']; ?>">
                                                    <button type="button" class="btn btn-primary btn-sm">
                                                        <label style="color: red;">&hearts;</label> Chi Tiết <label
                                                            style="color: red;">&hearts;</label>
                                                    </button>
                                                </a>
                                            </div><!-- /product-info -->
                                        </div><!-- /thumbnail -->
                                    </div><!-- /col -->
                                <?php } ?>
                            </div><!-- /row -->
                        </div><!-- /sản phẩm mới -->

                        <!-- Thời Trang Nam -->
                        <div class="title-product-main d-inline-block m-2 p-2">
                            <h3 class="section-title m-0">Thời Trang Nam</h3>
                        </div>
                        <div class="content-product-main">
                            <div class="row row-gap-3">
                                <?php
                                $sql = "SELECT id,image,name,price FROM products WHERE category_id=1 LIMIT 8";
                                $result = mysqli_query($conn, $sql);

                                while ($kq = mysqli_fetch_assoc($result)) {

                                    ?>
                                    <div class="col-md-3 col-sm-6 text-center">
                                        <div class="thumbnail pb-2">
                                            <div class="hoverimage1">
                                                <img src="<?php echo $kq['image']; ?>" alt="Generic placeholder thumbnail"
                                                    width="100%" height="300">
                                            </div>
                                            <div class="name-product">
                                                <?php echo $kq['name']; ?>
                                            </div>
                                            <div class="price text-danger fw-medium mb-2">
                                                Giá:
                                                <?php echo $kq['price']; ?><sup> đ</sup>
                                            </div>
                                            <div class="product-info">
                                                <a href="addcart.php?id=<?php echo $kq['id']; ?>">
                                                    <button type="button" class="btn btn-primary btn-sm">
                                                        <label style="color: red;">&hearts;</label> Mua hàng <label
                                                            style="color: red;">&hearts;</label>
                                                    </button>
                                                </a>
                                                <a href="detail.php?id=<?php echo $kq['id'] ?>">
                                                    <button type="button" class="btn btn-primary btn-sm">
                                                        <label style="color: red;">&hearts;</label> Chi Tiết <label
                                                            style="color: red;">&hearts;</label>
                                                    </button>
                                                </a>
                                            </div><!-- /product-info -->
                                        </div><!-- /thumbnail -->
                                    </div><!-- /col -->
                                <?php } ?>
                            </div><!-- /row -->
                        </div><!-- /Thời Trang Nam -->

                        <!-- Thời Trang Nữ -->
                        <div class="title-product-main d-inline-block m-2 p-2">
                            <h3 class="section-title m-0">Thời Trang Nữ</h3>
                        </div>
                        <div class="content-product-main">
                            <div class="row row-gap-3">
                                <?php
                                $sql = "SELECT id,image,name,price FROM products WHERE category_id=2 LIMIT 8";
                                $result = mysqli_query($conn, $sql);

                                while ($kq = mysqli_fetch_assoc($result)) {

                                    ?>
                                    <div class="col-md-3 col-sm-6 text-center">
                                        <div class="thumbnail pb-2">
                                            <div class="hoverimage1">
                                                <img src="<?php echo $kq['image']; ?>" alt="Generic placeholder thumbnail"
                                                    width="100%" height="300">
                                            </div>
                                            <div class="name-product">
                                                <?php echo $kq['name']; ?>
                                            </div>
                                            <div class="price text-danger fw-medium mb-2">
                                                Giá:
                                                <?php echo $kq['price']; ?><sup> đ</sup>
                                            </div>
                                            <div class="product-info">
                                                <a href="addcart.php?id=<?php echo $kq['id']; ?>">
                                                    <button type="button" class="btn btn-primary btn-sm">
                                                        <label style="color: red;">&hearts;</label> Mua hàng <label
                                                            style="color: red;">&hearts;</label>
                                                    </button>
                                                </a>
                                                <a href="detail.php?id=<?php echo $kq['id'] ?>">
                                                    <button type="button" class="btn btn-primary btn-sm">
                                                        <label style="color: red;">&hearts;</label> Chi Tiết <label
                                                            style="color: red;">&hearts;</label>
                                                    </button>
                                                </a>
                                            </div><!-- /product-info -->
                                        </div><!-- /thumbnail -->
                                    </div><!-- /col -->
                                <?php } ?>
                            </div><!-- /row -->
                        </div><!-- /Thời Trang Nữ -->

                    </div> <!-- /product-main -->
                </div> <!-- /col -->

            </div><!-- /row -->
        </div><!-- /container -->
    </div>
    <!-- /main -->

    <style>
        .banner-img {
            width: 100%;
            height: 600px;
            object-fit: contain;
        }

        .product-info {
            display: flex;
            justify-content: space-around;
        }

        .thumbnail {
            border: solid 1px #ccc;
            border-radius: 5px;
            overflow: hidden;
        }

        .btn {
            border-radius: 20px;
        }

        .title-product-main {
            border-radius: 10px 0;
            background-color: gold;
            color: white;
        }
    </style>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js" charset="utf-8"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
        crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://forum.vietdesigner.net/data/codes/snowstorm.js"></script>
</body>

</html>