<?php

session_start();


$pizzaList  = array(
    'Pepperoni' => array('Small' => 10, 'Medium' => 18, "Large" => 25),
    'Hawaiian' => array('Small' => 10, 'Medium' => 12, "Large" => 22),
    'Cheese' => array('Small' => 7, 'Medium' => 10, "Large" => 15),
    'MeatLovers' => array('Small' => 20, 'Medium' => 25, "Large" => 30),
    'Vegetarian' => array('Small' => 8, 'Medium' => 14, "Large" => 18)
);


$fullName = $_POST['full_name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$address = $_POST['address'];
$pizzaSizeForm = $_POST['pizza_size'];
$pizzaTypeForm = $_POST['pizza_type'];
$pizzaPrice = 0;

$_SESSION['full_name'] = $_POST['full_name'];
$_SESSION['email'] = $_POST['email'];
$_SESSION['phone'] =  $_POST['phone'];
$_SESSION['address'] = $_POST['address'];
$_SESSION['pizza_size'] = $_POST['pizza_size'];
$_SESSION['pizza_type']= $_POST['pizza_type'];




foreach ($pizzaList as $pizzaType => $pizzaSize) {

    //To check if both are equal
    if ($pizzaTypeForm == $pizzaType) {

        foreach ($pizzaSize as $size => $price) {

            if ($pizzaSizeForm == $size) {
                $pizzaPrice = $price;
                $_SESSION['pizza_price'] = $price;
            }
        }
    }
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirmation orden</title>
    <link rel="stylesheet" href="assets/css/style_confirmation.css" />
</head>

<body>
    <div id="container">
        <div id="logo">
            <h1>Pizza Home</h1>
            <img src="assets/images/pizza_logo.png" />

            <br />
            <br />
            <h1>Thanks for your order | Confirmation</h1>
        </div>
    </div>

    <hr />
    <hr />
    <hr />
    <div id="orderDetailTitle">
        <h1>Order details</h1>

          
        <button onclick="window.location.href='/assignment/'" type="button">Go Home</button>
    
    </div>
    <div id="orderDetails">
        <div class="personalInformation">
            <ul>
                <li>
                    <p>Name: <span><?php echo $fullName ?></span></p>
                </li>
                <li>
                    <p>Email: <span><?php echo $email ?></span></p>
                </li>
                <li>
                    <p>Phone: <span><?php echo $phone ?></span></p>
                </li>
                <li>
                    <p>Address:
                        <address>
                            <?php echo $address ?>
                        </address>
                    </p>
                </li>
            </ul>
        </div>
        <div class="pizzaDetails">
            <ul>
                <li>
                    <p>Type:
                        <span>
                            <?php echo $pizzaType ?>
                        </span>
                    </p>
                </li>
                <li>
                    <p>
                        Size:
                        <span>
                            <?php echo $pizzaSizeForm ?>
                        </span>
                    </p>
                </li>
                <li>
                    <p>
                        Price:
                        <span><?php echo "$ {$price}" ?></span>
                    </p>
                </li>
                <li>
                    <img src="assets/images/<?php echo "{$pizzaTypeForm}.jpg" ?>" width="200" height="200" />
                </li>
            </ul>
        </div>


    </div>

  
</body>

</html>