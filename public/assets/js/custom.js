$(document).ready(function(){
    $(".owl-carousel.scrolpy_slider").owlCarousel({
        items: 3,
        loop: true,
        margin: 10,
        nav: true,
        dots: false,
        autoplay: true,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 3
            },
            1000: {
                items: 5
            }
        }
    });

    $(".curate_services_slider").owlCarousel({
        items: 3,
        loop: true,
        margin: 10,
        nav: true,
        dots: false,
        autoplay: true,
        navText: [
            "<img src='./assets/images/rightArrow.png' alt='Previous'/>", 
            "<img src='./assets/images/rightArrow.png' alt='Next'/>"
        ],
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 3
            },
            1000: {
                items: 4
            }
        }
    });

    $(".ra_popular_rigion_slider").owlCarousel({
        items: 3,
        loop: true,
        margin: 10,
        nav: true,
        dots: false,
        autoplay: true,
        navText: [
            "<img src='./assets/images/rightArrow.png' alt='Previous'/>", 
            "<img src='./assets/images/rightArrow.png' alt='Next'/>"
        ],
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 3
            },
            1000: {
                items: 5
            }
        }
    });

    $(".ra_originol_part_slider").owlCarousel({
        items: 3,
        loop: true,
        margin: 10,
        nav: true,
        dots: false,
        autoplay: true,
        navText: [
            "<img src='./assets/images/rightArrow.png' alt='Previous'/>", 
            "<img src='./assets/images/rightArrow.png' alt='Next'/>"
        ],
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 3
            },
            1000: {
                items: 3
            }
        }
    });
    $(".ra_product_part_slider").owlCarousel({
        items: 5, // Default number of items to display
        loop: true,
        margin: 0,
        nav: true,
        dots: false,
        autoplay: true,
        autoWidth: false,
        navText: [
            "<img src='/assets/images/p-arrow-left.svg' alt='Previous'/>", 
            "<img src='/assets/images/p-arrow-right.svg' alt='Next'/>"
        ],
        responsive: {
            0: {
                items: 1 // 1 item on small screens (e.g., mobile)
            },
            600: {
                items: 3 // 3 items on medium screens (e.g., tablets)
            },
            1000: {
                items: 5 // 5 items on larger screens (e.g., desktops)
            }
        }
    });

    $(".get_summer_ready").owlCarousel({
        items: 3,
        loop: false,
        margin: 10,
        nav: true,
        dots: false,
        autoplay: false,
        navText: [
            "<img src='./assets/images/rightArrow.png' alt='Previous'/>", 
            "<img src='./assets/images/rightArrow.png' alt='Next'/>"
        ],
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 3
            },
            1000: {
                items: 3
            }
        }
    });
    new Glide('.glide', {
        type: 'carousel', 
        perView: 2,  
        autoplay: 3000, 
        breakpoints: {
            800: {
                perView: 1  
            }
        }
    }).mount();

});



