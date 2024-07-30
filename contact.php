<?php include 'header.php'; ?>
<?php include 'navbar.php'; ?>
<style>
        /* Optional: Make iframe responsive */
        .map-container {
            position: relative;
            padding-bottom: 56.25%; /* 16:9 aspect ratio */
            height: 0;
            overflow: hidden;
        }
        .map-container iframe {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
        }
    </style>
<body>

<!--========== PARALLAX ==========-->
<div class="parallax-window" data-parallax="scroll" data-image-src="img/1920x1080/01.jpg">
    <div class="parallax-content container">
        <h1 class="carousel-title">Contact</h1>
        <p>Dimatech Dairy Solutions is an dairy solutions company engaged in the manufacturing of stainless-steel equipment, supply and installation of solar power systems and dairy equipment. <br>We are eager to provide the best equipment for your business.</p>
    </div>
</div>
<!--========== PARALLAX ==========-->

<!--========== PAGE LAYOUT ==========-->
<!-- Contact List -->
<div class="section-seperator">
    <div class="content-lg container">
        <div class="row contact">
            <!-- Contact List -->
            <div class="col-sm-6 sm-margin-b-50">
                <div class="wow fadeInLeft" data-wow-duration=".3" data-wow-delay=".3s">
                    <h2>Our Presence in Africa</h2>
                    <img src="img\kenya.png" class="img-responsive">
                </div>
            </div>
            <!-- End Contact List -->

            <!-- Contact List -->
            <div class="col-sm-6 sm-margin-b-50">
                <div class="wow fadeInLeft" data-wow-duration=".3" data-wow-delay=".3s">
                    <h2>H.O.</h2>
                    <b>Address</b><p>Dimatech Dairy Solutions Limited
                    SkyPark Villa, Kahawa Sukari Estate along Thika Road, Suite 3</p>
                    <b>Phone No</b><p>0727847857</p>
                    <b>Mail</b><p> </p>
                    <b>P.O BOX</b><p>35675 - 0100 </p>

                 
                </div>
            </div>
            <!-- End Contact List -->
        </div>
        <!--// end row -->
    </div>
</div>
<!-- End Contact List -->

 <!-- Google Map -->
  <!-- Google Map -->
  <div class="map-container">
        <iframe 
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3988.9551591272448!2d36.926765210446135!3d-1.1918314987917633!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x182f3f00189bd7c5%3A0x5cdc078b8fe6748!2sSkyPark%20Villa!5e0!3m2!1sen!2ske!4v1722340757623!5m2!1sen!2ske" 
          width="600" 
          height="450" 
          style="border:0;" 
          allowfullscreen 
          loading="lazy" 
          referrerpolicy="no-referrer-when-downgrade">
        </iframe>
    </div>
</body>
<?php include 'footer.php';