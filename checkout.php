<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous">
    </script>
    <link rel="shortcut icon" href="https://techhunk.pk/cdn/shop/files/logo.svg?v=1756199596&width=180"
        type="image/x-icon">
    <link rel="stylesheet" href="./styles.css">
    <title>TechHike</title>
</head>

<body style="overflow-x: hidden;">

    <?php
        include './dark-navbar.php';
        $data = $_GET['data'];
        $product_data = json_decode($data);
    ?>

    <div class="row" style="margin-top: 5rem;">
        <div class="col-lg-6 bg-white border-end min-vh-100">
            <form action="./order.php" method="POST" class="col-xl-6 ms-auto col-md-7 col-11">
                <input type="hidden" name="product_info" value="<?php echo urlencode($data)?>">
                <div class="d-flex justify-content-between align-items-center">
                    <h6>Contact</h6>
                    <a style="font-size: 0.7rem;" href="./login.php" class="text-primary  ">
                        Sign In
                    </a>
                </div>
                <div class="input-div form-control p-2 position-relative">
                    <p class="text-secondary m-0 mb-2 position-absolute my-placeholder"
                        style="font-size: 0.7rem;top:50%;transform:translate(1px,-50%);pointer-events:none;transition:all 0.3s">
                        Email or mobile phone number</p>
                    <input style="font-size: 0.7rem;transition:all 0.3s;outline-width:0" type="text"
                        class="email-input bg-transparent border-0 w-100" name="contactEmail">
                </div>

                <h6 class="mt-4">Delivery</h6>
                <div class="input-div form-control p-2 position-relative">
                    <p class="text-secondary m-0 mb-2 position-absolute my-placeholder"
                        style="font-size: 0.7rem;top:50%;transform:translate(1px,-120%);pointer-events:none;transition:all 0.3s">
                        Country / Region
                    </p>
                    <select style="font-size: 0.7rem;transition:all 0.3s;outline-width:0" type="text"
                        class="email-input bg-transparent border-0 w-100 " name="country">
                        <option value="pakistan">
                            Pakistan
                        </option>
                    </select>
                </div>

                <div class="row">
                    <div class="col-sm-6">
                        <div class="input-div my-2 form-control p-2 position-relative">
                            <p class="text-secondary m-0 mb-2 position-absolute my-placeholder"
                                style="font-size: 0.7rem;top:50%;transform:translate(1px,-50%);pointer-events:none;transition:all 0.3s">
                                First name (optional)</p>
                            <input style="font-size: 0.7rem;transition:all 0.3s;outline-width:0" type="text"
                                class="email-input bg-transparent border-0 w-100" name="firstName">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="input-div my-2 form-control p-2 position-relative">
                            <p class="text-secondary m-0 mb-2 position-absolute my-placeholder"
                                style="font-size: 0.7rem;top:50%;transform:translate(1px,-50%);pointer-events:none;transition:all 0.3s">
                                Last name</p>
                            <input style="font-size: 0.7rem;transition:all 0.3s;outline-width:0" type="text"
                                class="email-input bg-transparent border-0 w-100" name="lastName" required>
                        </div>
                    </div>
                </div>

                <div class="input-div my-2 form-control p-2 position-relative">
                    <p class="text-secondary m-0 mb-2 position-absolute my-placeholder"
                        style="font-size: 0.7rem;top:50%;transform:translate(1px,-50%);pointer-events:none;transition:all 0.3s">
                        Address</p>
                    <input style="font-size: 0.7rem;transition:all 0.3s;outline-width:0" type="text"
                        class="email-input bg-transparent border-0 w-100" name="address">
                </div>

                <div class="row">
                    <div class="col-sm-6">
                        <div class="input-div my-2 form-control p-2 position-relative">
                            <p class="text-secondary m-0 mb-2 position-absolute my-placeholder"
                                style="font-size: 0.7rem;top:50%;transform:translate(1px,-50%);pointer-events:none;transition:all 0.3s">
                                City</p>
                            <input style="font-size: 0.7rem;transition:all 0.3s;outline-width:0" type="text"
                                class="email-input bg-transparent border-0 w-100" name="city">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="input-div my-2 form-control p-2 position-relative">
                            <p class="text-secondary m-0 mb-2 position-absolute my-placeholder"
                                style="font-size: 0.7rem;top:50%;transform:translate(1px,-50%);pointer-events:none;transition:all 0.3s">
                                Postal code (optional)</p>
                            <input style="font-size: 0.7rem;transition:all 0.3s;outline-width:0" type="text"
                                class="email-input bg-transparent border-0 w-100" name="postalCode">
                        </div>
                    </div>
                </div>

                <div class="input-div my-2 form-control p-2 position-relative">
                    <p class="text-secondary m-0 mb-2 position-absolute my-placeholder"
                        style="font-size: 0.7rem;top:50%;transform:translate(1px,-50%);pointer-events:none;transition:all 0.3s">
                        Phone</p>
                    <input style="font-size: 0.7rem;transition:all 0.3s;outline-width:0" type="tel"
                        class="email-input bg-transparent border-0 w-100" name="phone">
                </div>

                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="saveInfo" name="saveInfo">
                    <label class="form-check-label" for="saveInfo" style="font-size: 0.7rem;">Save this information
                        for next time</label>
                </div>

                <h6 class="mt-4">Shipping method</h6>
                <div class="input-div form-control p-2 position-relative">
                    <div class="form-check">
                        <input type="radio" class="form-check-input" id="freeShipping" name="shippingMethod" checked>
                        <label class="form-check-label" for="freeShipping" style="font-size: 0.7rem;">Free Shipping
                            <span class="badge bg-secondary">FREE</span></label>
                    </div>
                </div>

                <h6 class="mt-4">Payment</h6>
                <p style="font-size: 0.7rem;">All transactions are secure and encrypted.</p>
                <div class="input-div form-control p-2 position-relative">
                    <div class="form-check">
                        <input type="radio" class="form-check-input" id="cod" name="paymentMethod" checked>
                        <label class="form-check-label" for="cod" style="font-size: 0.7rem;">Cash on Delivery
                            (COD)</label>
                    </div>
                </div>

                <h6 class="mt-4">Billing address</h6>
                <div class="input-div form-control p-2 position-relative">
                    <div class="form-check">
                        <input type="radio" class="form-check-input" id="sameAddress" name="billingAddress" checked>
                        <label class="form-check-label" for="sameAddress" style="font-size: 0.7rem;">Same as
                            shipping address</label>
                    </div>
                    <div class="form-check">
                        <input type="radio" class="form-check-input" id="differentAddress" name="billingAddress">
                        <label class="form-check-label" for="differentAddress" style="font-size: 0.7rem;">Use a
                            different billing address</label>
                    </div>
                </div>

                <button type="submit" class="btn btn-primary w-100 mt-4" style="font-size: 0.7rem;">Complete
                    order</button>
            </form>
        </div>
        <div class="col-lg-6 bg-body-secondary min-vh-100">
            <div class="col-xl-6 py-5 col-md-7 col-11">
                <div class="d-flex align-items-center justify-content-between">
                    <div class="d-flex align-items-center  w-100 gap-1">
                        <img src="./product_images/<?php echo $product_data->image ?>" width="70px" height="70px"
                            alt="">
                        <div class="">
                            <h6 class="text-sm">
                                <?php echo $product_data->name ?>
                            </h6>
                        </div>
                    </div>
                    <p class="text-sm   w-25 text-end">Rs <?php echo $product_data->discount_price ?></p>
                </div>
                <div class="d-flex justify-content-between">
                    <p class="text-sm">Subtotal</p>
                    <p class="text-sm">Rs <?php echo $product_data->discount_price ?></p>
                </div>
                <div class="d-flex justify-content-between">
                    <p class="text-sm">Shipping</p>
                    <p class="text-sm">FREE</p>
                </div>
                <div class="d-flex align-items-center justify-content-between">
                    <h4 class="text-sm">Total</h4>
                    <h4 class="">
                        <span class="text-sm">PKR</span>
                        Rs <?php echo $product_data->discount_price ?>
                    </h4>
                </div>
            </div>
        </div>
    </div>

    <script>
    let email_input = document.querySelectorAll('.email-input')
    let my_placeholder = document.querySelectorAll('.my-placeholder')

    email_input.forEach((item, index) => {
        item.addEventListener('input', () => {
            if (item.value.length > 0) {
                my_placeholder[index].style.transform = 'translate(1px,-120%)'
                item.style.transform = 'translateY(5px)'
            } else {
                my_placeholder[index].style.transform = 'translate(1px,-50%)'
                item.style.transform = 'translateY(0px)'
            }
        })
    })
    </script>

</body>

</html>