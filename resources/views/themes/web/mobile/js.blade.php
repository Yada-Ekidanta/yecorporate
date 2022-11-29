<script src="{{asset('js/jquery.min.js')}}"></script>
<!-- Bootstrap -->
<script src="{{asset('mobile/js/lib/bootstrap.min.js')}}"></script>
<!-- Ionicons -->
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
<!-- Splide -->
<script src="{{asset('mobile/js/plugins/splide/splide.min.js')}}"></script>
<!-- ProgressBar js -->
<script src="{{asset('mobile/js/plugins/progressbar-js/progressbar.min.js')}}"></script>
<!-- Base Js File -->
<script src="{{asset('mobile/js/base.js')}}"></script>
<script src="{{asset('js/toastify.js')}}"></script>
<script src="{{asset('js/web/method.js')}}"></script>
<script src="{{asset('js/swup.min.js')}}"></script>
<script src="{{asset('js/web/main-mobile.js')}}"></script>
<script>
    // Trigger welcome notification after 5 seconds
    setTimeout(() => {
        notification('notification-welcome', 5000);
    }, 2000);
</script>
<script>
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
        el.style.backgroundImage = "url({{asset('marker.png')}})";
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
</script>