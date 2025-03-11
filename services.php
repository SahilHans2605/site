<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
?>
<!doctype html>
<html lang="en">
  <head>
    <title>Beauty Parlour Management System | Service Page</title>
    <link rel="stylesheet" href="assets/css/style-starter.css">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Slab:400,700,700i&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
    <style>
        body {
            background: url('bg.jpg') no-repeat center center fixed;
            background-size: cover;
        }
        .services {
            display: grid;
            grid-template-columns: repeat(1, 1fr);
            gap: 20px;
        }
        .service {
            padding: 20px;
            background: #f9f9f9;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            text-align: center;
        }
        .service img {
            width: 100%;
            max-width: 300px;
            height: 250px;
            border-radius: 10px;
            margin-top: 10px;
        }
        .service ul {
            list-style: none;
            padding: 0;
        }
        .service ul li {
            display: inline-block;
            width: 32%;
            vertical-align: top;
            padding: 10px;
            box-sizing: border-box;
        }
        .service ul li input[type="checkbox"] {
            margin-right: 10px;
        }
        .add-to-cart-btn {
            margin-top: 20px;
            padding: 10px 20px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        .add-to-cart-btn:hover {
            background-color: #0056b3;
        }
    </style>
  </head>
  <body id="home">
    <?php include_once('includes/header.php');?>

    <script src="assets/js/jquery-3.3.1.min.js"></script> 
    <script src="assets/js/bootstrap.min.js"></script>
    <script>
        $(function () {
            $('.navbar-toggler').click(function () {
                $('body').toggleClass('noscroll');
            });
        });
    </script>

    <section class="w3l-inner-banner-main">
        <div class="about-inner services">
            <div class="container">   
                <div class="main-titles-head text-center">
                    <h3 class="header-name">Our Services</h3>
                </div>
            </div>
        </div>
        <div class="breadcrumbs-sub">
            <div class="container">   
                <ul class="breadcrumbs-custom-path">
                    <li class="right-side propClone"><a href="index.php" class="">Home <span class="fa fa-angle-right" aria-hidden="true"></span></a></li>
                    <li class="active">Services</li>
                </ul>
            </div>
        </div>
    </section>

    <div class="container">
        <form action="cart.php" method="post">
            <section class="services">
                <!-- Beauty Services -->
                <div class="service">
                    <h2>Beauty Services</h2>
                    <ul>
                        <li>
                            <input type="checkbox" name="services[]" value="Bleach - $XX.XX">
                            Bleach <br><img src="bleach.jpg" alt="Bleach"><br><span class="price">$XX.XX</span>
                            <input type="checkbox" name="services[]" value="Bleach"></li>
                        </li>
                        <li>
                            <input type="checkbox" name="services[]" value="Fruit Facial - $XX.XX">
                            Fruit Facial <br><img src="fruit.jpg" alt="Fruit Facial"><br><span class="price">$XX.XX</span>
                        </li>
                        <li>
                            <input type="checkbox" name="services[]" value="Hair Cut - $XX.XX">
                            Hair Cut <br><img src="haircut.jpg" alt="Hair Cut"><br><span class="price">$XX.XX</span>
                        </li>
                        <li>
                            <input type="checkbox" name="services[]" value="Pedicure - $XX.XX">
                            Pedicure <br><img src="assets/images/pedicure.jpg" alt="Pedicure"><br><span class="price">$XX.XX</span>
                        </li>
                        <li>
                            <input type="checkbox" name="services[]" value="Manicure - $XX.XX">
                            Manicure <br><img src="assets/images/manicure.jpg" alt="Manicure"><br><span class="price">$XX.XX</span>
                        </li>
                        <li>
                            <input type="checkbox" name="services[]" value="Rebonding - $XX.XX">
                            Rebonding <br><img src="assets/images/rebonding.png" alt="Rebonding"><br><span class="price">$XX.XX</span>
                        </li>
                        <li>
                            <input type="checkbox" name="services[]" value="Body Spa - $XX.XX">
                            Body Spa <br><img src="assets/images/bodyspa.png" alt="Body Spa"><br><span class="price">$XX.XX</span>
                        </li>
                        <li>
                            <input type="checkbox" name="services[]" value="Aroma Oil Massage Therapy - $XX.XX">
                            Aroma Oil Massage Therapy <br><img src="assets/images/aroma.png" alt="Aroma Oil Massage Therapy"><br><span class="price">$XX.XX</span>
                        </li>
                    </ul>
                </div>

                <!-- Home Services -->
                <div class="service">
                    <h2>Home Services</h2>
                    <ul>
                        <li>
                            <input type="checkbox" name="services[]" value="Home Cleaning - $XX.XX">
                            Home Cleaning <br><img src="assets/images/homeclean.jpg" alt="Home Cleaning"><br><span class="price">$XX.XX</span>
                        </li>
                        <li>
                            <input type="checkbox" name="services[]" value="Plumbing Services - $XX.XX">
                            Plumbing Services <br><img src="assets/images/plumbing.jpg" alt="Plumbing Services"><br><span class="price">$XX.XX</span>
                        </li>
                        <li>
                            <input type="checkbox" name="services[]" value="Electrical Repairs - $XX.XX">
                            Electrical Repairs <br><img src="assets/images/electric.png" alt="Electrical Repairs"><br><span class="price">$XX.XX</span>
                        </li>
                        <li>
                            <input type="checkbox" name="services[]" value="Painting Services - $XX.XX">
                            Painting Services <br><img src="assets/images/paint.jpg" alt="Painting Services"><br><span class="price">$XX.XX</span>
                        </li>
                        <li>
                            <input type="checkbox" name="services[]" value="Carpet Cleaning - $XX.XX">
                            Carpet Cleaning <br><img src="assets/images/carpet.png" alt="Carpet Cleaning"><br><span class="price">$XX.XX</span>
                        </li>
                        <li>
                            <input type="checkbox" name="services[]" value="Appliance Repairs - $XX.XX">
                            Appliance Repairs <br><img src="assets/images/apliance.jpg" alt="Appliance Repairs"><br><span class="price">$XX.XX</span>
                        </li>
                    </ul>
                </div>

                <!-- Car Services -->
                <div class="service">
                    <h2>Car Services</h2>
                    <ul>
                        <li>
                            <input type="checkbox" name="services[]" value="Car Wash - $XX.XX">
                            Car Wash <br><img src="assets/images/carwash.jpg" alt="Car Wash"><br><span class="price">$XX.XX</span>
                        </li>
                        <li>
                            <input type="checkbox" name="services[]" value="Oil Change - $XX.XX">
                            Oil Change <br><img src="assets/images/caroil.jpg" alt="Oil Change"><br><span class="price">$XX.XX</span>
                        </li>
                        <li>
                            <input type="checkbox" name="services[]" value="Brake Repair - $XX.XX">
                            Brake Repair <br><img src="assets/images/break.jpg" alt="Brake Repair"><br><span class="price">$XX.XX</span>
                        </li>
                        <li>
                            <input type="checkbox" name="services[]" value="Battery Replacement - $XX.XX">
                            Battery Replacement <br><img src="assets/images/battery.jpg" alt="Battery Replacement"><br><span class="price">$XX.XX</span>
                        </li>
                        <li>
                            <input type="checkbox" name="services[]" value="AC Repair - $XX.XX">
                            AC Repair <br><img src="assets/images/carac.jpg" alt="AC Repair"><br><span class="price">$XX.XX</span>
                        </li>
                        <li>
                            <input type="checkbox" name="services[]" value="Engine Diagnostics - $XX.XX">
                            Engine Diagnostics <br><img src="assets/images/engine.jpg" alt="Engine Diagnostics"><br><span class="price">$XX.XX</span>
                        </li>
                    </ul>
                </div>
            </section>
            <button type="submit" class="add-to-cart-btn">Add to Cart</button>
        </form>
    </div>

    <?php include_once('includes/footer.php');?>
  </body>
</html>