 <!-- slider_section - start
            ================================================== -->
            <section class="slider_section">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-9 offset-lg-3">
                            <div class="main_slider" data-slick='{"arrows": false}'>
                               @foreach($sliders as $slider)
                                <div class="slider_item set-bg-image"data-background="{{ asset('backend/slider/'.$slider->image) }}">
                                    <div class="slider_content" >
                                        <h3 class="small_title " data-animation="fadeInUp2" data-delay=".2s">{{ $slider->category }}</h3>
                                        <h4 class="big_title" data-animation="fadeInUp2" data-delay=".4s"><span>{{ $slider->title }}</span></h4>
                                        <p data-animation="fadeInUp2" data-delay=".6s">{{ $slider->description }}</p>
                                        
                                        <a class="btn btn_primary" href="shop_details.html" data-animation="fadeInUp2" data-delay=".8s">Start Buying</a>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- slider_section - end
            ================================================== -->
            