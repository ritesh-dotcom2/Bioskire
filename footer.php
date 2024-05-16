<footer id="htc__footer">
    <!-- Start Footer Widget -->
    <div class="footer__container bg__cat--1">
        <div class="container">
            <div class="row">
                <!-- Start Single Footer Widget -->
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="footer">
                        <!-- <h2 class="title__line--2">ABOUT US</h2> -->
                        <div class="ft__details ">
                        <!-- <h2 class="title__line--2">Quick Link</h2> -->
                            <img src="images/logo/logo2.png" alt="logo">
                            <!-- <p class="para mt-3">The demand for organic cosmetic products has seen a significant rise as people become conscious of what they put on their skin. In this movement towards embracing nature's goodness.</p> -->
                        </div>
                    </div>
                </div>
                <!-- End Single Footer Widget -->
                <!-- Start Single Footer Widget -->
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 xmt-40">
                    <div class="footer">
                        <h2 class="title__line--2">Quick Link</h2>
                        <div class="ft__inner">
                            <ul class="ft__list">
                                <li><a href="index.php">Home</a></li>
                                <li><a href="about.php">About Us</a></li>
                                <li><a href="contact.php">Contact Us</a></li>
                                <li><a href="login.php">Login</a> / <a href="login.php">Register</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- End Single Footer Widget -->
                <!-- Start Single Footer Widget -->
                
                <!-- End Single Footer Widget -->
                <!-- Start Single Footer Widget -->
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 xmt-40 smt-40">
                    <div class="footer">
                        <h2 class="title__line--2">Our Address</h2>
                        <div class="ft__inner">
                            <ul class="ft__list">
                                <li>
                                    <p>
                                        <strong>Address:</strong>
                                        Sripur Gahar, Khanpur Samastipur, Bihar 848117
                                    </p>
                                </li>
                                <li>
                                    <p>
                                        <strong>Email:</strong>
                                        team@bioskire.com
                                    </p>
                                </li>
                                <li>
                                    <p>
                                        <strong>Phone:</strong>
                                        +91-7632932050
                                    </p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 xmt-40 smt-40">
                    <div class="footer">
                        <div class="ft__inner">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d59376.996582863016!2d85.92235341018795!3d25.905867302936855!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39edeb711e3e867d%3A0x9c7f74dbfed269df!2sSiripur%20Gahar%2C%20Bihar!5e0!3m2!1sen!2sin!4v1714553037209!5m2!1sen!2sin" width="300" height="180" style="border:0;border-radius:10px 30px;"allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
                            </iframe>
                        </div>
                    </div>
                </div>
                <!-- End Single Footer Widget -->
                <!-- Start Single Footer Widget -->
                <!-- <div class="col-md-3 col-sm-6 col-xs-12 xmt-40 smt-40">
                            <div class="footer">
                                <h2 class="title__line--2">NEWSLETTER </h2>
                                <div class="ft__inner">
                                    <div class="news__input">
                                        <input type="text" placeholder="Your Mail*">
                                        <div class="send__btn">
                                            <a class="fr__btn" href="#">Send Mail</a>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                        </div> -->
                <!-- End Single Footer Widget -->
            </div>
        </div>
    </div>
    <!-- End Footer Widget -->
    <!-- Start Copyright Area -->
    <div class="htc__copyright bg__cat--5">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="copyright__inner text-align-center">
                        <p>Copyright© 2024. Designed By Brandologie Marketing PVT. LTD.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Copyright Area -->
</footer>
<!-- End Footer Style -->
</div>
<!-- Body main wrapper end -->

<!-- Placed js at the end of the document so the pages load faster -->

<!-- jquery latest version -->
<script src="js/vendor/jquery-3.2.1.min.js"></script>
<!-- Bootstrap framework js -->
<script src="js/bootstrap.min.js"></script>
<!-- All js plugins included in this file. -->
<script src="js/plugins.js"></script>
<script src="js/slick.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<!-- Waypoints.min.js. -->
<script src="js/waypoints.min.js"></script>
<!-- Main js file that contents all jQuery plugins activation. -->
<script src="js/main.js"></script>
<script src="js/jquery.imgzoom.js"></script>
<script src="js/custom.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
  AOS.init();
</script>
<script>
    // Initialize the first carousel
    $('.owl-carousel').owlCarousel({
        loop: true,
        margin: 10,
        nav: true,
        autoplay: true, // Enable autoplay
        autoplayTimeout: 5000, // Set autoplay timeout to 5 seconds (5000 milliseconds)
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 1
            },
            1000: {
                items: 1
            }
        }
    });

    // Initialize the second carousel
    $('.testim-owl-carousel').owlCarousel({
        loop: true,
        margin: 10,
        nav: true,
        autoplay: true, // Enable autoplay
        autoplayTimeout: 5000, // Set autoplay timeout to 5 seconds (5000 milliseconds)
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 2
            },
            1000: {
                items: 3
            }
        }
    });
</script>

<script>
    $(document).ready(function () {
        // Add active class on tab click
        $(".tab").on("click", function () {
            var categoryId = $(this).data("id");

            $(".tab, .tab-pane").removeClass("active");
            $(this).addClass("active");
            $("#" + categoryId).addClass("active");
        });
    });

</script>
<script>
    $(document).ready(function () {

        var counters = $(".counter-value");
        var countersQuantity = counters.length;
        var counter = [];

        for (i = 0; i < countersQuantity; i++) {
            counter[i] = parseInt(counters[i].innerHTML);
        }

        var count = function (start, value, id) {
            var localStart = start;
            setInterval(function () {
                if (localStart < value) {
                    localStart++;
                    counters[id].innerHTML = localStart;
                }
            }, 100);
        }

        for (j = 0; j < countersQuantity; j++) {
            count(0, counter[j], j);
        }
    });
</script>
</body>

</html>