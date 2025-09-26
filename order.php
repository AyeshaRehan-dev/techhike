<?php 
    session_start();
    include './config.php';
    $contactEmail = $_POST['contactEmail'];
    $country = $_POST['country'];
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $address = $_POST['address'];
    $city = $_POST['city'];
    $postalCode = $_POST['postalCode'];
    $phone = $_POST['phone'];
    $saveInfo = isset($_POST['saveInfo']) ? $_POST['saveInfo'] : null;
    $shippingMethod = $_POST['shippingMethod'];
    $paymentMethod = $_POST['paymentMethod'];
    $billingAddress = $_POST['billingAddress'];
   $product_info = urldecode($_POST['product_info']);
// $product_info = json_decode($product_info, true); // decode to array
// $product_info = json_encode($product_info, JSON_UNESCAPED_UNICODE); 

    $product_info = mysqli_real_escape_string($connection,$product_info);

    $currentPage = $_SERVER['HTTP_REFERER'];



    $encodeUser = json_encode([
        'contactEmail' => $contactEmail,
        'country' => $country,
        'firstName' => $firstName,
        'lastName' => $lastName,
        'address' => $address,
        'city' => $city,
        'postalCode' => $postalCode,
        'phone' => $phone,
        'saveInfo' => $saveInfo,
        'shippingMethod' => $shippingMethod,
        'paymentMethod' => $paymentMethod,
        'billingAddress' => $billingAddress
    ]);


    $insert = "INSERT INTO orders (product_info,user_info) VALUES ('$product_info','$encodeUser')";

    mysqli_query($connection,$insert);


    // store the success message

    $_SESSION['order_done'] = 'Ordered Successfully!';

    header("Location: $currentPage");


?>