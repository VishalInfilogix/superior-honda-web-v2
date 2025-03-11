/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

import './bootstrap';
import { createApp } from 'vue';
import ProductCategoriesDisplay from './components/ProductCategoriesDisplay.vue';
import LocationComponent from './components/LocationComponent.vue';
import ProductsDisplay from './components/ProductsDisplay.vue';
import Promotions from './components/Promotions.vue';
import 'toastr/build/toastr.min.css';
import toastr from 'toastr';

// Create the Vue app
const app = createApp({});

// Register the component globally
app.component('product-categories-display', ProductCategoriesDisplay);
app.component('location-module', LocationComponent);
app.component('products-module', ProductsDisplay);
app.component('promotions', Promotions);

// Mount the app to the DOM element with the given ID
app.mount('#app');

