<div id="home">
        <!-- container -->
        <div class="container">
            <!-- home wrap -->
            <div class="home-wrap">
                <!-- home slick -->
                <div id="home-slick">
                    <!-- banner -->
                    
                 
                    <!-- /banner -->

                    <!-- banner -->
                        @php 
                        $slider=App\Slider::get();

                        @endphp
                        @foreach($slider as $v_slider)

                    <div class="banner banner-1">
                        <img src="{{ asset($v_slider->image)}}" alt="" style="width: 1200px;height: 350px">
                        <div class="banner-caption">
                            <h1 class="primary-color">{{$v_slider->name}}<br><span class="white-color font-weak">{{$v_slider->title}}</span></h1>
                           <!--  <button class="primary-btn">Shop Now</button> -->
                        </div>
                    </div>

                    @endforeach
                    <!-- /banner -->

                    <!-- banner -->
                  
                    <!-- /banner -->
                </div>
                <!-- /home slick -->
            </div>
            <!-- /home wrap -->
        </div>
        <!-- /container -->
    </div>