<?php 
    session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include './boot.php' ?>
    <style>
    .products::-webkit-scrollbar {
        width: 0;
        height: 0;

    }
    </style>
</head>

<body>

    <div class="underlay position-fixed top-0 min-vh-100 w-100">
        <div class="sidebar col-md-5 col-6 position-relative min-vh-100 bg-white">
            <i class="bi bi-x-lg close-sidebar position-absolute" style="left:10px;top:20px"></i>
            <img src="https://techhunk.pk/cdn/shop/files/logo.svg?v=1756199596&width=180" class="mx-auto d-block py-4"
                alt="">
            <hr class="border-secondary">
            <ul class="list-unstyled fw-semibold">
                <li class="px-3">Smart Watches</li>
                <hr class="border-secondary">
                <li class="px-3">Ear Buds</li>
                <hr class="border-secondary">
                <li class="px-3">Projectors</li>
                <hr class="border-secondary">
                <li class="px-3">Tech Essentials</li>
                <hr class="border-secondary">
                <li class="px-3">Help</li>
                <hr class="border-secondary">
                <li class="px-3">Support</li>
                <hr class="border-secondary">
                <li class="px-3">Track Your Order</li>
                <hr class="border-secondary">
                <li class="d-flex px-3 gap-4">
                    <a href="https://www.youtube.com" class="text-decoration-none" target="_blank">

                        <i class="bi bi-instagram text-dark  rounded-circle border d-flex justify-content-center align-items-center"
                            style="width:40px;height:40px;"></i>
                    </a>
                    <i class="bi bi-youtube rounded-circle border d-flex justify-content-center align-items-center"
                        style="width:40px;height:40px;"></i>
                    <i class="bi bi-facebook rounded-circle border d-flex justify-content-center align-items-center"
                        style="width:40px;height:40px;"></i>
                </li>

            </ul>
        </div>
    </div>

    <div class="container-fluid position-relative p-0">

        <?php include './navbar.php' ?>

        <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active" style="height:80vh">
                    <img width="100%" height="100%"
                        src="https://techhunk.pk/cdn/shop/files/gen_3ookppc_11zon.webp?v=1757525647&width=3840"
                        class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item" style="height:80vh">
                    <img width="100%" height="100%"
                        src="https://techhunk.pk/cdn/shop/files/gen_3_pcok_11zon.webp?v=1757521393&width=3840"
                        class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item" style="height:80vh">
                    <img width="100%" height="100%"
                        src="https://techhunk.pk/cdn/shop/files/gen3blackout_8_11zon.webp?v=1756931012&width=1600"
                        class="d-block w-100 object-fit-cover" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>


    <?php include './arrivals.php' ?>



    <!-- products -->

    <div class="container  position-relative ">
        <i class="bi bi-chevron-left  product-chevron top-50 left shadow-lg z-3 rounded-circle d-flex justify-content-center align-items-center fs-5"
            style="left:-2px;"></i>
        <i class="bi bi-chevron-right product-chevron right shadow-lg z-3 rounded-circle d-flex justify-content-center align-items-center  fs-5"
            style="right:0px;top:50%;"></i>
        <div class="d-flex gap-4 products  overflow-x-scroll my-5">

            <?php 
                include './config.php';
                $products = "SELECT * FROM products";
                $result = mysqli_query($connection,$products);
                foreach($result as $row){
            ?>

            <div class="card flex-shrink-0 p-2 border border-dark rounded-4" style="width:300px">
                <div class="d-flex flex-shrink-0 h-100 flex-column justify-content-between">
                    <img src="./product_images/<?php echo $row['image'] ?>" width="100%" alt="">
                    <h5 class="m-0 mt-3">
                        <?php echo $row['name'] ?>
                    </h5>
                    <p class="m-0 text-secondary prod-desc" style="font-size:0.85rem">
                        <?php echo $row['description'] ?>
                    </p>
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="">
                            ⭐⭐⭐⭐ <span class="fw-bold">4.8</span>
                        </div>
                        <div class="rounded-circle"
                            style="width: 10px;height:10px;background:<?php echo $row['color'] ?>"></div>
                    </div>
                    <div class="d-flex justify-content-between w-100 align-items-center">
                        <h5>Rs. <?php echo $row['discount_price'] ?></h5>
                        <a href="./single-product.php?data=<?php echo urlencode(json_encode($row)) ?>"
                            class="btn text-decoration-none fw-semibold text-primary">
                            Buy Now
                        </a>
                    </div>
                </div>
            </div>

            <?php 
                }
            ?>

        </div>
    </div>






</body>


</html>