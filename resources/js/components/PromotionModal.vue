<template>
  <div
    v-if="isOpen"
    class="modal fade in"
    id="promotionModal"
    tabindex="-1"
    role="dialog"
    aria-labelledby="promotionModalLabel"
    style="display: block; z-index: 1050;"
  >
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
          <h4 class="modal-title" id="promotionModalLabel">{{ promotion.heading }}</h4>
        </div>

        <div class="modal-body">
          <div class="main-image-container">
            <img
              :src="mainWebUrl + promotion.main_image"
              alt="Main Promotion Image"
              class="main-image"
            />
          </div>

          <div v-if="promotion.promotion_products && promotion.promotion_products.length">
            <h4 class="section-title">Products</h4>
            <div class="product-grid">
              <div
                v-for="product in promotion.promotion_products"
                :key="product.id"
                class="product"
              >
                <img
                  :src="mainWebUrl + product.product_details.images[0].images"
                  alt="Product Image"
                  class="product-image"
                />
                <h5 class="product-name mt-2">
                  {{ product.product_details.product_name }} :
                  <span style="color: red;">{{ product.product_details.cost_price }}/-</span>
                </h5>
              </div>
            </div>
          </div>

          <div v-if="promotion.promotion_services && promotion.promotion_services.length">
            <h4 class="section-title">Services</h4>
            <div class="product-grid">
              <div
                v-for="service in promotion.promotion_services"
                :key="service.id"
                class="product"
              >
                <img
                  :src="mainWebUrl + service.service_details.images[0].images"
                  alt="Service Image"
                  class="product-image"
                />
                <h5 class="product-name mt-2">
                  {{ service.service_details.product_name }} :
                  <span style="color: red;">{{ service.service_details.cost_price }}/-</span>
                </h5>
              </div>
            </div>
          </div>

          <div class="container-fluid text-center" style="width: 100%; padding: 0;">
  <div class="row" style="width: 100%; margin: 0;">
    <div class="col-xs-6 text-left">
      <div style="color: black; font-weight: 400; font-size: 14px;">Total Price:</div>
      <div style="color: black; font-weight: 600; font-size: 25px; text-decoration: line-through;">
        {{ promotion.total_price ? promotion.total_price + '/-' : 'N/A' }}
      </div>
    </div>
    <div class="col-xs-6 text-right">
      <div style="color: black; font-weight: 400; font-size: 14px;">Offer Price:</div>
      <div v-if="promotion.final_bucket_cost" style="color: red; font-weight: 600; font-size: 25px;">
        {{ promotion.final_bucket_cost }}/-
      </div>
      <div v-else style="color: red; font-weight: 600; font-size: 25px;">N/A</div>
    </div>
  </div>
</div>


        </div>

        <div class="modal-footer">
          <button
            type="button"
            class="btn submit-btn"
            data-toggle="modal"
            data-target="#enquireNowModal"
            @click="openEnquiryModal(promotion.id, promotion.heading)"
          >
            <span class="plus-sign">+</span>
            <span class="enquire-now-text">Enquire Now</span>
          </button>
        </div>
      </div>
    </div>
  </div>

  <EnquiryNow ref="enquiryNow" />
</template>

  
  <script>
  import EnquiryNow from './EnquiryNow.vue';
  
  export default {
    props: {
      isOpen: Boolean,
      promotion: Object,
      mainWebUrl: String,
      user_details: Object
    },
    data() {
    },
    watch: {
      isOpen(newVal) {
        this.showModal = newVal;
      }
    },
    methods: {
        closeModal() {
          this.$emit("close");
          $(".modal-backdrop").remove(); 
          $("body").removeClass("modal-open"); 
        },
        openEnquiryModal(promotionId,promotionHeading)
        {
          $('#promotionModal').addClass('show');
          document.getElementById('selected-product-name').innerText = promotionHeading;
          const customer_first_name = this.user_details && this.user_details.first_name ? this.user_details.first_name : '';
          const customer_last_name = this.user_details && this.user_details.last_name ? this.user_details.last_name : '';
          const customer_name = this.user_details ? (customer_first_name) + (customer_last_name ? ' ' + customer_last_name : '') : '';
          const email = this.user_details && this.user_details.email ? this.user_details.email : '';
          const phone_number = this.user_details && this.user_details.phone_number ? this.user_details.phone_number : '';

          // Open the enquiry modal without closing the promotion modal
          this.$refs.enquiryNow.openModal(promotionId, promotionHeading, 'promotion', customer_name, email, phone_number);
        }

    },
    components: {
      EnquiryNow,
    },
  };
  </script>
  
  <style scoped>
  #promotionModal{
    overflow-y: auto;
  }
  .close-btn {
    background: none;
    border: none;
    font-size: 30px;
    color: #e02020;
    cursor: pointer;
    transition: color 0.3s ease;
  }
  
  .close-btn:hover {
    color: #d63031;
  }
  
  .main-image-container {
    display: flex;
    justify-content: center;
    margin: auto 25px 20px;
    border-radius: 12px;
    border: 4px solid #b4bfbf7d;
    padding: 15px;
    width: 400px;
    height: 100%;
  }
  
  .main-image {
    width: 80%;
    height: 30%;
    object-fit: cover;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
  }
  
  .section-title {
    font-size: 18px;
    font-weight: bold;
    color: #333;
    margin-bottom: 10px;
  }
  
  .product-grid {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(140px, 1fr));
    gap: 20px;
    margin-bottom: 20px;
  }
  
  .product {
    background: #f8f8f8;
    padding: 15px 15px 15px 12px;
    border-radius: 8px;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
  }
  
  .product-name {
    font-size: 10px;
    font-weight: bold;
    color: #333;
    margin-bottom: 8px;
  }
  
  .product-image,
  .promotion-image {
    width: 120px;
    height: 100px;
    object-fit: cover;
    margin-top: 10px;
    border-radius: 8px;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
  }
  
  .promotion-images {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 20px;
    margin-top: 20px;
    margin-bottom: 20px;
    padding: 10px;
  }
  
  .enquire-btn {
    border: 0.0625rem solid #e02020;
    padding: 0.75rem 0.625rem;
    display: flex;
    flex-direction: row;
    justify-content: center;
    align-items: center;
    cursor: pointer;
    color: #e02020;
    background: #fff;
    transition: transform 0.5s, -webkit-transform 0.5s;
  }
  
  .enquire-btn:hover {
    background: #e02020;
    color: #fff;
    transform: scale(1.1);
  }
  
  .enquire-btn:active {
    transform: scale(0.98);
  }

  .enquire-btn .plus-sign {
    font-size: 22px;
    width: auto;
    height: 14px;
    display: flex;
    align-items: center;
    justify-content: center;
    font-weight: 500;
    padding-bottom: 5px;
  }
  

  .enquire-btn .enquire-now-text {
    margin-left: 0.5625rem;
    font-size: 1rem;
    font-weight: 600;
    font-stretch: normal;
    font-style: normal;
    line-height: 1.19;
    letter-spacing: 0.00875rem;
    text-align: left;
    text-transform: uppercase;
  }
  
  .modal-header .heading {
    display: flex;
    justify-content: center;
    align-items: center;
  }
  
  .modal-header .close-button {
    display: flex;
    align-items: center;
    justify-content: end;
    height: 0px;
  }
  .modal.fade.in {
    display: block;
    opacity: 1;
    background-color: rgba(0, 0, 0, 0.5); /* Ensure modal backdrop is visible */
}
h4#promotionModalLabel {
    text-transform: uppercase;
}
</style>
  