<div id="header">
            <div class="container">
                <div class="pull-left">
                    <!-- Logo -->
                    <div class="header-logo">
                        <a class="logo" href="{{route('home')}}">
                            <img src="{{asset('assets/frontend/./img/logo2.png')}}" alt="">
                        </a>
                    </div>
                    <!-- /Logo -->

                    <!-- Search -->
                    <div class="header-search">
                        <form>
                            <input class="input search-input" type="text" placeholder="Enter your keyword">
                          
                            <button class="search-btn"><i class="fa fa-search"></i></button>
                        </form>
                    </div>
                    <!-- /Search -->
                </div>
                <div class="pull-right">
                    <ul class="header-btns">
                        <!-- Account -->
                        <!-- <li class="header-account dropdown default-dropdown">
                            <div class="dropdown-toggle" role="button" data-toggle="dropdown" aria-expanded="true">
                                <div class="header-btns-icon">
                                    <i class="fa fa-user-o"></i>
                                </div>
                                <strong class="text-uppercase">My Account <i class="fa fa-caret-down"></i></strong>
                            </div>
                            <a href="#" class="text-uppercase">Login</a> / <a href="#" class="text-uppercase">Join</a>
                            <ul class="custom-menu">
                                <li><a href="#"><i class="fa fa-user-o"></i> My Account</a></li>
                                <li><a href="#"><i class="fa fa-heart-o"></i> My Wishlist</a></li>
                                <li><a href="#"><i class="fa fa-exchange"></i> Compare</a></li>
                                <li><a href="#"><i class="fa fa-check"></i> Checkout</a></li>
                                <li><a href="#"><i class="fa fa-unlock-alt"></i> Login</a></li>
                                <li><a href="#"><i class="fa fa-user-plus"></i> Create An Account</a></li>
                            </ul>
                        </li> -->

                      <!--   <li><a href="{{route('login_check')}}"><i class="fa fa-user-o"></i> My Account</a></li> -->


                         <?php
                      $customer_id=Session::get('customer_id');
                      $shipping_id=Session::get('shipping_id');
                      // print_r($customer_id);
                      // print_r($shipping_id);
                      if($customer_id!==NULL && $shipping_id==NULL){?>
                    


                        <li><a href="{{route('checkout')}}"><i class="fa fa-heart-o"></i>Checkout</a></li>

                       
                              <?php }  if($customer_id!=NULL && $shipping_id !=NULL){?>
                                <li><a href="{{route('payment')}}"><i class="fa fa-heart-o"></i>Checkout</a></li>


                    <?php
                  } else{

                    ?>
                        <li><a href="{{route('login_check')}}"><i class="fa fa-heart-o"></i>Checkout</a></li>
                     <?php } ?>



                        <li><a href="{{route('show_cart')}}"><i class="fa fa-shopping-cart"></i> My Cart</a></li>


                         <?php
                      $customer_id=Session::get('customer_id');
                      if($customer_id!==Null){?>

                    

                        <li><a href="{{route('login_logout')}}"><i class="fa fa-unlock-alt"></i> Logout</a></li>


                           <?php
                  } else{

                    ?>
                    <li><a href="{{route('login_check')}}"><i class="fa fa-unlock-alt"></i> Login</a></li>

                <?php } ?>




                      
                        <!-- /Account -->

                        <!-- Cart -->
                        <!-- <li class="header-cart dropdown default-dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
                                <div class="header-btns-icon">
                                    <i class="fa fa-shopping-cart"></i>
                                    
                                </div>
                                <strong class="text-uppercase">My Cart:</strong>
                               
                            </a>
                            <div class="custom-menu">
                                <div id="shopping-cart">
                                    <div class="shopping-cart-list">
                                        <div class="product product-widget">
                                            <div class="product-thumb">
                                                <img src="{{asset('assets/frontend/./img/thumb-product01.jpg')}}" alt="">
                                            </div>
                                            <div class="product-body">
                                                <h3 class="product-price">$32.50 <span class="qty">x3</span></h3>
                                                <h2 class="product-name"><a href="#">Product Name Goes Here</a></h2>
                                            </div>
                                            <button class="cancel-btn"><i class="fa fa-trash"></i></button>
                                        </div>
                                        <div class="product product-widget">
                                            <div class="product-thumb">
                                                <img src="{{asset('assets/frontend/./img/thumb-product01.jpg')}}" alt="">
                                            </div>
                                            <div class="product-body">
                                                <h3 class="product-price">$32.50 <span class="qty">x3</span></h3>
                                                <h2 class="product-name"><a href="#">Product Name Goes Here</a></h2>
                                            </div>
                                            <button class="cancel-btn"><i class="fa fa-trash"></i></button>
                                        </div>
                                    </div>
                                    <div class="shopping-cart-btns">
                                        <button class="main-btn">View Cart</button>
                                        <button class="primary-btn">Checkout <i class="fa fa-arrow-circle-right"></i></button>
                                    </div>
                                </div>
                            </div>
                        </li> -->
                        <!-- /Cart -->

                        <!-- Mobile nav toggle-->
                        <li class="nav-toggle">
                            <button class="nav-toggle-btn main-btn icon-btn"><i class="fa fa-bars"></i></button>
                        </li>
                        <!-- / Mobile nav toggle -->
                    </ul>
                </div>
            </div>
            <!-- header -->
        </div>