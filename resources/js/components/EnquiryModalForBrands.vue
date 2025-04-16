<template>
    
    <div class="ra_form_wraper ra_form2_wraper without-modal-inq" style="grid-column:2 / 3;grid-row:2 / 4;top:30px;margin-top:50px;margin-bottom:30px">
        <!-- Step 1: Select Manufacturer -->
        <div v-show="currentStep === 1" class="form-step">
            <div class="step-header">
            <div class="step-header-left">
                <h3>Select Manufacturer</h3>
            </div>
            </div>
            <input type="text" v-model="brandSearch" placeholder="Search Brands" class="search-bar">
            <div class="grid-list">
            <div
                v-for="brand in filteredBrands"
                :key="brand.name"
                class="select-item"
                @click="selectBrand(brand)"
            >
                <img :src="`/assets/images/logos/${brand.img}`" :alt="brand.name" />
                <span>{{ brand.name }}</span>
            </div>
            </div>
        </div>

        <!-- Step 2: Select Model -->
        <div v-show="currentStep === 2" class="form-step">
            <div class="step-header">
            <div class="step-header-left">
                <button type="button" @click="goBack(1)">←</button>
                <h3>Select Model</h3>
            </div>
            </div>
            <input type="text" v-model="modelSearch" placeholder="Search Models" class="search-bar">
            <div class="grid-list">
            <div
                v-for="model in filteredModels"
                :key="model.name"
                class="select-item"
                @click="selectModel(model)"
            >
                <img :src="`/assets/images/cars/${model.img}`" :alt="model.name" />
                <span>{{ model.name }}</span>
            </div>
            </div>
        </div>

        <!-- Step 3: Select Fuel Type -->
        <div v-show="currentStep === 3" class="form-step">
            <div class="step-header">
            <div class="step-header-left">
                <button type="button" @click="goBack(2)">←</button>
                <h3>Select Fuel Type</h3>
            </div>
            </div>
            <input type="text" v-model="fuelSearch" placeholder="Search Fuel Type" class="search-bar">
            <div class="grid-list">
            <div
                v-for="fuel in fuels"
                :key="fuel"
                class="select-item"
                @click="selectFuel(fuel)"
            >
                <img :src="`/assets/images/fuels/${fuel.toLowerCase()}.png`" :alt="fuel" />
                <span>{{ fuel }}</span>
            </div>
            </div>
        </div>

        <!-- Step 4: Summary & Inquire -->
        <div v-show="currentStep === 4" class="form-step">
            <div class="modal-preview">
            <img :src="summaryImage" alt="Selected model" />
            </div>

            <div class="summary-row">
            <div class="summary-text">
                <span><strong>{{ selectedBrand }}</strong> <strong>{{ selectedModel }}</strong> <span class="fuel-text">{{ selectedFuel }}</span></span>
            </div>
            <button type="button" class="change-btn" @click="resetForm">Change</button>
            </div>
            <button 
                type="button" 
                class="btn btn-danger submit-btn" 
                data-toggle="modal" 
                data-target="#enquireNowModal" 
                @click="openEnquiryModal()">
                Inquire Now
            </button>
        </div>
    </div>
    <EnquiryNow ref="enquiryNow" />
</template>
  
<script>
    import EnquiryNow from './EnquiryNowForBrands.vue';
    export default {
        data() {
            return {
                currentStep: 1,
                brandSearch: '',
                modelSearch: '',
                fuelSearch: '',
                selectedBrand: localStorage.getItem('selectedBrand') || '',
                selectedModel: localStorage.getItem('selectedModel') || '',
                selectedFuel: localStorage.getItem('selectedFuel') || '',
                brands: [
                    { name: 'Maruti Suzuki', img: 'maruti-suzuki-logo.png' },
                    { name: 'Hyundai', img: 'hyundai-logo.png' },
                    { name: 'Honda', img: 'honda-logo.jpg' },
                    { name: 'Tata', img: 'tata-logo.png' },
                    {'name': 'Ford', 'img': 'ford-logo.png'},
                    {'name': 'Volkswagen', 'img': 'volkswagen-logo.png'},
                    {'name': 'Mahindra', 'img': 'mahindra-logo.png'},
                    {'name': 'Renault', 'img': 'renault-logo.png'},
                    {'name': 'Chevrolet', 'img': 'chevrolet-logo.jfif'},
                    {'name': 'Toyota', 'img': 'toyota-logo.jfif'},
                    {'name': 'Skoda', 'img': 'skoda-logo.png'},
                    {'name': 'Nisaan', 'img': 'nisaan-logo.jfif'},
                    {'name': 'Fiat', 'img': 'fiat-logo.jfif'},
                    {'name': 'Datsun', 'img': 'datsun-logo.jfif'},
                    {'name': 'BMW', 'img': 'bmw-logo.png'},
                    {'name': 'KIA', 'img': 'kia-logo.png'},
                    {'name': 'Audi', 'img': 'audi-logo.jfif'},
                    {'name': 'Mercedes', 'img': 'mercedes-logo.jfif'},
                    {'name': 'Jeep', 'img': 'jeep-logo.png'},
                    {'name': 'Mitsubishi', 'img': 'mitsubishi-logo.png'},
                    {'name': 'MG', 'img': 'mg-logo.jfif'},
                    {'name': 'Land Rover', 'img': 'land-rover-logo.jfif'},
                    {'name': 'Volvo', 'img': 'volvo-logo.jfif'},
                    {'name': 'Jaguar', 'img': 'jaguar-logo.jfif'},
                    {'name': 'Sangyong', 'img': 'ssangyong-logo.png'},
                    {'name': 'Isuzu', 'img': 'isuzu-logo.png'},
                    {'name': 'Mini', 'img': 'mini-logo.jfif'},
                    {'name': 'Force', 'img': 'force-logo.png'},
                    {'name': 'Opel', 'img': 'opel-logo.png'},
                    {'name': 'Porsche', 'img': 'porsche-logo.jfif'},
                    {'name': 'Daewoo', 'img': 'daewoo-logo.jfif'},
                    {'name': 'Hindustan Motors', 'img': 'hindustan-motors-logo.png'},
                    {'name': 'Aston Martin', 'img': 'aston-martin-logo.png'},
                    {'name': 'Citroen', 'img': 'citroen-logo.jfif'},
                    {'name': 'Lexus', 'img': 'lexus-logo.jfif'},
                    {'name': 'Bentley', 'img': 'bentley-logo.jfif'},
                    {'name': 'DC', 'img': 'dc-logo.png'},
                    {'name': 'Ferrari', 'img': 'ferrari-logo.png'},
                    {'name': 'Maserati', 'img': 'maserati-logo.png'},
                    {'name': 'Lamborghini', 'img': 'lamborghini-logo.png'},
                    {'name': 'Rolls Royce', 'img': 'rolls-royce-logo.png'},
                    {'name': 'Photon', 'img': 'foton-logo.png'},
                    {'name': 'Jayem', 'img': 'jayem-logo.jfif'},
                    {'name': 'Premier', 'img': 'premier-logo.png'},
                    {'name': 'Hummer', 'img': 'hummer-logo.png'},
                    {'name': 'BYD', 'img': 'byd-logo.jfif'},
                ],
                models: [
                    {'name': 'Swift', 'img': 'swift-car.jfif'},
                    {'name': 'Wagnor', 'img': 'wagnor-car.jfif'},
                    {'name': 'i10', 'img': 'i10-car.jfif'},
                    {'name': 'i20', 'img': 'i20-car.jfif'},
                    {'name': 'City IVTEC', 'img': 'city-vtec-car.jfif'},
                    {'name': 'Honda', 'img': 'honda-city-car.jfif'},
                    {'name': 'Tiago', 'img': 'tiago-car.jfif'},
                    {'name': 'Tiago NRG', 'img': 'tiago-nrg-car.jfif'},
                    {'name': 'Figo', 'img': 'figo-car.jfif'},
                    {'name': 'Eco Sport', 'img': 'eco-sport-car.jfif'},
                    {'name': 'Polo', 'img': 'swift-car.jfif'},
                    {'name': 'Vento', 'img': 'vento-car.jfif'},
                ],
                fuels: ['Petrol', 'CNG', 'Diesel'],
            };
        },
        computed: {
            filteredBrands() {
                return this.brands.filter(brand => brand.name.toLowerCase().includes(this.brandSearch.toLowerCase()));
            },
            filteredModels() {
                return this.models.filter(model => model.name.toLowerCase().includes(this.modelSearch.toLowerCase()));
            },
            filteredFuels() {
                return this.fuels.filter(fuel => fuel.toLowerCase().includes(this.fuelSearch.toLowerCase()));
            },
            summaryImage() {
                const modelImg = localStorage.getItem('modelImg');
                const brandImg = localStorage.getItem('brandImg');
                return modelImg
                ? `/assets/images/cars/${modelImg}`
                : `/assets/images/logos/${brandImg}`;
            }
        },
        methods: {
            selectBrand(brand) {
                this.selectedBrand = brand.name;
                localStorage.setItem('selectedBrand', this.selectedBrand);
                localStorage.setItem('brandImg', brand.img);
                this.goToStep(2);
            },
            selectModel(model) {
                this.selectedModel = model.name;
                localStorage.setItem('selectedModel', this.selectedModel);
                localStorage.setItem('modelImg', model.img);
                this.goToStep(3);
            },
            selectFuel(fuel) {
                this.selectedFuel = fuel;
                localStorage.setItem('selectedFuel', this.selectedFuel);
                this.goToStep(4);
            },
            goToStep(step) {
                this.currentStep = step;
            },
            goBack(step) {
                this.currentStep = step;
            },
            resetForm() {
                localStorage.removeItem('selectedBrand');
                localStorage.removeItem('selectedModel');
                localStorage.removeItem('selectedFuel');
                localStorage.removeItem('brandImg');
                localStorage.removeItem('modelImg');
                this.selectedBrand = '';
                this.selectedModel = '';
                this.selectedFuel = '';
                this.goToStep(1);
            },
            openEnquiryModal() {
                const customer_first_name = this.user_details && this.user_details.first_name ? this.user_details.first_name : '';
                const customer_last_name = this.user_details && this.user_details.last_name ? this.user_details.last_name : '';
                const customer_name = this.user_details ? (customer_first_name) + (customer_last_name ? ' ' + customer_last_name : '') : '';
                const email = this.user_details && this.user_details.email ? this.user_details.email : '';
                const phone_number = this.user_details && this.user_details.phone_number ? this.user_details.phone_number : '';

                // Pass productName to the EnquiryNow component
                this.$refs.enquiryNow.openModal(this.selectedBrand, this.selectedModel, this.selectedFuel, customer_name, email, phone_number);
            }
        },
        mounted() {
            if (this.selectedBrand && this.selectedModel && this.selectedFuel) {
                this.goToStep(4);
            }
        },
        components: {
            EnquiryNow,
        },
    };
</script>

<style>
    #inquiryForm {
        display: flex;
        flex-direction: column;
        min-height: 100%;
        position: relative;
        padding-bottom: 80px;
    }

    .form-step, #finalForm {
        margin-top: 20px;
        flex-grow: 1;
        display: flex;
        flex-direction: column;
        min-height: 420px;
    }

    .step-header {
        display: flex;
        align-items: center;
        justify-content: space-between;
        margin-bottom: 10px;
    }

    .step-header-left {
        display: flex;
        align-items: center;
        gap: 8px;
    }

    .step-header h3,
    .form-step h3 {
        font-size: 18px;
        font-weight: 600;
        margin: 0;
        padding: 0;
        color: #222;
    }

    .back-icon {
        cursor: pointer;
        background: none;
        border: none;
        font-size: 20px;
        color: #000;
        font-weight: bold;
        padding: 0;
        line-height: 1;
    }

    .back-icon:hover {
        text-decoration: none !important;
        color: #000;
    }

    .change-btn {
        background: none;
        border: none;
        color: red;
        cursor: pointer;
        font-size: 14px;
        transition: transform 0.3s ease;
        font-weight: 500;
    }

    .change-btn:hover {
        transform: scale(1.05);
    }

    .grid-list {
        display: flex;
        flex-wrap: wrap;
        gap: 15px;
        max-height: 300px;
        overflow-y: auto;
        padding-right: 5px;
        flex-grow: 1;
    }

    .grid-list::-webkit-scrollbar {
        width: 6px;
    }

    .grid-list::-webkit-scrollbar-thumb {
        background: #ccc;
        border-radius: 4px;
    }

    .grid-list::-webkit-scrollbar-track {
        background: #f1f1f1;
        border-radius: 4px;
    }

    .select-item {
        width: 100px;
        text-align: center;
        cursor: pointer;
        transition: transform 0.3s ease;
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    .select-item:hover {
        transform: scale(1.05);
    }

    .select-item img {
        width: 80px;
        height: 80px;
        object-fit: contain;
        border-radius: 6px;
        margin-bottom: 6px;
        transition: transform 0.3s ease;
    }

    .select-item span {
        font-size: 14px;
        margin-top: 4px;
        color: #333;
    }

    .search-bar {
        margin: 10px 0 15px;
        padding: 10px 14px;
        width: 100%;
        border: 1px solid #ccc;
        border-radius: 6px;
        font-size: 14px;
    }

    .d-none {
        display: none !important;
    }

    .modal-preview img {
        max-width: 100%;
        height: auto;
        display: block;
        margin: 0 auto;
        border-radius: 8px;
    }

    .summary {
        text-align: center;
        margin-bottom: 30px;
    }

    .fuel-text {
        color: #777;
        font-weight: normal;
    }

    .submit-btn {
        margin-top: auto;
        width: 100%;
    }

    #finalForm {
        position: absolute;
        bottom: 20px;
        left: 0;
        right: 0;
        padding: 0 15px;
    }
    .summary-row {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 0 5px;
        margin-bottom: 20px;
        margin-top: 20px;
    }

    .summary-text span {
        font-size: 16px;
        color: #333;
    }
    #summaryBrand, #summaryModel, #summaryFuel{
        font-weight: bold;
        font-size: 20px;
    }
    #summaryFuel{
        opacity: 0.5;
    }
</style>