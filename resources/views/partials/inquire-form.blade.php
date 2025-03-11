
<form id="inquiryForm" action="{{ route('create_enquiry') }}" method="POST">
   @csrf
   <div class="form-group">
      <div class="ra_form_input custom"><input type="text" id="name" name="name" placeholder="ENTER YOUR NAME" required></div>
   </div>

   <div class="form-group">
      <div class="ra_form_input custom"><input type="text" id="phone" name="phone" maxlength="10" placeholder="ENTER YOUR PHONE NUMBER" required></div>
   </div>

   <div class="form-group">
      <div class="ra_form_input custom"><input type="email" id="email" name="email" placeholder="ENTER YOUR EMAIL(OPTIONAL)"></div>
   </div>

   <div class="form-group">
      <textarea id="description" name="description" placeholder="ENTER DESCRIPTION" class="form-control" required></textarea>
   </div>

   <button type="submit" class="btn submit-btn w-100 mt-2">INQUIRE NOW</button>
</form>