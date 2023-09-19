<?php
    include('connection.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Pharmacy Portal</title>
    <link rel="stylesheet" href="../css/shop.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>

    <!-- Head Part -->
    <header class="header">
        <div id="logo">
            <img src="../images/logo.png" width="50px">
            <h4>Medi Good <br>Pharmacy</h4>
        </div>
    
        <nav class="navbar">
            <a href="home.html">Home</a>
            <a href="product.html">Product</a>
            <a href="aboutus.html">About Us</a>
            <a href="contactus.html">Contact Us</a>
        </nav>
    
        <div class="icons">
            <a href="cart.html"><div id="cart-btn" class="fas fa-cart-shopping icn"></div></a>
            <a href="login.html"><div id="login-btn" class="fas fa-user icn"></div></a>
            </div> <!-- icons -->
    
        <form method="post" action="" class="search-form" name="find">
            <input type="search" placeholder="search here..." id="search-box">
            <button class="fas fa-search"></button>
        </form>
    </header> <!-- header end -->

    <div class="shop-box">
        <h2>Shopping Cart</h2>
        <a href="home.html"><i class="fa-solid fa-house"></i></a>
       <form  method="post" 
       class="shop-form">
            <h3>Product Id</h3><input type="text" name="pid" placeholder="Product ID*"><br><br>   
            <h3>Product Name</h3><input type="text" name="p_name" placeholder="Product Name*"><br><br>
            <h3>Qauntity</h3><input type="text" name="qty" placeholder="Qauntity*"><br><br> 
            <h3>Unit Price</h3><input type="text" name="unit_price" placeholder="Price*"><br><br> 
                 
         <input type="submit" name="login" class="shop-btn" value="Add to Cart">    
     
       </form>
    </div> <!-- shop-box -->

    <?php
        if(isset($_POST['login'])){
            
            $productID = $_POST['pid'];
            $productName = $_POST['p_name'];
            $qauntity = $_POST['qty'];
            $unitPrice = $_POST['unit_price'];

            //Create query
            $sql = "INSERT INTO cart(pid, p_name, p_qty, p_unit_price) VALUES('$productID', '$productName', '$qauntity', '$unitPrice')";

            //Run query
            $result = mysqli_query($connection , $sql);

        }
    ?>

    <!-- Foot Part -->
    <div class="footer">
        <div class="foot">
            <div class="qr">
                <img src="../images/qr code.png" alt="qr">
            </div> <!-- qr -->

            <div class="call-us">
                <h3>Call Us</h3>
                <p>Tel : +9411243156</p>
                <p>Fax : +9411243156</p>
                <p>Email : medigoodpharmacy5.2@gmail.com</p>
            </div> <!-- call-us -->

            <div class="address">
                <h2>Medi Good</h2>
                <p>Online Pharmacy Service</p>
                <p id="p-1">No. 12/3, Galle Road,</p>
                <p id="p-2">Colombo 07.</p>
            </div> <!-- address -->

            <div class="socail-media">
                <hr id="line">
                <a href="#"><i class="fa-brands fa-facebook-square fa-2x"></i></a>
                <a href="#"><i class="fa-brands fa-twitter fa-2x"></i></a>
                <a href="#"><i class="fa-brands fa-instagram fa-2x"></i></a>
                <a href="#"><i class="fa-brands fa-google-plus-g fa-2x"></i></a>

            </div> <!-- social-media -->

            <div class="badje">
                <img src="../images/badje.png" alt="logo">
            </div> <!-- badje -->
        </div> <!-- foot -->

        <div class="copy-right">
            <p>Copyright &copy 2021 MediGoodPharmacy</p>
        </div> <!-- copy-right -->
    </div> <!-- footer end -->

</body>
</html>
