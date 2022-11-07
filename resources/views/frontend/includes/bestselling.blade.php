<!-- products-with-sidebar-section - start
            ================================================== -->
            <section class="products-with-sidebar-section">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-9 order-lg-3">
                            <div class="top_category_wrap">
                                <div class="sec-title-link">
                                    <h3>All categories</h3>
                                </div>
                                <div class="top_category_carousel2" data-slick='{"dots": false}'>
    
                                    @foreach($categories as $cat)
                                    <div class="slider_item">
                                        <div class="category_boxed">
                                            <a href="#!">
                                                <span class="item_image">
                                                    <img src="{{ asset('backend/category/'.$cat->image) }}" alt="image_not_found">
                                                </span>
                                                <span class="item_title">{{ $cat->name }}</span>
                                            </a>
                                        </div>
                                    </div>
                                    @endforeach
                
                
                                  
                                </div>
                                <div class="carousel_nav carousel-nav-top-right">
                                    <button type="button" class="tc_left_arrow"><i class="fal fa-long-arrow-alt-left"></i></button>
                                    <button type="button" class="tc_right_arrow"><i class="fal fa-long-arrow-alt-right"></i></button>
                                </div>
                            </div>
                            <div class="best-selling-products">
                                <div class="sec-title-link">
                                    <h3>Best selling</h3>
                                    <div class="view-all"><a href="#">View all<i class="fal fa-long-arrow-right"></i></a></div>
                                </div>
                                <div class="product-area clearfix">
                                   @foreach($items as $item)
                                    @foreach($item->items as $medicine)
    
                                    <div class="grid">
                                        <div class="product-pic">
                                            <img src="{{ asset('backend/medicine/'.$medicine->image) }}" alt>
                                            <span class="theme-badge">Sale</span>
                                            <div class="actions">
                                                <ul>
                                                    <li>
                                                        <a href="#"><svg role="img" xmlns="http://www.w3.org/2000/svg" width="48px" height="48px" viewBox="0 0 24 24" stroke="#2329D6" stroke-width="1" stroke-linecap="square" stroke-linejoin="miter" fill="none" color="#2329D6"> <title>Favourite</title> <path d="M12,21 L10.55,19.7051771 C5.4,15.1242507 2,12.1029973 2,8.39509537 C2,5.37384196 4.42,3 7.5,3 C9.24,3 10.91,3.79455041 12,5.05013624 C13.09,3.79455041 14.76,3 16.5,3 C19.58,3 22,5.37384196 22,8.39509537 C22,12.1029973 18.6,15.1242507 13.45,19.7149864 L12,21 Z"/> </svg></a>
                                                    </li>
                                                    <li>
                                                        <a href="#"><svg role="img" xmlns="http://www.w3.org/2000/svg" width="48px" height="48px" viewBox="0 0 24 24"  stroke="#2329D6" stroke-width="1" stroke-linecap="square" stroke-linejoin="miter" fill="none" color="#2329D6"> <title>Shuffle</title> <path d="M21 16.0399H17.7707C15.8164 16.0399 13.9845 14.9697 12.8611 13.1716L10.7973 9.86831C9.67384 8.07022 7.84196 7 5.88762 7L3 7"/> <path d="M21 7H17.7707C15.8164 7 13.9845 8.18388 12.8611 10.1729L10.7973 13.8271C9.67384 15.8161 7.84196 17 5.88762 17L3 17"/> <path d="M19 4L22 7L19 10"/> <path d="M19 13L22 16L19 19"/> </svg></a>
                                                    </li>
                                                    <li>
                                                        <a class="#" data-bs-toggle="modal" href="#quickview_popup" role="button" tabindex="0"><svg width="48px" height="48px" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" stroke="#2329D6" stroke-width="1" stroke-linecap="square" stroke-linejoin="miter" fill="none" color="#2329D6"> <title>Visible (eye)</title> <path d="M22 12C22 12 19 18 12 18C5 18 2 12 2 12C2 12 5 6 12 6C19 6 22 12 22 12Z"/> <circle cx="12" cy="12" r="3"/> </svg></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="details">
                                            <h4><a href="#">{{ $medicine->name }}</a></h4>
                                            {{-- <p><a href="#">{{ $medicine->description }}</a></p> --}}
                                            <div class="rating">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star-half-alt"></i>
                                            </div>
                                            <span class="price">
                                                <ins>
                                                    <span class="woocommerce-Price-amount amount">
                                                        <bdi>
                                                            {{ $medicine->price }} <span class="woocommerce-Price-currencySymbol">tk</span>                                                 </bdi>
                                                    </span>
                                                </ins>
                                            </span>
                                            <div class="add-cart-area">
                                                <button value="{{ $medicine->id }}" class="btnaddtoCart add-to-cart">Add to cart</button>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                    @endforeach
                                </div>
                            </div>
{{--                             
                            <div class="top_category_wrap">
                                <div class="sec-title-link">
                                    <h3>All categories</h3>
                                </div>
                                <div class="top_category_carousel2" data-slick='{"dots": false}'>
                                    
                                    @foreach($categories as $cat)
                                    <div class="slider_item">
                                        <div class="category_boxed">
                                            <a href="#!">
                                                <span class="item_image">
                                                    <img src="{{ asset('backend/category/'.$cat->image) }}" alt="image_not_found">
                                                </span>
                                                <span class="item_title">{{ $cat->name }}</span>
                                            </a>
                                        </div>
                                    </div>
                                    @endforeach
                
                
                                  
                                </div>
                                <div class="carousel_nav carousel-nav-top-right">
                                    <button type="button" class="tc_left_arrow"><i class="fal fa-long-arrow-alt-left"></i></button>
                                    <button type="button" class="tc_right_arrow"><i class="fal fa-long-arrow-alt-right"></i></button>
                                </div>
                            </div> --}}
                        </div>
                        <div class="col-lg-3 order-lg-9">
                            <div class="product-sidebar">
                                <div class="widget latest_product_carousel">
                                    <div class="title_wrap">
                                        <h3 class="area_title">Latest Products</h3>
                                        <div class="carousel_nav">
                                            <button type="button" class="vs4i_left_arrow"><i class="fal fa-angle-left"></i></button>
                                            <button type="button" class="vs4i_right_arrow"><i class="fal fa-angle-right"></i></button>
                                        </div>
                                    </div>
        
                                    <div class="vertical_slider_4item" data-slick='{"dots": false}'>
                                        @foreach($medicines as $medicine)
                                        <div class="slider_item">
                                            <div class="small_product_layout">
                                                <a class="item_image" href="shop_details.html">
                                                    <img src="{{ asset('backend/medicine/'.$medicine->image) }}" alt>
                                                </a>
                                                <div class="item_content">
                                                    <h3 class="item_title">
                                                        {{$medicine->name}}
                                                    </h3>
                                                    <ul class="rating_star ul_li">
                                                        <li>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star-half-alt"></i>
                                                        </li>
                                                    </ul>
                                                    <div class="item_price">
                                                        <span>{{$medicine->price}}</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>
                            
                                </div>
                                {{-- <div class="widget product-add">
                                    <div class="product-img">
                                        <img src="{{ asset('frontend') }}/assets/images/shop/product_img_10.png" alt>
                                    </div>
                                    <div class="details">
                                        <h4>iPad pro</h4>
                                        <p>iPad pro with M1 chipe</p>
                                        <a class="btn btn_primary" href="#" >Start Buying</a>
                                    </div>
                                </div> --}}
                                {{-- <div class="widget audio-widget">
                                    <h5>Audio <span>5</span></h5>
                                    <ul>
                                        <li><a href="#">MI headphone</a></li>
                                        <li><a href="#">Bluetooth AirPods</a></li>
                                        <li><a href="#">Music system</a></li>
                                        <li><a href="#">JBL bar 5.1</a></li>
                                        <li><a href="#">Edifier Computer Speaker</a></li>
                                        <li><a href="#">Macbook pro</a></li>
                                        <li><a href="#">Men's watch</a></li>
                                        <li><a href="#">Washing metchin</a></li>
                                    </ul>
                                </div> --}}
                            </div>
                        </div>
                    </div>
                </div> <!-- end container  -->
            </section>
            <!-- products-with-sidebar-section - end
            ================================================== -->
            