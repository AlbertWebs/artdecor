<!DOCTYPE html>
<!-- Html start -->
<html lang="en">
  <!-- Head Start -->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <meta name="description" content="oslo" />
    <meta name="keywords" content="oslo" />
    <meta name="author" content="oslo" />
    <link rel="icon" href="{{asset('favicon/apple-icon-180x180.png')}}" type="image/x-icon" />
    <link rel="shortcut icon" href="{{asset('favicon/apple-icon-180x180.png')}}" type="image/x-icon" />
    <link rel="manifest" href="manifest.json" />
    <link rel="icon" href="{{asset('favicon/apple-icon-180x180.png')}}" type="image/x-icon" />
    <link rel="apple-touch-icon" href="{{asset('favicon/apple-icon-180x180.png')}}" />
    <meta name="theme-color" content="#0f8fac" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent" />
    <meta name="apple-mobile-web-app-title" content="Oslo" />
    <meta name="msapplication-TileImage" content="{{asset('favicon/apple-icon-180x180.png')}}" />
    <meta name="msapplication-TileColor" content="#FFFFFF" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Arts & Decor | Portraits Drawings Wallpapers in Nairobi</title>

    @include('favicon')

    <!-- Google Jost Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com/" />
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@200;300;400;500;600;700;800;900&amp;display=swap" rel="stylesheet" />

    <!-- Google Monsterrat Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com/" />
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@800&amp;display=swap" rel="stylesheet" />

    <!-- Google Leckerli Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com/" />
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Leckerli+One&amp;display=swap" rel="stylesheet" />

    <!-- Bootstrap Css -->
    <link id="rtl-link" rel="stylesheet" type="text/css" href="{{asset('theme/assets/css/vendors/bootstrap.css')}}" />

    <!-- Swiper Slider Css -->
    <link rel="stylesheet" type="text/css" href="{{asset('theme/assets/css/vendors/swiper-bundle.min.css')}}" />

    <!-- Wow Animation css -->
    <link rel="stylesheet" href="{{asset('theme/assets/css/vendors/wow-animate.css')}}" />

    <!-- Style Css -->
    <link id="change-link" rel="stylesheet" type="text/css" href="{{asset('theme/assets/css/style.css')}}" />
  </head>
  <!-- Head End -->

  <!-- Body Start -->
  <body class="theme-color4">
    <!-- Loader Start -->
    <div class="loader-wrapper">
      <div class="loader animate">
        <span>A</span>
        <span>R</span>
        <span>T</span>
        <span>S</span>
        <span>&nbsp;</span>
        <span>&</span>
        <span>&nbsp;</span>
        <span>D</span>
        <span>E</span>
        <span>C</span>
        <span>O</span>
        <span>R</span>
        <span>&nbsp;</span>
        <span>K</span>
        <span>E</span>
        <span>N</span>
        <span>Y</span>
        <span>A</span>
      </div>
    </div>
    <!-- Loader End -->

    <!-- Overlay -->
    <a href="javascript:void(0)" class="overlay-general overlay-common"></a>
    <!-- Header Start -->
    <header class="header-common header4 header4LogoChange">
      <!-- Top Header -->
      <div class="top-header">
        <p class="marquee"><span> Summer sale for all swim suits - off 50%! Shop Now</span></p>
      </div>
      <div class="container-lg">
        <div class="nav-wrap">
          <!-- Navigation Start -->
          <nav class="navigation">
            <div class="nav-section">
              <div class="header-section">
                <div class="navbar navbar-expand-xl navbar-light navbar-sticky p-0">
                  <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#primaryMenu" aria-controls="primaryMenu">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                  <a href="{{url('/')}}" class="logo-link">
                    <img class="logo" src="{{asset('theme/assets/images/logos/logo-4.png')}}" alt="logo" />
                  </a>
                  <div class="offcanvas offcanvas-collapse order-lg-2" id="primaryMenu">
                    <div class="offcanvas-header navbar-shadow">
                      <h5 class="mt-1 mb-0">Menu</h5>
                      <button class="btn-close lead" type="button" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body">
                      <!-- Menu-->
                      <ul class="navbar-nav">
                        <!-- Home -->
                        <li class="nav-item dropdown dropdown-mega">
                          <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Home</a>
                          <div class="dropdown-menu home-menu">
                            <div class="row g-4">
                              <div class="col-xl-2 mega-box">
                                <a class="home-box" href="{{url('/')}}">
                                  <img class="img-fluid" src="{{asset('theme/assets/images/demo-img/demo1.jpg')}}" alt="home1" />
                                  <span>Fashion Demo</span>
                                </a>
                              </div>

                              <div class="col-xl-2 mega-box">
                                <a class="home-box" href="index-2.html">
                                  <img class="img-fluid" src="{{asset('theme/assets/images/demo-img/demo2.jpg')}}" alt="home2" />
                                  <span>Bag Demo</span>
                                </a>
                              </div>

                              <div class="col-xl-2 mega-box">
                                <a class="home-box" href="index-3.html">
                                  <img class="img-fluid" src="{{asset('theme/assets/images/demo-img/demo3.jpg')}}" alt="home3" />
                                  <span>Grocery Demo</span>
                                </a>
                              </div>

                              <div class="col-xl-2 mega-box">
                                <a class="home-box" href="index-4.html">
                                  <img class="img-fluid" src="{{asset('theme/assets/images/demo-img/demo4.jpg')}}" alt="home4" />
                                  <span>Furniture Demo</span>
                                </a>
                              </div>

                              <div class="col-xl-2 mega-box">
                                <a class="home-box" href="index-5.html">
                                  <img class="img-fluid" src="{{asset('theme/assets/images/demo-img/demo5.jpg')}}" alt="home5" />
                                  <span>Watch Demo</span>
                                </a>
                              </div>

                              <div class="col-xl-2 mega-box">
                                <a class="home-box" href="index-6.html">
                                  <img class="img-fluid" src="{{asset('theme/assets/images/demo-img/demo6.jpg')}}" alt="home6" />
                                  <span>Shoes Demo</span>
                                </a>
                              </div>
                            </div>
                          </div>
                        </li>

                        <!-- Shop -->
                        <li class="nav-item dropdown">
                          <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Shop</a>
                          <div class="dropdown-menu">
                            <div class="dropdown-column">
                              <a class="dropdown-item" href="shop-categories.html">Shop Categories</a>
                              <a class="dropdown-item" href="shop-filter.html">Shop Filter</a>
                              <a class="dropdown-item" href="shop-left-sidebar.html">Shop Left Sidebar</a>
                              <a class="dropdown-item" href="shop-list.html">Shop List</a>
                              <a class="dropdown-item" href="shop-masanory.html">Shop Masonry</a>
                              <a class="dropdown-item" href="shop-no-sidebar.html">Shop No Sidebar</a>
                              <a class="dropdown-item" href="shop-right-sidebar.html">Shop Right Sidebar</a>
                              <a class="dropdown-item" href="shop-top-filter.html">Shop Top Filter</a>
                            </div>
                          </div>
                        </li>

                        <!-- Product -->
                        <li class="nav-item dropdown">
                          <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Product</a>
                          <div class="dropdown-menu">
                            <div class="dropdown-column">
                              <a class="dropdown-item" href="product-four-image.html">Product 4 Images</a>
                              <a class="dropdown-item" href="product-slider.html">Product Slider </a>
                              <a class="dropdown-item" href="product-sticky.html">Product Sticky</a>
                              <a class="dropdown-item" href="product-three-column.html">Product 3 Column</a>
                              <a class="dropdown-item" href="product-video-img.html">Product Video</a>
                              <a class="dropdown-item" href="product.html">Product Simple</a>
                            </div>
                          </div>
                        </li>

                        <!-- Oslo Plus -->
                        <li class="nav-item dropdown dropdown-mega">
                          <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Oslo Plus</a>
                          <div class="dropdown-menu mega-element-menu">
                            <div class="row g-4">
                              <div class="col-xl-3">
                                <div class="link-box">
                                  <h5>Portfolio Pages</h5>
                                  <div class="dropdown-column">
                                    <a class="dropdown-item" href="portfolio-2-grid.html">Portfolio 2 Grid</a>
                                    <a class="dropdown-item" href="portfolio-2-grid-masonry.html">Portfolio 2 Grid Masonry</a>
                                    <a class="dropdown-item" href="portfolio-3-grid.html">Portfolio 3 Grid <span class="badge bg-theme-theme">Hot</span></a>
                                    <a class="dropdown-item" href="portfolio-3-grid-masonry.html">Portfolio 3 Grid Masonry</a>
                                    <a class="dropdown-item" href="portfolio-4-grid.html">Portfolio 4 Grid</a>
                                    <a class="dropdown-item" href="portfolio-4-grid-masonry.html">Portfolio 4 Grid Masonry</a>
                                    <a class="dropdown-item" href="portfolio-no-space-masonry.html">Portfolio No Space Masonry</a>
                                  </div>
                                </div>
                              </div>

                              <div class="col-xl-3">
                                <div class="link-box">
                                  <h5>Elements Pages</h5>
                                  <div class="dropdown-column">
                                    <a class="dropdown-item" href="banner-element.html">Banner Element</a>
                                    <a class="dropdown-item" href="brand-element.html">Brand Element</a>
                                    <a class="dropdown-item" href="button-element.html">Button Element </a>
                                    <a class="dropdown-item" href="categories-element.html">Categories Element</a>
                                    <a class="dropdown-item" href="collection-banner-element.html">Collection Banner Element</a>
                                    <a class="dropdown-item" href="home-element.html">Home Banner Element</a>
                                    <a class="dropdown-item" href="instagram-element.html">Instagram Element <span class="badge bg-theme-sun2">New</span></a>
                                  </div>
                                </div>
                              </div>

                              <div class="col-xl-3">
                                <div class="link-box">
                                  <h5>Elements Pages</h5>
                                  <div class="dropdown-column">
                                    <a class="dropdown-item" href="offer-banner-element.html">Offer Banner Element</a>
                                    <a class="dropdown-item" href="brand-element.html">Brand Element <span class="badge bg-theme-theme">Hot</span></a>
                                    <a class="dropdown-item" href="product-card-element.html">Product Card Element</a>
                                    <a class="dropdown-item" href="seller-element.html">Seller Section Element</a>
                                    <a class="dropdown-item" href="service-element.html">Service Section Element</a>
                                    <a class="dropdown-item" href="tabs-element.html">Tabs Element</a>
                                    <a class="dropdown-item" href="title-element.html">Title Element</a>
                                  </div>
                                </div>
                              </div>

                              <div class="col-xl-3 d-none d-xl-block">
                                <div class="link-box">
                                  <div class="menu-img">
                                    <img class="img-fluid" src="{{asset('theme/assets/images/demo-img/menu-bg.jpg')}}" alt="img" />
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </li>

                        <!-- Pages -->
                        <li class="nav-item dropdown">
                          <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Pages</a>
                          <div class="dropdown-menu">
                            <div class="dropdown-column">
                              <a class="dropdown-item" href="404.html">404</a>
                              <a class="dropdown-item" href="about-us.html">About Us </a>
                              <a class="dropdown-item" href="address.html">Address</a>
                              <a class="dropdown-item" href="cart.html">Cart</a>
                              <a class="dropdown-item" href="coming-soon.html">Coming Soon</a>
                              <a class="dropdown-item" href="compare.html">Compare</a>
                              <a class="dropdown-item" href="contact-us.html">Contact Us</a>
                              <a class="dropdown-item" href="faqs.html">Faqs</a>
                              <a class="dropdown-item" href="forgot-password.html">Forgot Password</a>
                              <a class="dropdown-item" href="login.html">Login</a>
                              <a class="dropdown-item" href="order-success.html">Order Success</a>
                              <a class="dropdown-item" href="otp.html">Otp</a>
                              <a class="dropdown-item" href="payment.html">Payment</a>
                              <a class="dropdown-item" href="register.html">Register</a>
                              <a class="dropdown-item" href="reset-password.html">Reset Password</a>
                              <a class="dropdown-item" href="search.html">Search</a>
                              <a class="dropdown-item" href="user-dashboard.html">User Dashboard</a>
                              <a class="dropdown-item" href="wishlist.html">Wishlist</a>
                            </div>
                          </div>
                        </li>

                        <!-- Blog -->
                        <li class="nav-item dropdown">
                          <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Blog</a>
                          <div class="dropdown-menu">
                            <div class="dropdown-column">
                              <a class="dropdown-item" href="blog-detail.html">Blog Details</a>
                              <a class="dropdown-item" href="blog-grid.html">Blog Grid </a>
                              <a class="dropdown-item" href="blog-list.html">Blog List</a>
                            </div>
                          </div>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </nav>
          <!-- Navigation End -->

          <!-- Menu Right Start  -->
          <div class="menu-right">
            <div class="select-menu">
              <div class="dropdown select-dropdown">
                <button id="unitSelected"><span>USD</span> <i data-feather="chevron-down"></i></button>
                <ul class="onhover-show-div">
                  <li class="unit">USD</li>
                  <li class="unit">EUR</li>
                  <li class="unit">INR</li>
                  <li class="unit">CNY</li>
                </ul>
              </div>
              <div class="dropdown select-dropdown" id="translate">
                <button id="languageSelected"><span>English</span> <i data-feather="chevron-down"></i></button>
                <ul class="onhover-show-div">
                  <li class="lang">English</li>
                  <li class="lang">Chinese</li>
                  <li class="lang">Arabic</li>
                  <li class="lang">Russian</li>
                </ul>
              </div>
            </div>

            <!-- Icon Menu Start -->
            <ul class="icon-menu">
              <li>
                <button class="search-button"><i data-feather="search"></i></button>
                <!-- Search Input Start -->
                <div class="search-full">
                  <div class="input-group">
                    <span class="input-group-text">
                      <i data-feather="search"></i>
                    </span>
                    <input type="text" class="form-control search-type" placeholder="Search here.." />
                    <span class="input-group-text close-search">
                      <i data-feather="x"></i>
                    </span>
                  </div>

                  <!-- Suggestion Start -->
                  <div class="search-suggestion">
                    <ul>
                      <li>
                        <div class="product-cart media">
                          <img src="{{asset('theme/assets/images/fashion/product/front/4.jpg')}}" class="img-fluid blur-up lazyload" alt="" />
                          <div class="media-body">
                            <a href="javascript:void(0)">
                              <h6>Women’s long sleeve Jacket</h6>
                            </a>
                            <ul class="rating p-0 mb">
                              <li>
                                <i class="fill" data-feather="star"></i>
                              </li>
                              <li>
                                <i class="fill" data-feather="star"></i>
                              </li>
                              <li>
                                <i class="fill" data-feather="star"></i>
                              </li>
                              <li>
                                <i class="fill" data-feather="star"></i>
                              </li>
                              <li>
                                <i data-feather="star"></i>
                              </li>
                            </ul>
                            <p class="mb-0 mt-1">$280.00</p>
                          </div>
                        </div>
                      </li>
                      <li>
                        <div class="product-cart media">
                          <img src="{{asset('theme/assets/images/fashion/product/front/5.jpg')}}" class="img-fluid blur-up lazyload" alt="" />
                          <div class="media-body">
                            <a href="javascript:void(0)">
                              <h6>Shirt short mini dresses</h6>
                            </a>
                            <ul class="rating p-0">
                              <li>
                                <i class="fill" data-feather="star"></i>
                              </li>
                              <li>
                                <i class="fill" data-feather="star"></i>
                              </li>
                              <li>
                                <i class="fill" data-feather="star"></i>
                              </li>
                              <li>
                                <i class="fill" data-feather="star"></i>
                              </li>
                              <li>
                                <i data-feather="star"></i>
                              </li>
                            </ul>
                            <p class="mb-0 mt-1">$35.00</p>
                          </div>
                        </div>
                      </li>
                    </ul>
                  </div>
                  <!-- Suggestion Start -->
                </div>
                <!-- Search Input End -->
              </li>

              <li class="user">
                <div class="dropdown user-dropdown">
                  <a href="javascript:void(0)"><i data-feather="user"></i></a>
                  <ul class="onhover-show-div">
                    <li><a href="login.html">Login</a></li>
                    <li><a href="register.html">Register</a></li>
                  </ul>
                </div>
              </li>

              <li>
                <div class="dropdown whislist-dropdown">
                  <a href="javascript:void(0)"><i data-feather="heart"></i> <span class="notification-label">0</span></a>
                  <div class="onhover-show-div">
                    <a href="wishlist.html"> <img src="https://themes.pixelstrap.com/oslo/assets/icons/svg/box.svg" class="img-fluid" alt="box" /> </a>
                    <div class="content">
                      <a href="wishlist.html">
                        <h6>Your wishlist empty !!</h6>
                        <p>explore more and shortlist items.</p>
                      </a>
                    </div>
                  </div>
                </div>
              </li>

              <!-- Cart Menu Start -->
              <li>
                <div class="dropdown shopingbag">
                  <a href="javascript:void(0)" class="cart-button"><i data-feather="shopping-bag"></i> <span class="notification-label">3</span></a>
                  <a href="javascript:void(0)" class="overlay-cart overlay-common"></a>
                  <div class="onhover-cart-dropdown">
                    <div class="onhover-show-div">
                      <div class="dropdown-header">
                        <div class="control">
                          <a href="cart.html">Shopping Cart</a>
                          <button class="back-cart"><i data-feather="arrow-right"></i></button>
                        </div>
                      </div>

                      <div class="card-wrap custom-scroll">
                        <!-- Cart Item Start -->
                        <div class="cart-card media">
                          <a href="product.html"> <img src="{{asset('theme/assets/images/fashion/product/front/8.jpg')}}" class="img-fluid" alt="product" /> </a>
                          <div class="media-body">
                            <a href="product.html"> <h6>Concrete Jungle Pack</h6></a>
                            <span>$120.00</span>
                            <div class="plus-minus">
                              <i class="sub" data-feather="minus"></i>
                              <input type="number" value="1" min="1" max="10" />
                              <i class="add" data-feather="plus"></i>
                            </div>
                          </div>
                          <button class="remove-cart"><i data-feather="x"></i></button>
                        </div>
                        <!-- Cart Item End -->

                        <!-- Cart Item Start -->
                        <div class="cart-card media">
                          <a href="product.html"> <img src="{{asset('theme/assets/images/fashion/product/front/9.jpg')}}" class="img-fluid" alt="product" /> </a>
                          <div class="media-body">
                            <a href="product.html"> <h6>Concrete Jungle Pack</h6></a>
                            <span>$120.00</span>
                            <div class="plus-minus">
                              <i class="sub" data-feather="minus"></i>
                              <input type="number" value="1" min="1" max="10" />
                              <i class="add" data-feather="plus"></i>
                            </div>
                          </div>
                          <button class="remove-cart"><i data-feather="x"></i></button>
                        </div>
                        <!-- Cart Item End -->

                        <!-- Cart Item Start -->
                        <div class="cart-card media">
                          <a href="product.html"> <img src="{{asset('theme/assets/images/fashion/product/front/7.jpg')}}" class="img-fluid" alt="product" /> </a>
                          <div class="media-body">
                            <a href="product.html"> <h6>Concrete Jungle Pack</h6></a>
                            <span>$120.00</span>
                            <div class="plus-minus">
                              <i class="sub" data-feather="minus"></i>
                              <input type="number" value="1" min="1" max="10" />
                              <i class="add" data-feather="plus"></i>
                            </div>
                          </div>
                          <button class="remove-cart"><i data-feather="x"></i></button>
                        </div>
                        <!-- Cart Item End -->
                      </div>
                      <div class="dropdown-footer">
                        <div class="freedelevery">
                          <p class="terms-condition">FREE SHIPPING! Continue Shopping to add more product to you cart and receive free shipping for orders over <strong>$500</strong></p>
                          <div class="progress">
                            <div class="progress-bar" role="progressbar" style="width: 70%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">70%</div>
                          </div>
                        </div>
                        <div class="total-price">
                          <span>Total</span>
                          <span>$450</span>
                        </div>

                        <div class="btn-group block-group">
                          <a href="cart.html" class="btn-solid">View Cart</a>
                          <a href="payment.html" class="btn-outline">Checkout</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </li>
              <!-- Cart Menu End -->
            </ul>
            <!-- Icon Menu End -->
          </div>
          <!-- Menu Right End  -->
        </div>
      </div>
    </header>
    <!-- Header End -->

    <!-- Main Start -->
    @yield('content')
    <!-- Main End -->

    <!-- Document Footer Start -->
    <footer class="footer-document footer-document2 ratio_asos mb-xxl">
      <div class="bg-footer-l">
        <img src="{{asset('theme/assets/images/bag/banner/bg-footer-l.png')}}" alt="banner" />
      </div>
      <div class="bg-footer-r">
        <img src="{{asset('theme/assets/images/bag/banner/bg-footer-r.png')}}" alt="banner" />
      </div>
      <div>
        <div class="container-lg">
          <div class="main-footer">
            <div class="row gy-3 gy-md-4 gy-xl-0">
              <div class="col-xl-3 col-lg-4 col-md-6">
                <div class="content-box">
                  <img class="logo" src="{{asset('theme/assets/images/logos/logo-4-w.png')}}" alt="logo-white" />
                  <ul>
                    <li><i data-feather="map-pin"></i> <span> 1418 Riverwood Drive, Suite 3245 Cottonwood, CA 96052, United States </span></li>
                    <li>
                      <i data-feather="phone"></i><a class="nav" href="tel:185659635"><span> + 185659635 </span></a>
                    </li>
                    <li>
                      <i data-feather="mail"></i><a class="nav" href="mailto:fashion098@gmail.com"><span> fashion098@gmail.com </span></a>
                    </li>
                  </ul>
                </div>
              </div>

              <div class="nav-footer col-lg-2 col-md-4 order-md-3 order-lg-2">
                <div class="nav content-box d-md-block">
                  <h5 class="heading-footer line-style">Shop By</h5>
                  <ul>
                    <li><a class="nav" href="shop-left-sidebar.html">New In </a></li>
                    <li><a class="nav" href="shop-left-sidebar.html">Women </a></li>
                    <li><a class="nav" href="shop-left-sidebar.html">Men </a></li>
                    <li><a class="nav" href="shop-left-sidebar.html">Shoes</a></li>
                    <li><a class="nav" href="shop-left-sidebar.html">Bags & Accessories </a></li>
                    <li><a class="nav" href="shop-left-sidebar.html">Top Brands </a></li>
                  </ul>
                </div>
              </div>

              <div class="nav-footer col-xl-2 col-lg-3 col-md-4 order-md-4 order-lg-3">
                <div class="nav d-md-block content-box">
                  <h5 class="heading-footer line-style">Information</h5>
                  <ul>
                    <li><a class="nav" href="{{url('/')}}">Home </a></li>
                    <li><a class="nav" href="shop-left-sidebar.html">Shop </a></li>
                    <li><a class="nav" href="about-us.html">About Us</a></li>
                    <li><a class="nav" href="blog-detail.html">Blog </a></li>
                    <li><a class="nav" href="contact-us.html">Contact </a></li>
                  </ul>
                </div>
              </div>

              <div class="nav-footer col-xl-2 col-lg-3 col-md-4 order-md-5 order-lg-4">
                <div class="nav d-md-block content-box">
                  <h5 class="heading-footer line-style">Get Help</h5>
                  <ul>
                    <li><a class="nav" href="user-dashboard.html">Your Orders </a></li>
                    <li><a class="nav" href="user-dashboard.html">Your Account </a></li>
                    <li><a class="nav" href="user-dashboard.html">Track Order</a></li>
                    <li><a class="nav" href="wishlist.html">Your Wishlist</a></li>
                    <li><a class="nav" href="search.html">Search</a></li>
                    <li><a class="nav" href="faqs.html">Faqs</a></li>
                  </ul>
                </div>
              </div>

              <div class="col-xl-3 col-md-6 col-lg-4 order-md-2 order-lg-5">
                <div class="content-box">
                  <h5 class="heading-footer line-style">Follow Us</h5>
                  <div class="follow-wrap">
                    <ul>
                      <li>
                        <a href="https://www.facebook.com/"> <img src="https://themes.pixelstrap.com/oslo/assets/icons/svg/social/fb.svg" alt="fb" /> </a>
                      </li>
                      <li>
                        <a href="https://www.instagram.com/accounts/login/?source=auth_switcher"> <img src="https://themes.pixelstrap.com/oslo/assets/icons/svg/social/inta.svg" alt="fb" /> </a>
                      </li>
                      <li>
                        <a href="https://twitter.com/i/flow/login"> <img src="https://themes.pixelstrap.com/oslo/assets/icons/svg/social/tw.svg" alt="fb" /> </a>
                      </li>

                    </ul>
                  </div>

                  <div class="subscribe-box">
                    <h5>Newsletter Sign Up</h5>
                    <p>Receive our latest updates about our products & promotions.</p>
                  </div>

                  <form action="javascript:void(0)" class="footer-form">
                    <input required type="email" class="form-control" placeholder="Your email address" />
                    <div class="btn-style4 btn-theme py-0">
                      <button type="submit" class="btn">
                        <span class="corner-wrap left-top">
                          <span class="corner"></span>
                        </span>
                        <span class="corner-wrap right-bottom">
                          <span class="corner"></span>
                        </span>
                        Submit
                      </button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>

          <div class="sub-footer">
            <div class="row gy-3">
              <div class="col-md-6">
                <ul>
                  <li>
                    <a href="javascript:void(0)"> <img src="{{asset('theme/assets/icons/png/1.png')}}" class="img-fluid blur-up lazyload" alt="payment icon" /></a>
                  </li>
                  <li>
                    <a href="javascript:void(0)"> <img src="{{asset('theme/assets/icons/png/2.png')}}" class="img-fluid blur-up lazyload" alt="payment icon" /></a>
                  </li>
                  <li>
                    <a href="javascript:void(0)"> <img src="{{asset('theme/assets/icons/png/3.png')}}" class="img-fluid blur-up lazyload" alt="payment icon" /></a>
                  </li>
                  <li>
                    <a href="javascript:void(0)"> <img src="{{asset('theme/assets/icons/png/4.png')}}" class="img-fluid blur-up lazyload" alt="payment icon" /></a>
                  </li>
                </ul>
              </div>
              <div class="col-md-6">
                <p class="mb-0">Copyright © {{date('Y')}}, All Rights Reserved Template. Powered By Designekta Studios</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <!-- Document Footer End -->

    <!-- Mobile Menu Footer Start -->
    <footer class="mobile-menu-footer d-sm-none">
      <ul>
        <li>
          <a href="{{url('/')}}" class="active">
            <i data-feather="home"></i>
            <span>Home</span>
          </a>
        </li>
        <li>
          <a href="search.html" class="search-link">
            <i data-feather="search"></i>
            <span>Search</span>
          </a>
        </li>
        <li>
          <a href="cart.html">
            <i data-feather="shopping-bag"></i>
            <span>Cart</span>
          </a>
        </li>
        <li>
          <a href="wishlist.html">
            <i data-feather="heart"></i>
            <span>Wishlist</span>
          </a>
        </li>
        <li>
          <a href="user-dashboard.html">
            <i data-feather="user"></i>
            <span>Account</span>
          </a>
        </li>
      </ul>
    </footer>
    <!-- Mobile Menu Footer End -->

    <!-- Notification Start -->
    <div class="notification-wrap addToCart">
      <div class="notification">
        <img src="{{asset('theme/assets/images/furniture/product/jpg/1.jpg')}}" alt="product" />
        <div>
          <h5>Added To Cart</h5>
        </div>
      </div>
    </div>
    <!-- Notification End -->

    <!-- Notification Start -->
    <div class="notification-wrap addToWishlist">
      <div class="notification">
        <img src="{{asset('theme/assets/images/furniture/product/jpg/1.jpg')}}" alt="product" />
        <div>
          <h5>Added To Wishlist</h5>
        </div>
      </div>
    </div>
    <!-- Notification End -->

    <!-- View Product Modal Start -->
    <div class="modal view-product fade" id="viewModal" tabindex="-1" aria-labelledby="viewModal" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-body">
            <span class="close-modal d-none d-md-block" data-bs-toggle="modal" data-bs-target="#viewModal"><i data-feather="x"></i></span>
            <div class="row gy-4 g-md-0">
              <div class="col-md-7">
                <div class="slider-box">
                  <span class="close-modal d-md-none" data-bs-toggle="modal" data-bs-target="#viewModal"><i data-feather="x"></i></span>
                  <div class="row g-2">
                    <div class="col-2">
                      <div class="thumbnail-box">
                        <div class="swiper thumbnail-img-box thumbnailSlider">
                          <div class="swiper-wrapper">
                            <div class="swiper-slide">
                              <img src="{{asset('theme/assets/images/furniture/product/jpg/16.jpg')}}" alt="img" />
                            </div>
                            <div class="swiper-slide">
                              <img src="{{asset('theme/assets/images/furniture/product/jpg/16-1.jpg')}}" alt="img" />
                            </div>
                            <div class="swiper-slide">
                              <img src="{{asset('theme/assets/images/furniture/product/jpg/16-2.jpg')}}" alt="img" />
                            </div>
                            <div class="swiper-slide">
                              <img src="{{asset('theme/assets/images/furniture/product/jpg/16-3.jpg')}}" alt="img" />
                            </div>
                            <div class="swiper-slide">
                              <img src="{{asset('theme/assets/images/furniture/product/jpg/16-2.jpg')}}" alt="img" />
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-10 ratio_square">
                      <div class="swiper mainslider">
                        <div class="swiper-wrapper">
                          <div class="swiper-slide">
                            <img class="bg-img" src="{{asset('theme/assets/images/furniture/product/jpg/16.jpg')}}" alt="img" />
                          </div>
                          <div class="swiper-slide">
                            <img class="bg-img" src="{{asset('theme/assets/images/furniture/product/jpg/16-1.jpg')}}" alt="img" />
                          </div>
                          <div class="swiper-slide">
                            <img class="bg-img" src="{{asset('theme/assets/images/furniture/product/jpg/16-2.jpg')}}" alt="img" />
                          </div>
                          <div class="swiper-slide">
                            <img class="bg-img" src="{{asset('theme/assets/images/furniture/product/jpg/16-3.jpg')}}" alt="img" />
                          </div>
                          <div class="swiper-slide">
                            <img class="bg-img" src="{{asset('theme/assets/images/furniture/product/jpg/16-2.jpg')}}" alt="img" />
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-5">
                <div class="product-detail-box furniture">
                  <div class="product-option">
                    <h4>Oak Furniture Store</h4>
                    <div class="option price">
                      <h5>Price</h5>
                      <span> $200.00 </span> <del>$300.00</del>
                    </div>
                    <div class="option">
                      <h5>Product Description</h5>
                      <p class="content-color">
                        Interactively synthesize fractionalized bandwidth and resource sucking infrastructures. Proactively incubate resource sucking benefits rather than frictionless infrastructures.
                      </p>
                    </div>
                    <div class="option">
                      <h5>Material:</h5>
                      <ul class="color-list">
                        <li class="bg-theme-p-1 active"></li>
                        <li class="bg-theme-p-2"></li>
                        <li class="bg-theme-p-3"></li>
                      </ul>
                    </div>
                    <div class="option">
                      <h5>Size:</h5>
                      <ul class="size-list">
                        <li class="active">3/4" x 1-1/2"</li>
                        <li>4/8" x 1-2/4"</li>
                      </ul>
                    </div>
                    <div class="option">
                      <h5>Quantity:</h5>
                      <div class="plus-minus">
                        <i class="sub" data-feather="minus"></i>
                        <input type="number" value="1" min="1" max="10" />
                        <i class="add" data-feather="plus"></i>
                      </div>
                    </div>

                    <div class="btn-group">
                      <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#viewModal" class="btn-solid btn-sm addtocart-btn">Add To Cart </a>
                      <a href="product.html" class="btn-outline btn-sm">View Full</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- View Product Modal End -->

    <!-- Cookies Section Start -->
    <div class="cookie-bar cookies-bar-1 left-cookies">
      <img src="{{asset('theme/assets/png/cookie.png')}}" alt="cookies" />
      <div class="content">
        <h5>Cookies Consent</h5>
        <p>This website use cookies to ensure you get the best experience on our website.</p>
        <div class="cookie-buttons">
          <button class="btn-solid btn-sm mb-line cookies-accept">Accept <i class="arrow"></i></button>
          <a href="javascript:void(0)" class="btn-solid btn-sm btn-outline cookies-accept">Learn more</a>
        </div>
      </div>
    </div>
    <!-- Cookie Section End -->

    <!-- Tap To Top Button Start -->
    <div class="tap-to-top-box hide">
      <button class="tap-to-top-button"><i data-feather="chevrons-up"></i></button>
    </div>
    <!-- Tap To Top Button End -->

    <!-- Bootstrap Js -->
    <script src="{{asset('theme/assets/js/bootstrap/bootstrap.bundle.min.js')}}"></script>

    <!-- Feather Icon -->
    <script src="{{asset('theme/assets/js/feather/feather.min.js')}}"></script>

    <!-- Swiper Slider Js -->
    <script src="{{asset('theme/assets/js/swiper-slider/swiper-bundle.min.js')}}"></script>
    <script src="{{asset('theme/assets/js/swiper-slider/swiper-custom.min.js')}}"></script>

    <!-- Header Sticky js  -->
    <script src="{{asset('theme/assets/js/sticky-header.js')}}"></script>

    <!-- Active Class js  -->
    <script src="{{asset('theme/assets/js/active-class.js')}}"></script>

    <!-- Wow Js -->
    <script src="{{asset('theme/assets/js/wow.js')}}"></script>
    <script src="{{asset('theme/assets/js/wow-custom.js')}}"></script>

    <!-- Script Js -->
    <script src="{{asset('theme/assets/js/script.js')}}"></script>

    <!-- Theme Settings Js -->
    <script src="{{asset('theme/assets/js/theme-setting.js')}}"></script>
  </body>
  <!-- Body End -->

</html>
<!-- Html End -->
