<!-- footer  -->
<footer>
            <div class="content">
                <div class="top">
                    <div class="logo-details">
                        <span class="logo_name">DesiBazaar</span>
                    </div>
                    <div class="media-icons">
                        <a href="https://www.linkedin.com/in/tushar-mahajan-68211b227"><i class="fab fa-facebook-f"></i></a>
                        <a href="https://www.linkedin.com/in/tushar-mahajan-68211b227"><i class="fab fa-twitter"></i></a>
                        <a href="https://www.instagram.com/_tushar_263_"><i class="fab fa-instagram"></i></a>
                        <a href="https://www.linkedin.com/in/tushar-mahajan-68211b227"><i class="fab fa-linkedin-in"></i></a>
                        <a href="https://www.linkedin.com/in/tushar-mahajan-68211b227"><i class="fab fa-youtube"></i></a>
                    </div>
                </div>
                <div class="link-boxes">
                    <ul class="box">
                        <li class="link_name">menu </li>
                        <li><a href="index.php">Home</a></li>
                        <li><a href="https://www.linkedin.com/in/tushar-mahajan-68211b227">Contact us</a></li>
                        <li><a href="https://www.linkedin.com/in/tushar-mahajan-68211b227">About us</a></li>
                        <!-- <li><a href="#">Service</a></li> -->
                    </ul>
                    <!-- <ul class="box">
                        <li class="link_name">Services</li>
                        <li><a href="#">Home delivery</a></li>
                        <li><a href="#"> Fast delivery</a></li>
                        <li><a href="#"> Best Product</a></li>

                    </ul> -->
                    <ul class="box">
                        <li class="link_name">Category</li>
                        <?php
                            $getcatq = "SELECT * FROM `product-catagory` limit 5;";
                            $excgetcat = $con->query($getcatq);
                            while($catres = $excgetcat->fetch_assoc()){
                                ?>
                                <li><a href="products.php?category=<?php echo $catres['cid'] ?>"><?php echo $catres["cname"] ?></a></li>
                                <?php
                            }
                        ?>
                    </ul>
                    <ul class="box">
                        <li class="link_name">Account</li>
                        <li><a href="signup.php">Sign Up</a></li>
                        <li><a href="login.php">Login</a></li>

                    </ul>
                    <ul class="box">
                        <li class="link_name">Developer</li>
                        <li>Tushar Mahajan</li>
                        <li>Abhishek Gandal</li>
                        <li>Gaurav Bawa</li>
                        <li>Girish Nikam</li>
                    </ul>
                    <ul class="box input-box">
                        <li class="link_name">Subscribe</li>
                        <li><input type="text" placeholder="Enter your email"></li>
                        <li><input type="button" value="Subscribe"></li>
                    </ul>
                </div>
            </div>
            <div class="bottom-details">
                <div class="bottom_text">
                    <span class="copyright_text">Copyright &#169; 2022 <a href="index.php">DesiBazaar.</a>All rights
                        reserved</span>
                    <span class="policy_terms">
                        <a href="#">Privacy policy</a>
                        <a href="#">Terms & condition</a>
                    </span>
                </div>
            </div>
        </footer>
<!-- footer  -->