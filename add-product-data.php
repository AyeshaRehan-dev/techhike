<?php 

    include './config.php';
    $name = $_POST['name'];
    $color = $_POST['color'];
    $description = mysqli_real_escape_string($connection,$_POST['description']);
    $price = $_POST['price'];
    $discount = $_POST['discount'];

    $imageName = $_FILES['image']['name'];
    $tmpName = $_FILES['image']['tmp_name'];



    move_uploaded_file($tmpName, './product_images/' . $imageName);

    $insert = "INSERT INTO products (name,color,price,discount_price,description,image) VALUES ('$name','$color',$price,$discount,'$description','$imageName')";

    mysqli_query($connection,$insert);

    header("Location: http://localhost:3000/add-products.php");








?>