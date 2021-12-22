   <!-- header start -->
   <header class="header-style-5 color-style" id="sticky-header">
       <div class="mobile-fix-option"></div>
       <div class="top-header top-header-theme">
           <div class="container">
               <div class="row">
                   <div class="col-lg-6">
                       <div class="header-contact">
                           <ul>
                               <li>Welcome to Our store Mialle</li>
                               <li><i class="fa fa-phone" aria-hidden="true"></i>Call Us: +254-712-581-281</li>
                           </ul>
                       </div>
                   </div>
                   <div class="col-lg-6">
                       <div class="header-contact text-end">
                           <ul>
                               <li><i class="fa fa-truck" aria-hidden="true"></i>My Account</li>
                               <li class="pe-0"><i class="fa fa-gift" aria-hidden="true"></i>Rate Product</li>
                           </ul>
                       </div>
                   </div>
               </div>
           </div>
       </div>
       <div class="container">
           <div class="row">
               <div class="col-sm-12">
                   <div class="main-menu">
                       <div class="menu-left">
                           <div class="navbar d-block d-xl-none">
                               <a href="javascript:void(0)">
                                   <div class="bar-style" id="toggle-sidebar-res"><i class="fa fa-bars sidebar-bar" aria-hidden="true"></i>
                                   </div>
                               </a>
                           </div>
                           <div class="brand-logo">
                               <a href="index.php"><img src="assets/images/icon/logo/f11.png" class="img-fluid blur-up lazyload" alt=""></a>
                           </div>
                       </div>
                       <div>
                           <form class="form_search ajax-search the-basics" role="form" action="" method="POST">
                               <input type="search" placeholder="Search any Device or Gadgets..." name="search_product" class="nav-search nav-search-field typeahead" aria-expanded="true" required>
                               <button type="submit" name="nav_submit_button" class="btn-search">
                                   <i class="ti-search"></i>
                               </button>
                               <?php
                                if (isset($_POST["nav_submit_button"])) {

                                    include 'db-connection.php';
                                    $product = mysqli_real_escape_string($conn, $_POST['search_product']);
                                    echo "<script>window.location.replace('search-product.php?searchkey=$product');</script>";
                                    
                                    
                                }
                                ?>
                           </form>
                       </div>
                       <div class="menu-right pull-right">
                           <nav class="text-start">
                               <div class="toggle-nav"><i class="fa fa-bars sidebar-bar"></i></div>
                           </nav>
                           <div class="top-header d-block">
                               <ul class="header-dropdown">
                                   <li class="mobile-wishlist"><a href="#"><img src="assets/images/icon/white-icon/heart.png" alt=""> </a></li>
                                   <li class="onhover-dropdown mobile-account">
                                       <a href="login.html">
                                           <img src="assets/images/icon/white-icon/user.png" alt="">
                                       </a>
                                   </li>
                               </ul>
                           </div>
                           <div>
                               <div class="icon-nav">
                                   <ul>
                                       <li class="onhover-div d-xl-none d-inline-block mobile-search">
                                           <div><img src="assets/images/icon/search.png" onclick="openSearch()" class="img-fluid blur-up lazyload" alt=""> <i class="ti-search" onclick="openSearch()"></i></div>
                                           <div id="search-overlay" class="search-overlay">
                                               <div> <span class="closebtn" onclick="closeSearch()" title="Close Overlay">×</span>
                                                   <div class="overlay-content">
                                                       <div class="container">
                                                           <div class="row">
                                                               <div class="col-xl-12">
                                                                   <form class="ajax-search">
                                                                       <div class="form-group the-basics">
                                                                           <input type="text" class="form-control typeahead" id="exampleInputPassword1" placeholder="Search a Product">
                                                                       </div>
                                                                       <button type="submit" class="btn btn-primary"><i class="fa fa-search"></i></button>
                                                                   </form>
                                                               </div>
                                                           </div>
                                                       </div>
                                                   </div>
                                               </div>
                                           </div>
                                       </li>

                                       <li class="onhover-div mobile-cart">
                                           <div><img src="assets/images/icon/cart.png" class="img-fluid blur-up lazyload" alt=""> <i class="ti-shopping-cart"></i></div>
                                           <span class="cart_qty_cls"></span>

                                       </li>
                                   </ul>
                               </div>
                           </div>
                       </div>
                   </div>
               </div>
           </div>
       </div>
       <div class="bottom-part">
           <div class="container">
               <div class="row">
                   <div class="col-xl-3">
                       <div class="category-menu d-none d-xl-block h-100">
                           <div id="toggle-sidebar" class="toggle-sidebar">
                               <i class="fa fa-bars sidebar-bar"></i>
                               <h5 class="mb-0">shop by category</h5>
                           </div>
                       </div>
                       <div class="sidenav fixed-sidebar marketplace-sidebar">
                           <nav>
                               <div>
                                   <div class="sidebar-back text-start d-xl-none d-block"><i class="fa fa-angle-left pe-2" aria-hidden="true"></i> Back</div>
                               </div>
                               <ul id="sub-menu" class="sm pixelstrap sm-vertical">
                                   <li> <a href="electronics.php">Electronics</a>

                                   </li>
                                   <li> <a href="phones-tablets.php">Mobile Phones, Tablets & Gadgets</a>

                                   </li>
                                   <li> <a href="health-beauty.php">Health & Beauty</a>

                                   </li>
                                   <li> <a href="fashion.php">Fashion</a>

                                   </li>
                                   <li><a href="all-others.php">All Others </a></li>
                               </ul>
                           </nav>
                       </div>
                   </div>
                   <div class="col-xxl-6 col-xl-9 position-unset">
                       <div class="main-nav-center">
                           <nav class="text-start">
                               <!-- Sample menu definition -->
                               <ul id="main-menu" class="sm pixelstrap sm-horizontal">
                                   <li>
                                       <div class="mobile-back text-end">Back<i class="fa fa-angle-right ps-2" aria-hidden="true"></i></div>
                                   </li>
                                   <li><a href="index.php">Home</a></li>
                                   <li class="mega" id="hover-cls">
                                       <a href="all-products.php">All Products</a>
                                   </li>
                                   <li>
                                       <a href="seller-register.php">Seller </a>
                                   </li>

                                   <li><a href="buyer-register.php">Buyer </a> </li>
                                   <li><a href="login.php">My Account </a> </li>

                               </ul>
                           </nav>
                       </div>
                   </div>
                   <div class="col-xxl-3 d-none d-xxl-inline-block">
                       <div class="header-options">
                           <div class="vertical-slider no-arrow">

                           </div>
                       </div>
                   </div>
               </div>
           </div>
       </div>
   </header>
   <!-- header end -->