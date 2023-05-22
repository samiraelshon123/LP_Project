@include('layouts.header')

        <div class="section-title-01 honmob">
            <div class="bg_parallax image_01_parallax"></div>
            <div class="opacy_bg_02">
                <div class="container">
                    <h1>Change Location</h1>
                    <div class="crumbs">
                        <ul>
                            <li><a href="index.html">Home</a></li>
                            <li>/</li>
                            <li>Change Location</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="content-central">
            <div class="semiboxshadow text-center">
                <img src="img/img-theme/shp.png" class="img-responsive" alt="">
            </div>
            <div class="content_info">
                <div class="paddings-mini">
                    <div class="container">
                        <div class="row">
                            <form action="setlocation" method="post" id="changelocationform">
                                <input type="hidden" name="_token" value="2NHPrBqKScv73zvhqc7UbyDOvtsWZNm2dbOyAkqx">
                                <div class="col-md-8">
                                    <h3>Search Your Location</h3>
                                    <p class="lead">
                                    </p>
                                    <input type="text" class="form-control" id="autocomplete" name="location"
                                        placeholder="Search Location....">
                                    <div id="map" style="height: 400px;"></div>
                                </div>
                                <div class="col-md-4">
                                    <aside class="addlocation">
                                        <h4>Your Location<input type="submit" class="btn btn-primary pull-right"
                                                name="submit" value="Add Location"></h4>
                                        <address>
                                            <div class="form-group">
                                                <label for="streetnumber" class="col-form-label">Street Number:</label>
                                                <input type="text" class="form-control" id="street_number"
                                                    name="streetnumber">
                                            </div>
                                            <div class="form-group">
                                                <label for="routes" class="col-form-label">Route:</label>
                                                <input type="text" class="form-control" id="route" name="routes">
                                            </div>
                                            <div class="form-group">
                                                <label for="city" class="col-form-label">City:</label>
                                                <input type="text" class="form-control" id="locality" name="city">
                                            </div>
                                            <div class="form-group">
                                                <label for="state" class="col-form-label">State:</label>
                                                <input type="text" class="form-control" id="administrative_area_level_1"
                                                    name="state">
                                            </div>
                                            <div class="form-group">
                                                <label for="country" class="col-form-label">Country:</label>
                                                <input type="text" class="form-control" id="country" name="country">
                                            </div>
                                            <div class="form-group">
                                                <label for="pincode" class="col-form-label">Pincode:</label>
                                                <input type="text" class="form-control" id="postal_code" name="pincode">
                                            </div>
                                        </address>
                                    </aside>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="section-twitter content_resalt border-top">
                <i class="fa fa-twitter icon-big"></i>
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <footer id="footer" class="footer-v1">
            <div class="container">
                <div class="row visible-md visible-lg">
                    <div class="col-md-3 col-xs-6 col-sm-6">
                        <h3>APPLIANCE SERVICES </h3>
                        <ul>
                            <li><i class="fa fa-check"></i> <a href="servicesbycategory/12.html">TV</a></li>
                            <li><i class="fa fa-check"></i> <a href="servicesbycategory/14.html">Geyser</a></li>
                            <li><i class="fa fa-check"></i> <a href="servicesbycategory/13.html">Refrigerator</a></li>
                            <li><i class="fa fa-check"></i> <a href="servicesbycategory/21.html">Washing Machine</a>
                            </li>
                            <li><i class="fa fa-check"></i> <a href="servicesbycategory/22.html">Microwave Oven</a></li>
                            <li><i class="fa fa-check"></i> <a href="servicesbycategory/10.html">Water Purifier</a></li>
                        </ul>
                    </div>
                    <div class="col-md-3 col-xs-6 col-sm-6">
                        <h3>AC SERVICES </h3>
                        <ul>
                            <li><i class="fa fa-check"></i> <a
                                    href="service-details/ac-installation.html">Installation</a></li>
                            <li><i class="fa fa-check"></i> <a
                                    href="service-details/ac-uninstallation.html">Uninstallation</a></li>
                            <li><i class="fa fa-check"></i> <a href="service-details/ac-repair.html">AC Repair</a></li>
                            <li><i class="fa fa-check"></i> <a href="service-details/ac-gas-refill.html">Gas Refill</a>
                            </li>
                            <li><i class="fa fa-check"></i> <a href="service-details/ac-wet-servicing.html">Wet
                                    Servicing</a></li>
                            <li><i class="fa fa-check"></i> <a href="service-details/ac-dry-servicing.html">Dry
                                    Servicing </a></li>
                        </ul>
                    </div>
                    <div class="col-md-3 col-xs-6 col-sm-6">
                        <h3>HOME NEEDS </h3>
                        <ul>
                            <li><i class="fa fa-check"></i> <a href="servicesbycategory/19.html">Laundry </a></li>
                            <li><i class="fa fa-check"></i> <a href="servicesbycategory/4.html">Electrical</a></li>
                            <li><i class="fa fa-check"></i> <a href="servicesbycategory/8.html">Pest Control </a></li>
                            <li><i class="fa fa-check"></i> <a href="servicesbycategory/7.html">Carpentry </a></li>
                            <li><i class="fa fa-check"></i> <a href="servicesbycategory/3.html">Plumbing </a></li>
                            <li><i class="fa fa-check"></i> <a href="servicesbycategory/20.html">Painting </a></li>
                        </ul>
                    </div>
                    <div class="col-md-3 col-xs-6 col-sm-6">
                        <h3>CONTACT US</h3>
                        <ul class="contact_footer">
                            <li class="location">
                                <i class="fa fa-map-marker"></i> <a href="#"> Faridabad, Haryana, India</a>
                            </li>
                            <li>
                                <i class="fa fa-envelope"></i> <a
                                    href="mailto:contact@surfsidemedia.in">contact@surfsidemedia.in</a>
                            </li>
                            <li>
                                <i class="fa fa-headphones"></i> <a href="tel:+911234567890">+91-1234567890</a>
                            </li>
                        </ul>
                        <h3 style="margin-top: 10px">FOLLOW US</h3>
                        <ul class="social">
                            <li class="facebook"><span><i class="fa fa-facebook"></i></span><a href="#"></a></li>
                            <li class="twitter"><span><i class="fa fa-twitter"></i></span><a href="#"></a></li>
                            <li class="github"><span><i class="fa fa-instagram"></i></span><a href="#"></a></li>
                        </ul>
                    </div>
                </div>
                <div class="row visible-sm visible-xs">
                    <div class="col-md-6">
                        <h3 class="mlist-h">CONTACT US</h3>
                        <ul class="contact_footer mlist">
                            <li class="location">
                                <i class="fa fa-map-marker"></i> <a href="#"> Faridabad, Haryana, India</a>
                            </li>
                            <li>
                                <i class="fa fa-envelope"></i> <a
                                    href="mailto:contact@surfsidemedia.in">contact@surfsidemedia.in</a>
                            </li>
                            <li>
                                <i class="fa fa-phone"></i> <a href="tel:+911234567890">+91-1234567890</a>
                            </li>
                        </ul>
                        <ul class="social mlist-h">
                            <li class="facebook"><span><i class="fa fa-facebook"></i></span><a href="#"></a></li>
                            <li class="twitter"><span><i class="fa fa-twitter"></i></span><a href="#"></a></li>
                            <li class="github"><span><i class="fa fa-instagram"></i></span><a href="#"></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="footer-down">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <ul class="nav-footer">
                                <li><a href="about-us.html">About Us</a> </li>
                                <li><a href="contact-us.html">Contact Us</a></li>
                                <li><a href="faq.html">FAQ</a></li>
                                <li><a href="terms-of-use.html">Terms of Use</a></li>
                                <li><a href="privacy.html">Privacy</a></li>
                            </ul>
                        </div>
                        <div class="col-md-6">
                            <p class="text-xs-center crtext">&copy; 2021 SurfsideMedia. All Rights Reserved.</p>
                        </div>
                    </div>
                </div>                
            </div>           
        </footer>
    </div>
    <script type="text/javascript" src="assets/js/nav/jquery.sticky.js"></script>
    <script type="text/javascript" src="assets/js/totop/jquery.ui.totop.js"></script>
    <script type="text/javascript" src="assets/js/accordion/accordion.js"></script>
    <script type="text/javascript" src="assets/js/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
    <script type="text/javascript" src="assets/js/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
    <script type="text/javascript" src="assets/js/maps/gmap3.js"></script>
    <script type="text/javascript" src="assets/js/fancybox/jquery.fancybox.js"></script>
    <script type="text/javascript" src="assets/js/carousel/carousel.js"></script>
    <script type="text/javascript" src="assets/js/filters/jquery.isotope.js"></script>
    <script type="text/javascript" src="assets/js/twitter/jquery.tweet.js"></script>
    <script type="text/javascript" src="assets/js/flickr/jflickrfeed.min.js"></script>
    <script type="text/javascript" src="assets/js/theme-options/theme-options.js"></script>
    <script type="text/javascript" src="assets/js/theme-options/jquery.cookies.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap/bootstrap.min.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap/bootstrap-slider.js"></script>
    <script type="text/javascript" src="assets/js/dtb/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="assets/js/dtb/jquery.table2excel.js"></script>
    <script type="text/javascript" src="assets/js/dtb/script.js"></script>
    <script type="text/javascript" src="assets/js/select2.min.js"></script>
    <script type="text/javascript" src="assets/js/jquery.validate.min.js"></script>
    <script type="text/javascript" src="assets/js/validation-rule.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap3-typeahead.min.js"></script>
    <script type="text/javascript" src="assets/js/main.js"></script>
</body>
</html>