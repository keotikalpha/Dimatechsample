
</style>
<!--========== HEADER ==========-->
<header class="header navbar-fixed-top">
    <!-- Navbar -->
    <nav class="navbar" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="menu-container">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".nav-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="toggle-icon"></span>
                </button>

                <!-- Logo -->
            
<div class="logo">
    <a class="logo-wrap" href="index.php" style="display: flex; align-items: center; width: auto;">
        <img src="img\logo.jpeg" alt="Dimatech Dairy Logo" style="height: 50px; margin-right: 10px;">
        <div>
            <p class="logo-img-main">
                <span id="b" style="color: #17bed2; font-size: 28px; font-weight: bold;">DIMATECH</span>
                <span style="color: #fff; font-size: 10px; font-weight: bold;">DAIRY SOLUTIONS</span>
            </p>
            <p class="logo-img-active">
                <span id="b" style="color: #17bed2; font-size: 28px; font-weight: bold;">DIMATECH</span>
                <span style="color: #666; font-size: 22px; font-weight: bold;">SOLUTIONS</span>
            </p>
        </div>
    </a>
</div>
<!-- End Logo -->

                <!-- End Logo -->
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse nav-collapse">
                <div class="menu-container">
                    <ul class="navbar-nav navbar-nav-right">
                        <li class="nav-item"><a class="nav-item-child nav-item-hover active" href="index.php">Home</a></li>
                        
                        <li class="nav-item"><a class="nav-item-child nav-item-hover active" href="products.php">Products</a></li>
                        <li class="nav-item"><a class="nav-item-child nav-item-hover" href="about.php">About</a></li>

                        <li class="nav-item"><a class="nav-item-child nav-item-hover" href="contact.php">Contact</a></li>
                    </>
                </div>
            </div>
            <!-- End Navbar Collapse -->
        </div>
    </nav>
    <!-- Navbar -->
</header>

<script>
    $(document).ready(function(){
        $('.dropdown-submenu a.test').on("click", function(e){
            $(this).next('ul').toggle();
            e.stopPropagation();
            e.preventDefault();
        });
    });
</script>
<!--========== END HEADER ==========-->
