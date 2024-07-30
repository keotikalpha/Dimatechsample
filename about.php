<?php include 'header.php'; ?>
<body>
<?php include 'navbar.php'; ?>

<!--========== PARALLAX ==========-->
<div class="parallax-window" data-parallax="scroll" data-image-src="img/1920x1080/01.jpg">
    <div class="parallax-content container">
        <h1 class="carousel-title">About Us</h1>
	<p>Dimatech Dairy Solutions is an dairy solutions company engaged in the manufacturing of stainless-steel equipment, supply and installation of solar power systems and dairy equipment. <br>We are eager to provide the best equipment for your business.”.</p>
    </div>
</div>
<!--========== PARALLAX ==========-->



<div class="promo-section overflow-h" id="about">
    <div class="container" style="overflow: hidden; padding: 20px;">
        <div class="clearfix">
            <div class="ver-center">
                <div class="ver-center-aligned">
                    <div class="promo-section-col">
                        <br><br>
                        <h2>About Us</h2>
                        <p>Dimatech Dairy Solutions is a team of professionals who work with a single motive – “Customer Delight”.</p>
                        <p>Mission : Our objective as a business is to provide healthy, tasty, high quality and affordable products that bring people together, while our purpose in action outlines our desired position in society. </p>
                        <p>Vision : Our aim is to become the most admired dairy company in Africa</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="promo-section-img-right" style="width: 100%;">
        <img class="img-responsive" src="img/970x970/01.jpg" alt="Content Image" style="max-width: 100%; height: auto;">
    </div>
</div>

<!--========== PAGE LAYOUT ==========-->
<!-- Service -->
<div class="bg-color-sky-light" data-auto-height="true">
    <div class="content-lg container">
        <h2>Our Values</h2>
        <p>Well done is better than well said</p>
        <div class="row row-space-1 margin-b-2">
            <div class="col-sm-6 sm-margin-b-2">
                <div class="wow fadeInLeft" data-wow-duration=".3" data-wow-delay=".3s">
                    <div class="service" data-height="height">
                        <div class="service-element">
                            <img src="img/icons/v1.png">
                        </div>
                        <div class="service-info">
                            <h3>Integrity is paramount</h3>
                            <p class="margin-b-5">We are passionate about Dimatech Dairy Solutions and our customers.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 sm-margin-b-2">
                <div class="wow fadeInLeft" data-wow-duration=".3" data-wow-delay=".2s">
                    <div class="service" data-height="height">
                        <div class="service-element">
                            <img src="img/icons/v2.png">
                        </div>
                        <div class="service-info">
                            <h3>Passion</h3>
                            <p class="margin-b-5">We are passionate about Dimatech Dairy Solutions and our customers.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--// end row -->

        <div class="row row-space-1">
            <div class="col-sm-6">
                <div class="wow fadeInLeft" data-wow-duration=".3" data-wow-delay=".1s">
                    <div class="service" data-height="height">
                        <div class="service-element">
                            <img src="img/icons/v3.png">
                        </div>
                        <div class="service-info">
                            <h3>Trust</h3>
                            <p class="margin-b-5">Every great business is built on Trust & this forms an important pillar of our organization.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 sm-margin-b-2">
                <div class="wow fadeInLeft" data-wow-duration=".3" data-wow-delay=".4s">
                    <div class="service" data-height="height">
                        <div class="service-element">
                            <img src="img/icons/v4.png">
                        </div>
                        <div class="service-info">
                            <h3>Environment</h3>
                            <p class="margin-b-5">We care about the Environment: We endeavor to lower the carbon footprint of our firm and products.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--// end row -->
    </div>
</div>
<!-- End Service -->

<div class="bg-color-sky-light" data-auto-height="true">
    <div class="content-lg container" style="padding-top:0px;">
        <h2>Our Products</h2>
        <div class="row">
            <div class="col-sm-6">
                <div class="center">
                    <h3>DAIRY EQUIPMENT</h3>
                    <ul class="prod">
                        <li>Milking Machine</li>
                        <li>Milk Agitator</li>
                        <li>Milk Transfer Pump</li>
                        <li>Milk Filters</li>
                        <li>Reception Tanks</li>
                        <li>Transportation Tanks</li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="center">
                    <h3>SOLAR EQUIPMENT</h3>
                    <ul class="prod">
                        <li>Indirect System</li>
                        <li>Direct System</li>
                        <li>Pump Solarization</li>
                        
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>



<div class="bg-color-sky-light" data-auto-height="true" style="background: #fff;">
    <div class="content-lg container" style="padding-top:20px;">
        <h2>Our Clients</h2>
        <div class="all_clients">
            <ul class="flex-container wrap">
                <?php
                $dirname = "img/logos/";
                $images = glob($dirname."*.*");
                foreach($images as $image)
                {?>
                    <li class="flex-item"><span class="helper"></span><img src="<?php echo $image ?>" class="clogo"></li>
                <?php
                }?>
            </ul>
        </div>
    </div>
</div>
<?php include'footer.php'; ?>
</body>
