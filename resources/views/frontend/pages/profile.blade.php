
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>Online Medicine Shop</title>
    <link rel="shortcut icon" href="{{ asset('frontend') }}/assets/images/logo/favourite_icon_1.png">

    <!-- fraimwork - css include -->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend') }}/assets/css/bootstrap.min.css">

    <!-- icon font - css include -->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend') }}/assets/css/fontawesome.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend') }}/assets/css/stroke-gap-icons.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend') }}/assets/css/icofont.css">

    <!-- animation - css include -->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend') }}/assets/css/animate.css">

    <!-- carousel - css include -->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend') }}/assets/css/slick.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend') }}/assets/css/slick-theme.css">

    <!-- popup - css include -->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend') }}/assets/css/magnific-popup.css">

    <!-- jquery-ui - css include -->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend') }}/assets/css/jquery-ui.css">

    <!-- select option - css include -->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend') }}/assets/css/nice-select.css">

    <!-- custom - css include -->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend') }}/assets/css/style.css">
</head>


<body>

    <!-- body_wrap - start -->
    <div class="body_wrap">

        <!-- backtotop - start -->
        <div class="backtotop">
            <a href="#" class="scroll">
                <i class="far fa-arrow-up"></i>
            </a>
        </div>
        <!-- backtotop - end -->

        <!-- preloader - start -->
        <div id="preloader"></div>
        <!-- preloader - end -->

    <!-- header_section - start
	================================================== -->
	<header class="header_section header-style-3">
		<div class="header_top">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col col-md-6">
                            <ul class="header_select_options ul_li">
                                <li>
                                    <div class="select_option">
                                        <div class="flug_wrap">
                                        </div>
                                        <select>
                                            <option data-display="Select Option">Select Your Language</option>
                                            <option value="1" selected>English</option>
                                            <option value="2">Bangla</option>
                                            <option value="3" disabled>Arabic</option>
                                            <option value="4">Hebrew</option>
                                        </select>
                                    </div>
                                </li>
                                
                            </ul>
                        </div>
                        <div class="col col-md-6">
                            <p class="header_hotline">Call us toll free: <strong>+1888 234 5678</strong></p>
                        </div>
                    </div>
                </div>
        </div>

		{{-- <div class="header_middle">
			<div class="container">
				<div class="row align-items-center">
					<div class="col col-lg-3 col-md-3 col-sm-12">
						<div class="brand_logo">
							<a class="brand_link" href="index.html">
								<img src="assets/images/logo/logo_1x.png" srcset="assets/images/logo/logo_2x.png 2x" alt="logo_not_found">
							</a>
						</div>
					</div>

					<div class="col col-lg-6 col-md-6 col-sm-12">
						<form action="#">
							<div class="advance_serach">
								<div class="select_option mb-0 clearfix">
									<select>
										<option data-display="All Categories">Select A Category</option>
										<option value="1">New Arrival Products</option>
										<option value="2">Most Popular Products</option>
										<option value="3">Deals of the day</option>
										<option value="4">Mobile Accessories</option>
										<option value="5">Computer Accessories</option>
										<option value="6">Consumer Electronics</option>
										<option value="7">Automobiles & Motorcycles</option>
									</select>
								</div>
								<div class="form_item">
									<input type="search" name="search" placeholder="Search Prudcts...">
									<button type="submit" class="search_btn"><i class="far fa-search"></i></button>
								</div>
							</div>
						</form>
					</div>

					<div class="col col-lg-3 col-md-3 col-sm-12">
						<button class="mobile_menu_btn2 navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#main_menu_dropdown" aria-controls="main_menu_dropdown" aria-expanded="false" aria-label="Toggle navigation">
							<i class="fal fa-bars"></i>
						</button>
						<button type="button" class="cart_btn">
							<ul class="header_icons_group ul_li_right">
								<li>
									<a href="wishlist.html">
										<svg role="img" xmlns="http://www.w3.org/2000/svg" width="30px" height="30px" viewBox="0 0 24 24" stroke="#051d43" stroke-width="1" stroke-linecap="square" stroke-linejoin="miter" fill="none" color="#2329D6"> <title>Favourite</title> <path d="M12,21 L10.55,19.7051771 C5.4,15.1242507 2,12.1029973 2,8.39509537 C2,5.37384196 4.42,3 7.5,3 C9.24,3 10.91,3.79455041 12,5.05013624 C13.09,3.79455041 14.76,3 16.5,3 C19.58,3 22,5.37384196 22,8.39509537 C22,12.1029973 18.6,15.1242507 13.45,19.7149864 L12,21 Z"/> </svg>
										<span class="wishlist_counter">3</span>
									</a>
								</li>
								<li>
									<span class="cart_icon">
										<i class="icon icon-ShoppingCart"></i>
										<small class="cart_counter">3</small>
									</span>
								</li>
							</ul>
						</button>
					</div>
				</div>
			</div>
		</div> --}}

		{{-- <div class="header_bottom">
			<div class="container">
				<div class="row align-items-center">
					<div class="col col-md-3">
						<div class="allcategories_dropdown">
							<button class="allcategories_btn" type="button" data-bs-toggle="collapse" data-bs-target="#allcategories_collapse" aria-expanded="false" aria-controls="allcategories_collapse">
								<svg role="img" xmlns="http://www.w3.org/2000/svg" width="32px" height="32px" viewBox="0 0 24 24" aria-labelledby="statsIconTitle" stroke="#000" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" fill="none" color="#000"> <title id="statsIconTitle">Stats</title> <path d="M6 7L15 7M6 12L18 12M6 17L12 17"/> </svg>
								Browse categories
							</button>
							<div class="allcategories_collapse collapse" id="allcategories_collapse">
								<div class="card card-body">
									<ul class="allcategories_list ul_li_block">
										<li><a href="shop_grid.html"><i class="icon icon-Starship"></i> New Arrival Products</a></li>
										<li><a href="shop_list.html"><i class="icon icon-WorldWide"></i> Most Popular Products</a></li>
										<li><a href="shop_grid.html"><i class="icon icon-Star"></i> Deals of the day</a></li>
										<li><a href="shop_list.html"><i class="icon icon-Phone"></i> Mobile Accessories</a></li>
										<li><a href="shop_grid.html"><i class="icon icon-DesktopMonitor"></i> Computer Accessories</a></li>
										<li><a href="shop_list.html"><i class="icon icon-Bulb"></i> Consumer Electronics</a></li>
										<li><a href="shop_grid.html"><i class="icon icon-Car"></i> Automobiles & Motorcycles</a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>

					<div class="col col-md-6">
                            <nav class="main_menu navbar navbar-expand-lg">
                                <div class="main_menu_inner collapse navbar-collapse" id="main_menu_dropdown">
                                    <button type="button" class="offcanvas_close">
                                        <i class="fal fa-times"></i>
                                    </button>
                                    <ul class="main_menu_list ul_li">
                                        <li><a class="nav-link" href="#">Home</a></li>
                                        <li><a class="nav-link" href="#">About us</a></li>
                                        <li><a class="nav-link" href="#">Shop</a></li>
                                        <li><a class="nav-link" href="#">Contact Us</a></li>
                                    </ul>
                                </div>
                            </nav>
                            <div class="offcanvas_overlay"></div>
                        </div>

					<div class="col col-md-3">
                            <ul class="header_icons_group ul_li_right">
                                 <li>
                                    <a href="#">Jon Doe</a>
                                </li>
                                
                                <li>
                                    <a href="account.html">
                                        <svg role="img" xmlns="http://www.w3.org/2000/svg" width="30px" height="30px" viewBox="0 0 24 24" stroke="#051d43" stroke-width="1" stroke-linecap="square" stroke-linejoin="miter" fill="none" color="#2329D6"> <title id="personIconTitle">Person</title> <path d="M4,20 C4,17 8,17 10,15 C11,14 8,14 8,9 C8,5.667 9.333,4 12,4 C14.667,4 16,5.667 16,9 C16,14 13,14 14,15 C16,17 20,17 20,20"/> </svg>
                                    </a>
                                </li>
                            </ul>
                        </div>
				</div>
			</div>
		</div> --}}
	</header>
	<!-- header_section - end
	================================================== -->

        <!-- main body - start
        ================================================== -->
        <main>

            <!-- sidebar cart - start
            ================================================== -->
            <div class="sidebar-menu-wrapper">
                <div class="cart_sidebar">
                    <button type="button" class="close_btn"><i class="fal fa-times"></i></button>
                    <ul class="cart_items_list ul_li_block mb_30 clearfix">
                        <li>
                            <div class="item_image">
                                <img src="assets/images/cart/cart_img_1.jpg" alt="image_not_found">
                            </div>
                            <div class="item_content">
                                <h4 class="item_title">Yellow Blouse</h4>
                                <span class="item_price">$30.00</span>
                            </div>
                            <button type="button" class="remove_btn"><i class="fal fa-trash-alt"></i></button>
                        </li>
                        <li>
                            <div class="item_image">
                                <img src="assets/images/cart/cart_img_2.jpg" alt="image_not_found">
                            </div>
                            <div class="item_content">
                                <h4 class="item_title">Yellow Blouse</h4>
                                <span class="item_price">$30.00</span>
                            </div>
                            <button type="button" class="remove_btn"><i class="fal fa-trash-alt"></i></button>
                        </li>
                        <li>
                            <div class="item_image">
                                <img src="assets/images/cart/cart_img_3.jpg" alt="image_not_found">
                            </div>
                            <div class="item_content">
                                <h4 class="item_title">Yellow Blouse</h4>
                                <span class="item_price">$30.00</span>
                            </div>
                            <button type="button" class="remove_btn"><i class="fal fa-trash-alt"></i></button>
                        </li>
                    </ul>

                    <ul class="total_price ul_li_block mb_30 clearfix">
                        <li>
                            <span>Subtotal:</span>
                            <span>$90</span>
                        </li>
                        <li>
                            <span>Vat 5%:</span>
                            <span>$4.5</span>
                        </li>
                        <li>
                            <span>Discount 20%:</span>
                            <span>- $18.9</span>
                        </li>
                        <li>
                            <span>Total:</span>
                            <span>$75.6</span>
                        </li>
                    </ul>
                    <ul class="btns_group ul_li_block clearfix">
                        <li><a class="btn btn_primary" href="cart.html">View Cart</a></li>
                        <li><a class="btn btn_secondary" href="checkout.html">Checkout</a></li>
                    </ul>
                </div>
                <div class="cart_overlay"></div>
            </div>
            <!-- sidebar cart - end
            ================================================== -->

            <!-- breadcrumb_section - start
            ================================================== -->
            <div class="breadcrumb_section">
                <div class="container">
                    <ul class="breadcrumb_nav ul_li">
                        <li><a href="index.html">Home</a></li>
                        <li>My Account</li>
                    </ul>
                </div>
            </div>
            <!-- breadcrumb_section - end
            ================================================== -->

            <!-- account_section - start
            ================================================== -->
            <section class="account_section section_space">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3 account_menu">
                            <div class="nav account_menu_list flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                <button class="nav-link text-start active w-100" id="v-pills-home-tab" data-bs-toggle="pill" data-bs-target="#v-pills-home" type="button" role="tab" aria-controls="v-pills-home" aria-selected="true">Account Dashboard </button>
                                <button class="nav-link text-start w-100" id="v-pills-profile-tab" data-bs-toggle="pill" data-bs-target="#v-pills-profile" type="button" role="tab" aria-controls="v-pills-profile" aria-selected="false">Acount</button>
                                <a href="{{route('order')}}" class="nav-link text-start w-100" id="v-pills-messages-tab" data-bs-toggle="pill" data-bs-target="#v-pills-messages" type="button" role="tab" aria-controls="v-pills-messages" aria-selected="false">My Orders</a>
                            </div>
                        </div>
                        <div class="col-lg-9">
                            <div class="tab-content bg-light p-3" id="v-pills-tabContent">
                                <div class="tab-pane fade show active text-center" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                                    <h5>Welcome to {{Auth::user()->name}}</h5>
                                </li>
                                </div>
                                <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                                    <h5 class="text-center pb-3">Account Details</h5>
                                    <form class="row g-3 p-2">
                                        <div class="col-md-6">
                                            <label for="inputnamel4" class="form-label">Name</label>
                                            <input type="text" value="{{Auth::user()->name}}" class="form-control" id="inputnamel4" value="Mr. Jon Doe">
                                        </div>
                                        <div class="col-md-6">
                                            <label for="inputEmail4" class="form-label">Email</label>
                                            <input type="email" value="{{Auth::user()->email}}" class="form-control" id="inputEmail4" value="jon@doe.com">
                                        </div>
                                        {{-- <div class="col-md-12">
                                            <label for="inputPassword4" class="form-label">Password</label>
                                            <input type="password" value="{{Auth::user()->password}}" class="form-control" id="inputPassword4">
                                        </div> --}}
                                        <div class="col-12 text-center">
                                            <button type="submit" class="btn btn-primary active">Update</button>
                                        </div>
                                     </form>
                                    </div>
                                <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
                                    <h5 class="text-center pb-3">Your Orders</h5>
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>Product</th>
                                                <th class="text-center">Price</th>
                                                <th class="text-center">Quantity</th>
                                                <th class="text-center">Total</th>
                                                <th class="text-center">Remove</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php 
                                                $subtotal=0;
                                                $delivery=20;
                                                $total =0;
                                            ?>
                                          @foreach($items as $item)
                                            <?php 
                                                $subtotal +=($item->price * $item->quantity) 
                                            
                                            ?>
                                            <tr>
                                                <td>
                                                    <div class="cart_product">
                                                        <img src="{{ asset('backend/medicine/'.$item->image) }}" alt="image_not_found">
                                                        <h3><a href="shop_details.html">{{$item->name}}</a></h3>
                                                    </div>
                                                </td>
                                                <td class="text-center"><span class="price_text">{{ $item->price }} tk</span></td>
                                                <td class="text-center">
                                                    <form action="#">
                                                        <div class="quantity_input">
                                                            <button type="button" class="input_number_decrement">
                                                                <i class="fal fa-minus"></i>
                                                            </button>
                                                            <input class="input_number_2" type="text" value="{{$item->quantity}}">
                                                            <button type="button" class="input_number_increment">
                                                                <i class="fal fa-plus"></i>
                                                            </button>
                                                        </div>
                                                    </form>
                                                </td>
                                                <td class="text-center"><span class="price_text">{{ $item->price }} tk</span></td>
                                                <td class="text-center"><button type="button" class="remove_btn"><i class="fal fa-trash-alt"></i></button></td>
                                            </tr>
                                          @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </section>
    <!-- account_section - end
    ================================================== -->

            <!-- newsletter_section - start
            ================================================== -->
            <section class="newsletter_section">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col col-lg-6">
                            <h2 class="newsletter_title text-white">Sign Up for Newsletter </h2>
                            <p>Get E-mail updates about our latest products and special offers.</p>
                        </div>
                        <div class="col col-lg-6">
                            <form action="#!">
                                <div class="newsletter_form">
                                    <input type="email" name="email" placeholder="Enter your email address">
                                    <button type="submit" class="btn btn_secondary">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </section>
            <!-- newsletter_section - end
            ================================================== -->

        </main>
        <!-- main body - end
        ================================================== -->

        <!-- footer_section - start
        ================================================== -->
        <footer class="footer_section">
            <div class="footer_widget_area">
                <div class="container">
                    <div class="row">
                        <div class="col col-lg-4 col-md-6 col-sm-6">
                            <div class="footer_widget footer_about">
                                <div class="brand_logo">
                                    <a class="brand_link" href="index.html">
                                        <img src="assets/images/logo/logo_1x.png" srcset="assets/images/logo/logo_2x.png 2x" alt="logo_not_found">
                                    </a>
                                </div>
                                <ul class="social_round ul_li">
                                    <li><a href="#!"><i class="icofont-youtube-play"></i></a></li>
                                    <li><a href="#!"><i class="icofont-instagram"></i></a></li>
                                    <li><a href="#!"><i class="icofont-twitter"></i></a></li>
                                    <li><a href="#!"><i class="icofont-facebook"></i></a></li>
                                    <li><a href="#!"><i class="icofont-linkedin"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        
                        <div class="col col-lg-2 col-md-3 col-sm-6">
                            <div class="footer_widget footer_useful_links">
                                <h3 class="footer_widget_title text-uppercase">Quick Links</h3>
                                <ul class="ul_li_block">
                                    <li><a href="about.html">About Us</a></li>
                                    <li><a href="contact.html">Contact Us</a></li>
                                    <li><a href="shop.html">Products</a></li>
                                    <li><a href="login.html">Login</a></li>
                                    <li><a href="register.html">Sign Up</a></li>
                                </ul>
                            </div>
                        </div>
                        
                        <div class="col col-lg-2 col-md-3 col-sm-6">
                            <div class="footer_widget footer_useful_links">
                                <h3 class="footer_widget_title text-uppercase">Custom area</h3>
                                <ul class="ul_li_block">
                                    <li><a href="#!">My Account</a></li>
                                    <li><a href="#!">Orders</a></li>
                                    <li><a href="#!">Team</a></li>
                                    <li><a href="#!">Privacy Policy</a></li>
                                    <li><a href="#!">My Cart</a></li>
                                </ul>
                            </div>
                        </div>
                        
                        <div class="col col-lg-4 col-md-6 col-sm-6">
                            <div class="footer_widget footer_contact">
                                <h3 class="footer_widget_title text-uppercase">Contact Onfo</h3>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.
                                </p>
                                <div class="hotline_wrap">
                                    <div class="footer_hotline">
                                        <div class="item_icon">
                                            <i class="icofont-headphone-alt"></i>
                                        </div>
                                        <div class="item_content">
                                            <h4 class="item_title">Have any question?</h4>
                                            <span class="hotline_number">+ 123 456 7890</span>
                                        </div>
                                    </div>
                                    <div class="livechat_btn clearfix">
                                        <a class="btn border_primary" href="#!">Live Chat</a>
                                    </div>
                                </div>
                                <ul class="store_btns_group ul_li">
                                    <li><a href="#!"><img src="assets/images/app_store.png" alt="app_store"></a></li>
                                    <li><a href="#!"><img src="assets/images/play_store.png" alt="play_store"></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="footer_bottom">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col col-md-6">
                            <p class="copyright_text">
                                ©2021 <a href="#!">OMS</a>. All Rights Reserved.
                            </p>
                        </div>
                        
                        <div class="col col-md-6">
                            <div class="payment_method">
                                <h4>Payment:</h4>
                                <img src="assets/images/payments_icon.png" alt="image_not_found">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- footer_section - end
        ================================================== -->

    </div>
    <!-- body_wrap - end -->

    <!-- fraimwork - jquery include -->
    <script src="{{ asset('frontend') }}/assets/js/jquery.min.js"></script>
    <script src="{{ asset('frontend') }}/assets/js/popper.min.js"></script>
    <script src="{{ asset('frontend') }}/assets/js/bootstrap.min.js"></script>

    <!-- carousel - jquery plugins collection -->
    <script src="{{ asset('frontend') }}/assets/js/jquery-plugins-collection.js"></script>

    <!-- google map  -->
    <script src="{{ asset('frontend') }}/https://maps.googleapis.com/maps/api/js?key=AIzaSyDk2HrmqE4sWSei0XdKGbOMOHN3Mm2Bf-M&ver=2.1.6"></script>
    <script src="{{ asset('frontend') }}/assets/js/gmaps.min.js"></script>

    <!-- custom - main-js -->
    <script src="{{ asset('frontend') }}/assets/js/main.js"></script>

</body>
</html>