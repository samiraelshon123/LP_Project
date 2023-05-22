@include('layouts.header')

        <div class="section-title-01 honmob">
            <div class="bg_parallax image_01_parallax"></div>
            <div class="opacy_bg_02">
                <div class="container">
                    <h1>All Services</h1>
                    <div class="crumbs">
                        <ul>
                            <li><a href="index.html">Home</a></li>
                            <li>/</li>
                            <li>Service Categories</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <section class="content-central">
            <div class="container">
                <div class="row" style="margin-top: -30px;">
                    <div class="titles">
                        <h2>All <span>Services</span></h2>
                        <i class="fa fa-plane"></i>
                        <hr class="tall">
                    </div>
                </div>
            </div>
            <div class="content_info" style="margin-top: -70px;">
                <div class="row">
                    <div class="col-md-12">
                        <ul class="services-lines full-services">

                        @fo
                            <li>
                                <div class="item-service-line">
                                    <i class="fa"><a href="servicesbycategory/1.html"><img class="icon-img"
                                                src="images/sercat/service-icon.png" alt="AC"></a></i>
                                    <h5>AC</h5>
                                </div>
                            </li>
                           
                           
                                <div class="item-service-line">
                                    <i class="fa"><a href="servicesbycategory/22.html"><img class="icon-img"
                                                src="images/sercat/service-icon.png" alt="Microwave Oven"></a></i>
                                    <h5>Microwave Oven</h5>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="content_info content_resalt">
                <div class="container">
                    <div class="row">
                        <div class="titles">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        @include('layouts.footer')