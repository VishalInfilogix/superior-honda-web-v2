<template>
  <div>
    <!-- Breadcrumb Navigation -->
    <div class="ra_scrolpy_wraper" style="z-index:1">
      <div class="ra_scrolpy_wraper_item" style="display:block !important">
        <div class="scrolpy_slider main-breadcrumb">
          <div class="item">
            <a href="javascript:void(0);" 
              :class="{ active: selectedCategory === 'service' }"
              @click="filterProducts('service')">
              Services
            </a>
          </div>
          <div class="item">
            <a href="javascript:void(0);" 
              :class="{ active: selectedCategory === 'product' }"
              @click="filterProducts('product')">
              Products
            </a>
          </div>
          <div class="item">
            <a href="javascript:void(0);" 
              :class="{ active: selectedCategory === 'accessories' }"
              @click="filterProducts('accessories')">
              Accessories
            </a>
          </div>
        </div>
      </div>
    </div>

    <!-- Product Categories Display Grid -->
    <div class="ra_services_provide_wraper" id="services">
      
      <!-- Show content only if filteredProducts is not empty -->
      <template v-if="filteredProducts.length > 0">
        <div class="ra_red_border"></div>
        <div class="ra_heading_section">
          <h2 class="ra_heading_section_data">Product Categories List</h2>
        </div>
        <div class="ra_para_style">
          Choose from a wide assortment of car services from periodic car
          servicing, car care services, wheel care services, cashless
          insurance claims and much more!
        </div>

        <div class="ra_services_grid">
          <a
            v-for="product_category in filteredProducts"
            :key="product_category.id"
            :href="'/product-category/' + product_category.product_category_slug"
          >
            <div class="ra_services_grid_data">
              <div class="ra_services_flex">
                <img
                  loading="lazy"
                  :src="main_web_url + product_category.category_image"
                  :alt="product_category.name"
                />
                <span>{{ product_category.name }}</span>
              </div>
            </div>
          </a>
        </div>
      </template>

      <p v-else class="no-category-found-text">No category found</p>
    </div>
  </div>
</template>

<script>
export default {
  props: {
    product_categories: Array,
    main_web_url: String
  },
  data() {
    return {
      selectedCategory: 'service',
    };
  },
  computed: {
    filteredProducts() {
      return this.product_categories.filter(product_category =>
        product_category.parent_categories.some(category => category.parent_category_name === this.selectedCategory)
      );
    },
  },
  methods: {
    filterProducts(category) {
      this.selectedCategory = category;
    },
  },
};
</script>

<style scoped>
.no-category-found-text {
  color: #e02020;
  text-align: center;
  font-size : 20px;
  text-transform: capitalize;
  font-weight: bold;
}
</style>
