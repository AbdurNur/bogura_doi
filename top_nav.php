<!-- ====================Top Nav Start===================== -->
<section>   
        <nav class="navbar navbar-expand-lg bg-transparent  fixed-top">
            <div class="container">
                <a class="navbar-brand" href="index.php"><img style="width: 50px;" src="assets/images/logo.png" alt=""><span
                        class="text-primary">বগুড়ার দই ঘর </span></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
                    <div class="navbar-nav">
                        <a class="nav-link" href="index.php">Home</a>
                        <a class="nav-link" href="shop.php">Shop</a>
                        <a class="nav-link" href="about.php">About Us</a>
                        <a class="nav-link" href="contact.php">Contact Us</a>

                        <?php if(! isset($_SESSION['login_status'])){?>

                            <i class="nav-link"><i class="fa-solid fa-grip-lines-vertical"></i></i></i>
                            <a class="nav-link" href="login.php">Login</a>
                            <a class="nav-link" href="register.php">Register</a>



                       <?php }
                        
                        
                        ?>
                        
                        <?php 
                        if(isset($_SESSION['login_status'])  && $_SESSION['login_user_type']==3 ){ ?>
                            <i class="nav-link"><i class="fa-solid fa-grip-lines-vertical"></i></i></i>
                            <a class="nav-link" href="total_order.php">Total Order</a>
                            <a class="nav-link" href="new_order.php">New Oder</a>
                            
                            <a class="nav-link" href="logut.php">Logut</a>
                            
                       <?php
                        }
                        
                        ?>
                        
                    </div>
                </div>
            </div>
        </nav>
    </section>
<!-- ====================Top Nav End ===================== -->