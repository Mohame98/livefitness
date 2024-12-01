<footer class="footer">
    <div class="container">
        <div class="top-half">
          	<div class="flex">
            	<h2>Start your fitness journey today fast</h2>
				<div class="btn-wrapper">
					<a href="" class="btn">get started today</a>
					<a href="" class="btn learn-more">learn more</a>
				</div>
          	</div>
        </div>
        <div class="bottom-half">
          	<div class="flex">
            	<div class="socials-blurb">
              		<h3><?php bloginfo('name'); ?></h3>
              		<span>Learn more about us, our team, and our services. Follow us on social media to stay up to date. Get in touch with us to schedule a consultation.</span>
              		<div class="socials flex">
                        <ul>
                            <li><a href="#"><i class="fa-brands fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                            <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa-brands fa-youtube"></i></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="footer-links">
                    <div class="col">
                        <h4>Useful links</h4>
                        <ul>
                            <li><a href="#">Blog</a></li>
                            <li><a href="#">Products</a></li>
                            <li><a href="#">Pricing</a></li>
                            <li><a href="#">Services</a></li>
                            <li><a href="#">Careers</a></li>
                        </ul>
                    </div>
                    <div class="col">
                        <h4>Useful links</h4>
                        <ul>
                            <li><a href="#">Blog</a></li>
                            <li><a href="#">Products</a></li>
                            <li><a href="#">Pricing</a></li>
                            <li><a href="#">Services</a></li>
                            <li><a href="#">Careers</a></li>
                        </ul>
                    </div>
                    <div class="col">
                        <h4>Useful links</h4>
                        <ul>
                            <li><a href="#">Blog</a></li>
                            <li><a href="#">Products</a></li>
                            <li><a href="#">Pricing</a></li>
                            <li><a href="#">Services</a></li>
                            <li><a href="#">Careers</a></li>
                        </ul>
                    </div>
                    <div class="col">
                        <h4>Useful links</h4>
                        <ul>
                            <li><a href="#">Blog</a></li>
                            <li><a href="#">Products</a></li>
                            <li><a href="#">Pricing</a></li>
                            <li><a href="#">Services</a></li>
                            <li><a href="#">Careers</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
    <!-- aos js -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <!-- CDN Jquery -->
    <script 
        src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" 
        integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" 
        crossorigin="anonymous" 
        referrerpolicy="no-referrer">
    </script>

    <!-- CDN Slick -->
    <script 
        src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.js" 
        integrity="sha512-eP8DK17a+MOcKHXC5Yrqzd8WI5WKh6F1TIk5QZ/8Lbv+8ssblcz7oGC8ZmQ/ZSAPa7ZmsCU4e/hcovqR8jfJqA==" 
        crossorigin="anonymous" 
        referrerpolicy="no-referrer">
    </script>
    <script>
        // accordion
        $(".faq .question-wrapper").on("click", function () { 
            toggleFaqItem($(this));
        });

        // slider
        initializeSlider();

        // initialize aos
        AOS.init({ duration: 1000, easing: "ease-in-out", once: true });
    </script>	
    <?php wp_footer(); ?>
  </body>
</html>