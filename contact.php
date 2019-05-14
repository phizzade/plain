<!DOCTYPE html>
 <html>
 <?php
include_once('includes/header.php');
?>

    <body>

    	<!-- =====================================
    	==== Start Loading -->

    	<div class="loading">
    		<div class="text-center middle">
    			<div class="lds-ellipsis"><div></div><div></div><div></div><div></div></div>
    		</div>
    	</div>
        
    	<!-- End Loading ====
    	======================================= -->

       
    	<!-- =====================================
    	==== Start Navbar -->

		<?php
        include_once('includes/menu.php');
        ?>

    	<!-- End Navbar ====
    	======================================= -->


    	<!-- =====================================
        ==== Start Header -->

        <header class="page-header valign bg-img" data-overlay-dark="7" data-background="img/cot.jpg" data-stellar-background-ratio="0.5">

            <div class="container">
                <div class="row">
                    <div class="full-width text-center caption mt-30">
                        <h6><a href="#0">Home</a><i class="fas fa-chevron-right"></i><a href="#0">Contact Us</a></h6>
                        <h1>Contact Us</h1>
                        <p>Want to know more? Why not get in touch.</p>
                    </div>
                </div>
            </div>
        </header>

        <!-- End Header ====
        ======================================= -->


        <!-- =====================================
        ==== Start Contact-info -->

        <section class="page-contact-info">
            <div class="container-fluid">
                <div class="row">
                    
                    <div class="col-md-4 item text-center">
                        <span class="icon icon-basic-mail-open-text"></span>
                        <h6>Email</h6>
                        <p>Plainnigeria@gmail.com</p>
                        
                    </div>

                    <div class="col-md-4 item text-center">
                        <span class="icon icon-basic-geolocalize-05"></span>
                        <h6>Address</h6>
                        <p>12 Sijuade Street Akure</p>
                        <p>Ondo State, Nigeria</p>
                    </div>

                    <div class="col-md-4 item text-center">
                        <span class="icon icon-basic-headset"></span>
                        <h6>Call Us</h6>
                        <p>0703 327 2339</p>
                        <p>0806 857 0828</p>
                    </div>

                </div>
            </div>
            <div class="bmtit">
                <span>Or shoot us a message now!</span>
            </div>
        </section>

        <!-- End Contact-info ====
        ======================================= -->


        <!-- =====================================
        ==== Start Contact -->

        <section class="page-contact section-padding">
            <div class="container">
                <div class="row">
                    
                    <div class="offset-lg-1 col-lg-10">
                        <form class="form" id="contact-form" method="post" action="" onsubmit="return false;">

                            <div class="messages"></div>

                            <div class="controls">

                                <div class="row">

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input id="form_name" type="text" name="name" placeholder="Name *" required="required" data-error="Firstname is required.">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input id="form_email" type="email" name="email" placeholder="Email *" required="required" data-error="Valid email is required.">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <input id="form_subject" type="text" name="subject" placeholder="Subject">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <textarea id="form_message" name="message" placeholder="Your Message *" rows="4" required="required" data-error="Your message is required."></textarea>
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>

                                    <div class="col-md-12 text-center">
                                        <button type="submit" class="butn butn-bg"><span>Send Message</span></button>
                                    </div>

                                </div>                             
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="bmtit">
                <span>We are also on social Media.</span>
            </div>
        </section>

        <!-- End Contact ====
        ======================================= -->


        <!-- =====================================
        ==== Start Social -->

        <div class="page-social pt-50 pb-50">
            <div class="container-fluid">
                <a href="#0" class="icon f-bg">
                    <i class="fab fa-facebook-f"></i>     <p>PlainNigeria</p>
                </a>
               
                <a href="#0" class="icon tw-bg">
                    <i class="fab fa-twitter"></i>         <p>@PlainNigeria</p>
                </a>
                <a href="#0" class="icon lin-bg">
                    <i class="fab fa-linkedin-in"></i>      <p>PlainNigeria</p>
                </a>
                <a href="#0" class="icon inst-bg">
                    <i class="fab fa-instagram"></i>         <p>#PlainNigeria</p>
                </a>
            </div>
        </div>

        <!-- End Social ====
        ======================================= -->


        <!-- =====================================
        ==== Start Footer -->

        <?php include_once("includes/footer.php");?>

        <!-- End Footer ====
        ======================================= -->

        <?php
        include_once("includes/scripts.php");
        ?>

    </body>
</html>