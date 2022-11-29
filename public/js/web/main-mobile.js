const options = {
    containers: ['#appCapsule', '#mainMenu','#sidebarPanel'],
    animateHistoryBrowsing: true,
    linkSelector: '.appBottomMenu a:not([data-no-swup]), .sidebarMenu a:not([data-no-swup]), .ye-anima-link:not([data-no-swup])',
    animationSelector: '[class="appCapsule"]'
};
const swup = new Swup(options);
document.addEventListener("swup:contentReplaced", function() {
    $('.offcanvas-backdrop').fadeOut();
    $("body").removeAttr("style");
    const Mobilekit = {
        version: 2.8, // Mobilekit version
        //-------------------------------------------------------------------
        // PWA Settings
        PWA: {
            enable: true, // Enable or disable PWA
        },
        //-------------------------------------------------------------------
        // Dark Mode Settings
        Dark_Mode: {
            default: false, // Set dark mode as main theme
            night_mode: { // Activate dark mode between certain times of the day
                enable: false, // Enable or disable night mode
                start_time: 20, // Start at 20:00
                end_time: 7, // End at 07:00
            },
            auto_detect: { // Auto detect user's preferences and activate dark mode
                enable: false,
            }
        },
        //-------------------------------------------------------------------
        // Right to Left (RTL) Settings
        RTL: {
            enable: false, // Enable or disable RTL Mode
        },
        //-------------------------------------------------------------------
        // Test Mode
        Test: {
            enable: true, // Enable or disable test mode
            word: "testmode", // The word that needs to be typed to activate test mode
            alert: true, // Enable or disable alert when test mode is activated
            alertMessage: "Test mode has been activated. Look at the developer console!" // Alert message
        }
        //-------------------------------------------------------------------
    }
    var checkDarkModeStatus = localStorage.getItem("MobilekitDarkMode");
    var switchDarkMode = document.querySelectorAll(".dark-mode-switch");
    var pageBodyActive = pageBody.classList.contains("dark-mode-active");
    // Check if enable as default
    if (Mobilekit.Dark_Mode.default) {
        pageBody.classList.add("dark-mode-active");
    }

    // Night Mode
    if (Mobilekit.Dark_Mode.night_mode.enable) {
        var nightStart = Mobilekit.Dark_Mode.night_mode.start_time;
        var nightEnd = Mobilekit.Dark_Mode.night_mode.end_time;
        var currentDate = new Date();
        var currentHour = currentDate.getHours();
        if (currentHour >= nightStart || currentHour < nightEnd) {
            // It is night time
            pageBody.classList.add("dark-mode-active");
        }
    }

    // Auto Detect Dark Mode
    if (Mobilekit.Dark_Mode.auto_detect.enable)
        if (window.matchMedia && window.matchMedia('(prefers-color-scheme: dark)').matches) {
            pageBody.classList.add("dark-mode-active");
        }

    function switchDarkModeCheck(value) {
        switchDarkMode.forEach(function (el) {
            el.checked = value
        })
    }
    // if dark mode on
    if (checkDarkModeStatus === 1 || checkDarkModeStatus === "1" || pageBody.classList.contains('dark-mode-active')) {
        switchDarkModeCheck(true);
        if (pageBodyActive) {
            // dark mode already activated
        }
        else {
            pageBody.classList.add("dark-mode-active")
        }
    }
    else {
        switchDarkModeCheck(false);
    }
    switchDarkMode.forEach(function (el) {
        el.addEventListener("click", function () {
            var darkmodeCheck = localStorage.getItem("MobilekitDarkMode");
            var bodyCheck = pageBody.classList.contains('dark-mode-active');
            if (darkmodeCheck === 1 || darkmodeCheck === "1" || bodyCheck) {
                pageBody.classList.remove("dark-mode-active");
                localStorage.setItem("MobilekitDarkMode", "0");
                switchDarkModeCheck(false);
            }
            else {
                pageBody.classList.add("dark-mode-active")
                switchDarkModeCheck(true);
                localStorage.setItem("MobilekitDarkMode", "1");
            }
        })
    })
    document.querySelectorAll('.carousel-full').forEach(carousel => new Splide(carousel, {
        perPage: 1,
        rewind: true,
        type: "loop",
        gap: 0,
        arrows: false,
        pagination: false,
    }).mount());

    // Single Carousel
    document.querySelectorAll('.carousel-single').forEach(carousel => new Splide(carousel, {
        perPage: 3,
        rewind: true,
        type: "loop",
        gap: 16,
        padding: 16,
        arrows: false,
        pagination: false,
        breakpoints: {
            768: {
                perPage: 1
            },
            991: {
                perPage: 2
            }
        }
    }).mount());

    // Multiple Carousel
    document.querySelectorAll('.carousel-multiple').forEach(carousel => new Splide(carousel, {
        perPage: 4,
        rewind: true,
        type: "loop",
        gap: 16,
        padding: 16,
        arrows: false,
        pagination: false,
        breakpoints: {
            768: {
                perPage: 2
            },
            991: {
                perPage: 3
            }
        }
    }).mount());

    // Small Carousel
    document.querySelectorAll('.carousel-small').forEach(carousel => new Splide(carousel, {
        perPage: 9,
        rewind: false,
        type: "loop",
        gap: 16,
        padding: 16,
        arrows: false,
        pagination: false,
        breakpoints: {
            768: {
                perPage: 5
            },
            991: {
                perPage: 7
            }
        }
    }).mount());

    // Slider Carousel
    document.querySelectorAll('.carousel-slider').forEach(carousel => new Splide(carousel, {
        perPage: 1,
        rewind: false,
        type: "loop",
        gap: 16,
        padding: 16,
        arrows: false,
        pagination: true
    }).mount());

    // Stories Carousel
    document.querySelectorAll('.story-block').forEach(carousel => new Splide(carousel, {
        perPage: 16,
        rewind: false,
        type: "slide",
        gap: 16,
        padding: 16,
        arrows: false,
        pagination: false,
        breakpoints: {
            500: {
                perPage: 4
            },
            768: {
                perPage: 7
            },
            1200: {
                perPage: 11
            }
        }
    }).mount());
    mapboxgl.accessToken = 'pk.eyJ1IjoieWFkYWVraWRhbnRhIiwiYSI6ImNrcXJpYm14eTFyaXYyb284eHhmaHJrcHgifQ.J0kCRmsw0sBIcs-TiD0SRg';
    var geojson = {
        'type': 'FeatureCollection',
        'features': [
            {
                'type': 'Feature',
                'properties': {
                    'iconSize': [60, 60]
                },
                'geometry': {
                    'type': 'Point',
                    'coordinates': [107.63859376896585,-6.973838171553325]
                }
            }
        ]
    };
    var map = new mapboxgl.Map({
        container: 'map',
        center: [107.60485652747207,-6.934535991355716],
        zoom: 10,
        style: 'mapbox://styles/yadaekidanta/clapa5t0d005f14quzp5xhtjg'
    });
    map.on('load', () => {
        map.setLayoutProperty('country-label', 'text-field', [
            'format',
            ['get', 'name_en'],
            { 'font-scale': 1.2 },
            '\n',
            {},
            ['get', 'name'],
            {
                'font-scale': 0.8,
                'text-font': [
                    'literal',
                    ['DIN Offc Pro Italic', 'Arial Unicode MS Regular']
                ]
            }
        ]);
    });
    geojson.features.forEach(function (marker) {
        // Create a DOM element for each marker.
        var el = document.createElement('div');
        el.className = 'marker';
        el.style.backgroundImage = "url('marker.png')";
        el.style.width = marker.properties.iconSize[0] + 'px';
        el.style.height = marker.properties.iconSize[1] + 'px';
        el.style.backgroundSize = '100%';
        new mapboxgl.Marker(el).setLngLat(marker.geometry.coordinates).addTo(map);
        $('.marker').click(function(){
            new mapboxgl.Popup(el).setLngLat(marker.geometry.coordinates).setHTML(marker.properties.description).addTo(map);
        });
    });
    map.on('click', function (e) {
        new mapboxgl.Popup()
        .setLngLat([107.63865, -6.97383])
        .setHTML('<h4>Hi, We are <span>Yada Ekidanta</span></h4><p style="margin-top:0px;">Enterprise Digital Transformation Consultant & Integrator Company In Indonesia.</p>')
        .addTo(map);
    });
    // Change the cursor to a pointer when the mouse is over the places layer.
    // // Change it back to a pointer when it leaves.
    map.on('mouseleave', function () {
        map.getCanvas().style.cursor = '';
    });
});