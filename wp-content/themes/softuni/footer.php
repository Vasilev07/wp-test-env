<!-- Footer -->
<section id="footer-widget" class="footer-widget">
            <div class="container header-bg">
                <div class="row">
                    <?php
                        if ( is_active_sidebar( 'footer-1' ) ) {
                            get_sidebar( 'footer-1' );
                        }
                        ?>
                    <div class="col-sm-3">
                        <h3>Important Link</h3>
                        <ul>
                            <li><a href="#">Lorem</a></li>
                            <li><a href="#">Ipsum</a></li>
                            <li><a href="#">Dolar</a></li>
                            <li><a href="#">Set amet</a></li>
                            <li><a href="#">Iodiet lorem</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-3">
                        <h3>Our Latest Services</h3>
                        <ul>
                            <li><a href="#">Edu Robot</a></li>
                            <li><a href="#">Low Robot</a></li>
                            <li><a href="#">Mega Robot</a></li>
                            <li><a href="#">Industry Robot</a></li>
                            <li><a href="#">Sports Robot</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-3">
                        <h3>Our Services</h3>
                        <div class="widget-img-box">
                            <a class="test-popup-link" href="assets/images/widget-big-1.png">
                                <img class="widget-img" src="assets/images/widget-1.png" alt="widget">
                            </a>
                            <a class="test-popup-link" href="assets/images/widget-big-2.png">
                                <img class="widget-img" src="assets/images/widget-2.png" alt="widget">
                            </a>
                            <a class="test-popup-link" href="assets/images/widget-big-3.png">
                                <img class="widget-img" src="assets/images/widget-3.png" alt="widget">
                            </a>
                            <a class="test-popup-link" href="assets/images/widget-big-4.png">
                                <img class="widget-img" src="assets/images/widget-4.png" alt="widget">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <?php wp_footer(); ?>