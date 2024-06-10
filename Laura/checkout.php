<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    include 'includes/config.php';
    include 'includes/header.php';
    session_start(); // Start the session
    ?>

</head>

<body>
    <!-- Header Section -->
    <header>
        <?php
        include 'includes/menu.php';
        ?>
    </header>

    <section>
        <div class="container">
            <img src="assets/images/Ps.png" alt="paymentsuccsesfullogo">
            <h2>Payment Successful</h2>
            <p>Thank you for your payment.<br>
                 We will be in contact with more details shortly</p>
            <a href="index.php" class="btn">Back to home</a>
            
            
        </div>
    </section>

    <!-- Footer Section -->
    <footer>
        <div class="container">
            <div class="grid">
                <div class="footer-col">
                    <h4>Company</h4>
                    <ul>
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Services</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                        <li><a href="#">Terms & Conditions</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>Support</h4>
                    <ul>
                        <li><a href="#">Faq</a></li>
                        <li><a href="#">Accessibility</a></li>
                        <li><a href="#">Customer Services</a></li>
                        <li><a href="#">Return and Refund</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>Categories</h4>
                    <ul>
                        <li><a href="#">Men</a></li>
                        <li><a href="#">Women</a></li>
                        <li><a href="#">Kids</a></li>
                        <li><a href="#">Accessories</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <img src="assets/images/logo 2.png" alt="logo" class="footer-logo-img">
                    <div class="contact">
                        <a href="#"><i class="ri-mail-line"></i> email@mail.com</a>
                        <a href="#"><i class="ri-phone-line"></i> +9422566445</a>
                    </div>
                    <div class="social-icon">
                        <a href="#" title="facebook">
                            <i class="ri-facebook-fill"></i>
                        </a>
                        <a href="#" title="instagram">
                            <i class="ri-instagram-fill"></i>
                        </a>
                        <a href="#" title="twitter">
                            <i class="ri-twitter-fill"></i>
                        </a>
                        <a href="#" title="linkedin">
                            <i class="ri-linkedin-fill"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </footer>

</body>

</html>