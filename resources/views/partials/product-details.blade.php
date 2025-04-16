<div class="carousel-container">
  <button class="carousel-button left" id="prevBtn" onclick="moveCarousel(-1)"><img src="/assets/images/left-arrow-icon.png" alt="Next" style="width: 20px; height: 20px;"></button>
  <div class="carousel-track-wrapper">
    <div class="carousel" id="carousel">
      <div class="carousel-item">
        <div class="carousel-content">
          <h3>What's Included?</h3>
          <ul>
            <li>50-Points Inspection Checklist</li>
            <li>Complete Car Scanning</li>
          </ul>
        </div>
        <div class="carousel-image">
          <img src="https://images.pexels.com/photos/35967/mini-cooper-auto-model-vehicle.jpg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="Engine Check">
        </div>
      </div>

      <div class="carousel-item">
        <div class="carousel-content">
          <h3>Also Includes</h3>
          <ul>
            <li>Used Car Evaluation</li>
            <li>Physical Car Inspection</li>
          </ul>
        </div>
        <div class="carousel-image">
          <img src="https://images.pexels.com/photos/35619/capri-ford-oldtimer-automotive.jpg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="Car Interior">
        </div>
      </div>

      <div class="carousel-item">
        <div class="carousel-content">
          <h3>Service Benefits</h3>
          <ul>
            <li>Instant Car Valuation</li>
            <li>Express Used Car Estimate</li>
          </ul>
        </div>
        <div class="carousel-image">
          <img src="https://images.pexels.com/photos/1592384/pexels-photo-1592384.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="Tablet Report">
        </div>
      </div>
      </div>
  </div>
  <button class="carousel-button right" id="nextBtn" onclick="moveCarousel(1)"><img src="/assets/images/right-arrow-icon.png" alt="Next" style="width: 20px; height: 20px;"></button>
</div>

<div class="section-below">
  <h2><img src="/assets/images/back.png" alt="Second Hand Car Inspection" style="width: 20px; height: 20px; margin: auto 10px;">Second Hand Car Inspection</h2>
  <div class="features-grid">
    <div class="feature-item">⏳ Takes 4 hours</div>
    <div class="feature-item">🏠 Available at Doorstep</div>
    <div class="feature-item">📋 Transparent Inspection Report</div>
    <div class="feature-item">🧾 Get Car Valuation</div>
  </div>
  <div class="special-offer">Special Offers</div>
</div>

<div class="included-section">
  <h3>What's Included?</h3>
  <div class="included-grid">
    <div class="included-item">
      <img src="/assets/images/check.png" alt="What's Included" style="height: 20px; width: 20px;"> 50 Points Check-List
    </div>
    <div class="included-item">
      <img src="/assets/images/check.png" alt="What's Included" style="height: 20px; width: 20px;"> Expert Mechanic Advise
    </div>
    <div class="included-item">
      <img src="/assets/images/check.png" alt="What's Included" style="height: 20px; width: 20px;"> Physical Car Diagnosis
    </div>
    <div class="included-item">
      <img src="/assets/images/check.png" alt="What's Included" style="height: 20px; width: 20px;"> Upfront Estimate
    </div>
    <div class="included-item">
      <img src="/assets/images/check.png" alt="What's Included" style="height: 20px; width: 20px;"> Get Car Valuation
    </div>
  </div>
</div>

<div class="steps-section">
  <!-- Heading and toggle button OUTSIDE the box -->
  <div class="steps-toggle" onclick="toggleSteps()">
    <h3>Steps After Booking</h3>
    <img id="toggleDownArrow" src="/assets/images/down-arrows.png" alt="Show Steps After Booking" style="height:20px; width:20px;">
    <img id="toggleUpArrow" src="/assets/images/up-arrows.png" alt="Show Steps After Booking" style="height:20px; width:20px; display:none;">
  </div>
  
  <!-- The bordered box for content -->
  <div id="stepsContent" class="steps-content-box">
    <div class="step-item">
      <div class="step-circle">1</div>
      <p>A Dedicated Service Buddy will arrange a doorstep pick-up from your location.</p>
    </div>
    <div class="step-item">
      <div class="step-circle">2</div>
      <p>Your Car will be serviced at the nearest Superior Honda Workshop.</p>
    </div>
    <div class="step-item">
      <div class="step-circle">3</div>
      <p>Any additional work will be notified and authorised by you.</p>
    </div>
    <div class="step-item">
      <div class="step-circle">4</div>
      <p>We'll doorstep deliver your Car in the specified service time.</p>
    </div>
  </div>
</div>


    <div class="banner-section">
        <div class="banner">
            <div class="banner-content">
                <div class="left-side">
                    <h1>Superior Honda Inspection Warranty</h1>
                    <div class="line"></div>
                    <h2>Car Inspections</h2>
                </div>
                <div class="right-side">
                    <img src="https://media.istockphoto.com/id/921526486/photo/indian-happy-auto-mechanic-in-blue-suit-and-cap-holding-spanner-tool-in-action-isolated-over.jpg?s=1024x1024&w=is&k=20&c=8MqB74VEzpSW6eFE-Et3Hgo7vrFNjh9BUi98bOA8o8g=" alt="Mechanic" class="mechanic-image">
                </div>
                <button class="know-more-btn" onclick="openWarrantyModal()">Know More</button>
            </div>
        </div>
    </div>

    <div class="review-section">
        <h2>Recent Review & Rating on Second Hand Car Inspection</h2>

        <div class="reviews-container" id="reviews-container">
        <!-- Review Card 1 -->
        <div class="review-card">
            <div class="review-header">
                <div class="user-info">
                    <div class="user-image" style="background-color: #FF5733;">JS</div>
                    <div class="user-details">
                    <div class="user-name">John Smith</div>
                    <div class="user-rating">★★★★★</div>
                    </div>
                </div>
                <div class="review-date">Published 2 months ago</div>
            </div>
            <p class="review-text">Great inspection! The mechanic was very detailed and clear about the car's condition. Highly recommend.</p>
        </div>

        <!-- Review Card 2 -->
        <div class="review-card">
            <div class="review-header">
            <div class="user-info">
                <div class="user-image" style="background-color: #4CAF50;">AB</div>
                <div class="user-details">
                <div class="user-name">Alice Brown</div>
                <div class="user-rating">★★★★☆</div>
                </div>
            </div>
            <div class="review-date">Published 1 month ago</div>
            </div>
            <p class="review-text">The inspection was good but I wish they had checked the brake system more carefully.</p>
        </div>
        </div>

        <div class="see-more-btn-div">
            <button id="see-more-btn" class="see-more-btn"><span id="see-more-text">See More</span><img id="seeMoreArrow" src="/assets/images/see-more-down.png" alt="See More" style="height:20px; width:20px; margin-left:2px;"></button>            
        </div>
  </div>

    <!-- Modal -->
    <div id="warrantyModal" class="warranty-modal-overlay">
        <div class="warranty-modal-content">
            <span class="warranty-modal-close" onclick="closeWarrantyModal()">&times;</span>

            <!-- Main Heading -->
            <div class="warranty-modal-title">Superior Honda Warranty</div>

            <!-- Blue Bar with Image -->
            <div class="warranty-modal-header">
            <h2>Superior Honda Inspection Warranty</h2>
            <div class="warranty-modal-image-bg">
            <img src="https://media.istockphoto.com/id/921526486/photo/indian-happy-auto-mechanic-in-blue-suit-and-cap-holding-spanner-tool-in-action-isolated-over.jpg?s=1024x1024&w=is&k=20&c=8MqB74VEzpSW6eFE-Et3Hgo7vrFNjh9BUi98bOA8o8g=" alt="Mechanic" />
            </div>
            </div>

            <!-- Content -->
            <div class="warranty-modal-body">
            <ul class="feature-list">
                <li>
                <strong>Free Detailed Health Report</strong>
                <p>To ensure that nothing is overlooked, we will inspect your car against a 50-Point checklist and provide a Comprehensive Health Report with every inspection.</p>
                </li>
                <li>
                <strong>Free Car Re-Inspection</strong>
                <p>In case you're not satisfied with the Superior Honda Inspection Service, we'll re-inspect it for free. No Questions Asked!</p>
                </li>
            </ul>

            <hr />

            <h3 class="terms-heading">Terms and Conditions</h3>
            <ul class="terms-list">
                <li><span class="icon">✖</span> Superior Honda is not responsible for the service estimate quoted by any non-partner, non-Superior Honda workshop.</li>
                <li><span class="icon">✖</span> Any defects or damages like fluid leakage/malfunctioning that may have occurred after the Inspection Service will not be covered under Superior Honda Inspection Warranty.</li>
                <li><span class="icon">✖</span> The Superior Honda Inspection Warranty stands void in case the car is repaired/serviced at any non-partner workshop during the warranty period.</li>
            </ul>
            </div>
        </div>
    </div>




