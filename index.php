<?php include __DIR__ . '/includes/header.php'; ?>

    <section id="Home">
        <!-- nav removed -->

        <div class="main">

            <div class="men_text">
                <h1>Get Fresh<span>Food</span><br>in a Easy Way</h1>
            </div>

            <div class="main_image">
                <img src="image/main_img.png">
            </div>

        </div>

        <p>
           Welcome to Foodies - your go- to- food delivery platform! 
           Discover local restaurants,explore delicious menus, and get your favorite meals delivered fast and fresh right to your doorstep.order in just a few taps and enjoy a seamless,contactless dining experience.
        </p>

        <div class="main_btn">
            <a href="#">Order Now</a>
            <i class="fa-solid fa-angle-right"></i>
        </div>

    </section>



    <!--About-->

    <div class="about" id="About">
        <div class="about_main">

            <div class="image">
                <img src="image/Food-Plate.png">
            </div>

            <div class="about_text">
                <h1><span>About</span>Us</h1>
                <h3>Why Choose us?</h3>
                <p>
                   Explore a world of flavors! 
                   from spicy street food to gourment dishes, our menu features a wide variety of cuisines to satisfy every craving. whether you're in the mood for burgers,biriyani,sushi, or desserts we've got something delicious for everyone.
                </p>
            </div>

        </div>

        <a href="#" class="about_btn">Order Now</a>

    </div>



    <!--Menu-->

    <div class="menu" id="Menu">
        <h1>Our<span>Menu</span></h1>

        <div class="menu_box">
            <?php
            $sql = "SELECT * FROM products";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
            ?>
            <div class="menu_card">

                <div class="menu_image">
                    <img src="image/<?php echo $row['image']; ?>">
                </div>

                <div class="small_card">
                    <i class="fa-solid fa-heart"></i>
                </div>

                <div class="menu_info">
                    <h2><?php echo $row['name']; ?></h2>
                    <p>
                        A clasic favorite made with juicy patties,fresh veggies and sauces
                    </p>
                    <h3>RS<?php echo $row['price']; ?></h3>
                    <div class="menu_icon">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star-half-stroke"></i>
                    </div>
                    <a href="order.php?id=<?php echo $row['id']; ?>" class="menu_btn">Order Now</a>
                </div>

            </div> 
            <?php
                }
            } else {
                echo "0 results";
            }
            ?>
        </div>

    </div>




    <!--Gallary-->

    <div class="gallary" id="Gallary">
        <h1>Our<span>Gallary</span></h1>

        <div class="gallary_image_box">
            <div class="gallary_image">
                <img src="image/gallary_1.jpg">

                <h3>Food</h3>
                <p>
                Take a look at our tasty food! from merals to drinks and desserts, our gallery shows the delicious items you can order.
                </p>
                <a href="#" class="gallary_btn">Order Now</a>
            </div>

            <div class="gallary_image">
                <img src="image/gallary_2.jpg">

                <h3>Food</h3>
                <p>
                    Take a look at our tasty food! from merals to drinks and desserts, our gallery shows the delicious items you can order.  
                </p>
                <a href="#" class="gallary_btn">Order Now</a>
            </div>

            <div class="gallary_image">
                <img src="image/gallary_3.jpg">

                <h3>Food</h3>
                <p>
                    Take a look at our tasty food! from merals to drinks and desserts, our gallery shows the delicious items you can order.  
                </p>
                <a href="#" class="gallary_btn">Order Now</a>
            </div>

            <div class="gallary_image">
                <img src="image/gallary_4.jpg">

                <h3>Food</h3>
                <p>
                    Take a look at our tasty food! from merals to drinks and desserts, our gallery shows the delicious items you can order.  
                </p>
                <a href="#" class="gallary_btn">Order Now</a>
            </div>

            <div class="gallary_image">
                <img src="image/gallary_5.jpg">

                <h3>Food</h3>
                <p>
                   Take  a look at our tasty food! from merals to drinks and desserts, our gallery shows the delicious items you can order.  
                </p>
                <a href="#" class="gallary_btn">Order Now</a>
            </div>

            <div class="gallary_image">
                <img src="image/gallary_6.jpg">

                <h3>Food</h3>
                <p>
                    Take  a look at our tasty food! from merals to drinks and desserts, our gallery shows the delicious items you can order.     
                </p>
            
                
              <a  href="#" class="gallary_btn">Order Now</a>
            </div>

        </div>

    </div>




    <!--Review-->

    <div class="review" id="Review">
        <h1>Customer<span>Review</span></h1>

        <div class="review_box">
            <div class="review_card">

                <div class="review_profile">
                    <img src="image/review_1.png">
                </div>

                <div class="review_text">
                    <h2 class="name">lusy </h2>

                    <div class="review_icon">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star-half-stroke"></i>
                    </div>

                    <div class="review_social">
                        <i class="fa-brands fa-facebook-f"></i>
                        <i class="fa-brands fa-instagram"></i>
                        <i class="fa-brands fa-twitter"></i>
                        <i class="fa-brands fa-linkedin-in"></i>
                    </div>

                    <p>
                     The food was delivered promptly and arrived in excellent condition.highly satisfied.

                    </p>

                </div>

            </div>

            <div class="review_card">

                <div class="review_profile">
                    <img src="image/review_2.png">
                </div>

                <div class="review_text">
                    <h2 class="name">John</h2>

                    <div class="review_icon">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star-half-stroke"></i>
                    </div>

                    <div class="review_social">
                        <i class="fa-brands fa-facebook-f"></i>
                        <i class="fa-brands fa-instagram"></i>
                        <i class="fa-brands fa-twitter"></i>
                        <i class="fa-brands fa-linkedin-in"></i>
                    </div>

                    <p>
                       An impressive variety of dishes with great flavor.A pleasant experience overall.
                    </p>

                </div>

            </div>

            <div class="review_card">

                <div class="review_profile">
                    <img src="image/review_3.png">
                </div>

                <div class="review_text">
                    <h2 class="name">Anne</h2>

                    <div class="review_icon">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star-half-stroke"></i>
                    </div>

                    <div class="review_social">
                        <i class="fa-brands fa-facebook-f"></i>
                        <i class="fa-brands fa-instagram"></i>
                        <i class="fa-brands fa-twitter"></i>
                        <i class="fa-brands fa-linkedin-in"></i>
                    </div>

                    <p>
                        Exceptional! service and professional delivery.The quality exceeded expectations.
                    </p>

                </div>

            </div>

            <div class="review_card">

                <div class="review_profile">
                    <img src="image/review_4.png">
                </div>

                <div class="review_text">
                    <h2 class="name"> Deo</h2>

                    <div class="review_icon">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star-half-stroke"></i>
                    </div>

                    <div class="review_social">
                        <i class="fa-brands fa-facebook-f"></i>
                        <i class="fa-brands fa-instagram"></i>
                        <i class="fa-brands fa-twitter"></i>
                        <i class="fa-brands fa-linkedin-in"></i>
                    </div>

                    <p>
                       The biriyani was flavorful,and the dessert selection was delightful. will Order again.
                    </p>

                </div>

            </div>

        </div>

    </div>

    <!--Team-->

    <div class="team">
        <h1>Our<span>Team</span></h1>

        <div class="team_box">
            <div class="profile">
                <img src="image/chef1.png">

                <div class="info">
                    <h2 class="name">Yash</h2>
                    <p class="bio">Our chef team is made up of skilled cooks who prepare fresh,tasty, and well-presented food.</p>

                    <div class="team_icon">
                        <i class="fa-brands fa-facebook-f"></i>
                        <i class="fa-brands fa-twitter"></i>
                        <i class="fa-brands fa-instagram"></i>
                    </div>

                </div>

            </div>

            <div class="profile">
                <img src="image/chef2.png">

                <div class="info">
                    <h2 class="name">Mariya</h2>
                    <p class="bio">Our chef team is made up of skilled cooks who prepare fresh,tasty, and well-presented food.</p>

                    <div class="team_icon">
                        <i class="fa-brands fa-facebook-f"></i>
                        <i class="fa-brands fa-twitter"></i>
                        <i class="fa-brands fa-instagram"></i>
                    </div>

                </div>

            </div>

            <div class="profile">
                <img src="image/chef3.jpg">

                <div class="info">
                    <h2 class="name">Loid</h2>
                    <p class="bio">Our chef team is made up of skilled cooks who prepare fresh,tasty, and well-presented food.</p>

                    <div class="team_icon">
                        <i class="fa-brands fa-facebook-f"></i>
                        <i class="fa-brands fa-twitter"></i>
                        <i class="fa-brands fa-instagram"></i>
                    </div>

                </div>

            </div>

            <div class="profile">
                <img src="image/chef4.jpg">

                <div class="info">
                    <h2 class="name">saam</h2>
                    <p class="bio">Our chef team is made up of skilled cooks who prepare fresh,tasty, and well-presented food</p>

                    <div class="team_icon">
                        <i class="fa-brands fa-facebook-f"></i>
                        <i class="fa-brands fa-twitter"></i>
                        <i class="fa-brands fa-instagram"></i>
                    </div>

                </div>

            </div>

        </div>

    </div>
<?php include 'includes/footer.php'; ?>
