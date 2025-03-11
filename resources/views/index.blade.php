@extends('layout.app')
@section('content')
    <style>
        .promotin-slider-content {
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .scrolpy_slider {
            padding: none !important;
        }
    </style>
    <div style="margin-top:0">
        <div class="ra_location_wraper">
            <div class="ra_form_wraper ra_form2_wraper"
                style="grid-column-start:2;grid-column-end:3;grid-row-start:1;grid-row-end:4;margin-bottom:30px;z-index:1;">
                <div class="ra_form_wraper_data">
                    <div class="">
                        <div class="ra_form_wraper_data_wraper">
                            <h1 class="ra_form_heading mb-0">Experience The Best Car Services In <span
                                    class="locationName"></span></h1>
                            @include('partials.inquire-form')
                        </div>
                        <div class="ra_form_rating_wraper">
                            <div class="ra_form_rating_data">
                                <div class="ra_form_rating_data_wraper ra_form_rating_data_wraper2">
                                    <div class="ra_form_rating_data_wraper ra_form_rating_list">
                                        <div>
                                            <div class="ra_form_rating_list_data">
                                                <img loading="lazy" class="_3xV17"
                                                    src="{{ asset('assets/images/star_rating.png') }}" alt="Rating" />
                                                <div class="ra_form_rating_row"><span style="color:#008000">4.7/</span><span
                                                        style="color:#008000" class="ra_form_rating_number">5</span></div>
                                            </div>
                                        </div>
                                        <div class="ra_form_review_wraper-">
                                            Based on 150000+
                                            <div>Reviews</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="ra_form_rating_data_wraper">
                                    <div class="ra_form_rating_row">
                                        <div class="ra_form_review_15_lac ra_form_review_15_lac2">15 Lacs+</div>
                                        <div class="ra_form_review_wraper- ra_form_hapyy">
                                            Happy
                                            <div>Customers</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="ra_form_manufacturer">
                        <div class="ra_manufacturer_header">
                            <h5>Select Manufacturer</h5>
                            <img src="{{ asset('assets/images/xmark-solid.svg') }}" alt="">
                        </div>
                        <div class="ra_form_manufacturer_input">
                            <img loading="lazy" src="{{ asset('assets/images/search.svg') }}" alt="Search">
                            <input class="input_field" placeholder="Search Brands">
                        </div>
                        <div class="ra_form_manufacturer_brand">
                            <div class="ra_form_brand_grid">

                                <a href="javascript:void(0);">
                                    <div class="ra_form_brand_grid_data">
                                        <img src="{{ asset('assets/images/brand-9.jpeg') }}" alt="">
                                        <div class="brand_name">
                                            Maruti Suzuki
                                        </div>
                                    </div>
                                </a>
                                <a href="javascript:void(0);">
                                    <div class="ra_form_brand_grid_data">
                                        <img src="{{ asset('assets/images/brand-7.jpeg') }}" alt="">
                                        <div class="brand_name">
                                            Hyundai
                                        </div>
                                    </div>
                                </a>
                                <a href="javascript:void(0);">
                                    <div class="ra_form_brand_grid_data">
                                        <img src="{{ asset('assets/images/brand-6.jpeg') }}" alt="">
                                        <div class="brand_name">
                                            Honda
                                        </div>
                                    </div>
                                </a>
                                <a href="javascript:void(0);">
                                    <div class="ra_form_brand_grid_data">
                                        <img src="{{ asset('assets/images/brand-9.jpeg') }}" alt="">
                                        <div class="brand_name">
                                            Maruti Suzuki
                                        </div>
                                    </div>
                                </a>
                                <a href="javascript:void(0);">
                                    <div class="ra_form_brand_grid_data">
                                        <img src="{{ asset('assets/images/brand-7.jpeg') }}" alt="">
                                        <div class="brand_name">
                                            Hyundai
                                        </div>
                                    </div>
                                </a>
                                <a href="javascript:void(0);">
                                    <div class="ra_form_brand_grid_data">
                                        <img src="{{ asset('assets/images/brand-6.jpeg') }}" alt="">
                                        <div class="brand_name">
                                            Honda
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div style="grid-column-start:1;grid-column-end:3;grid-row-start:1">
                <div class="ra_menu_wraper">
                    <div>
                        <a href="{{ url('/') }}" class="ra_logo_img">
                            <img loading="lazy" src="{{ asset('assets/images/logo.png') }}" class="ra_logo_img_height"
                                alt="" />
                        </a>
                        <div class="ra_location_dropdown ra_location_dropdown2" data-toggle="modal"
                            data-target="#locationModal" id="location-module-component">
                            <location-module :locations='@json($locations)'></location-module>
                        </div>
                    </div>
                    <div>
                        <div class="ra_location_dropdown2 ra_menu_item">
                            <div class="ra_menu_new_waper">
                                <div class="ra_menu_more"><a href="{{ route('contact_us') }}" class="a-link">Contact Us</a>
                                </div>
                                {{-- <div class="ra_menu_more_below">
                           <div class="ra_menu_more_blank"></div>
                           <a class="ra_menu_more_items" href="/faq">
                              <div class="ra_location_dropdown2 ra_location_dropdown3">FAQ</div>
                           </a>
                           <a class="ra_menu_more_items" href="/contact-us">
                              <div class="ra_location_dropdown2 ra_location_dropdown3">Contact Us</div>
                           </a>
                           <a class="ra_menu_more_items" href="/terms">
                              <div class="ra_location_dropdown2 ra_location_dropdown3">Terms</div>
                           </a>
                           <a class="ra_menu_more_items" href="/privacy">
                              <div class="ra_location_dropdown2 ra_location_dropdown3">Privacy</div>
                           </a>
                           <a class="ra_menu_more_items" href="/offers">
                              <div class="ra_location_dropdown2 ra_location_dropdown3">Offers</div>
                           </a>
                           <a class="ra_menu_more_items" href="/reviews">
                              <div class="ra_location_dropdown2 ra_location_dropdown3">Reviews</div>
                           </a>
                           <a class="ra_menu_more_items" href="/terms">
                              <div class="ra_location_dropdown2 ra_location_dropdown3">Terms</div>
                           </a>
                           <a class="ra_menu_more_items" href="/privacy">
                              <div class="ra_location_dropdown2 ra_location_dropdown3">Privacy</div>
                           </a>
                           <a class="ra_menu_more_items" href="/offers">
                              <div class="ra_location_dropdown2 ra_location_dropdown3">Offers</div>
                           </a><a class="ra_menu_more_items" href="/terms">
                              <div class="ra_location_dropdown2 ra_location_dropdown3">Terms</div>
                           </a>
                           <a class="ra_menu_more_items" href="/privacy">
                              <div class="ra_location_dropdown2 ra_location_dropdown3">Privacy</div>
                           </a>
                           <a class="ra_menu_more_items" href="/offers">
                              <div class="ra_location_dropdown2 ra_location_dropdown3">Offers</div>
                           </a>
                        </div> --}}
                            </div>
                        </div>
                        <div class="ra_header_icon_menu">
                            <ul>
                                <!-- <li>
                               <a href="">
                                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class=" -heart">
                                     <path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z">
                                     </path>
                                  </svg>
                                  <span class="items__count wishlist">0</span>
                               </a>
                            </li>
                            <li>
                               <a href="">
                                  <svg xmlns="http://www.w3.org/2000/svg" width="22.706" height="22.534" viewBox="0 0 14.706 13.534">
                                     <g transform="translate(0 0)">
                                        <g>
                                           <path data-name="Path 16787" d="M4.738,472.271h7.814a.434.434,0,0,0,.414-.328l1.723-6.316a.466.466,0,0,0-.071-.4.424.424,0,0,0-.344-.179H3.745L3.437,463.6a.435.435,0,0,0-.421-.353H.431a.451.451,0,0,0,0,.9h2.24c.054.257,1.474,6.946,1.555,7.33a1.36,1.36,0,0,0-.779,1.242,1.326,1.326,0,0,0,1.293,1.354h7.812a.452.452,0,0,0,0-.9H4.74a.451.451,0,0,1,0-.9Zm8.966-6.317-1.477,5.414H5.085l-1.149-5.414Z" transform="translate(0 -463.248)" fill="currentColor"></path>
                                           <path data-name="Path 16788" d="M5.5,478.8a1.294,1.294,0,1,0,1.293-1.353A1.325,1.325,0,0,0,5.5,478.8Zm1.293-.451a.452.452,0,1,1-.431.451A.442.442,0,0,1,6.793,478.352Z" transform="translate(-1.191 -466.622)" fill="currentColor"></path>
                                           <path data-name="Path 16789" d="M13.273,478.8a1.294,1.294,0,1,0,1.293-1.353A1.325,1.325,0,0,0,13.273,478.8Zm1.293-.451a.452.452,0,1,1-.431.451A.442.442,0,0,1,14.566,478.352Z" transform="translate(-2.875 -466.622)" fill="currentColor"></path>
                                        </g>
                                     </g>
                                  </svg>
                                  <span class="items__count wishlist">0</span>
                               </a>
                            </li>
                            <li> -->
                                @if (Auth::check())
                                    <a href="{{ route('logout') }}" class="btn btn-danger">
                                        Logout
                                    </a>
                                @else
                                    <a href="#" data-toggle="modal" data-target="#authModal" id="loginIcon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round" class="-user">
                                            <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                            <circle cx="12" cy="7" r="4"></circle>
                                        </svg>
                                    </a>
                                @endif
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="ra_banner_wraper">
                </div>
            </div>
            <div class="ra_main_wraper" id="product-categories-display-component">
                <product-categories-display :product_categories='@json($product_categories)'
                    :main_web_url='@json(env('MAIN_WEB_URL'))'></product-categories-display>

                <!-- <div class="ra_services_provide_wraper">
                   <div class="ra_red_border"></div>
                   <div class="ra_heading_section"><span></span></div>
                   <div class="ra_offer_img">
                      <a href="javascript:void(0);">
                            <img src="{{ asset('assets/images/miles.png') }}" class="ra_offer_img_width" alt="miles"/>
                      </a>
                      </div>
                </div> -->

                <!-- <div class="ra_services_provide_wraper" id="curated_custom_service">
                   <div class="ra_red_border"></div>
                   <div class="ra_heading_section">
                      <h2 class="ra_heading_section_data">Curated Custom Services</h2>
                   </div>
                   <div class="curate_services">
                      <div class="owl-carousel owl-theme  curate_services_slider">
                            <div class="item scrolpy_slider">
                               <a href="javascript:void(0);">
                                  <img src="{{ asset('assets/images/liveguard-battery-140') }}.png" alt="">
                                  <div class="curate_title">
                                        <div class="curate_title_heading">Batteries</div>
                                  </div>
                               </a>
                            </div>
                            <div class="item scrolpy_slider">
                               <a href="javascript:void(0);">
                                  <img src="{{ asset('assets/images/xxhdpi.png') }}" alt="">
                                  <div class="curate_title">
                                        <div class="curate_title_heading">Brakes</div>
                                  </div>
                               </a>
                            </div>
                            <div class="item scrolpy_slider">
                               <a href="javascript:void(0);">
                                  <img src="{{ asset('assets/images/xxhdpi (1).') }}png" alt="">
                                  <div class="curate_title">
                                        <div class="curate_title_heading">AC Parts</div>
                                  </div>
                               </a>
                            </div>
                            <div class="item scrolpy_slider">
                               <a href="javascript:void(0);">
                                  <img src="{{ asset('assets/images/xxhdpi (2).') }}png" alt="">
                                  <div class="curate_title">
                                        <div class="curate_title_heading">Clutch</div>
                                  </div>
                               </a>
                            </div><div class="item scrolpy_slider">
                               <a href="javascript:void(0);">
                                  <img src="{{ asset('assets/images/xxhdpi (3).') }}png" alt="">
                                  <div class="curate_title">
                                        <div class="curate_title_heading">Tyres</div>
                                  </div>
                               </a>
                            </div><div class="item scrolpy_slider">
                               <a href="javascript:void(0);">
                                  <img src="{{ asset('assets/images/xxhdpi (4).') }}png" alt="">
                                  <div class="curate_title">
                                        <div class="curate_title_heading">Steering</div>
                                  </div>
                               </a>
                            </div><div class="item scrolpy_slider">
                               <a href="javascript:void(0);">
                                  <img src="{{ asset('assets/images/xxhdpi (5).') }}png" alt="">
                                  <div class="curate_title">
                                        <div class="curate_title_heading">Suspension</div>
                                  </div>
                               </a>
                            </div><div class="item scrolpy_slider">
                               <a href="javascript:void(0);">
                                  <img src="{{ asset('assets/images/xxhdpi (6).') }}png" alt="">
                                  <div class="curate_title">
                                        <div class="curate_title_heading">Lights</div>
                                  </div>
                               </a>
                            </div><div class="item scrolpy_slider">
                               <a href="javascript:void(0);">
                                  <img src="{{ asset('assets/images/xxhdpi (7).') }}png" alt="">
                                  <div class="curate_title">
                                        <div class="curate_title_heading">Body Parts</div>
                                  </div>
                               </a>
                            </div><div class="item scrolpy_slider">
                               <a href="javascript:void(0);">
                                  <img src="{{ asset('assets/images/xxhdpi (8).') }}png" alt="">
                                  <div class="curate_title">
                                        <div class="curate_title_heading">Glasses</div>
                                  </div>
                               </a>
                            </div><div class="item scrolpy_slider">
                               <a href="javascript:void(0);">
                                  <img src="{{ asset('assets/images/xxhdpi (9).') }}png" alt="">
                                  <div class="curate_title">
                                        <div class="curate_title_heading">Car Spa</div>
                                  </div>
                               </a>
                            </div><div class="item scrolpy_slider">
                               <a href="javascript:void(0);">
                                  <img src="{{ asset('assets/images/xxhdpi (10).') }}png" alt="">
                                  <div class="curate_title">
                                        <div class="curate_title_heading">Car Detailing</div>
                                  </div>
                               </a>
                            </div><div class="item scrolpy_slider">
                               <a href="javascript:void(0);">
                                  <img src="{{ asset('assets/images/xxhdpi (11).') }}png" alt="">
                                  <div class="curate_title">
                                        <div class="curate_title_heading">Side Mirror</div>
                                  </div>
                               </a>
                            </div>
                         </div>
                   </div>
                </div> -->
                <div class="ra_services_provide_wraper" id="winter_service">
                    <div class="ra_red_border"></div>
                    <div class="ra_heading_section">
                        <h2 class="ra_heading_section_data">Superior Deals! {{count($promotions)}}</h2>
                    </div>
                    <div class="curate_services">
                        <promotions :promotions="{{ json_encode($promotions) }}"
                            :user_details="{{ !empty(Auth::user()) ? json_encode(Auth::user()) : '' }}"
                            :main_web_url='@json(env('MAIN_WEB_URL'))'></promotions>
                    </div>
                </div>
                <div class="ra_services_provide_wraper" id="fgfdgd">
                    <div class="ra_red_border"></div>
                    <div class="ra_heading_section">
                        <h2 class="ra_heading_section_data">Superior Honda Guarantee</h2>
                    </div>
                    <div class="ra_guarantee_section">
                        <div class="ra_guarantee_section_bg1">
                            <div class="ra_guarantee_section_hd">Free Pickup Drop</div>
                        </div>
                        <div class="ra_guarantee_section_bg2">
                            <div class="ra_guarantee_section_hd">Genuine Parts</div>
                        </div>
                        <div class="ra_guarantee_section_bg3">
                            <div class="ra_guarantee_section_hd">30 Days Warranty</div>
                        </div>
                        <div class="ra_guarantee_section_bg4">
                            <div class="ra_guarantee_section_hd">Affordable Prices</div>
                        </div>
                    </div>
                </div>
                <div class="ra_services_provide_wraper" id="how_superior_works">
                    <div class="ra_red_border"></div>
                    <div class="ra_heading_section">
                        <h2 class="ra_heading_section_data">How Superior Honda works?</h2>
                    </div>
                    <div class="ra_superiorhonda_works">
                        <div class="ra_superiorhonda_works_wraper">
                            <div class="ra_superiorhonda_works_data">
                                <div class="ra_superiorhonda_works_num">1</div>
                                <div class="ra_superiorhonda_works_hel"></div>
                            </div>
                            <div class="ra_superiorhonda_works_detail">
                                <div class="ra_superiorhonda_works_detail_hed">Select The Perfect Car Service</div>
                                <div class="ra_superiorhonda_works_detail_para">From Superior Honda&#x27;s broad portfolio
                                    of services</div>
                            </div>
                            <div class="ra_superiorhonda_works_detail_img"><img
                                    src="{{ asset('assets/images/Select-The-Perfect') }}-Car-Service.png"
                                    alt="" /></div>
                        </div>
                        <div class="ra_superiorhonda_works_wraper">
                            <div class="ra_superiorhonda_works_data">
                                <div class="ra_superiorhonda_works_num">2</div>
                                <div class="ra_superiorhonda_works_hel"></div>
                            </div>
                            <div class="ra_superiorhonda_works_detail">
                                <div class="ra_superiorhonda_works_detail_hed">Schedule Free Doorstep Pick-up</div>
                                <div class="ra_superiorhonda_works_detail_para">We offer free pick up and drop for all
                                    services booked</div>
                            </div>
                            <div class="ra_superiorhonda_works_detail_img"><img
                                    src="{{ asset('assets/images/Schedule-Free-Doorstep') }}-Pick-up.png"
                                    alt="Work" /></div>
                        </div>
                        <div class="ra_superiorhonda_works_wraper">
                            <div class="ra_superiorhonda_works_data">
                                <div class="ra_superiorhonda_works_num">3</div>
                                <div class="ra_superiorhonda_works_hel"></div>
                            </div>
                            <div class="ra_superiorhonda_works_detail">
                                <div class="ra_superiorhonda_works_detail_hed">Track Your Car Service Real-Time</div>
                                <div class="ra_superiorhonda_works_detail_para">We will take care of everything from here!
                                </div>
                            </div>
                            <div class="ra_superiorhonda_works_detail_img"><img
                                    src="{{ asset('assets/images/track-your-car') }}-service-real-time.png"
                                    alt="Work" /></div>
                        </div>
                        <div class="ra_superiorhonda_works_wraper">
                            <div class="ra_superiorhonda_works_data">
                                <div class="ra_superiorhonda_works_num">4</div>
                            </div>
                            <div class="ra_superiorhonda_works_detail">
                                <div class="ra_superiorhonda_works_detail_hed">Earn While We Service</div>
                                <div class="ra_superiorhonda_works_detail_para">Spread the word! You get Rs.750. Your
                                    friends get Rs.750!</div>
                            </div>
                            <div class="ra_superiorhonda_works_detail_img"><img
                                    src="{{ asset('assets/images/Earn-While-We') }}-Service.png" alt="Work" /></div>
                        </div>
                    </div>
                </div>
                <div class="ra_trusted_border-top"></div>
                <div class="ra_form_rating_data ra_trusted_border-grid">
                    <div class="ra_form_rating_data_wraper"><span>3 Million+</span><span
                            class="ra_form_review_wraper-">Cars Serviced</span></div>
                    <div class="ra_form_rating_data_wraper"><span>15 Lacs+</span><span
                            class="ra_form_review_wraper-">Happy Customers</span></div>
                    <div class="ra_form_rating_data_wraper"><span>4.7<img src="{{ asset('assets/images/star.png') }}"
                                class="ra_trusted_star" alt="star" /></span><span
                            class="ra_form_review_wraper-">Average Rating</span></div>
                    <div class="ra_form_rating_data_wraper"><span>850+</span><span class="ra_form_review_wraper-">Touch
                            Points In Jamaica</span></div>
                </div>
                <div class="ra_services_provide_wraper" id="RATING_REVIEWS">
                    <div class="ra_red_border"></div>
                    <div class="ra_heading_section">
                        <h2 class="ra_heading_section_data">What Car Owners In <span class="locationName"></span> Say</h2>
                    </div>
                    <div style="margin-top:1.875rem" id="r&r">
                        @include('partials.testimonial')
                    </div>
                </div>
                @include('partials.faq')
                {{-- <div class="ra_services_provide_wraper" id="download_app">
               <div class="ra_red_border"></div>
               <div class="ra_heading_section">
                  <h2 class="ra_heading_section_data">Download Superior Honda App</h2>
               </div>
               <div style="margin-top:1.875rem" class="_4XdNs ">
                  <div class="ra_app_store">
                        <img src="{{ asset('assets/images/gm-app-download') }}-update.jpg" alt="Download Superior Honda App"/>
                  </div>
                  <div class="ra_app_store_para">
                     <div class="ra_app_store_para2">
                        <div class="ra_app_store_para_cont">Choose and book a seamless car service experience and get upto Rs 750 off with the Superior Honda App</div>
                     </div>
                     <div class="ra_app_store_img ra_app_store_img2 ra_app_store_img3">
                        <a class="ra_app_store_img4 ra_app_store_img3" target="_blank" href="javascript:void(0);" rel="noreferrer">
                           <img src="{{ asset('assets/images/play-store.png') }}" class="ra_app_store_img_img" alt="Play store"/></a><a class="ra_app_store_img4 ra_app_store_img3" target="_blank" href="javascript:void(0);" rel="noreferrer">
                              <img loading="lazy" src="{{ asset('assets/images/app-store.png') }}" class="ra_app_store_img_img2" alt="App store"/>
                           </a>
                        </div>
                     <div class="ra_app_store_form">
                        <div class="ra_app_store_form_data">
                           <img loading="lazy" src="{{ asset('assets/images/jamaica-flag-svg.png') }}" class="ra_app_store_form_input" alt="Input"/>
                           <input type="tel" value="" placeholder="Mobile Number" maxLength="10"/>
                        </div>
                        <div class="ra_app_store_form_link">GET APP LINK</div>
                     </div>
                  </div>
               </div>
            </div> --}}
                <div class="ra_services_provide_wraper" id="original_parts">
                    <div class="ra_red_border"></div>
                    <div class="ra_heading_section">
                        <h2 class="ra_heading_section_data">Original Spare Parts</h2>
                    </div>
                    <div class="ra_originol_part">Extended Warranty with Superior Honda
                        <div class="ra_originol_part_wraper">
                            <div class="owl-carousel owl-theme ra_originol_part_slider">
                                <div class="item scrolpy_slider">
                                    <a href="javascript:void(0);">
                                        <img src="{{ asset('assets/images/valeo.jpg') }}" alt="">
                                    </a>
                                </div>
                                <div class="item scrolpy_slider">
                                    <a href="javascript:void(0);">
                                        <img src="{{ asset('assets/images/mahle.jpg') }}" alt="">
                                    </a>
                                </div>
                                <div class="item scrolpy_slider">
                                    <a href="javascript:void(0);">
                                        <img src="{{ asset('assets/images/ntn.jpg') }}" alt="">
                                    </a>
                                </div>
                                <div class="item scrolpy_slider">
                                    <a href="javascript:void(0);">
                                        <img src="{{ asset('assets/images/valeo.jpg') }}" alt="">
                                    </a>
                                </div>
                                <div class="item scrolpy_slider">
                                    <a href="javascript:void(0);">
                                        <img src="{{ asset('assets/images/mahle.jpg') }}" alt="">
                                    </a>
                                </div>
                                <div class="item scrolpy_slider">
                                    <a href="javascript:void(0);">
                                        <img src="{{ asset('assets/images/ntn.jpg') }}" alt="">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="ra_services_provide_wraper">
                        <div class="ra_red_border"></div>
                        <div class="ra_heading_section">
                            <h2 class="ra_heading_section_data">Why Choose Superior Honda In <span
                                    class="locationName"></span>?</h2>
                        </div>
                        <div style="padding-bottom:0;margin-bottom:2rem;margin-top:2rem">
                            <div class="ra_static_data_cont">
                                <div class="ra_margin_static_data">
                                    <p><strong>Why Choose Superior Honda in <span
                                                class="locationName"></span>&nbsp;</strong></p>
                                    <p><strong>Common problems with cars in <span class="locationName"></span>
                                            include:</strong></p>
                                    <ul>
                                        <li aria-level="1">
                                            <p role="presentation"><strong>Traffic Congestion:</strong> <span
                                                    class="locationName"></span>'s dense traffic often leads to wear and
                                                tear on vehicles, including increased fuel consumption, overheating, and
                                                stress on engine components.</p>
                                        </li>
                                        <li aria-level="1">
                                            <p role="presentation"><strong>Poor Road Conditions:</strong> Potholes, uneven
                                                roads, and debris can cause damage to tires, suspension systems, and
                                                undercarriages, leading to frequent repairs and maintenance.</p>
                                        </li>
                                        <li aria-level="1">
                                            <p role="presentation"><strong>Humid Climate:</strong> <span
                                                    class="locationName"></span>'s humid weather can accelerate corrosion
                                                and rusting of car bodies, particularly in coastal areas, requiring regular
                                                rust prevention and maintenance.</p>
                                        </li>
                                        <li aria-level="1">
                                            <p role="presentation"><strong>Parking Issues:</strong> Limited parking spaces
                                                and congested parking lots increase the risk of scratches, dents, and minor
                                                damages from neighboring vehicles or pedestrians.</p>
                                        </li>
                                        <li aria-level="1">
                                            <p role="presentation"><strong>Waterlogging During Monsoon:</strong> Heavy
                                                rainfall and waterlogging during the monsoon season can damage electrical
                                                components, engines, and interiors, leading to costly repairs.</p>
                                        </li>
                                    </ul>
                                    <p><strong>Comprehensive Car Services:</strong></p>
                                    <ul>
                                        <li aria-level="1">
                                            <p role="presentation"><strong>Multi-channel customer assistance:</strong> Get
                                                support through various channels like phone, email, or chat for convenience.
                                            </p>
                                        </li>
                                    </ul>
                                    <ul>
                                        <li aria-level="1">
                                            <p role="presentation"><strong>Authentic OEM/OES spare parts:</strong> Access
                                                genuine parts from original equipment manufacturers for quality and
                                                reliability.</p>
                                        </li>
                                    </ul>
                                    <ul>
                                        <li aria-level="1">
                                            <p role="presentation"><strong>Centralised service support:</strong> Receive
                                                assistance and coordination from a central point for streamlined service.
                                            </p>
                                        </li>
                                    </ul>
                                    <ul>
                                        <li aria-level="1">
                                            <p role="presentation"><strong>Dedicated service partner assigned:</strong>
                                                Have a specific professional assigned to your service needs for personalised
                                                attention.</p>
                                        </li>
                                    </ul>
                                    <ul>
                                        <li aria-level="1">
                                            <p role="presentation"><strong>Well-equipped workshop with proficient
                                                    professionals:</strong> Visit workshops equipped with advanced tools and
                                                staffed by skilled technicians for top-notch service.</p>
                                        </li>
                                    </ul>
                                    <ul>
                                        <li aria-level="1">
                                            <p role="presentation"><strong>Budget-friendly solutions:</strong> Get
                                                cost-effective options for your car maintenance needs without compromising
                                                on quality.</p>
                                        </li>
                                    </ul>
                                    <ul>
                                        <li aria-level="1">
                                            <p role="presentation"><strong>Complimentary doorstep delivery:</strong> Enjoy
                                                the convenience of having parts or services delivered to your doorstep at no
                                                extra cost.</p>
                                        </li>
                                    </ul>
                                    <ul>
                                        <li aria-level="1">
                                            <p role="presentation"><strong>Efficient resolution system:</strong> Benefit
                                                from a quick and effective system for resolving any issues or concerns.</p>
                                        </li>
                                    </ul>
                                    <ul>
                                        <li aria-level="1">
                                            <p role="presentation"><strong>Diverse payment methods:</strong> Choose from
                                                various payment options to suit your preferences and convenience.</p>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- <div class="ra_services_provide_wraper" id="price_list">
               <div class="ra_red_border"></div>
               <div class="ra_heading_section">
                  <h2 class="ra_heading_section_data">Car Services price List in <span class="locationName"></span>, Jamaica 2024</h2>
               </div>
               <div style="padding-bottom:0;margin-bottom:1rem;margin-top:1rem">
                  <div>
                     <table class="ra_table">
                        <col class="ra_table_data"/>
                        <col class="ra_table_data"/>
                        <col class="ra_table_data"/>
                        <thead class="ra_thead">
                           <tr>
                              <td>Services Type</td>
                              <td>
                                 Price Starts From (<!-- -->₹ <!-- -->)
                              </td>
                              <td>Savings</td>
                           </tr>
                        </thead>
                        <tbody class="ra_body">
                           <tr class="ra_body_tr">
                              <td>Car Inspection/Diagnostics</td>
                              <td>499</td>
                              <td>15%</td>
                           </tr>
                           <tr class="ra_body_tr">
                              <td>Inspection</td>
                              <td>499</td>
                              <td>25%</td>
                           </tr>
                           <tr class="ra_body_tr">
                              <td>Door Glass Replacement </td>
                              <td>850</td>
                              <td>30%</td>
                           </tr>
                        </tbody>
                     </table>
                     <div class="ra_table_bottom">
                        <span class="ra_table_bottom_span">
                           This data was last updated on <!-- -->10/22/2024
                        </span>
                        <!-- <div class="ra_table_bottom_see_more">
                           <div class="ra_table_bottom_see_more_click">SEE MORE</div>
                        </div> -->
                     </div>
                  </div>
               </div>
            </div> --}}
                </div>
            </div>
        </div>
        </div>
        @endsection
        @section('script')
            <script>
                $(document).ready(function() {
                    $('.main-breadcrumb').css('display', 'flex');
                    $('.main-breadcrumb').css('align-items', 'center');
                    $('.main-breadcrumb').css('justify-content', 'space-around');
                });
            </script>
        @endsection
