
<!doctype html>
<html lang="en">
<head>
    @include('frontend.includes.head')
    @include('frontend.includes.css')
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
        @include('frontend.includes.topbar')
        <!-- header_section - end
        ================================================== -->
        
        <!-- main body - start
        ================================================== -->
        <main>
            
            <!-- sidebar cart - start
            ================================================== -->
            @include('frontend.includes.sidebar')
            <!-- sidebar cart - end
            ================================================== -->

            
            <!-- product quick view modal - start
            ================================================== -->
            @include('frontend.includes.productquickview')
            <!-- product quick view modal - end
            ================================================== -->

            
            <!-- slider_section - start
            ================================================== -->
            @include('frontend.includes.slider')
            <!-- slider_section - end
            ================================================== -->
            
            <!-- policy_section - start
            ================================================== -->
            <section class="policy_section">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="policy-wrap">
                                <div class="policy_item">
                                    <div class="item_icon">
                                        <i class="icon icon-Truck"></i>
                                    </div>
                                    <div class="item_content">
                                        <h3 class="item_title">Fast Delivary</h3>
                                        <p>
                                            Frist Delivery Will
                                        </p>
                                    </div>
                                </div>
        
                                <div class="policy_item">
                                    <div class="item_icon">
                                        <i class="icon icon-Headset"></i>
                                    </div>
                                    <div class="item_content">
                                        <h3 class="item_title">Support 24/ 7</h3>
                                        <p>
                                            Contact us 24 hours a day
                                        </p>
                                    </div>
                                </div>
        
                                <div class="policy_item">
                                    <div class="item_icon">
                                        <i class="icon icon-Wallet"></i>
                                    </div>
                                    <div class="item_content">
                                        <h3 class="item_title">100% Money Back</h3>
                                        <p>
                                            You have 30 days to Return
                                        </p>
                                    </div>
                                </div>
        
                                <div class="policy_item">
                                    <div class="item_icon">
                                        <i class="icon icon-Starship"></i>
                                    </div>
                                    <div class="item_content">
                                        <h3 class="item_title">90 Days Return</h3>
                                        <p>
                                            If goods have problems
                                        </p>
                                    </div>
                                </div>
        
                            </div>
                        </div>
                    </div>
                </div>

            </section>
            <!-- policy_section - end
            ================================================== -->
            <!-- products-with-sidebar-section - start
            ================================================== -->
            @include('frontend.includes.bestselling')
            <!-- products-with-sidebar-section - end
            ================================================== -->
            
            
            <!-- promotion_section - start
            ================================================== -->
            {{-- @include('frontend.includes.promotion') --}}
            <!-- promotion_section - end
            ================================================== -->
            
            <!-- new_arrivals_section - start
            ================================================== -->
            {{-- @include('frontend.includes.newarivals') --}}
            <!-- new_arrivals_section - end
            ================================================== -->
            
            <!-- brand_section - start
            ================================================== -->
            @include('frontend.includes.brand')
            <!-- brand_section - end
            ================================================== -->
            
            <!-- viewed_products_section - start
            ================================================== -->
            @include('frontend.includes.recentview')
            <!-- viewed_products_section - end
            ================================================== -->
            
            <!-- newsletter_section - start
            ================================================== -->
            @include('frontend.includes.subscribe')
            <!-- newsletter_section - end
            ================================================== -->
        
        </main>
        <!-- main body - end
        ================================================== -->
        
        <!-- footer_section - start
        ================================================== -->
        @include('frontend.includes.footer')
        <!-- footer_section - end
        ================================================== -->

    </div>
    <!-- body_wrap - end -->
    @include('frontend.includes.script')
   
</body>
</html>