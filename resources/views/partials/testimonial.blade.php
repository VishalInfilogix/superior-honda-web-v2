<div class="ra_services_provide_wraper" id="RATING_REVIEWS">
    <div class="ra_red_border"></div>
    <div class="ra_heading_section" style="font-size:1.375rem">
       <h3 class="ra_heading_section_data">Customer Quotes On Honda Periodic Services In  <span class="locationName">Mumbai</span></h3>
    </div>
    <div style="margin-top:1rem;margin-bottom:35px">
       <div class="glide" id="reviewCar">
          <div class="glide__track" data-glide-el="track">
                <ul class="glide__slides">
                   @foreach ($testimonials as $testimonial)
                        <li class="glide__slide">
                            <div class="ra_testimonials_wraper">
                                <div class="ra_testimonials_wraper_data" style="height: 328px;">
                                    <img loading="lazy" src="{{ asset('assets/images/invertedComma.png') }}" class="ra_testimonials_img" alt="Inverted Comma"/>
                                    <div class="ra_testimonials_per_para">{{ $testimonial->heading }}</div>
                                    <div style="height:180px">{!! html_entity_decode($testimonial->feedback) !!}</div>
                                    <div class="ra_testimonials_social_item mt-1">
                                    <img loading="lazy" src="{{ env('MAIN_WEB_URL').$testimonial->image }}" class="ra_testimonials_social_data" alt="Twitter"/>
                                    <div class="ra_testimonials_social_detail">
                                        <p class="ra_testimonials_social_name">{{ $testimonial->name }}</p>
                                        <p class="ra_testimonials_social_name2">{{ $testimonial->designation }}</p>
                                    </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                   @endforeach
                </ul>
             </div>
          <div>
                <div class="glide__bullets reviewsBullets" data-glide-el="controls[nav]">
                    @foreach ($testimonials as $keys=>$testimonial)
                        <button class="glide__bullet userReviewsBullet" data-glide-dir="={{$keys}}"></button>
                    @endforeach
                </div>
          </div>
       </div>
    </div>
</div>