<!-- <link hr<link href="css/phpcss.css" rel="stylesheet" type="text/css"> -->
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
                        <li class="active">LOG IN</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

<div class="login-section padding-tb">
        <div class=" container">
            <div class="account-wrapper">
                <h3 class="title">Login</h3>
                <form class="account-form" method="post" action="index.php" name="loginform">
                    <div class="form-group">
                        <label for="user_name"><?php echo WORDING_USERNAME; ?></label>
                        <input id="user_name" type="text" name="user_name" required />
                    </div>
                    <div class="form-group">
                        <label for="user_password"><?php echo WORDING_PASSWORD; ?></label>
                        <input id="user_password" type="password" name="user_password" autocomplete="off" required />
                    </div>
                    <div class="form-group">
                        <div class="d-flex justify-content-between flex-wrap pt-sm-2">
                            <div class="checkgroup">
                                <input type="checkbox" id="user_rememberme" name="user_rememberme" value="1" />
                                <label for="user_rememberme"><?php echo WORDING_REMEMBER_ME; ?></label>
                            </div>
                            <a href="password_reset.php"><?php echo WORDING_FORGOT_MY_PASSWORD; ?></a>
                        </div>
                    </div>
                    <div class="form-group">
                        <input  class="d-block lab-btn" type="submit" name="login" value="<?php echo WORDING_LOGIN; ?>" />
                    </div>
                </form>
                <div class="account-bottom">
                    <span class="d-block cate pt-10">Don’t Have any Account?  <a href="register.php" style="font-size:25px;">   Sign
                            Up</a></span> 
                    
                </div>
            </div>
        </div>
    </div>



<?php include('_footer.php'); ?>
