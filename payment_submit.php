<?php
 
    $name = $_POST['name'];
    $gender = $_POST['gender'];
    $address = $_POST['address'];
    $email = $_POST['email'];
    $pincode = $_POST['pincode'];
    $card_type = $_POST['card_type'];
    $card_number = $_POST['card_number'];
    $exp_date = $_POST['exp_date'];
    $cvv = $_POST['cvv'];

    echo $name . "<br/>";
    echo $gender . "<br/>";
    echo $address . "<br/>";
    echo $email . "<br/>";
    echo $pincode . "<br/>";
    echo $card_type . "<br/>";
    echo $card_number . "<br/>";
    echo $exp_date . "<br/>";
    echo $cvv . "<br/>";

?>
