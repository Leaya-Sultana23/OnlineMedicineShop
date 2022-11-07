<!-- viewed_products_section - start
            ================================================== -->
            <section class="viewed_products_section section_space">
                <div class="container">
                    
                    <div class="sec-title-link mb-0">
                        <h3>Recently Viewed Products</h3>
                    </div>
                    
                    <div class="viewed_products_wrap arrows_topright">
                        <div class="viewed_products_carousel row" data-slick='{"dots": false}'>
                            @foreach($medicines as $medicine)
                            <div class="slider_item col">
                                <div class="viewed_product_item">
                                    <div class="item_image">
                                        <img src="{{ asset('backend/medicine/'.$medicine->image) }}" alt>
                                    </div>
                                    <div class="item_content">
                                        <h3 class="item_title">{{$medicine->name}}</h3>
                                        <ul class="ul_li_block">
                                            {{-- <li><a href="#!">Computers</a></li>
                                            <li><a href="#!">Laptop</a></li>
                                            <li><a href="#!">Macbook</a></li>
                                            <li><a href="#!">Accessories</a></li>
                                            <li><a href="#!">More...</a></li> --}}
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                            
                        </div>
                        <div class="carousel_nav">
                            <button type="button" class="vpc_left_arrow"><i class="fal fa-long-arrow-alt-left"></i></button>
                            <button type="button" class="vpc_right_arrow"><i class="fal fa-long-arrow-alt-right"></i></button>
                        </div>
                    </div>
                </div>
            </section>
            <!-- viewed_products_section - end
            ================================================== -->
            