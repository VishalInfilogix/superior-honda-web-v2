<template>
    <div>
      <div class="list_ra_main_listing_heading">Scheduled Packages</div>
      <div class="list_ra_main_listing_item">
        <div class="list_ra_main_listing_item_green_strip">Recommended</div>
  
        <div v-if="localProducts && localProducts.data.length">
          <div v-for="product in localProducts.data" :key="product.id" class="list_ra_main_listing_item_data">
            <div class="list_ra_main_listing_item_datainner">
              <div class="list_ra_main_listing_item_datainner_img">
                <img
                  loading="lazy"
                  class="list_ra_main_listing_item_datainner_imgcont"
                  :src="(product.images?.length > 0 && product.images[0]?.images) 
                        ? main_web_url + product.images[0].images 
                        : '/assets/images/Standard Service Package sq.jpg'"
                  alt="Car Standard Service"
                  style="display: block"
                />
              </div>
              <div class="list_ra_main_listing_ul">
                <div class="list_ra_main_listing_ul_mar" style="margin-bottom:15px">
                  <div class="list_ra_main_listing_ul_head">
                    <h2 style="margin:0" class="list_ra_main_listing_ul_head_cont">{{ product.product_name }}</h2>
                  </div>
                  <div class="list_ra_main_listing_ul_img">
                    <div class="list_ra_main_listing_grey_strip">{{ product.product_category.name }}</div>
                  </div>
                </div>

                <div class="list_ra_main_listing_tick_li">
                  <!-- <div v-if="product.brand || product.model" class="list_ra_main_listing_tick_li_item">
                    <img loading="lazy" src="/assets/images/tick.svg" class="list_ra_main_listing_tick_li_img" alt="Included" />
                    <div class="list_ra_main_listing_dot_li" itemProp="name">{{ product.brand?.brand_name ?? '' }}</div>
                  </div> -->
                  <!-- <div v-if="product.variant || product.type" class="list_ra_main_listing_tick_li_item">
                    <img loading="lazy" src="/assets/images/tick.svg" class="list_ra_main_listing_tick_li_img" alt="Included" />
                    <div class="list_ra_main_listing_dot_li" itemProp="name">
                      {{ product.variant?.variant_name ?? '' }}
                      {{ product.type?.vehicle_type ? '• ' + product.type.vehicle_type : '' }}</div>
                  </div>
                  <div v-if="product.cost_price" class="list_ra_main_listing_tick_li_item">
                    <img loading="lazy" src="/assets/images/tick.svg" class="list_ra_main_listing_tick_li_img" alt="Included" />
                    <div class="list_ra_main_listing_dot_li" itemProp="name">{{ product.cost_price }}</div>
                  </div>
                  <div v-if="product.year" class="list_ra_main_listing_tick_li_item" itemProp="item">
                    <img loading="lazy" src="/assets/images/tick.svg" class="list_ra_main_listing_tick_li_img" alt="Included" />
                    <div class="list_ra_main_listing_dot_li" itemProp="name">{{ product.year || '--' }}</div>
                  </div>
                  <div v-if="product.used_part" class="list_ra_main_listing_tick_li_item" itemProp="item">
                    <img loading="lazy" src="/assets/images/tick.svg" class="list_ra_main_listing_tick_li_img" alt="Included" />
                    <div class="list_ra_main_listing_dot_li" itemProp="name">{{ product.used_part === 0 ? 'Brand New' : 'Used Part' }}</div>
                  </div>                 
                  <div v-if="product.supplier" class="list_ra_main_listing_tick_li_item" itemProp="item">
                    <img loading="lazy" src="/assets/images/tick.svg" class="list_ra_main_listing_tick_li_img" alt="Included" />
                    <div class="list_ra_main_listing_dot_li" itemProp="name">{{ product.supplier }}</div>
                  </div> -->
                </div>
                <div class="list_ra_main_listing_wrapper">
                  <div class="list_ra_main_listing_description" itemProp="name">
                    {{ product.short_description ?? '' }}
                  </div>
                  
                  <hr class="separator" />
                  
                  <div class="list_ra_main_listing_description" itemProp="name" v-html="product.description"></div>
                </div>

              </div>
            </div>
       
            <div class="list_ra_main_listing_addtocart">
              <h3 v-if="product.cost_price" class="product-cost">Price : ${{ product.cost_price }}</h3>
              <button 
                type="button" 
                class="btn btn-danger enquire-btn" 
                data-toggle="modal" 
                data-target="#enquireNowModal" 
                @click="openEnquiryModal(product.id, product.product_name)">
                <span class="plus-sign">+</span>
                <span class="enquire-now-text">Enquire Now</span>
              </button>

            </div>
          </div>
        </div>
      </div>

      <div class="list_ra_pagination">
        <nav aria-label="Page navigation">
          <ul class="pagination">
            <li :class="['page-item', { disabled: localProducts.current_page === 1 }]">
              <a class="page-link" href="#" aria-label="Previous" @click.prevent="changePage(localProducts.current_page - 1)">
                <span aria-hidden="true">&laquo;</span>
              </a>
            </li>
  
            <li v-for="page in paginationPages" :key="page" :class="['page-item', { active: page === localProducts.current_page }]">
              <a class="page-link" href="#" @click.prevent="changePage(page)">{{ page }}</a>
            </li>
  
            <li :class="['page-item', { disabled: localProducts.current_page === localProducts.last_page }]">
              <a class="page-link" href="#" aria-label="Next" @click.prevent="changePage(localProducts.current_page + 1)">
                <span aria-hidden="true">&raquo;</span>
              </a>
            </li>
          </ul>
        </nav>
      </div>
      <EnquiryNow ref="enquiryNow" />
    </div>
  </template>
  
  <script>
  import EnquiryNow from './EnquiryNow.vue';

  export default {
    props: {
      products: {
        type: Object,
        required: true,
      },
      product_category_slug: {
        type: String,
        required: true,
      },
      user_details: {
        type: Object
      },
      main_web_url: {
        type: String,        
      }
    },
    data() {
      return {
        localProducts: this.products,
      };
    },
    computed: {
      paginationPages() {
        const pages = [];
        for (let i = 1; i <= this.localProducts.last_page; i++) {
          pages.push(i);
        }
        return pages;
      },
    },
    methods: {
        async changePage(page) {
            if (page >= 1 && page <= this.localProducts.last_page) {
            this.$emit('page-changed', page);
    
            try {
                const response = await fetch(`product-page-data/${this.product_category_slug}?page=${page}`);
                const data = await response.json();

                this.localProducts = data;
                
            } catch (error) {
                console.error("Error fetching product data:", error);
            }
            }
        },
        openEnquiryModal(productId, productName) {
            const customer_first_name = this.user_details && this.user_details.first_name ? this.user_details.first_name : '';
            const customer_last_name = this.user_details && this.user_details.last_name ? this.user_details.last_name : '';
            const customer_name = this.user_details ? (customer_first_name) + (customer_last_name ? ' ' + customer_last_name : '') : '';
            const email = this.user_details && this.user_details.email ? this.user_details.email : '';
            const phone_number = this.user_details && this.user_details.phone_number ? this.user_details.phone_number : '';

            // Pass productName to the EnquiryNow component
            this.$refs.enquiryNow.openModal(productId, productName, 'product', customer_name, email, phone_number);
        }
    },
    components: {
        EnquiryNow,
    },
  };
  </script>

<style scoped>
  
  .enquire-btn {
    border: 0.0625rem solid #e73c33;
    padding: 0.75rem 0.625rem;
    display: flex;
    flex-direction: row;
    justify-content: center;
    align-items: center;
    cursor: pointer;
    color: #e73c33;
    background: #fff;
    transition: transform 0.5s, -webkit-transform 0.5s;
  }
  
  .enquire-btn:hover {
    background: #e73c33;
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
</style>
  