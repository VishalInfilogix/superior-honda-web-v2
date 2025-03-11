<div class="ra_services_provide_wraper" id="FREQUENTLY_ASKED_QUESTIONS">
    <div class="ra_red_border"></div>
    <div class="ra_heading_section">
       <h2 class="ra_heading_section_data">Frequently Asked Questions (FAQs) on AC Service & Repair</h2>
    </div>
    <div class="ra_faq_wraper">
       <div class="panel-group" id="accordion">
        @foreach($faqs as $key=> $faq)
          <div class="panel panel-default">
             <div class="panel-heading">
             <h4 class="panel-title">
                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapse-{{$key}}">
                   {{$faq->question}}
                </a>
             </h4>
             </div>
             <div id="collapse-{{$key}}" @class(["panel-collapse", $key == 0 ? "collapse in" : "collapse"])>
             <div class="panel-body">
                {{$faq->answer}}
             </div>
             </div>
          </div>
        @endforeach
    </div>
 </div>
<div>