<template>
  <div>
    <div class="owl-carousel owl-theme get_summer_ready">
      <div
        v-for="promotion in promotions"
        :key="promotion.id"
        class="item scrolpy_slider promotin-slider-content"
        @mouseover="startImageLoop(promotion)"
        @mouseleave="stopImageLoop"
        @click="openPromotionModal(promotion)"
      >
        <a href="javascript:void(0);">
          <div
            v-if="hoveredPromotion && hoveredPromotion.id === promotion.id"
            style="position: relative; height: 182px; width: 237px; overflow: hidden;"
          >
            <div
              class="image-container"
              :style="{ transform: 'translateX(' + (-currentImageIndex * 237) + 'px)' }"
            >
              <img
                v-for="(image, index) in promotion.promotion_images"
                :key="index"
                :src="main_web_url + image.image"
                alt="promotion image"
                style="height: 182px; width: 237px; object-fit: cover; transition: transform 1s ease-in-out;"
              />
            </div>
          </div>

          <div v-else>
            <img
              :src="main_web_url + promotion.main_image"
              alt="promotion main image"
              style="height:182px; width:237px; object-fit: cover;"
            />
          </div>

          <div class="curate_title">
            <div class="curate_title_heading">{{ promotion.heading }}</div>
          </div>
        </a>
      </div>
    </div>

    <!-- Promotion Modal Component -->
    <PromotionModal
      v-if="selectedPromotion" 
      :isOpen="isModalOpen"
      :promotion="selectedPromotion"
      :mainWebUrl="main_web_url"
      @close="closeModal"
      :user_details="user_details"
    />
  </div>
</template>

<script>
import PromotionModal from './PromotionModal.vue';

export default {
  props: {
    promotions: {
      type: Array,
      required: true,
    },
    user_details: {
      type: Object,
    },
    main_web_url: {
      type: String,
    },
  },
  data() {
    return {
      hoveredPromotion: null,
      currentImageIndex: 0,
      imageInterval: null,
      isModalOpen: false,
      selectedPromotion: null,
    };
  },
  methods: {
    openPromotionModal(promotion) {
      this.selectedPromotion = promotion;
      this.isModalOpen = true
      this.$nextTick(() => {
        const modalElement = document.getElementById('promotionModal');
        if (modalElement) {
          const modal = new bootstrap.Modal(modalElement);
          modal.show();
        }
      });
    },

    closeModal() {
      this.isModalOpen = false;
      this.selectedPromotion = null;
    },

    startImageLoop(promotion) {
      if (this.imageInterval) {
        clearInterval(this.imageInterval);
      }

      this.hoveredPromotion = promotion;
      this.currentImageIndex = 0;

      if (promotion.promotion_images && promotion.promotion_images.length > 1) {
        this.imageInterval = setInterval(() => {
          this.currentImageIndex = (this.currentImageIndex + 1) % promotion.promotion_images.length;
        }, 2000);
      }
    },

    stopImageLoop() {
      this.hoveredPromotion = null;
      clearInterval(this.imageInterval);
    },
  },
  components: {
    PromotionModal,
  },
};
</script>

<style scoped>
.image-container {
  display: flex;
  transition: transform 1s ease-in-out;
}

.curate_title_heading {
  font-size: 16px;
  font-weight: bold;
  text-align: center;
}
</style>
