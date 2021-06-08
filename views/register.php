
<?php include('_header.php'); ?>

<!-- ==========Header Section Starts Here========== -->
<header class="header-section">

        <div class="header-top">
            <div class="container">
                <div class="header-top-area">
                    <ul class="left">
                        <li>
                            <i class="icofont-ui-call"></i> <span>+800-123-4567 6587</span>
                        </li>
                        <li>
                            <i class="icofont-location-pin"></i> Beverley, New York 224 USA
                        </li>
                    </ul>
                    <ul class="social-icons d-flex align-items-center">
                        <li>
                            <p>
                                Find us on :
                            </p>
                        </li>
                        <li>
                            <a href="#" class="fb"><i class="icofont-facebook-messenger"></i></a>
                        </li>
                        <li>
                            <a href="#" class="twitter"><i class="icofont-twitter"></i></a>
                        </li>
                        <li>
                            <a href="#" class="vimeo"><i class="icofont-vimeo"></i></a>
                        </li>
                        <li>
                            <a href="#" class="skype"><i class="icofont-skype"></i></a>
                        </li>
                        <li>
                            <a href="#" class="rss"><i class="icofont-rss-feed"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="header-bottom">
            <div class="container">
                <div class="header-wrapper">
                    <div class="logo">
                        <a href="index.html">
                            <img src="g/assets/images/logo/logo.png" alt="logo">
                        </a>
                    </div>
                    <div class="menu-area">
                        <ul class="menu">
                            <li>
                                <a href="index.html">Home</a>
                            </li>

                            <li>
                                <a href="#0">Features</a>
                                <ul class="submenu">
                                    <li><a href="members.html">All Members</a></li>
                                    <li><a href="profile.html">Member Profile</a></li>
                                    <li><a href="login.html">Login</a></li>
                                    <li><a href="signup.html" class="active">Sign Up</a></li>
                                    <li><a href="pricing-plan.html">Pricing Plan</a></li>
                                    <li><a href="404.html">404 Page</a></li>

                                </ul>
                            </li>
                            <li>
                                <a href="active-group.html">Community</a>
                            </li>
                            <li>
                                <a href="#0">Blog</a>
                                <ul class="submenu">
                                    <li><a href="blog.html">Blog</a></li>
                                    <li><a href="blog-single.html">Blog Single</a></li>
                                </ul>
                            </li>
                            <li><a href="contact.html">Contact</a></li>
                        </ul>
                        <a href="index.php" class="login"><i class="icofont-user"></i> <span>LOG IN</span> </a>
                        <a href="register.php" class="signup"><i class="icofont-users"></i> <span>SIGN UP</span> </a>

                        <!-- toggle icons -->
                        <div class="header-bar d-lg-none">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                        <div class="ellepsis-bar d-lg-none">
                            <i class="icofont-info-square"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- ==========Header Section Ends Here========== -->

    <!-- ==========Page Header Section Start Here========== -->
    <section class="page-header-section style-1" style="background:url(assets/images/page-header.jpg)">
        <div class="container">
            <div class="page-header-content">
                <div class="page-header-inner">
                    <div class="page-title">
                        <h2>VideoChat Registation</h2>
                    </div>
                    <ol class="breadcrumb">
                        <li><a href="index.html">Home</a></li>
                        <li class="active">SIGN UP</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

<!-- show registration form, but only if we didn't submit already -->
<?php if (!$registration->registration_successful && !$registration->verification_successful) { ?>
<div class="login-section padding-tb">
    <div class=" container">
        <div class="account-wrapper">
            <h3 class="title">SIGN UP</h3>    
                <form class="account-form" method="post" action="register.php" name="registerform">
                    <div class="form-group">
                         <label for="user_name"><?php echo WORDING_REGISTRATION_USERNAME; ?></label>
                         <input id="user_name" type="text" pattern="[a-zA-Z0-9]{2,64}" name="user_name" required />
                    </div>
                    <br>
                    <div class="form-group">
                        <label for="user_email"><?php echo WORDING_REGISTRATION_EMAIL; ?></label>
                        <input id="user_email" type="email" name="user_email" required />
                    </div>
                    <br>
                    <div class="form-group">
                        <label for="user_password_new"><?php echo WORDING_REGISTRATION_PASSWORD; ?></label>
                        <input id="user_password_new" type="password" name="user_password_new" pattern=".{6,}" required autocomplete="off" />
                    </div>
                    <br>
                    <div class="form-group">
                        <label for="user_password_repeat"><?php echo WORDING_REGISTRATION_PASSWORD_REPEAT; ?></label>
                        <input id="user_password_repeat" type="password" name="user_password_repeat" pattern=".{6,}" required autocomplete="off" />
                    </div>
                    <br>

                    <div class="form-group">
                        <input  class="d-block lab-btn" type="submit" name="register" value="<?php echo WORDING_REGISTER; ?>" />
                    </div>
                </form>
        </div>
    </div>
</div>
<?php } ?>

    <a href="index.php"><?php echo WORDING_BACK_TO_LOGIN; ?></a>

<?php include('_footer.php'); ?>
