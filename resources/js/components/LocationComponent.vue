<template>
    <span class="locationNameModal">{{ locationName }}</span>
    <img
      loading="lazy"
      src="./../../../public/assets/images/down_arrow.svg"
      class="ra_location_dropdown_arrow"
      alt="Dropdown Arrow"
    />
  </template>
  
  <script>
  export default {
    props: {
      locations: {
        type: Array,
        required: true,
      },
    },
    data() {
      return {
        locationId: localStorage.getItem('location_id') || null,
        locationName: localStorage.getItem('location_name') || 'Jamaica',
      };
    },
    methods: {
      
    },
    mounted() {
    },
  };
  </script>
  