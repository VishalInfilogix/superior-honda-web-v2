<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/glide.core.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/glide.theme.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.3.4.1.min.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/storiesCss.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/css/glide.css') }}">

    <meta charSet="utf-8" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Superior Honda</title>
    @vite('resources/js/app.js')

    @yield('head')

    <style>
        .error-message {
            color: red;
            font-size: 14px;
            margin-top: 5px;
        }

        .is-invalid {
            border-color: red;
        }
    </style>
</head>

<body>
    <div id="app" style="height:100%">
        @yield('content')
    </div>
    <div class="ra_footer_wraper">
        {{-- <div class="ra_footer_main">
                <div class="ra_footer_column">
                    <div class="ra_footer_bottom_colo_1">
                        <h4 class="ra_footer_abo">ABOUT US</h4>
                        <img loading="lazy" src="/addons/e53edad8.png" class="_1vy0D" alt="Down Arrow"/>
                        <div class="ra_footer_first_head">
                        <a class="ra_footer_anchor" href="javascrpt:void(0);">
                            <p class="ra_footer_anchor_para">FAQs</p>
                        </a>
                        <a class="ra_footer_anchor" href="javascrpt:void(0);">
                            <p class="ra_footer_anchor_para">Contact Us</p>
                        </a>
                        <a class="ra_footer_anchor" href="javascrpt:void(0);">
                            <p class="ra_footer_anchor_para">Terms and Conditions</p>
                        </a>
                        <a class="ra_footer_anchor" href="javascrpt:void(0);">
                            <p class="ra_footer_anchor_para">Privacy Policy</p>
                        </a>
                        <a class="ra_footer_anchor" href="javascrpt:void(0);">
                            <p class="ra_footer_anchor_para">Superior Honda Partners</p>
                        </a>
                        <a class="ra_footer_anchor" href="javascrpt:void(0);">
                            <p class="ra_footer_anchor_para">Workshop Locator</p>
                        </a>
                        <a class="ra_footer_anchor" href="javascrpt:void(0);">
                            <p class="ra_footer_anchor_para">Offers</p>
                        </a>
                        <a class="ra_footer_anchor" href="javascrpt:void(0);">
                            <p class="ra_footer_anchor_para">Reviews</p>
                        </a>
                        <a class="ra_footer_anchor" href="javascrpt:void(0);">
                            <p class="ra_footer_anchor_para">Directory</p>
                        </a>
                        </div>
                    </div>
                </div>
                <div class="ra_footer_column">
                    <div class="ra_footer_bottom_colo_1">
                        <h4 class="ra_footer_abo">OUR SERVICES</h4>
                        <div class="ra_footer_first_head">
                            <a href="javascrpt:void(0);" class="ra_footer_anchor_para">Scheduled Services</a>
                            <a href="javascrpt:void(0);" class="ra_footer_anchor_para">AC Services</a>
                            <a href="javascrpt:void(0);" class="ra_footer_anchor_para">Cleaning &amp; Detailing</a>
                            <a href="javascrpt:void(0);" class="ra_footer_anchor_para">Lights &amp; Fitments</a>
                            <a href="javascrpt:void(0);" class="ra_footer_anchor_para">Denting Painting</a>
                            <a href="javascrpt:void(0);" class="ra_footer_anchor_para">Insurance Services</a>
                            <a href="javascrpt:void(0);" class="ra_footer_anchor_para">Custom Repair</a>
                            <a href="javascrpt:void(0);" class="ra_footer_anchor_para">Batteries</a>
                            <a href="javascrpt:void(0);" class="ra_footer_anchor_para">Tyres</a>
                            <a href="javascrpt:void(0);" class="ra_footer_anchor_para">Detailing Services</a>
                            <a href="javascrpt:void(0);" class="ra_footer_anchor_para">Windshields &amp; Glass</a>
                        </div>
                    </div>
                </div>
                <div class="ra_footer_column">
                    <div class="ra_footer_bottom_colo_1">
                        <h4 class="ra_footer_abo">LUXURY BRANDS</h4>
                        <img loading="lazy" src="/addons/e53edad8.png" class="_1vy0D" alt="Down Arrow"/>
                        <div class="ra_footer_first_head">
                        <a href="javascrpt:void(0);" class="ra_footer_anchor_para">Mercedes</a>
                        <a href="javascrpt:void(0);" class="ra_footer_anchor_para">BMW</a>
                        <a href="javascrpt:void(0);" class="ra_footer_anchor_para">Audi</a>
                        <a href="javascrpt:void(0);" class="ra_footer_anchor_para">Volvo</a>
                        <a href="javascrpt:void(0);" class="ra_footer_anchor_para">Mitsubishi</a>
                        <a href="javascrpt:void(0);" class="ra_footer_anchor_para">Jaguar</a>
                        <a href="javascrpt:void(0);" class="ra_footer_anchor_para">Porsche</a>
                        <a href="javascrpt:void(0);" class="ra_footer_anchor_para">Rolls Royce</a>
                        <a href="javascrpt:void(0);" class="ra_footer_anchor_para">Ferrari</a>
                        <a href="javascrpt:void(0);" class="ra_footer_anchor_para">Land Rover</a>
                    </div>
                    </div>
                </div>
                <div class="ra_footer_column">
                    <div class="ra_footer_bottom_colo_1">
                        <h4 class="ra_footer_abo">POPULAR BRANDS</h4>
                        <img loading="lazy" src="/addons/e53edad8.png" class="_1vy0D" alt="Down Arrow"/>
                        <div class="ra_footer_first_head">
                        <a href="javascrpt:void(0);" class="ra_footer_anchor_para">Maruti Suzuki</a>
                        <a href="javascrpt:void(0);" class="ra_footer_anchor_para">Hyundai</a>
                        <a href="javascrpt:void(0);" class="ra_footer_anchor_para">Honda</a>
                        <a href="javascrpt:void(0);" class="ra_footer_anchor_para">Toyota</a>
                        <a href="javascrpt:void(0);" class="ra_footer_anchor_para">Tata</a>
                        <a href="javascrpt:void(0);" class="ra_footer_anchor_para">Mahindra</a>
                        <a href="javascrpt:void(0);" class="ra_footer_anchor_para">Chevrolet</a>
                        <a href="javascrpt:void(0);" class="ra_footer_anchor_para">Fiat</a>
                        <a href="javascrpt:void(0);" class="ra_footer_anchor_para">Renault</a>
                        <a href="javascrpt:void(0);" class="ra_footer_anchor_para">Kia</a>
                        <a href="javascrpt:void(0);" class="ra_footer_anchor_para">Skoda</a>
                        <a href="javascrpt:void(0);" class="ra_footer_anchor_para">Volkswagen</a>
                    </div>
                    </div>
                </div>
                <div class="ra_footer_column">
                    <div class="ra_footer_bottom_colo_1">
                        <h4 class="ra_footer_abo">POPULAR AREAS NEAR YOU</h4>
                        <div class="ra_footer_first_head">
                        <a href="javascrpt:void(0);" style="text-decoration:none;color:#FFF">
                            <p class="ra_footer_anchor_para">
                                Garage near me in<!-- --> <!-- -->Andheri
                            </p>
                        </a>
                        <a href="javascrpt:void(0);" style="text-decoration:none;color:#FFF">
                            <p class="ra_footer_anchor_para">
                                Garage near me in<!-- --> <!-- -->Mulund
                            </p>
                        </a>
                        <a href="javascrpt:void(0);" style="text-decoration:none;color:#FFF">
                            <p class="ra_footer_anchor_para">
                                Garage near me in<!-- --> <!-- -->Powai
                            </p>
                        </a>
                        <a href="javascrpt:void(0);" style="text-decoration:none;color:#FFF">
                            <p class="ra_footer_anchor_para">
                                Garage near me in<!-- --> <!-- -->Chembur
                            </p>
                        </a>
                        <a href="javascrpt:void(0);" style="text-decoration:none;color:#FFF">
                            <p class="ra_footer_anchor_para">
                                Garage near me in<!-- --> <!-- -->Goregaon
                            </p>
                        </a>
                        <a href="javascrpt:void(0);" style="text-decoration:none;color:#FFF">
                            <p class="ra_footer_anchor_para">
                                Garage near me in<!-- --> <!-- -->Ghatkopar
                            </p>
                        </a>
                        <a href="javascrpt:void(0);" style="text-decoration:none;color:#FFF">
                            <p class="ra_footer_anchor_para">
                                Garage near me in<!-- --> <!-- -->Bandra
                            </p>
                        </a>
                        <a href="javascrpt:void(0);" style="text-decoration:none;color:#FFF">
                            <p class="ra_footer_anchor_para">
                                Garage near me in<!-- --> <!-- -->Kurla
                            </p>
                        </a>
                        <a href="javascrpt:void(0);" style="text-decoration:none;color:#FFF">
                            <p class="ra_footer_anchor_para">
                                Garage near me in<!-- --> <!-- -->Borivali
                            </p>
                        </a>
                        <a href="javascrpt:void(0);" style="text-decoration:none;color:#FFF">
                            <p class="ra_footer_anchor_para">
                                Garage near me in<!-- --> <!-- -->Parel
                            </p>
                        </a>
                        </div>
                    </div>
                </div>
            </div> --}}
        <div class="ra_footer_bottom_grid ra_footer_bottom_gary_dark">
            <div class="ra_footer_bottom_colo_1">
                <div>
                    <img loading="lazy" src="{{ asset('assets/images/logo.png') }}" class="foote_logo"
                        alt="Superior Honda" />
                </div>
                <div class="">
                    <p class="_27b-x">7th Floor, Tower A, Spaze iTech Park,</p>
                    <p class="_27b-x" style="margin-top:10px">Sohna - Gurgaon Rd, Block S, Sector 49,</p>
                    <p class="_27b-x" style="margin-top:10px">Gurugram, Haryana 122018</p>
                </div>
                <div class="MIiBH _1ElM0 _1U4dt">
                    <a target="_blank" href="https://www.facebook.com/SuperiorPartsLtd/">
                        <div class="_20YiA">
                        </div>
                    </a>

                    <a target="_blank" href="https://www.instagram.com/superiorparts/">
                        <div class="_1NOwy"></div>
                    </a>
                </div>
            </div>
            <div class="ra_footer_bottom_colo_2">
                <div class="_2TmpS">
                    <span class="_3L0pG _1RH6a">
                        <div class="_3wRwr"></div>
                        <h5 style="margin:0">Email</h5>
                    </span>
                    <span><a href="javascrpt:void(0);" style="text-decoration:none;color:white">Info@Superior
                            Honda.in</a></span>
                </div>
                <div class="_2TmpS">
                    <span class="_3L0pG _1RH6a">
                        <div class="pgEwo"></div>
                        <h5 style="margin:0">Phone Number</h5>
                    </span>
                    <span><a class="ra_footer_anchor" href="tel:9876543210">9876543210</a></span>
                </div>
                <div class="_2TmpS">
                    <span class="_3L0pG _1RH6a">
                        <div class="_2wrTx"></div>
                        <h5 style="margin:0">Working Days</h5>
                    </span>
                    <span>Monday - Sunday</span>
                </div>
                <div class="_2TmpS">
                    <span class="_3L0pG _1RH6a">
                        <div class="_2X3CU"></div>
                        <h5 style="margin:0">Working Hours</h5>
                    </span>
                    <span>
                        7:00AM - 9:00PM(IST)<!-- -->
                    </span>
                </div>
            </div>
            {{-- <div class="ra_footer_bottom_colo_1">
                    <div class="_3baZq _3kg1Z qjJ1p">
                    <a class="H6UO3 MIiBH qjJ1p" target="_blank" href="javascrpt:void(0);">
                        <img loading="lazy" alt="Superior Honda" src="{{ asset('assets/images/playstore.png') }}" class="uOMMO"/>
                    </a>
                        <a class="H6UO3 MIiBH qjJ1p" target="_blank" href="javascript:void(0);">
                            <img loading="lazy" src="{{ asset('assets/images/appstore.png') }}" class="_2j0Rj" alt="App store"/>
                        </a>
                    </div>
                </div> --}}
        </div>
        <div class="ra_footer_bottom_grid _1N5e1 ra_footer_bottom_gary_dark" style="grid-template-columns:1fr">
            <div class="MIiBH _3-Wpf BIIS6">
                <div class="_1Cyuy"></div>
                <div class="_1CquF">
                    2024 Superior Honda
                </div>
            </div>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade location_modal" id="locationModal" tabindex="-1" role="dialog"
        aria-labelledby="locationModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header text-center">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"
                        id="locationModalClose">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <h4 class="modal-title" id="locationModalLabel">Choose Your City</h4>
                    <p>This would help us in providing you quick service.</p>
                </div>
                <div class="modal-body">
                    <div class="ra_modal_flag text-center">
                        <img src="{{ asset('assets/images/jamaica-flag') }}.jpg" alt=""
                            style="max-width: 100px;">
                        <h5>Jamaica</h5>
                    </div>
                    <div class="ra_location_modal clearfix">
                        <div class="row">
                            @if (!empty($locations))
                                @foreach ($locations as $location)
                                    <div class="col-sm-4 ra_location_modal_data" data-id="{{ $location->id }}"
                                        data-location-name="{{ $location->name }}">
                                        <a href="javascript:void(0);" class="text-center">
                                            <img src="{{ !empty($location->location_image) ? env('MAIN_WEB_URL') . $location->location_image : asset('assets/images/gurgaon-dev.png') }}"
                                                alt="">
                                            <h5>{{ $location->name }}</h5>
                                        </a>
                                    </div>
                                @endforeach
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="authModal" tabindex="-1" role="dialog" aria-labelledby="authModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="authModalLabel">Authentication</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">&times;</button>
                </div>
                <div class="modal-body">
                    <!-- Tabs for Login and Register -->
                    <ul class="nav nav-tabs" id="authTab" role="tablist">
                        <li class="active">
                            <a href="#login" data-toggle="tab" aria-controls="login" aria-expanded="true">Login</a>
                        </li>
                        <li>
                            <a href="#register" data-toggle="tab" aria-controls="register"
                                aria-expanded="false">Create Account</a>
                        </li>
                    </ul>

                    <div class="tab-content mt-3">
                        <!-- Login Form -->
                        <div class="tab-pane fade in active" id="login" role="tabpanel"
                            aria-labelledby="login-tab">
                            <div class="error-msg"></div>
                            <form id="loginForm" action="{{ route('customer.login') }}" method="POST">
                                @csrf
                                <div class="ra_form_input custom"><input type="text" id="login_phone_email"
                                        name="login_phone_email" placeholder="ENTER EMAIL OR MOBILE NUMBER"></div>
                                <div class="ra_form_input custom"><input type="password" id="password"
                                        name="password" placeholder="ENTER PASSWORD"></div>
                                <button type="submit" id="loginBtn"
                                    class="btn btn-primary btn-block mt-2">Login</button>
                            </form>
                        </div>

                        <!-- Register Form -->
                        <div class="tab-pane fade" id="register" role="tabpanel" aria-labelledby="register-tab">
                            <form id="registerForm" action="{{ route('customer.register') }}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <div class="ra_form_input custom"><input type="text" id="customer_name"
                                            name="customer_name" placeholder="ENTER CUSTOMER NAME"></div>
                                </div>
                                <div class="form-group">
                                    <div class="ra_form_input custom"><input type="text" id="phone_number"
                                            name="phone_number" placeholder="ENTER PHONE NO."></div>
                                </div>
                                <div class="form-group">
                                    <div class="ra_form_input custom"><input type="email" id="email"
                                            name="email" placeholder="ENTER EMAIL(OPTIONAL)"></div>
                                </div>
                                <div class="form-group">
                                    <div class="ra_form_input custom"><input type="password" id="password"
                                            name="password" placeholder="ENTER PASSWORD"></div>
                                </div>
                                <button type="submit" id="createAccountBtn"
                                    class="btn btn-success btn-block mt-2">Create Account</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script src="{{ asset('assets/js/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/js/glide.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap-3.4.1.min.js') }}"></script>

    <!-- Include Owl Carousel and Glide after Bootstrap -->



    <script src="{{ asset('assets/js/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('assets/js/toastr.min.js') }}"></script>
    <script src="{{ asset('assets/js/custom.js') }}"></script>

    @yield('script')
    <script>
        $(document).ready(function() {
            $("#loginForm").on("submit", function(e) {
                e.preventDefault();

                $("#loginBtn").prop("disabled", true).text("Logging in...");
                let formData = $(this).serialize();
                $.ajax({
                    url: $(this).attr("action"),
                    type: "POST",
                    data: formData,
                    success: function(response) {
                        if (response.success) {
                            $('.error-msg').css('color', 'green').text(response.message);
                            window.location.href = response.redirect_url || "/";
                        } else {
                            $('.error-msg').css('color', '#e02020').text(response.message);
                        }
                    },
                    error: function(xhr) {
                        alert("Login failed! Please check your credentials.");
                    },
                    complete: function() {
                        $("#loginBtn").prop("disabled", false).text("Login");
                    }
                });
            });
        });
    </script>
    <script>
        $(document).ready(function() {
            let storedLocationId = localStorage.getItem("location_id");
            let locationName = localStorage.getItem("location_name");

            $('.locationName').each(function() {
                $(this).html(locationName);
            })

            if (!storedLocationId) {
                $("#locationModal").modal("show").addClass('in');
            }

            $('#locationModal').on('hide.bs.modal', function(e) {
                let storedLocationId = localStorage.getItem("location_id");
                if (!storedLocationId) {
                    e.preventDefault();
                    alert("Please select a location before proceeding!");
                }
            });

            $('#locationModalClose').on('click', function() {
                let storedLocationId = localStorage.getItem("location_id");
                if (!storedLocationId) {
                    alert("Please select a location before proceeding!");
                    $("#locationModal").modal("hide").addClass('in');
                }
            });

            $(".ra_location_modal_data").on("click", function() {
                let locationId = $(this).data("id");
                let locationName = $(this).data("location-name");

                localStorage.setItem("location_id", locationId);
                localStorage.setItem("location_name", locationName);

                $('.locationName').each(function() {
                    $(this).text(locationName);
                })

                $('.locationNameModal').text(locationName);
                $("#locationModal").modal("hide");
                $("#locationModalClose").click();
            });
        });
    </script>

    <script>
        $(document).ready(function() {
            $("#loginForm").validate({
                rules: {
                    login_phone_email: {
                        required: true,
                    },
                    password: {
                        required: true
                    }
                },
                messages: {
                    login_phone_email: {
                        required: "This field is required.",
                    },
                    password: {
                        required: "Password is required."
                    }
                },
                errorElement: "div",
                errorClass: "error-message",
                highlight: function(element) {
                    $(element).addClass("is-invalid");
                },
                unhighlight: function(element) {
                    $(element).removeClass("is-invalid");
                }
            });

            $("#registerForm").validate({
                rules: {
                    customer_name: {
                        required: true
                    },
                    phone_number: {
                        required: true,
                        digits: true,
                        minlength: 10,
                        maxlength: 10
                    },
                    email: {
                        email: true
                    },
                    password: {
                        required: true,
                        minlength: 8,
                    }
                },
                messages: {
                    customer_name: {
                        required: "Please enter your full name."
                    },
                    phone_number: {
                        required: "Please enter your phone number.",
                        digits: "Phone number must be 10 digits.",
                        minlength: "Phone number must be exactly 10 digits.",
                        maxlength: "Phone number must be exactly 10 digits."
                    },
                    email: {
                        email: "Please enter a valid email address."
                    },
                    password: {
                        required: "Please enter a password.",
                        minlength: "Password must be at least 8 characters long.",
                    }
                },
                errorElement: "div",
                errorClass: "error-message",
                highlight: function(element) {
                    $(element).addClass("is-invalid");
                },
                unhighlight: function(element) {
                    $(element).removeClass("is-invalid");
                }
            });
        });
    </script>

    <script>
        toastr.options = {
            "closeButton": true,
            "progressBar": true,
            "positionClass": "toast-bottom-right",
            "timeOut": "3000",
        };

        @if (session('success'))
            toastr.success('{{ session('success') }}');
        @elseif (session('error'))
            toastr.error('{{ session('error') }}');
        @elseif (session('info'))
            toastr.info('{{ session('info') }}');
        @elseif (session('warning'))
            toastr.warning('{{ session('warning') }}');
        @endif


        $(document).ready(function() {
            $("#searchInput").on("input", function() {
                let query = $(this).val().trim();

                if (query.length >= 2) {
                    $.ajax({
                        url: "{{ route('search_products') }}",
                        type: "GET",
                        data: {
                            query: query
                        },
                        success: function(data) {
                            if (data.length > 0) {
                                let suggestions = data.map(item =>
                                    `<div class="suggestion-item">${item}</div>`);
                                $("#suggestionList").html(suggestions.join(""));
                            } else {
                                $("#suggestionList").html(
                                    "<div class='no-match'>No matches found</div>");
                            }
                        },
                        error: function() {
                            $("#suggestionList").html(
                                "<div class='error-message'>Error loading suggestions</div>"
                                );
                        }
                    });
                } else {
                    $("#suggestionList").html(
                        '<div class="list_ra_searchbar_input_content">Type to search</div>');
                }
            });

            $(document).on("click", ".suggestion-item", function() {
                let selectedText = $(this).text();
                $("#searchInput").val(selectedText);
                $("#suggestionList").empty();
            });
        });

        // Inquiry form 
        $(document).ready(function() {
            $("#enquireNowModal").on("hidden.bs.modal", function() {
                $(".modal-backdrop").remove();
                $("body").removeClass("modal-open");
            });
            $("#promotionModal").on("hidden.bs.modal", function() {
                $(".modal-backdrop").remove();
                $("body").removeClass("modal-open");
            });
            $("#inquiryForm").on("submit", function(e) {
                e.preventDefault();

                let formData = $(this).serialize();
                let location_id = localStorage.getItem("location_id");
                formData += "&location_id=" + location_id;

                $.ajax({
                    url: $(this).attr("action"),
                    type: "POST",
                    data: formData,
                    success: function(response) {
                        if (response.status == 'success') {
                            toastr.options = {
                                "positionClass": "toast-top-right"
                            };
                            toastr.success('Enquiry submitted successfully.');
                            window.location.reload();
                        } else {
                            toastr.options = {
                                "positionClass": "toast-top-right"
                            };
                            toastr.error('Enquiry submission failed. Please try again.');
                        }
                    },
                    error: function(xhr) {
                        alert("There was an error creating the inquiry. Please try again.");
                    }
                });
            });
        });
    </script>
    <style>
        .list_ra_searchbar {
            position: relative;
            width: 100%;
            max-width: 400px;
        }

        .list_ra_searchbar_input {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 16px;
        }

        .suggestion-list {
            position: absolute;
            top: 100%;
            left: 0;
            right: 0;
            background-color: #fff;
            border: 1px solid #ccc;
            border-top: none;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            z-index: 1000;
            max-height: 200px;
            overflow-y: auto;
            border-radius: 0 0 4px 4px;
        }

        .suggestion-item {
            padding: 10px;
            font-size: 16px;
            cursor: pointer;
            border-bottom: 1px solid #eee;
        }

        .suggestion-item:hover {
            background-color: #f1f1f1;
        }

        .error-message {
            color: red;
            font-size: 14px;
        }
    </style>


</body>

</html>
