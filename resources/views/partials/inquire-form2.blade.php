<form id="inquiryForm" action="{{ route('create_enquiry') }}" method="POST">
    @csrf

    {{-- Step 1: Select Manufacturer --}}
    <div id="step1" class="form-step">
        <div class="step-header">
            <div class="step-header-left">
                <h3>Select Manufacturer</h3>
            </div>
        </div>
        <input type="text" id="brandSearch" placeholder="Search Brands" class="search-bar">
        <div id="brandList" class="grid-list">
            @foreach([
                ['name' => 'Maruti Suzuki', 'img' => 'maruti-suzuki-logo.png'],
                ['name' => 'Hyundai', 'img' => 'hyundai-logo.png'],
                ['name' => 'Honda', 'img' => 'honda-logo.jpg'],
                ['name' => 'Tata', 'img' => 'tata-logo.png'],
                ['name' => 'Ford', 'img' => 'ford-logo.png'],
                ['name' => 'Volkswagen', 'img' => 'volkswagen-logo.png'],
                ['name' => 'Mahindra', 'img' => 'mahindra-logo.png'],
                ['name' => 'Renault', 'img' => 'renault-logo.png'],
                ['name' => 'Chevrolet', 'img' => 'chevrolet-logo.jfif'],
                ['name' => 'Toyota', 'img' => 'toyota-logo.jfif'],
                ['name' => 'Skoda', 'img' => 'skoda-logo.png'],
                ['name' => 'Nisaan', 'img' => 'nisaan-logo.jfif'],
                ['name' => 'Fiat', 'img' => 'fiat-logo.jfif'],
                ['name' => 'Datsun', 'img' => 'datsun-logo.jfif'],
                ['name' => 'BMW', 'img' => 'bmw-logo.png'],
                ['name' => 'KIA', 'img' => 'kia-logo.png'],
                ['name' => 'Audi', 'img' => 'audi-logo.jfif'],
                ['name' => 'Mercedes', 'img' => 'mercedes-logo.jfif'],
                ['name' => 'Jeep', 'img' => 'jeep-logo.png'],
                ['name' => 'Mitsubishi', 'img' => 'mitsubishi-logo.png'],
                ['name' => 'MG', 'img' => 'mg-logo.jfif'],
                ['name' => 'Land Rover', 'img' => 'land-rover-logo.jfif'],
                ['name' => 'Volvo', 'img' => 'volvo-logo.jfif'],
                ['name' => 'Jaguar', 'img' => 'jaguar-logo.jfif'],
                ['name' => 'Sangyong', 'img' => 'ssangyong-logo.png'],
                ['name' => 'Isuzu', 'img' => 'isuzu-logo.png'],
                ['name' => 'Mini', 'img' => 'mini-logo.jfif'],
                ['name' => 'Force', 'img' => 'force-logo.png'],
                ['name' => 'Opel', 'img' => 'opel-logo.png'],
                ['name' => 'Porsche', 'img' => 'porsche-logo.jfif'],
                ['name' => 'Daewoo', 'img' => 'daewoo-logo.jfif'],
                ['name' => 'Hindustan Motors', 'img' => 'hindustan-motors-logo.png'],
                ['name' => 'Aston Martin', 'img' => 'aston-martin-logo.png'],
                ['name' => 'Citroen', 'img' => 'citroen-logo.jfif'],
                ['name' => 'Lexus', 'img' => 'lexus-logo.jfif'],
                ['name' => 'Bentley', 'img' => 'bentley-logo.jfif'],
                ['name' => 'DC', 'img' => 'dc-logo.png'],
                ['name' => 'Ferrari', 'img' => 'ferrari-logo.png'],
                ['name' => 'Maserati', 'img' => 'maserati-logo.png'],
                ['name' => 'Lamborghini', 'img' => 'lamborghini-logo.png'],
                ['name' => 'Rolls Royce', 'img' => 'rolls-royce-logo.png'],
                ['name' => 'Photon', 'img' => 'foton-logo.png'],
                ['name' => 'Jayem', 'img' => 'jayem-logo.jfif'],
                ['name' => 'Premier', 'img' => 'premier-logo.png'],
                ['name' => 'Hummer', 'img' => 'hummer-logo.png'],
                ['name' => 'BYD', 'img' => 'byd-logo.jfif'],
            ] as $brand)
                <div class="select-item" data-name="{{ $brand['name'] }}" data-img="{{ $brand['img'] }}">
                    <img src="{{ asset('/assets/images/logos/' . $brand['img']) }}" alt="{{ $brand['name'] }}">
                    <span>{{ $brand['name'] }}</span>
                </div>
            @endforeach
        </div>
    </div>

    {{-- Step 2: Select Model --}}
    <div id="step2" class="form-step d-none">
        <div class="step-header">
            <div class="step-header-left">
                <button type="button" class="back-icon" data-back="1">←</button>
                <h3>Select Model</h3>
            </div>
        </div>
        <input type="text" id="modelSearch" placeholder="Search Models" class="search-bar">
        <div id="modelList" class="grid-list">
        @foreach([
                ['name' => 'Swift', 'img' => 'swift-car.jfif'],
                ['name' => 'Wagnor', 'img' => 'wagnor-car.jfif'],
                ['name' => 'i10', 'img' => 'i10-car.jfif'],
                ['name' => 'i20', 'img' => 'i20-car.jfif'],
                ['name' => 'City IVTEC', 'img' => 'city-vtec-car.jfif'],
                ['name' => 'Honda', 'img' => 'honda-city-car.jfif'],
                ['name' => 'Tiago', 'img' => 'tiago-car.jfif'],
                ['name' => 'Tiago NRG', 'img' => 'tiago-nrg-car.jfif'],
                ['name' => 'Figo', 'img' => 'figo-car.jfif'],
                ['name' => 'Eco Sport', 'img' => 'eco-sport-car.jfif'],
                ['name' => 'Polo', 'img' => 'swift-car.jfif'],
                ['name' => 'Vento', 'img' => 'vento-car.jfif'],
            ] as $model)
                <div class="select-item" data-name="{{ $model['name'] }}" data-img="{{ $model['img'] }}">
                    <img src="{{ asset('/assets/images/cars/' . $model['img']) }}" alt="{{ $model['name'] }}">
                    <span>{{ $model['name'] }}</span>
                </div>
            @endforeach
        </div>
    </div>

    {{-- Step 3: Select Fuel Type --}}
    <div id="step3" class="form-step d-none">
        <div class="step-header">
            <div class="step-header-left">
                <button type="button" class="back-icon" data-back="2">←</button>
                <h3>Select Fuel Type</h3>
            </div>
        </div>
        <input type="text" id="fuelSearch" placeholder="Search Fuel Type" class="search-bar">
        <div id="fuelList" class="grid-list">
            @foreach(['Petrol', 'CNG', 'Diesel'] as $fuel)
                <div class="select-item" data-name="{{ $fuel }}">
                    <img src="{{ asset('assets/images/fuels/' . strtolower($fuel) . '.png') }}" alt="{{ $fuel }}">
                    <span>{{ $fuel }}</span>
                </div>
            @endforeach
        </div>
    </div>

    {{-- Step 4: Summary & Inquire --}}
    <div id="step4" class="d-none form-step">
        <div class="modal-preview">
            <img id="summaryImage" src="" alt="Selected model">
        </div>

        <div class="summary-row">
            <div class="summary-text">
                <span><strong id="summaryBrand">Brand </strong> <strong id="summaryModel">Model </strong> <span class="fuel-text" id="summaryFuel">Fuel</span></span>
            </div>
            <button type="button" class="change-btn" onclick="resetForm()">Change</button>
        </div>

        <button class="btn btn-danger submit-btn">Inquire Now</button>
    </div>

</form>

@section('script')
<script>
    function resetForm() {
        resetSelections();
        goToStep(1);
    }

    function goToStep(step) {
        $('.form-step').addClass('d-none');
        $('#step' + step).removeClass('d-none');
    }

    function resetSelections() {
        localStorage.removeItem('selectedBrand');
        localStorage.removeItem('selectedModel');
        localStorage.removeItem('selectedFuel');
        localStorage.removeItem('brandImg');
        localStorage.removeItem('modelImg');
    }

    $(document).ready(function () {
        function goToStep(step) {
            $('.form-step').addClass('d-none');
            $('#step' + step).removeClass('d-none');
            if (step === 4) {
                const savedBrand = localStorage.getItem('selectedBrand');
                const savedModel = localStorage.getItem('selectedModel');
                const savedFuel = localStorage.getItem('selectedFuel');
                
                if (savedBrand && savedModel && savedFuel) {
                    $('#summaryBrand').text(savedBrand);
                    $('#summaryModel').text(savedModel);
                    $('#summaryFuel').text(savedFuel);

                    const modelImg = localStorage.getItem('modelImg');
                    const brandImg = localStorage.getItem('brandImg');
                    const imageUrl = modelImg
                        ? '/assets/images/cars/' + modelImg
                        : '/assets/images/logos/' + brandImg;

                    $('#summaryImage').attr('src', imageUrl);
                }
            }
        }

        $('#brandList').on('click', '.select-item', function () {
            const brand = $(this).data('name');
            const brandImg = $(this).data('img');
            localStorage.setItem('selectedBrand', brand);
            localStorage.setItem('brandImg', brandImg);
            goToStep(2);
        });

        $('#modelList').on('click', '.select-item', function () {
            const model = $(this).data('name');
            const modelImg = $(this).data('img');
            localStorage.setItem('selectedModel', model);
            localStorage.setItem('modelImg', modelImg);
            goToStep(3);
        });

        $('#fuelList').on('click', '.select-item', function () {
            const fuel = $(this).data('name');
            localStorage.setItem('selectedFuel', fuel);

            const brand = localStorage.getItem('selectedBrand') || '';
            const model = localStorage.getItem('selectedModel') || '';

            $('#summaryBrand').text(brand);
            $('#summaryModel').text(model);
            $('#summaryFuel').text(fuel);

            const modelImg = localStorage.getItem('modelImg');
            const brandImg = localStorage.getItem('brandImg');
            const imageUrl = modelImg
                ? '/assets/images/cars/' + modelImg
                : '/assets/images/logos/' + brandImg;

            $('#summaryImage').attr('src', imageUrl);
            goToStep(4);
        });

        $('.back-icon').on('click', function () {
            const step = $(this).data('back');
            goToStep(step);
        });

        $('.change-btn').on('click', function () {
            resetSelections();
            goToStep(1);
        });

        $('#brandSearch').on('input', function () {
            const val = $(this).val().toLowerCase();
            $('#brandList .select-item').each(function () {
                $(this).toggle($(this).text().toLowerCase().includes(val));
            });
        });

        $('#modelSearch').on('input', function () {
            const val = $(this).val().toLowerCase();
            $('#modelList .select-item').each(function () {
                $(this).toggle($(this).text().toLowerCase().includes(val));
            });
        });

        $('#fuelSearch').on('input', function () {
            const val = $(this).val().toLowerCase();
            $('#fuelList .select-item').each(function () {
                $(this).toggle($(this).text().toLowerCase().includes(val));
            });
        });

        const savedBrand = localStorage.getItem('selectedBrand');
        const savedModel = localStorage.getItem('selectedModel');
        const savedFuel = localStorage.getItem('selectedFuel');

        if (savedBrand && savedModel && savedFuel) {
            $('#summaryBrand').text(savedBrand);
            $('#summaryModel').text(savedModel);
            $('#summaryFuel').text(savedFuel);

            const modelImg = localStorage.getItem('modelImg');
            const brandImg = localStorage.getItem('brandImg');
            const imageUrl = modelImg
                ? '/assets/images/cars/' + modelImg
                : '/assets/images/logos/' + brandImg;

            $('#summaryImage').attr('src', imageUrl);
            goToStep(4);
        }
    });

</script>

@endsection
