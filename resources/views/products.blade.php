@extends('layout.app')
@section('content')
   <div class="ra_app_store_para2">
         <div class="list_ra_main_wraper list_ra_main_wraper2">
            <div class="ra_menu_wraper list_ra_main_wraper_grid list_ra_main_wraper_grid2" style="position:unset;grid-column:1 / 3">
               <div>
                     <a href="{{url('/')}}" class="ra_logo_img">
                        <img loading="lazy" src="{{ asset('assets/images/logo.png') }}" class="ra_logo_img_height" alt="">
                     </a>
                     <div class="ra_location_dropdown ra_location_dropdown2" data-toggle="modal" data-target="#locationModal" id="location-module-component">
                        <location-module :locations='@json($locations)'></location-module>
                    </div>                    
               </div>
               {{--<div class="list_ra_searchbar">
                  <input
                     id="searchInput"
                     class="list_ra_searchbar_input"
                     placeholder="Example: Periodic Services"
                  />
                  <div class="list_ra_searchbar_input_div">
                     <div class="list_ra_searchbar_input_border"></div>
                     <div style="max-height: 50vh; overflow-y: auto;" id="suggestionList">
                        <div class="list_ra_searchbar_input_content">Type to search</div>
                     </div>
                  </div>
                  <img
                     loading="lazy"
                     src="{{ asset('assets/images/search_item.svg') }}"
                     alt="Superior Honda"
                     class="_13iVF"
                  />
               </div>--}}
               <div>
                  
                     <div class="ra_location_dropdown2 ra_menu_item">
                        <div class="ra_menu_new_waper">
                           <div class="ra_menu_more"><a href="{{ route('contact_us') }}" class="a-link">Contact Us</a></div>
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
                           </div> --}}
                        </div>
                     </div>
                     <div class="ra_header_icon_menu">
                        <ul>
                           <!-- <li>
                              <a href="">
                                 <svg  width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class=" -heart">
                                    <path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z">
                                    </path>
                                 </svg>
                                 <span class="items__count wishlist">0</span>
                              </a>
                           </li>
                           <li>
                              <a href="">
                                 <svg  width="22.706" height="22.534" viewBox="0 0 14.706 13.534">
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
                           </li> -->
                           <li>
                              @if(Auth::check())
                                 <a href="{{ route('logout') }}" class="btn btn-danger">
                                    Logout
                                 </a>
                              @else
                                 <a href="#" data-toggle="modal" data-target="#authModal" id="loginIcon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="-user">
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
            <div class="list_ra_scrolpy_slider_wraper" style="grid-column:1 / 2">
               <div class="list_ra_scrolpy_slider_data" style="max-width:unset">
                     <div class="list_ra_scrolpy_slider_conte OBszR _1bZNH" itemscope="" itemType="http://schema.org/SiteNavigationElement" id="services-type-container">
                        <div class="owl-carousel owl-theme ra_product_part_slider">
                           @php
                               // Separate the active category from the rest
                               $activeCategory = null;
                               $otherCategories = [];
                               foreach ($product_categories as $key => $product_category) {
                                   if (request()->route('slug') == $product_category->product_category_slug) {
                                       $activeCategory = $product_category;
                                   } else {
                                       $otherCategories[] = $product_category;
                                   }
                               }
                           @endphp
                       
                           {{-- Display the active category first --}}
                           @if ($activeCategory)
                               <a href="{{ route('products_page', $activeCategory->product_category_slug) }}" style="text-decoration:none;color:#FFF" itemProp="url">
                                   <div class="list_ra_scrolpy_slider_conte list_ra_scrolpy_slider_conte2 list_ra_scrolpy_slider_conte3 list_ra_scrolpy_slider_conte4 active-category">
                                       <img loading="lazy" src="{{ env('MAIN_WEB_URL').$activeCategory->category_image }}" alt="Car AC Service &amp; Repair" class="list_ra_scrolpy_slider_img"/>
                                       <div class="list_ra_scrolpy_slider_detail" style="font-weight:500" itemProp="name">{{ $activeCategory->name }}</div>
                                   </div>
                               </a>
                           @endif
                       
                           {{-- Display the remaining categories --}}
                           @foreach ($otherCategories as $product_category)
                               <a href="{{ route('products_page', $product_category->product_category_slug) }}" style="text-decoration:none;color:#FFF" itemProp="url">
                                   <div class="list_ra_scrolpy_slider_conte list_ra_scrolpy_slider_conte2 list_ra_scrolpy_slider_conte3 list_ra_scrolpy_slider_conte4">
                                       <img loading="lazy" src="{{ env('MAIN_WEB_URL').$product_category->category_image }}" alt="Car AC Service &amp; Repair" class="list_ra_scrolpy_slider_img"/>
                                       <div class="list_ra_scrolpy_slider_detail" style="font-weight:500" itemProp="name">{{ $product_category->name }}</div>
                                   </div>
                               </a>
                           @endforeach
                       </div>
                     </div>
               </div>
            </div>
            <div class="ra_form_wraper ra_form2_wraper without-modal-inq" style="grid-column:2 / 3;grid-row:2 / 4;top:30px;margin-top:50px;margin-bottom:30px">
               <h4 class="p-form-title">ENQUIRE NOW</h4>
               @include('partials.inquire-form')
            </div>
            <div style="background-color:#FFFFFF">
               <div class="list_ra_main_listing_wraper" style="max-width:unset">
                     <div>
                        <div class="list_ra_main_listing_wraper_data">
                           <div class="list_ra_main_listing_margin"></div>
                           <div class="list_ra_main_listing_content">
                                 <products-module :product_category_slug="{{ json_encode($product_category_slug) }}" :products="{{ json_encode($products) }}" :user_details="{{ !empty(Auth::user()) ? json_encode(Auth::user()) : '' }}" :main_web_url='@json(env("MAIN_WEB_URL"))'></products-module>
                                 <div>
                                    <div class="list_ra_main_listing_heading">Our Maintaince History</div>
                                 </div>
                           </div>
                        </div>
                        <div style="margin-left:2.5rem">
                           <div style="grid-row-gap:35px;background-color:#FFF;padding-top:30px;padding-bottom:10px;grid-template-columns:1fr 1fr 1fr 1fr" class="ra_form_rating_data">
                                 <div class="ra_form_rating_data_wraper" style="padding:0px"><span>3 Million+</span><span class="ra_form_review_wraper-">Cars Serviced</span></div>
                                 <div class="ra_form_rating_data_wraper" style="padding:0px"><span>15 Lacs+</span><span class="ra_form_review_wraper-">Happy Customers</span></div>
                                 <div class="ra_form_rating_data_wraper" style="padding:0px"><span>4.7<img style="width:1.25rem;height:1.25rem;margin-left:0.5rem;margin-top:-5px" src="{{ asset('assets/images/star (1') }}).png" alt="star"/></span><span class="ra_form_review_wraper-">Average Rating</span></div>
                                 <div class="ra_form_rating_data_wraper" style="padding:0px"><span>850+</span><span class="ra_form_review_wraper-">Touch Points In Jamaica</span></div>
                           </div>
                           @include('partials.testimonial')
                           @include('partials.faq')

                                 {{--<div class="ra_services_provide_wraper">
                                    <div class="ra_red_border"></div>
                                    <div class="ra_heading_section"><span>Key Specs of Honda City IVTEC Petrol</span></div>
                                    <div class="ra_key_spec_wraper">
                                       <table class="ra_key_spec_table">
                                             <tbody class="ra_key_spec_table_tbody">
                                                <tr class="ra_key_spec_table_tr">
                                                   <th><img class="ra_key_spec_table_tr_img" src="{{ asset('assets/images/torque-min') }}.png" alt="torque"/></th>
                                                   <td class="ra_key_spec_table_tr_data">Torque</td>
                                                   <td class="ra_key_spec_table_tr_data2">145 Nm</td>
                                                </tr>
                                                <tr class="ra_key_spec_table_tr">
                                                   <th><img class="ra_key_spec_table_tr_img" src="{{ asset('assets/images/Path 36012') }}@2x.png" alt="bhp"/></th>
                                                   <td class="ra_key_spec_table_tr_data">BHP</td>
                                                   <td class="ra_key_spec_table_tr_data2">118 Bhp</td>
                                                </tr>
                                                <tr class="ra_key_spec_table_tr">
                                                   <th><img class="ra_key_spec_table_tr_img" src="{{ asset('assets/images/motor@2x') }}.png" alt="engine"/></th>
                                                   <td class="ra_key_spec_table_tr_data">Engine (upto)</td>
                                                   <td class="ra_key_spec_table_tr_data2">1497 cc</td>
                                                </tr>
                                                <tr class="ra_key_spec_table_tr">
                                                   <th><img class="ra_key_spec_table_tr_img" src="{{ asset('assets/images/shift@2x') }}.png" alt="transmission"/></th>
                                                   <td class="ra_key_spec_table_tr_data">Transmission</td>
                                                   <td class="ra_key_spec_table_tr_data2">Manual</td>
                                                </tr>
                                                <tr class="ra_key_spec_table_tr">
                                                   <th><img class="ra_key_spec_table_tr_img" src="{{ asset('assets/images/wheel-size') }}-min.png" alt="tyre size"/></th>
                                                   <td class="ra_key_spec_table_tr_data">Tyre Size</td>
                                                   <td class="ra_key_spec_table_tr_data2">175/65 R15</td>
                                                </tr>
                                                <tr class="ra_key_spec_table_tr">
                                                   <th><img class="ra_key_spec_table_tr_img" src="{{ asset('assets/images/sunroof-min') }}.png" alt="sun roof"/></th>
                                                   <td class="ra_key_spec_table_tr_data">Sun Roof</td>
                                                   <td class="ra_key_spec_table_tr_data2">Yes</td>
                                                </tr>
                                             </tbody>
                                       </table>
                                    </div>
                                 </div>--}}
                           </div>
                           
                           <div class="ra_services_provide_wraper">
                                 <div class="ra_red_border"></div>
                                 <div class="ra_heading_section" style="font-size:1.375rem">
                                    <h1 class="ra_heading_section_data">Why Choose Superior Services In <span class="locationName">Mumbai</span></h1>
                                 </div>
                           </div>
                           <div style="margin-top:20px">
                                 <div class="ra_static_data_cont ra_static_data_cont_index">
                                    <div style="padding:1rem">
                                       <div style="margin-left: 10px;">
                                          <div class="ra_static_data_cont2_wraper">
                                             <p class="ra_static_data_cont2_head"> Explore Superior's Car AC Service </p>
                                             <div class="ra_static_data_cont2_divder"> </div>
                                             <div class="ra_static_data_cont2_list">
                                                <ul>
                                                   <li>
                                                      <p style="font-weight: normal; font-size: 14px;">Regular maintenance keeps your car AC system clean and disinfected, ensuring optimal performance.</p>
                                                   </li>
                                                   <li>
                                                      <p style="font-weight: normal; font-size: 14px;">Prioritize the compressor's upkeep to reduce the risk of premature failure with routine maintenance and proper lubrication.</p>
                                                   </li>
                                                </ul>
                                                <ul class="_2-Dhc">
                                                   <li>
                                                      <p style="font-weight: normal; font-size: 14px;">General AC maintenance includes checking the cabin air filter, preventing headaches and allergic reactions by trapping pollutants like pollen, bacteria, dust, and exhaust fumes.</p>
                                                   </li>
                                                </ul>
                                             </div>
                                          </div>
                                       </div>
                                       <div style="margin-left: 10px;">
                                          <div class="ra_static_data_cont2_wraper">
                                             <p class="ra_static_data_cont2_head"> Datsun GO  AC Services Available </p>
                                             <div class="ra_static_data_cont2_divder"> Choose from our premier AC services:</div>
                                             <div class="ra_static_data_cont2_list">
                                                <ul>
                                                   <li>
                                                      <p><span class="ra_static_data_cont2_serv"> AC Gas Recharge: </span><span style="font-weight: normal; font-size: 14px;"> Top up or replace AC gas using R134a refrigerant and a specialized charging machine.</span></p>
                                                   </li>
                                                   <li>
                                                      <p><span class="ra_static_data_cont2_serv"> AC Condenser Cleaning: </span><span style="font-weight: normal; font-size: 14px;"> Thorough cleaning of the AC condenser using a high-pressure jet washer and chemical reagents.</span></p>
                                                   </li>
                                                   <li>
                                                      <p><span class="ra_static_data_cont2_serv"> AC Cooling Coil/Evaporator Cleaning: </span><span style="font-weight: normal; font-size: 14px;"> Specialized cleaning solvent for thorough cleaning of the AC cooling coil and evaporator.</span></p>
                                                   </li>
                                                   <li>
                                                      <p><span class="ra_static_data_cont2_serv"> AC Filter Service: </span><span style="font-weight: normal; font-size: 14px;"> Clean or replace the AC filter (HVAC) based on manufacturer recommendations.</span></p>
                                                   </li>
                                                   <li>
                                                      <p><span class="ra_static_data_cont2_serv"> AC Diagnosis &amp; Check-up: </span><span style="font-weight: normal; font-size: 14px;"> Detect and address high-pressure and low-pressure leaks using an advanced AC gas charging machine.</span></p>
                                                   </li>
                                                   <li>
                                                      <p><span class="ra_static_data_cont2_serv"> AC Vents &amp; Dashboard Cleaning: </span><span style="font-weight: normal; font-size: 14px;"> Clean AC vents and blower using a non-tacky dashboard polishing solvent.</span></p>
                                                   </li>
                                                </ul>
                                             </div>
                                          </div>
                                       </div>
                                       <div style="margin-left: 10px;">
                                          <div class="ra_static_data_cont2_wraper">
                                             <p class="ra_static_data_cont2_head"> High-Quality Equipment Industry-Approved </p>
                                             <div class="ra_static_data_cont2_divder"> We use cutting-edge automotive AC service equipment, including automatic AC gas recharging apparatus, AC gas leak detection tools, refrigerant recovery tools, and specialized tools tailored to your Datsun GO . Visit the nearest Superior workshop in <span class="locationName">Mumbai</span>.</div>
                                          </div>
                                       </div>
                                       <div style="margin-left: 10px;">
                                          <div class="ra_static_data_cont2_wraper">
                                             <p class="ra_static_data_cont2_head"> Warranty on Car AC Services </p>
                                             <div class="ra_static_data_cont2_divder"> Opt for Superior and enjoy the Superior Advantage with a 1000kms/1-month warranty on car services, valid anywhere in <span class="locationName">Mumbai</span>. Book with confidence now.</div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           {{--<div class="ra_services_provide_wraper">
                                 <div class="ra_red_border"></div>
                                 <div class="ra_heading_section" style="font-size:1.375rem"><span>Popular Services for your Honda</span></div>
                           </div>
                           <div>
                                 <div class="owl-carousel owl-theme ra_popular_rigion_slider">
                     
                                    <div class="item scrolpy_slider">
                                       <a href="javascript:void(0);">
                                             <p>Periodic Services</p>
                                       </a>
                                    </div>
                                    <div class="item scrolpy_slider">
                                       <a href="javascript:void(0);">
                                             <p>Batteries</p>
                                       </a>
                                    </div>
                                    <div class="item scrolpy_slider">
                                       <a href="javascript:void(0);">
                                             <p>Tyres & Wheel Care</p>
                                       </a>
                                    </div>
                                    <div class="item scrolpy_slider">
                                       <a href="javascript:void(0);">
                                             <p>Denting & Painting</p>
                                       </a>
                                    </div>
                                    <div class="item scrolpy_slider">
                                       <a href="javascript:void(0);">
                                             <p>Detailing Services</p>
                                       </a>
                                    </div>
                                    <div class="item scrolpy_slider">
                                       <a href="javascript:void(0);">
                                             <p>Car Spa & Cleaning</p>
                                       </a>
                                    </div>
                                    <div class="item scrolpy_slider">
                                       <a href="javascript:void(0);">
                                             <p>Car Inspections</p>
                                       </a>
                                    </div>
                                    <div class="item scrolpy_slider">
                                       <a href="javascript:void(0);">
                                             <p>Windshields & Lights</p>
                                       </a>
                                    </div>
                                    <div class="item scrolpy_slider">
                                       <a href="javascript:void(0);">
                                             <p>Suspension & Fitments</p>
                                       </a>
                                    </div><div class="item scrolpy_slider">
                                       <a href="javascript:void(0);">
                                             <p>Clutch & Body Parts</p>
                                       </a>
                                    </div><div class="item scrolpy_slider">
                                       <a href="javascript:void(0);">
                                             <p>Insurance Claims</p>
                                       </a>
                                    </div><div class="item scrolpy_slider">
                                       <a href="javascript:void(0);">
                                             <p>SOS Service</p>
                                       </a>
                                    </div>
                                    
                                 </div> 
                           </div>--}}
                           
                           <div class="ra_services_provide_wraper">
                                 <div class="ra_red_border"></div>
                                 <div class="ra_heading_section" style="font-size:1.375rem">
                                    <h3 class="ra_heading_section_data">Popular Regions</h3>
                                 </div>
                           </div>
                           <div>
                                 <div class="owl-carousel owl-theme ra_popular_rigion_slider">
                                 @foreach($locations as $location)   
                                    <div class="item scrolpy_slider">
                                       <a href="javascript:void(0);">
                                             <p>{{$location->name}}</p>
                                       </a>
                                    </div>
                                 @endforeach
                                 </div> 
                           </div>
                        </div>
                     </div>
               </div>
            </div>
         </div>
   </div>

  
@endsection
@section('script')
<script>

</script>
@endsection