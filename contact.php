<?php include('includes/connection.php');?>  
<!--header area-->
<?php include 'includes/header.php'; ?>
<!--sidebar area-->
<?php include 'includes/sidebar.php'; ?>

    <!-- contact section -->
    <section class="w3l-contact py-5" id="contact">
        <div class="container py-md-5 py-4">
            <div class="title-main text-center mx-auto mb-5" style="max-width:500px;">
                <p class="text-uppercase">Get In Touch</p>
                <h3 class="title-style">Contact with <span>Us</span></h3>
            </div>
            <div class="mx-auto" style="max-width:1000px">
                <div class="row contact-block">
                    <div class="col-md-7 contact-right">
                        <form action="https://sendmail.w3layouts.com/submitForm" method="post" class="signin-form">
                            <div class="input-grids">
                                <input type="text" name="w3lName" id="w3lName" placeholder="Your Name*"
                                    class="contact-input" required="" />
                                <input type="email" name="w3lSender" id="w3lSender" placeholder="Your Email*"
                                    class="contact-input" required="" />
                                <input type="text" name="w3lSubect" id="w3lSubect" placeholder="Subject*"
                                    class="contact-input" required="" />
                                <input type="text" name="w3lWebsite" id="w3lWebsite" placeholder="Website URL*"
                                    class="contact-input" required="" />
                            </div>
                            <div class="form-input">
                                <textarea name="w3lMessage" id="w3lMessage" placeholder="Type your message here*"
                                    required=""></textarea>
                            </div>
                            <div class="text-right">
                                <button class="btn btn-style">Send Message</button>
                            </div>
                        </form>
                    </div>
                    <div class="col-md-5 contact-left pl-lg-5 mt-md-0 mt-5">
                        <h3 class="font-weight-bold mb-md-5 mb-4">Contact Details</h3>
                        <div class="cont-details">
                            <div class="d-flex contact-grid">
                                <div class="cont-left text-center mr-3">
                                    <i class="fas fa-building"></i>
                                </div>
                                <div class="cont-right">
                                    <h6>Address</h6>
                                    <p>Batangas City, Philippines</p>
                                </div>
                            </div>
                            <div class="d-flex contact-grid mt-4 pt-lg-2">
                                <div class="cont-left text-center mr-3">
                                    <i class="fas fa-phone-alt"></i>
                                </div>
                                <div class="cont-right">
                                    <h6>Call Us</h6>
                                    <p><a href="tel:+1(21) 234 4567">09300122037</a></p>
                                </div>
                            </div>
                            <div class="d-flex contact-grid mt-4 pt-lg-2">
                                <div class="cont-left text-center mr-3">
                                    <i class="fas fa-envelope-open-text"></i>
                                </div>
                                <div class="cont-right">
                                    <h6>Email Us</h6>
                                    <p><a href="mailto:example@mail.com" class="mail">example@mail.com</a></p>
                                </div>
                            </div>
                            <div class="d-flex contact-grid mt-4 pt-lg-2">
                                <div class="cont-left text-center mr-3">
                                    <i class="fas fa-headphones-alt"></i>
                                </div>
                                <div class="cont-right">
                                    <h6>Customer Support</h6>
                                    <p><a href="mailto:info@support.com" class="mail">info@support.com</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- map -->
    <div class="map">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d317718.69319292053!2d-0.3817765050863085!3d51.528307984912544!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47d8a00baf21de75%3A0x52963a5addd52a99!2sLondon%2C+UK!5e0!3m2!1sen!2spl!4v1562654563739!5m2!1sen!2spl"
            width="100%" height="400" frameborder="0" style="border: 0px;" allowfullscreen=""></iframe>
    </div>
    <!-- //contact section -->
    <?php include 'includes/footer.php'; ?>