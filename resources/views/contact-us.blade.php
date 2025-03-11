@extends('layout.app')
@section('content')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<div class="ra_menu_wraper list_ra_main_wraper_grid list_ra_main_wraper_grid2" style="position:unset;grid-column:1 / 3">
    <div>
          <a href="{{url('/')}}" class="ra_logo_img">
             <img loading="lazy" src="{{ asset('assets/images/logo.png') }}" class="ra_logo_img_height" alt="">
          </a>
          <div class="ra_location_dropdown ra_location_dropdown2" data-toggle="modal" data-target="#locationModal" id="location-module-component">
             <location-module :locations='@json($locations)'></location-module>
         </div>                    
    </div>
    <div>
       
          <div class="ra_location_dropdown2 ra_menu_item">
             <div class="ra_menu_new_waper">
                <div class="ra_menu_more"><a href="{{ route('contact_us') }}" class="a-link">Contact Us</a></div>
             </div>
          </div>
          <div class="ra_header_icon_menu">
             <ul>
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
     <!-- Contact Us Section -->
     <div class="contact-us-container">
        <div class="row">
            <div class="col-md-6 contact-info">
                <h1>Contact Us</h1>
                <p>If you have any questions, feel free to reach out to us. We are here to help!</p>
                <h3>Our Office</h3>
                <p><strong><i class="fa fa-map-marker" aria-hidden="true"></i> Address:</strong> 7th Floor, Tower A, Spaze iTech Park,

                    Sohna - Gurgaon Rd, Block S, Sector 49,
                    
                    Gurugram, Haryana 122018</p>
                <p><strong><i class="fa fa-envelope-o" aria-hidden="true"></i> Email:</strong> <a href="mailto:info@superiorhonda.in">Info@Superior Honda.in</a></p>
                <p><strong><i class="fa fa-calendar" aria-hidden="true"></i> Working Days:</strong> Monday - Sunday</p>
                <p><strong><i class="fa fa-clock-o" aria-hidden="true"></i> Working Hours:</strong> 7:00AM - 9:00PM(IST)</p>
            </div>

            <div class="col-md-6 contact-form">
                <h4>CONTACT US</h4>
                @include('partials.inquire-form')
            </div>
        </div>
    </div>
@endsection