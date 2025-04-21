<template>
    <div class="modal fade" id="enquireNowModal" tabindex="-1" aria-labelledby="enquireNowLabel" aria-hidden="true" data-backdrop="static" data-keyboard="false">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button
            type="button"
            class="close"
            data-dismiss="modal"
            aria-label="Close"
            @click="closeModal"
          >
            <span aria-hidden="true">&times;</span>
          </button>
            <h4 class="modal-title">ENQUIRE NOW</h4>
          </div>
          <form @submit.prevent="handleSubmit">
            <div class="modal-body">
              <h6 id="selected-product-name"></h6>
              <div class="form-group">
				<div class="ra_form_input custom"><input
                  type="text"
                  id="name"
                  v-model="formData.name"
                  @input="clearError('name')"
                  placeholder="ENTER YOUR NAME"
                  :class="{ 'is-invalid': errors.name }"
                /></div>
                <div v-if="errors.name" class="error-message">{{ errors.name }}</div>
              </div>
  
              <div class="form-group">
				<div class="ra_form_input custom">
					<input
					  type="text"
					  id="phone"
					  v-model="formData.phone"
					  @input="clearError('phone')"
					  placeholder="ENTER YOUR PHONE NUMBER"
					  :class="{ 'is-invalid': errors.phone }"
					  maxlength="10"
					/>
				</div>
                <div v-if="errors.phone" class="error-message">{{ errors.phone }}</div>
              </div>
  
              <div class="form-group">
				<div class="ra_form_input custom">
					<input
					  type="email"
					  id="email"
					  v-model="formData.email"
					  @input="clearError('email')"
					  placeholder="ENTER YOUR EMAIL (OPTIONAL)"
					  :class="{ 'is-invalid': errors.email }"
					/>
				</div>
                <div v-if="errors.email" class="error-message">{{ errors.email }}</div>
              </div>
  
              <div class="form-group">
                <textarea
                  id="description"
                  v-model="formData.description"
                  @input="clearError('description')"
                  placeholder="ENTER DESCRIPTION"
                  :class="{ 'is-invalid': errors.description }"
                ></textarea>
                <div v-if="errors.description" class="error-message">{{ errors.description }}</div>
              </div>
              <div class="form-group">
                <button type="submit" id="enquirySubmit" class="btn btn-success submit-btn btn-block">INQUIRE NOW</button>
              </div>
            </div>

          </form>
        </div>
      </div>
    </div>
  </template>
  

<script>
    import axios from 'axios';

    export default {
        data() {
            return {
                formData: {
                    name: '',
                    phone: '',
                    email: '',
                    description: '',
                },
                errors: {},
                localProductId: null, 
                customerInquiryCategory: null,
            };
        },
        methods: {
            openModal(productId, productName, customer_inquiry_category, customer_name, email, phone_number) {        
                this.localProductId = productId;
                this.customerInquiryCategory = customer_inquiry_category;
                
                const selectedBrand = localStorage.getItem('selectedBrand');
                const selectedModel = localStorage.getItem('selectedModel');
                const selectedFuel = localStorage.getItem('selectedFuel');

                if(selectedBrand && selectedModel && selectedFuel)
                {
                    document.getElementById('selected-product-name').innerText = 'PRODUCT : '+ selectedBrand + ' ' + selectedModel + ' ' + selectedFuel;
                }else{
                    document.getElementById('selected-product-name').innerText = 'PRODUCT : '+productName;   
                }

                this.formData.name = customer_name || '';
                this.formData.phone = phone_number || '';
                this.formData.email = email || '';

                $('#enquireNowModal').modal('show');   
            },
            closeModal() {
                $('#enquireNowModal').modal('hide');
                
                $('#enquireNowModal').on('hidden.bs.modal', function () {
                    $(this).data('bs.modal', null);
                });

                $('.modal-backdrop').remove();

                // Reset the form fields and errors
                this.errors = {};  
                this.formData = {
                    name: '',
                    phone: '',
                    email: '',
                    description: ''
                };
            },
            async handleSubmit() {
                if (!this.validateForm()) {
                    return;
                }
                $('#enquirySubmit').prop('disabled',true);

                const locationId = localStorage.getItem('location_id');

                const formDataWithAdditionalParams = {
                    ...this.formData,
                    product_id: this.localProductId,
                    location_id: locationId,
                    customer_inquiry_category: this.customerInquiryCategory,
                };

                const csrfToken = document.querySelector('meta[name="csrf-token"]');
                if (!csrfToken) {
                    alert("Security error: CSRF token missing.");
                    return;
                }

                try {
                    const response = await axios.post('/create-enquiry', formDataWithAdditionalParams, {
                        headers: {
                            'Content-Type': 'application/json',
                            'X-CSRF-TOKEN': csrfToken.getAttribute('content'),
                        }
                    });
                    if (response.data.status == 'success') {
                        toastr.options = {
                            "positionClass": "toast-top-right"
                        };
                        toastr.success('Enquiry submitted successfully.');
                        $('#enquirySubmit').prop('disabled',false);
                        this.closeModal();
                    } else if (response.data.status == 'fail') {
                        toastr.options = {
                            "positionClass": "toast-top-right"
                        };
                        toastr.error('Enquiry submission failed. Please try again.');
                        $('#enquirySubmit').prop('disabled',false);
                    }

                    $('.btn-close').click();
                } catch (error) {
                    alert('Error submitting enquiry. Please try again.');
                }
            },
            validateForm() {
                this.errors = {};

                if (!this.formData.name.trim()) {
                    this.errors.name = 'Name is required';
                }

                if (!this.formData.phone.trim()) {
                    this.errors.phone = 'Phone number is required';
                } else if (!/^\d{10}$/.test(this.formData.phone)) {
                    this.errors.phone = 'Phone number must be exactly 10 digits';
                }

                if (this.formData.email && !this.isValidEmail(this.formData.email)) {
                    this.errors.email = 'Please enter a valid email address';
                }

                if (!this.formData.description.trim()) {
                    this.errors.description = 'Description is required';
                }

                return Object.keys(this.errors).length === 0;
            },
            isValidEmail(email) {
                const regex = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
                return regex.test(email);
            },
            clearError(field) {
                this.errors[field] = '';
            }
        }
    };
</script>


<style scoped>
    textarea#description{
        margin-bottom: unset;
    }
    button.btn.btn-success.submit-btn.btn-block {
        width: 40%;
        margin-left: unset;
        border-radius: unset;
        text-transform: uppercase;
    }
    .modal-header {
        padding: 18px;
    }
    input,
    textarea {
        width: 100%;
        padding: 10px;
        border-radius: 5px;
        border: 1px solid #ccc;
    }
    .form-group {
        margin-bottom: 23px;
    }
    textarea {
        height: 100px;
    }

    button.submit-btn {
        width: 100%;
        padding: 10px;
        color: #e02020;
        background-color: white;
        border: 2px solid #e02020;
        border-radius: 5px;
        font-size: 16px;
        cursor: pointer;
        font-weight: 600;
        margin-left: 15px;
    }

    button.submit-btn:hover {
        background-color: #e02020;
        color: white;
    }

    .is-invalid {
        border-color: red;
    }

    .error-message {
        color: red;
        font-size: 12px;
        margin-top: 5px;
    }

    #enquireNowModal {
        z-index: 1051;  /* higher than 1050 to ensure it is above the promotion modal */
    }

    .modal-backdrop {
        z-index: 1050; /* The backdrop of the enquiry modal */
    }

    .modal-footer{
        justify-content: flex-start;
    }
    input, textarea {
        width: 100%;
        padding: unset; 
        border-radius: unset; 
        border: none; 
    }
</style>