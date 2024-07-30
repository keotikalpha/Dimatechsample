<!--========== FOOTER ==========-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        .footer-list {
            list-style-type: none;
            padding: 0;
        }
        .footer-list-item {
            margin-bottom: 10px;
        }
        .footer-list-link {
            text-decoration: none;
            color: #000;
        }
        .footer-list-link i {
            margin-right: 8px;
        }
    </style>
<footer class="footer">
    <!-- Links -->
    <div class="footer-seperator">
        <div class="content-lg container">
            <div class="row">
                <div class="col-sm-2 sm-margin-b-50">
                    <!-- List -->
                    <ul class="list-unstyled footer-list">
                        <li class="footer-list-item"><a class="footer-list-link" href="index.php">Home</a></li>
                        <li class="footer-list-item"><a class="footer-list-link" href="about.php">About</a></li>
                        <li class="footer-list-item"><a class="footer-list-link" href="products.php">Products</a></li>
                        <li class="footer-list-item"><a class="footer-list-link" href="contact.php">Contact</a></li>
                    </ul>
                    <!-- End List -->
                </div>
                <div class="col-sm-4 sm-margin-b-30">
                    <!-- List -->
                    <!-- List -->
<ul class="list-unstyled footer-list">
    <li class="footer-list-item">
        <a class="footer-list-link" href="#"><i class="fab fa-twitter"></i>Twitter</a>
    </li>
    <li class="footer-list-item">
        <a class="footer-list-link" href="https://www.facebook.com/StainlessSolutionsKenya?mibextid=ZbWKwL"><i class="fab fa-facebook-f"></i>Facebook</a>
    </li>
    <li class="footer-list-item">
        <a class="footer-list-link" href="https://www.instagram.com/dimatechdairy?igsh=NGFjcjExNXgyMGFm"><i class="fab fa-instagram"></i>Instagram</a>
    </li>
</ul>
<!-- End List -->

                </div>
                <div class="col-sm-5 sm-margin-b-30">
                    <h2 class="color-white">Send Us A Note</h2>
                    <form id="contact-form" name="cform" action="https://formcarry.com/s/nyo5JUnTXfp" method="POST">
                        <input type="text" id="fn" name="uname" class="form-control footer-input margin-b-20" placeholder="Name" required>
                        <input type="email" id="fe" name="email" class="form-control footer-input margin-b-20" placeholder="Email" required>
                        <input type="text" id="fp" name="phno" maxlength="10" class="form-control footer-input margin-b-20" placeholder="Phone" required>
                        <textarea name="msg" id="fm" class="form-control footer-input margin-b-30" rows="6" placeholder="Message" required></textarea>
                        <button name="csubmit" type="submit" class="btn-theme btn-theme-sm btn-base-bg text-uppercase">Submit</button>
                    </form>
                </div>
            </div>
            <!--// end row -->
        </div>
    </div>
    <!-- End Links -->

    <!-- Copyright -->
    <div class="content container">
        <div class="row">
            <div class="col-xs-6">
                <span id="b" style="color: #17bed2; font-size: 28px; font-weight: bold;">Dimatech</span>
                <span style="color: #fff; font-size: 22px; font-weight: bold;">Dairy Solutions</span>
            </div>
            <div class="col-xs-6 text-right">
                <p class="margin-b-0"><a class="color-base fweight-700" href="#preview/asentus/">Dimatech Dairy Solutions</a> All rights reserved by: <a class="fsite color-base fweight-700" href="index.php">DIMATECH.com</a></p>
            </div>
        </div>
        <!--// end row -->
    </div>
    <!-- End Copyright -->
</footer>
<!--========== END FOOTER ==========-->
<script>
    document.getElementById("contact-form").addEventListener("submit", function(event) {
        var ph = document.getElementById("fp");
        var phv = ph.value;
        if (phv.length < 10 || !/^\d+$/.test(phv)) {
            ph.focus();
            alert("Invalid details!");
            event.preventDefault(); // Prevent form submission
        }
    });
</script>

?>