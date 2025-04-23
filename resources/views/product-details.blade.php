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
    <div class="list_ra_scrolpy_slider_wraper" style="grid-column:1 / 2">
               <div class="list_ra_scrolpy_slider_data" style="max-width:unset">
                     <div class="list_ra_scrolpy_slider_conte OBszR _1bZNH" itemscope="" itemType="http://schema.org/SiteNavigationElement" id="services-type-container">
                        <div class="owl-carousel owl-theme ra_product_part_slider">
                           @php
                               // Separate the active category from the rest
                               $activeCategory = null;
                               $otherCategories = [];
                               foreach ($product_categories as $key => $product_category) {
                                   if ($product_category_slug == $product_category->product_category_slug) {
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
    <enquiry-form-for-brands :user_details="{{ !empty(Auth::user()) ? json_encode(Auth::user()) : '' }}" :main_web_url='@json(env("MAIN_WEB_URL"))'></enquiry-form-for-brands>
    <div style="background-color:#FFFFFF; z-index: 1;">
        <div class="list_ra_main_listing_wraper" style="max-width:unset">
            @include('partials.product-details')
        </div>
    </div>

  
@endsection
@section('script')
<script>
</script>

<script>
  let currentIndex = 0;

  function moveCarousel(direction) {
    const carousel = document.getElementById("carousel");
    const items = document.querySelectorAll(".carousel-item");
    const itemWidth = items[0].offsetWidth + 15; // width + gap
    const maxIndex = items.length - 2.5;

    currentIndex += direction;

    if (currentIndex < 0) currentIndex = 0;
    if (currentIndex > maxIndex) currentIndex = maxIndex;

    carousel.style.transform = `translateX(-${currentIndex * itemWidth}px)`;

    updateNavButtons();
  }

  function updateNavButtons() {
    const items = document.querySelectorAll(".carousel-item");
    const maxIndex = items.length - 2.5;

    document.getElementById("prevBtn").disabled = currentIndex <= 0;
    document.getElementById("nextBtn").disabled = currentIndex >= maxIndex;
  }

  window.onload = updateNavButtons;
</script>

<script>
  function toggleSteps() {
    const content = document.getElementById("stepsContent");
    const arrow = document.getElementById("toggleDownArrow");

    const isHidden = content.style.display === "none" || content.style.display === "";
    content.style.display = isHidden ? "block" : "none";

    if(isHidden)
    {
        $('#toggleDownArrow').hide();
        $('#toggleUpArrow').show();
    }else{
        $('#toggleDownArrow').show();
        $('#toggleUpArrow').hide();
    }
  }

  // Default: hidden
  document.addEventListener("DOMContentLoaded", () => {
    document.getElementById("stepsContent").style.display = "none";
  });
</script>



<script>
    function openModal() {
        document.getElementById("modal").style.display = "block";
    }

    // Close the modal
    function closeModal() {
        document.getElementById("modal").style.display = "none";
    }

    // Close modal if clicked outside of the modal content
    window.onclick = function(event) {
        if (event.target == document.getElementById("modal")) {
            closeModal();
        }
    };
</script>


<script>
    $(document).ready(function(){

        let reviewsContainer = document.getElementById("reviews-container");
        let seeMoreBtn = $("#see-more-btn");
        let seeMoreBtnText = $("#see-more-text");
        
        // Dummy reviews for demonstration
        let allReviews = [
            {
                name: "John Smith",
                rating: "★★★★★",
                text: "Great inspection! The mechanic was very detailed and clear about the car's condition. Highly recommend.",
                date: "Published 2 months ago",
                userImage: "JS",
                backgroundColor: "#FF5733"
            },
            {
                name: "Alice Brown",
                rating: "★★★★☆",
                text: "The inspection was good but I wish they had checked the brake system more carefully.",
                date: "Published 1 month ago",
                userImage: "AB",
                backgroundColor: "#4CAF50"
            },
            {
                name: "Bob Johnson",
                rating: "★★★★★",
                text: "The inspection report was very thorough. Would definitely use this service again!",
                date: "Published 3 weeks ago",
                userImage: "BJ",
                backgroundColor: "#009688"
            },
            {
                name: "Sarah Lee",
                rating: "★★★☆☆",
                text: "The inspection was okay, but I feel it could have been more detailed in certain areas.",
                date: "Published 2 weeks ago",
                userImage: "SL",
                backgroundColor: "#FFC107"
            }
        ];
        
        function renderReviews(reviews) {
            reviewsContainer.innerHTML = "";
            reviews.forEach(review => {
                let reviewCard = document.createElement("div");
                reviewCard.classList.add("review-card");
            
                let reviewHeader = `
                <div class="review-header">
                    <div class="user-info">
                    <div class="user-image" style="background-color: ${review.backgroundColor};">${review.userImage}</div>
                    <div class="user-details">
                        <div class="user-name">${review.name}</div>
                        <div class="user-rating">${review.rating}</div>
                    </div>
                    </div>
                    <div class="review-date">${review.date}</div>
                </div>
                <p class="review-text">${review.text}</p>
                `;
                
                reviewCard.innerHTML = reviewHeader;
                reviewsContainer.appendChild(reviewCard);
            });
        }
        
        // Function to toggle "See More" / "See Less"
        function toggleReviews() {
            let reviewsToShow = seeMoreBtnText.text() === "See More" ? allReviews : allReviews.slice(0, 2);
            
            renderReviews(reviewsToShow);
            if (seeMoreBtnText.text() == "See More") {
                seeMoreBtnText.text("See Less");
                $('#seeMoreArrow').attr('src', '/assets/images/see-more-up.png');
            } else {
                seeMoreBtnText.text("See More");
                $('#seeMoreArrow').attr('src', '/assets/images/see-more-down.png');
            }

        }
        
        // Initial rendering with 2 reviews
        renderReviews(allReviews.slice(0, 2));

        $("#see-more-btn").on("click", toggleReviews);
    })
</script>


<script>
    function openWarrantyModal() {
        document.getElementById("warrantyModal").style.display = "flex";
    }

    function closeWarrantyModal() {
        document.getElementById("warrantyModal").style.display = "none";
    }

    // Optional: Close modal when clicking outside the box
    window.addEventListener("click", function (e) {
        const modal = document.getElementById("warrantyModal");
        if (e.target === modal) {
        closeWarrantyModal();
        }
    });
</script>
@endsection