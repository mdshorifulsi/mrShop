    <div id="responsive-nav">
                <!-- category nav -->
                <div class="category-nav">
                    <span class="category-header">Categories <i class="fa fa-list"></i></span>
                    <ul class="category-list">
                      	@php 
                    	$category=App\Category::get();

                    	@endphp
                    	@foreach($category as $v_category)

                        <li><a href="{{route('product_by_category',$v_category->id)}}">{{$v_category->name}}</a></li>

                        @endforeach


                    </ul>
                </div>