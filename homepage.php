<?php 
/* template Name: Homepage */
get_header();
?>

    <!-- Banner Image -->
    <div class="banner text-center" data-scroll-index='0'>
        <div class="banner-overlay">
            <div class="container">
                <h1 class="text-capitalize">Europos Jaunimas is NGO located in Vilnius, Lithuania</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque nec justo rhoncus, pharetra dui ut, cursus turpis. Aenean tincidunt vitae ligula eget congue.</p>
                <a href="#" class="banner-btn">Get Started</a> </div>
        </div>
    </div>
    <!-- End Banner Image -->

    <!-- About -->

    <div class="about-us section-padding" data-scroll-index='1'>
        <div class="container">
            <div class="row">
                <div class="col-md-12 section-title text-center">
                    <h3>Projects and partisipation</h3>
                    <p>Suspendisse fringilla eget arcu et bibendum. Vestibulum elementum dui tempus dolor gravida, vel mattis erat fermentum.</p>
                    <span class="section-title-line"></span> </div>
                <div class="col-md-6 mb-50">
                    <div class="section-info">
                        <div class="sub-title-paragraph">
                            <h4>You can conquer the world.</h4>
                            <h5>If you have right set of mind and thus you can rule the world. Cheers!</h5>
                            <p>Nam non erat feugiat, pellentesque mi ut, finibus tellus. Ut eget ex sodales, feugiat elit non, semper ex. Sed laoreet lectus nisl, sit amet porttitor lacus porta nec. Quisque sit amet metus sagittis, tincidunt tellus in, efficitur
                                lorem. Sed scelerisque tellus nisl, eget tincidunt elit aliquet vitae. Integer id felis ut ipsum tristique iaculis. Mauris sed nibh enim. Interdum et malesuada fames ac ante ipsum primis in faucibus. Nunc sagittis rhoncus
                                sollicitudin. Maecenas eget dui a neque rutrum tincidunt sed non ipsum.</p>
                        </div>
                        <a href="#" class="anchor-btn">Learn more <i class="fas fa-arrow-right pd-lt-10"></i></a> </div>
                </div>
                <div class="col-md-6 mb-50">
                    <div class="section-img"> <img src="images/about.jpg" alt="" class="img-responsive" /> </div>
                </div>
            </div>
        </div>
    </div>

    <!-- End About -->

    <!-- Services -->
    <div class="services section-padding bg-grey" data-scroll-index='2'>
        <div class="container">
            <div class="row">
                <div class="col-md-12 section-title text-center">
                    <h3>We Are Best At Our Service</h3>
                    <p>Vestibulum elementum dui tempus dolor gravida, vel mattis erat fermentum.</p>
                    <span class="section-title-line"></span> </div>
                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12 mb-30">
                    <div class="service-box bg-white text-center">
                        <div class="icon"> <i class="fas fa-chart-line"></i> </div>
                        <div class="icon-text">
                            <h4 class="title-box">Chart Line</h4>
                            <p>Sed malesuada, est eget condimentum iaculis, nisi ex facilisis metus.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12 mb-30">
                    <div class="service-box bg-white text-center">
                        <div class="icon"> <i class="fas fa-bullhorn "></i> </div>
                        <div class="icon-text">
                            <h4 class="title-box">Quick Anouncement</h4>
                            <p>Sed malesuada, est eget condimentum iaculis, nisi ex facilisis metus.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12 mb-30">
                    <div class="service-box bg-white text-center">
                        <div class="icon"> <i class="fas fa-map-marked"></i> </div>
                        <div class="icon-text">
                            <h4 class="title-box">Mark Location</h4>
                            <p>Sed malesuada, est eget condimentum iaculis, nisi ex facilisis metus.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12 mb-30">
                    <div class="service-box bg-white text-center">
                        <div class="icon"> <i class="fas fa-bug"></i> </div>
                        <div class="icon-text">
                            <h4 class="title-box">Bug Solution</h4>
                            <p>Sed malesuada, est eget condimentum iaculis, nisi ex facilisis metus.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12 mb-30">
                    <div class="service-box bg-white text-center">
                        <div class="icon"> <i class="fas fa-comments"></i> </div>
                        <div class="icon-text">
                            <h4 class="title-box">Fast Communication</h4>
                            <p>Sed malesuada, est eget condimentum iaculis, nisi ex facilisis metus.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12 mb-30">
                    <div class="service-box bg-white text-center">
                        <div class="icon"> <i class="fas fa-paint-brush"></i> </div>
                        <div class="icon-text">
                            <h4 class="title-box">Clean Design</h4>
                            <p>Sed malesuada, est eget condimentum iaculis, nisi ex facilisis metus.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- End Services -->

    <!-- Gallery -->
    <div class="portfolio section-padding" data-scroll-index='3'>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 section-title text-center">
                    <h3>Check our recent works</h3>
                    <p>Vestibulum elementum dui tempus dolor gravida, vel mattis erat fermentum.</p>
                    <span class="section-title-line"></span> </div>
                <div class="filtering text-center mb-30">
                    <button type="button" data-filter='*' class="active">All</button>
                    <button type="button" data-filter='.summer'>Summer</button>
                    <button type="button" data-filter='.winter'>Winter</button>
                    <button type="button" data-filter='.rainy'>Rainy</button>
                    <button type="button" data-filter='.spring'>Spring</button>
                </div>
                <div class="gallery no-padding col-lg-12 col-sm-12">
                    <div class="col-lg-4 col-sm-6 spring no-padding">
                        <div class="item-img">
                            <a class="single-image" href="images/gall1.jpg"></a>
                            <div class="part-img"> <img src="images/gall1.jpg" alt="image">
                                <div class="overlay-img">
                                    <h4>Spring</h4>
                                    <h6>Autumn Leaves</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 spring no-padding">
                        <div class="item-img">
                            <a class="single-image" href="images/gall2.jpg"></a>
                            <div class="part-img"> <img src="images/gall2.jpg" alt="image">
                                <div class="overlay-img">
                                    <h4>Spring</h4>
                                    <h6>Flower Pot</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 spring no-padding">
                        <div class="item-img">
                            <a class="single-image" href="images/gall3.jpg"></a>
                            <div class="part-img"> <img src="images/gall3.jpg" alt="image">
                                <div class="overlay-img">
                                    <h4>Spring</h4>
                                    <h6>Bird with Flower</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 summer no-padding">
                        <div class="item-img">
                            <a class="single-image" href="images/gall4.jpg"></a>
                            <div class="part-img"> <img src="images/gall4.jpg" alt="image">
                                <div class="overlay-img">
                                    <h4>Summer</h4>
                                    <h6>Vacation Trip Van</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 winter no-padding">
                        <div class="item-img">
                            <a class="single-image" href="images/gall5.jpg"></a>
                            <div class="part-img"> <img src="images/gall5.jpg" alt="image">
                                <div class="overlay-img">
                                    <h4>Winter</h4>
                                    <h6>Girl in the snow</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 rainy no-padding">
                        <div class="item-img">
                            <a class="single-image" href="images/gall6.jpg"></a>
                            <div class="part-img"> <img src="images/gall6.jpg" alt="image">
                                <div class="overlay-img">
                                    <h4>Rainy</h4>
                                    <h6>Man with an Umberalla</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 summer no-padding">
                        <div class="item-img">
                            <a class="single-image" href="images/gall7.jpg"></a>
                            <div class="part-img"> <img src="images/gall7.jpg" alt="image">
                                <div class="overlay-img">
                                    <h4>Summer</h4>
                                    <h6>New Beginning</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 rainy no-padding">
                        <div class="item-img">
                            <a class="single-image" href="images/gall8.jpg"></a>
                            <div class="part-img"> <img src="images/gall8.jpg" alt="image">
                                <div class="overlay-img">
                                    <h4>Rainy</h4>
                                    <h6>Girl in the Rain</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 summer no-padding">
                        <div class="item-img">
                            <a class="single-image" href="images/gall9.jpg"></a>
                            <div class="part-img"> <img src="images/gall9.jpg" alt="image">
                                <div class="overlay-img">
                                    <h4>Summer</h4>
                                    <h6>Fun at the Seashores</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Gallery -->
    <!-- Testimonials -->
    <div class="testimonials">
        <div class="testimonials-overlay section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-md-10 offset-md-1">
                        <div class="owl-carousel owl-theme">
                            <div class="testimonial-item text-center">
                                <div class="icon"> <i class="fas fa-comments"></i> </div>
                                <p class="m-auto">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                    consequat.
                                </p>
                                <div class="testimonial-author text-center">
                                    <h5>Rup Jakhar</h5>
                                    <h6>Web Desinger</h6>
                                </div>
                            </div>
                            <div class="testimonial-item text-center">
                                <div class="icon"> <i class="fas fa-comments"></i> </div>
                                <p class="m-auto">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                <div class="testimonial-author text-center">
                                    <h5>Yogesh Singh</h5>
                                    <h6>Web Desinger</h6>
                                </div>
                            </div>
                            <div class="testimonial-item text-center">
                                <div class="icon"> <i class="fas fa-comments"></i> </div>
                                <p class="m-auto">Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                <div class="testimonial-author text-center">
                                    <h5>Vivek Singh</h5>
                                    <h6>Web Desinger</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Testimonials -->

    <!-- Contact -->
    <div class="contact section-padding" data-scroll-index='4'>
        <div class="container">
            <div class="row">
                <div class="col-md-12 section-title text-center">
                    <h3>Contact Us For More</h3>
                    <p>Vestibulum elementum dui tempus dolor gravida, vel mattis erat fermentum.</p>
                    <span class="section-title-line"></span> </div>
                <div class="col-lg-5 col-md-4">
                    <div class="part-info">
                        <div class="info-box">
                            <div class="icon"> <i class="fas fa-phone"></i> </div>
                            <div class="content">
                                <h4>Phone :</h4>
                                <p>0123456789</p>
                            </div>
                        </div>
                        <div class="info-box">
                            <div class="icon"> <i class="fas fa-map-marker-alt"></i> </div>
                            <div class="content">
                                <h4>Address :</h4>
                                <p>New Delhi, India</p>
                            </div>
                        </div>
                        <div class="info-box">
                            <div class="icon"> <i class="fas fa-envelope"></i> </div>
                            <div class="content">
                                <h4>Mail :</h4>
                                <p><a href="#">info@123.com</a></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7 col-md-8">
                    <div class="contact-form">
                        <form class='form' id='contact-form' method='post' data-toggle='validator'>
                            <input type='hidden' name='form-name' value='contact-form' />
                            <div class="messages"></div>
                            <div class="controls">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <input id="form_name" type="text" name="name" placeholder="Name *" required data-error="name is required.">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <input id="form_email" type="email" name="email" placeholder="Email *" required data-error="Valid email is required.">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <input id="form_subject" type="text" name="subject" placeholder="Subject">
                                        </div>
                                    </div>
                                    <div class="col-lg-12 form-group">
                                        <textarea id="form_message" name="message" class="form-control" placeholder=" Type Your Message " rows="4" required data-error="Please,leave us a message."></textarea>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="col-lg-12 text-center">
                                        <button class="bttn">Send Message</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Contact -->

<?php get_footer(); ?>