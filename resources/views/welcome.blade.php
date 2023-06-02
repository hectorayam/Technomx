@extends('layouts.nav')
@section('content')




<div id="indicators-carousel" class="sticky baner baner-cel" data-carousel="static">
  
  <div class="relative h-56 overflow-hidden rounded-lg md:h-96">
      
      <div class="hidden duration-[10000ms] md:duration-150 ease-in-out " data-carousel-item="active">
          <img src="assets/images/baners.jpg" class="absolute block w-full lg:h-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
      </div>
      <!-- Item 2 -->
      <div class="hidden duration-[10000ms] ease-in-out " data-carousel-item>
          <img src="assets/images/baners2.jpg" class="absolute block w-full lg:h-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
      </div>
      
  </div>
  <!-- Slider indicators -->
  <div class="absolute z-30 flex space-x-3 -translate-x-1/2 bottom-5 left-1/2">
      <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1" data-carousel-slide-to="0"></button>
      <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2" data-carousel-slide-to="1"></button>
      </div>
  <!-- Slider controls -->
  <button type="button" class="absolute top-0 left-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
      <span class="inline-flex items-center justify-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
          <svg aria-hidden="true" class="w-5 h-5 text-white sm:w-6 sm:h-6 dark:text-gray-800" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg>
          <span class="sr-only">Previous</span>
      </span>
  </button>
  <button type="button" class="absolute top-0 right-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
      <span class="inline-flex items-center justify-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
          <svg aria-hidden="true" class="w-5 h-5 text-white sm:w-6 sm:h-6 dark:text-gray-800" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
          <span class="sr-only">Next</span>
      </span>
  </button>
</div>
          <!-- Product 5 -->
          {{-- <div class="product-item women men">
            <div class="product product_filter">
              <div class="product_image">
                <img src="assets/images/product_5.png" alt="">
              </div>
              <div class="favorite"></div>
              <div class="product_info">
                <h6 class="product_name"><a href="#">Pryma Headphones, Rose Gold & Grey</a></h6>
                <div class="product_price">$180.00</div>
              </div>
            </div>
            <div class="red_button add_to_cart_button"><a href="#">add to cart</a></div>
          </div>
          <!-- Product 6 -->
          <div class="product-item accessories">
            <div class="product discount product_filter">
              <div class="product_image">
                <img src="assets/images/product_6.png" alt="">
              </div>
              <div class="favorite favorite_left"></div>
              <div class="product_bubble product_bubble_right product_bubble_red d-flex flex-column align-items-center"><span>-$20</span></div>
              <div class="product_info">
                <h6 class="product_name"><a href="##">Fujifilm X100T 16 MP Digital Camera (Silver)</a></h6>
                <div class="product_price">$520.00<span>$590.00</span></div>
              </div>
            </div>
            <div class="red_button add_to_cart_button"><a href="#">add to cart</a></div>
          </div>
          <!-- Product 7 -->
          <div class="product-item women">
            <div class="product product_filter">
              <div class="product_image">
                <img src="assets/images/product_7.png" alt="">
              </div>
              <div class="favorite"></div>
              <div class="product_info">
                <h6 class="product_name"><a href="#">Samsung CF591 Series Curved 27-Inch FHD Monitor</a></h6>
                <div class="product_price">$610.00</div>
              </div>
            </div>
            <div class="red_button add_to_cart_button"><a href="#">add to cart</a></div>
          </div>
          <!-- Product 8 -->
          <div class="product-item accessories">
            <div class="product product_filter">
              <div class="product_image">
                <img src="assets/images/product_8.png" alt="">
              </div>
              <div class="favorite"></div>
              <div class="product_info">
                <h6 class="product_name"><a href="#">Blue Yeti USB Microphone Blackout Edition</a></h6>
                <div class="product_price">$120.00</div>
              </div>
            </div>
            <div class="red_button add_to_cart_button"><a href="#">add to cart</a></div>
          </div>
          <!-- Product 9 -->
          <div class="product-item men">
            <div class="product product_filter">
              <div class="product_image">
                <img src="assets/images/product_9.png" alt="">
              </div>
              <div class="product_bubble product_bubble_right product_bubble_red d-flex flex-column align-items-center"><span>sale</span></div>
              <div class="favorite favorite_left"></div>
              <div class="product_info">
                <h6 class="product_name"><a href="#">DYMO LabelWriter 450 Turbo Thermal Label Printer</a></h6>
                <div class="product_price">$410.00</div>
              </div>
            </div>
            <div class="red_button add_to_cart_button"><a href="#">add to cart</a></div>
          </div>
          <!-- Product 10 -->
          <div class="product-item men">
            <div class="product product_filter">
              <div class="product_image">
                <img src="assets/images/product_10.png" alt="">
              </div>
              <div class="favorite"></div>
              <div class="product_info">
                <h6 class="product_name"><a href="#">Pryma Headphones, Rose Gold & Grey</a></h6>
                <div class="product_price">$180.00</div>
              </div>
            </div>
            <div class="red_button add_to_cart_button"><a href="#">add to cart</a></div> --}}
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Deal of the week -->
{{-- <div class="deal_ofthe_week">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-6">
        <div class="deal_ofthe_week_img">
          <img src="assets/images/deal_ofthe_week.png" alt="">
        </div>
      </div>
      <div class="col-lg-6 text-right deal_ofthe_week_col">
        <div class="deal_ofthe_week_content d-flex flex-column align-items-center float-right">
          <div class="section_title">
            <h2>Deal Of The Week</h2>
          </div>
          
          <div class="red_button deal_ofthe_week_button"><a href="#">shop now</a></div>
        </div>
      </div>
    </div>
  </div>
</div> --}}
<!-- Best Sellers -->
{{-- <div class="best_sellers">
  <div class="container">
    <div class="row">
      <div class="col text-center">
        <div class="section_title new_arrivals_title">
          <h2>Best Sellers</h2>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col">
        <div class="product_slider_container">
          <div class="owl-carousel owl-theme product_slider">
            <!-- Slide 1 -->
            <div class="owl-item product_slider_item">
              <div class="product-item">
                <div class="product discount">
                  <div class="product_image">
                    <img src="assets/images/product_1.png" alt="">
                  </div>
                  <div class="favorite favorite_left"></div>
                  <div class="product_bubble product_bubble_right product_bubble_red d-flex flex-column align-items-center"><span>-$20</span></div>
                  <div class="product_info">
                    <h6 class="product_name"><a href="#">Fujifilm X100T 16 MP Digital Camera (Silver)</a></h6>
                    <div class="product_price">$520.00<span>$590.00</span></div>
                  </div>
                </div>
              </div>
            </div>
            <!-- Slide 2 -->
            <div class="owl-item product_slider_item">
              <div class="product-item women">
                <div class="product">
                  <div class="product_image">
                    <img src="assets/images/product_2.png" alt="">
                  </div>
                  <div class="favorite"></div>
                  <div class="product_bubble product_bubble_left product_bubble_green d-flex flex-column align-items-center"><span>new</span></div>
                  <div class="product_info">
                    <h6 class="product_name"><a href="#">Samsung CF591 Series Curved 27-Inch FHD Monitor</a></h6>
                    <div class="product_price">$610.00</div>
                  </div>
                </div>
              </div>
            </div>
            <!-- Slide 3 -->
            <div class="owl-item product_slider_item">
              <div class="product-item women">
                <div class="product">
                  <div class="product_image">
                    <img src="assets/images/product_3.png" alt="">
                  </div>
                  <div class="favorite"></div>
                  <div class="product_info">
                    <h6 class="product_name"><a href="#">Blue Yeti USB Microphone Blackout Edition</a></h6>
                    <div class="product_price">$120.00</div>
                  </div>
                </div>
              </div>
            </div>
            <!-- Slide 4 -->
            <div class="owl-item product_slider_item">
              <div class="product-item accessories">
                <div class="product">
                  <div class="product_image">
                    <img src="assets/images/product_4.png" alt="">
                  </div>
                  <div class="product_bubble product_bubble_right product_bubble_red d-flex flex-column align-items-center"><span>sale</span></div>
                  <div class="favorite favorite_left"></div>
                  <div class="product_info">
                    <h6 class="product_name"><a href="#">DYMO LabelWriter 450 Turbo Thermal Label Printer</a></h6>
                    <div class="product_price">$410.00</div>
                  </div>
                </div>
              </div>
            </div>
            <!-- Slide 5 -->
            <div class="owl-item product_slider_item">
              <div class="product-item women men">
                <div class="product">
                  <div class="product_image">
                    <img src="assets/images/product_5.png" alt="">
                  </div>
                  <div class="favorite"></div>
                  <div class="product_info">
                    <h6 class="product_name"><a href="#">Pryma Headphones, Rose Gold & Grey</a></h6>
                    <div class="product_price">$180.00</div>
                  </div>
                </div>
              </div>
            </div>
            <!-- Slide 6 -->
            <div class="owl-item product_slider_item">
              <div class="product-item accessories">
                <div class="product discount">
                  <div class="product_image">
                    <img src="assets/images/product_6.png" alt="">
                  </div>
                  <div class="favorite favorite_left"></div>
                  <div class="product_bubble product_bubble_right product_bubble_red d-flex flex-column align-items-center"><span>-$20</span></div>
                  <div class="product_info">
                    <h6 class="product_name"><a href="#">Fujifilm X100T 16 MP Digital Camera (Silver)</a></h6>
                    <div class="product_price">$520.00<span>$590.00</span></div>
                  </div>
                </div>
              </div>
            </div>
            <!-- Slide 7 -->
            <div class="owl-item product_slider_item">
              <div class="product-item women">
                <div class="product">
                  <div class="product_image">
                    <img src="assets/images/product_7.png" alt="">
                  </div>
                  <div class="favorite"></div>
                  <div class="product_info">
                    <h6 class="product_name"><a href="#">Samsung CF591 Series Curved 27-Inch FHD Monitor</a></h6>
                    <div class="product_price">$610.00</div>
                  </div>
                </div>
              </div>
            </div>
            <!-- Slide 8 -->
            <div class="owl-item product_slider_item">
              <div class="product-item accessories">
                <div class="product">
                  <div class="product_image">
                    <img src="assets/images/product_8.png" alt="">
                  </div>
                  <div class="favorite"></div>
                  <div class="product_info">
                    <h6 class="product_name"><a href="#">Blue Yeti USB Microphone Blackout Edition</a></h6>
                    <div class="product_price">$120.00</div>
                  </div>
                </div>
              </div>
            </div>
            <!-- Slide 9 -->
            <div class="owl-item product_slider_item">
              <div class="product-item men">
                <div class="product">
                  <div class="product_image">
                    <img src="assets/images/product_9.png" alt="">
                  </div>
                  <div class="product_bubble product_bubble_right product_bubble_red d-flex flex-column align-items-center"><span>sale</span></div>
                  <div class="favorite favorite_left"></div>
                  <div class="product_info">
                    <h6 class="product_name"><a href="#">DYMO LabelWriter 450 Turbo Thermal Label Printer</a></h6>
                    <div class="product_price">$410.00</div>
                  </div>
                </div>
              </div>
            </div>
            <!-- Slide 10 -->
            <div class="owl-item product_slider_item">
              <div class="product-item men">
                <div class="product">
                  <div class="product_image">
                    <img src="assets/images/product_10.png" alt="">
                  </div>
                  <div class="favorite"></div>
                  <div class="product_info">
                    <h6 class="product_name"><a href="#">Pryma Headphones, Rose Gold & Grey</a></h6>
                    <div class="product_price">$180.00</div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- Slider Navigation -->
          <div class="product_slider_nav_left product_slider_nav d-flex align-items-center justify-content-center flex-column">
            <i class="fa fa-chevron-left" aria-hidden="true"></i>
          </div>
          <div class="product_slider_nav_right product_slider_nav d-flex align-items-center justify-content-center flex-column">
            <i class="fa fa-chevron-right" aria-hidden="true"></i>
          </div>
        </div>
      </div>
    </div>
  </div>
</div> --}}
<!-- Benefit -->
{{-- <div class="benefit">
  <div class="container">
    <div class="row benefit_row">
      <div class="col-lg-3 benefit_col">
        <div class="benefit_item d-flex flex-row align-items-center">
          <div class="benefit_icon"><i class="fa fa-truck" aria-hidden="true"></i></div>
          <div class="benefit_content">
            <h6>free shipping</h6>
            <p>Suffered Alteration in Some Form</p>
          </div>
        </div>
      </div>
      <div class="col-lg-3 benefit_col">
        <div class="benefit_item d-flex flex-row align-items-center">
          <div class="benefit_icon"><i class="fa fa-money" aria-hidden="true"></i></div>
          <div class="benefit_content">
            <h6>cach on delivery</h6>
            <p>The Internet Tend To Repeat</p>
          </div>
        </div>
      </div>
      <div class="col-lg-3 benefit_col">
        <div class="benefit_item d-flex flex-row align-items-center">
          <div class="benefit_icon"><i class="fa fa-undo" aria-hidden="true"></i></div>
          <div class="benefit_content">
            <h6>45 days return</h6>
            <p>Making it Look Like Readable</p>
          </div>
        </div>
      </div>
      <div class="col-lg-3 benefit_col">
        <div class="benefit_item d-flex flex-row align-items-center">
          <div class="benefit_icon"><i class="fa fa-clock-o" aria-hidden="true"></i></div>
          <div class="benefit_content">
            <h6>opening all week</h6>
            <p>8AM - 09PM</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div> --}}
<!-- Blogs -->
{{-- <div class="blogs">
  <div class="container">
    <div class="row">
      <div class="col text-center">
        <div class="section_title">
          <h2>Latest Blogs</h2>
        </div>
      </div>
    </div>
    <div class="row blogs_container">
      <div class="col-lg-4 blog_item_col">
        <div class="blog_item">
          <div class="blog_background" style="background-image:url(assets/images/blog_1.jpg)"></div>
          <div class="blog_content d-flex flex-column align-items-center justify-content-center text-center">
            <h4 class="blog_title">Here are the trends I see coming this fall</h4>
            <span class="blog_meta">by admin | dec 01, 2021</span>
            <a class="blog_more" href="#">Read more</a>
          </div>
        </div>
      </div>
      <div class="col-lg-4 blog_item_col">
        <div class="blog_item">
          <div class="blog_background" style="background-image:url(assets/images/blog_2.jpg)"></div>
          <div class="blog_content d-flex flex-column align-items-center justify-content-center text-center">
            <h4 class="blog_title">Here are the trends I see coming this fall</h4>
            <span class="blog_meta">by admin | dec 01, 2021</span>
            <a class="blog_more" href="#">Read more</a>
          </div>
        </div>
      </div>
      <div class="col-lg-4 blog_item_col">
        <div class="blog_item">
          <div class="blog_background" style="background-image:url(assets/images/blog_3.jpg)"></div>
          <div class="blog_content d-flex flex-column align-items-center justify-content-center text-center">
            <h4 class="blog_title">Here are the trends I see coming this fall</h4>
            <span class="blog_meta">by admin | dec 01, 2021</span>
            <a class="blog_more" href="#">Read more</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div> --}}
<!-- Newsletter -->
{{-- <div class="newsletter">
  <div class="container">
    <div class="row">
      <div class="col-lg-6">
        <div class="newsletter_text d-flex flex-column justify-content-center align-items-lg-start align-items-md-center text-center">
          <h4>Newsletter</h4>
          <p>Subscribe to our newsletter and get 20% off your first purchase</p>
        </div>
      </div>
      <div class="col-lg-6">
        <form action="post">
          <div class="newsletter_form d-flex flex-md-row flex-column flex-xs-column align-items-center justify-content-lg-end justify-content-center">
            <input id="newsletter_email" type="email" placeholder="Your email" required="required" data-error="Valid email is required.">
            <button id="newsletter_submit" type="submit" class="newsletter_submit_btn trans_300" value="Submit">subscribe</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div> --}}
<!-- Footer -->

</div>
@endsection