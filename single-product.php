<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include './boot.php' ?>
    <style>
    body {
        font-family: Arial, sans-serif;
    }

    .product-img {
        max-width: 100%;
        border-radius: 10px;
        height: 500px;
        object-fit: cover;
    }

    .price {
        font-size: 1.5rem;
        color: #222;
        font-weight: bold;
    }

    .old-price {
        text-decoration: line-through;
        color: gray;
        margin-left: 10px;
    }

    .discount {
        color: white;
        background: #0d6efd;
        padding: 5px 10px;
        border-radius: 5px;
        font-size: 0.9rem;
    }

    .spec-icon {
        font-size: 1.5rem;
        margin-right: 10px;
        color: #0d6efd;
    }

    .faq-question {
        cursor: pointer;
    }

    .footer {
        background: #0d1b3d;
        color: white;
        padding: 30px 0;
    }

    .sale {
        background-color: #142343;
        padding: 10px;
        border-radius: 10px;
        color: white;
        position: relative;
        overflow: hidden;

    }

    .sale::before {
        content: '';
        top: 0;
        left: 0;
        background: linear-gradient(to right, gray, white);
        height: 100%;
        width: 15%;
        position: absolute;
        animation: move 2s linear infinite;
        filter: blur(25px);
        /* z-index: -1; */
        transition: all 0.7s;
    }


    @keyframes move {
        from {
            left: -15%;
        }

        to {
            left: 100%
        }
    }
    </style>
</head>

<body>


    <?php 
        $data = $_GET['data'];
        $product_data = json_decode($data);
    ?>



    <!-- Navbar -->
    <?php include './dark-navbar.php' ?>

    <!-- Product Section -->
    <div class="container my-5">
        <div class="row g-4 align-items-center">
            <!-- Left Side Images -->
            <div class="col-md-6">
                <img src="./product_images/<?php echo $product_data->image ?>" class="product-img mb-3"
                    alt="Smartwatch">
                <div class="d-flex gap-2">
                    <img src="https://via.placeholder.com/100" class="img-thumbnail" alt="">
                    <img src="https://via.placeholder.com/100" class="img-thumbnail" alt="">
                    <img src="https://via.placeholder.com/100" class="img-thumbnail" alt="">
                </div>
            </div>
            <!-- Right Side Product Info -->
            <div class="col-md-6">
                <h2> <?php echo $product_data->name ?> </h2>
                <p><span class="discount"></span>
                    <span class="price">Rs.
                        <span class="discounted_price"><?php echo $product_data->discount_price ?></span></span> <span
                        class="old-price">Rs.
                        <span class="actual_price"><?php echo $product_data->price ?></span>
                </p>
                <div class="sale my-2 d-flex justify-content-between">
                    <h6 class="m-0 position-relative z-3"><span class="discount bg-transparent fw-bold"></span> OFF</h6>
                    <p class="m-0 position-relative z-3">Sale ending soon ⏰</p>
                    <div class="timer position-relative z-3 d-flex gap-2">
                        <h6 class="m-0">00h</h6>
                        <h6 class="m-0">40m</h6>
                        <h6 class="m-0">60s</h6>
                    </div>
                </div>
                <div class="input-group mb-3" style="max-width:150px;">
                    <button class="btn btn-outline-secondary rounded-start-pill sub" type="button">
                        <i class="bi bi-dash"></i>

                    </button>
                    <input type="text" class="form-control text-center quantity" value="1">
                    <button class="btn btn-outline-secondary rounded-end-pill add" type="button">
                        <i class="bi bi-plus "></i>
                    </button>
                </div>
                <button class="btn btn-outline-dark w-100 mb-2 rounded-pill p-3">Add to Cart</button>
                <button style="background-color: #0d1b3d;" class="btn text-white w-100 rounded-pill p-3">Buy it
                    Now</button>

                <!-- login offer -->

                <h6 class="text-secondary-emphasis my-3">
                    Login to avail 10% more discount <a href="./register.php"
                        class="text-primary text-decoration-none">Login</a>
                </h6>

                <p class="text-secondary">
                    if you login this <?php echo $product_data->name ?> will cost you <span
                        class="further-discount"></span>
                </p>




            </div>
        </div>
    </div>

    <!-- Specs Tabs -->
    <div class="container my-5">
        <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item" role="presentation"><button class="nav-link active" data-bs-toggle="tab"
                    data-bs-target="#specs" type="button">Specs</button></li>
            <li class="nav-item" role="presentation"><button class="nav-link" data-bs-toggle="tab" data-bs-target="#faq"
                    type="button">FAQ</button></li>
        </ul>
        <div class="tab-content border p-4" id="myTabContent">
            <!-- Specs Content -->
            <div class="tab-pane fade show active" id="specs">
                <h5>Design & Appearance</h5>
                <p>Premium Square Titanium-Finish Body with 3 straps, IP68 Water Resistant.</p>
                <h5>Display</h5>
                <p>2.18” Super AMOLED, 90Hz refresh, 485x520 resolution.</p>
                <h5>Battery</h5>
                <p>450mAh, 2-3 days normal use, up to 7 days standby.</p>
            </div>
            <!-- FAQ Content -->
            <div class="tab-pane fade" id="faq">
                <div class="accordion" id="faqAccordion">
                    <div class="accordion-item">
                        <h2 class="accordion-header"><button class="accordion-button" data-bs-toggle="collapse"
                                data-bs-target="#q1">What sets this apart from other models?</button></h2>
                        <div id="q1" class="accordion-collapse collapse show" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">It offers AI watch faces, translator, NFC, and premium titanium
                                body.</div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header"><button class="accordion-button collapsed"
                                data-bs-toggle="collapse" data-bs-target="#q2">Does it support AI features?</button>
                        </h2>
                        <div id="q2" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">Yes, including AI-generated watch faces and translator.</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <!-- Footer -->
    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h5>SHOP</h5>
                    <p>Earbuds | Smart Watches | Projectors | Accessories</p>
                </div>
                <div class="col-md-6">
                    <h5>HELP</h5>
                    <p>Support | Privacy Policy | Terms & Conditions</p>
                </div>
            </div>
            <div class="text-center mt-3">
                <p>&copy; 2025 Tech Hunk</p>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>


    <script>
    let quantity = document.querySelector('.quantity')
    let add = document.querySelector('.add')
    let sub = document.querySelector('.sub')
    let discount_text = document.querySelectorAll('.discount')
    let discounted_price = document.querySelector('.discounted_price')
    let actual_price = document.querySelector('.actual_price')
    let more_discount = document.querySelector('.further-discount')

    let discountPercentage = ((actual_price.innerHTML - discounted_price.innerHTML) / actual_price.innerHTML) * 100

    discount_text.forEach((item, index) => {
        item.innerHTML = `${discountPercentage.toFixed(2)}%`
    })


    let more_discount_price = discounted_price.innerHTML - ((10 / 100) * discounted_price.innerHTML)

    more_discount.innerHTML = `Rs. ${more_discount_price}`

    let num = 1

    add.addEventListener('click', () => {
        num++
        quantity.value = num
    })
    sub.addEventListener('click', () => {
        num--
        if (num < 1) {
            num = 1
        }
        quantity.value = num
    })
    </script>





</body>

</html>