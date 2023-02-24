<script src="{{asset('js/jquery.min.js')}}"></script>
<script src="{{asset('web/vendor/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('web/vendor/smooth-scroll/dist/smooth-scroll.polyfills.min.js')}}"></script>
<script src="{{asset('web/vendor/rellax/rellax.min.js')}}"></script>
<script src="{{asset('web/vendor/@lottiefiles/lottie-player/dist/lottie-player.js')}}"></script>
<script src="{{asset('web/vendor/swiper/swiper-bundle.min.js')}}"></script>
<script src="{{asset('web/js/theme.min.js')}}"></script>
<script src="{{asset('js/swup.min.js')}}"></script>
<script src="{{asset('js/web/main.js')}}"></script>
<script src="{{asset('js/web/method.js')}}"></script>
<!-- main js -->
<script type="text/javascript">
    $("body").on("contextmenu", "img", function(e) {
        return false;
    });
    $('img').attr('draggable', false);
</script>
<script type="text/javascript">
    var element = "<div class='page-loading active'><div class='page-loading-inner'><div class='page-spinner'></div><span>What are you doing ?</span></div></div>";
    var devtoolsOpen = false;
    element.__defineGetter__("id", function() {
        devtoolsOpen = true; // This only executes when devtools is open.
    });
    setInterval(function() {
        devtoolsOpen = false;
        // console.log(element);
        if(devtoolsOpen){
            document.getElementById('ye_body').innerHTML = "";
            document.getElementById('ye_body').innerHTML = element;
        }
        // document.getElementById('ye_body').innerHTML = (devtoolsOpen ? "dev tools is open\n" : "dev tools is closed\n");
    }, 1000);
</script>
<script>
    // $.cloudinary.config({ cloud_name: 'dgailljrv', secure: true});
    // (function() {
    // "use strict";
    
    // var carousel = document.getElementsByClassName('web-app-slider')[0],
    //     slider = carousel.getElementsByClassName('swiper-wrapper')[0],
    //     items = carousel.getElementsByClassName('swiper-slide'),
    //     prevBtn = document.getElementById('prev-web'),
    //     nextBtn = document.getElementById('next-web');
    
    // var width, height, totalWidth, margin = 20,
    //     currIndex = 0,
    //     interval, intervalTime = 4000;
    
    // function init() {
    //     resize();
    //     move(Math.floor(items.length / 2));
    //     bindEvents();
    
    //     // timer();
    // }
    
    // function resize() {
    //     width = Math.max(window.innerWidth * .25, 275),
    //     height = window.innerHeight * 1,
    //     totalWidth = width * items.length;
    
    //     slider.style.width = totalWidth + "px";
    
    //     for(var i = 0; i < items.length; i++) {
    //         let item = items[i];
    //         item.style.width = (width - (margin * 2)) + "px";
    //         item.style.height = height + "px";
    //     }
    // }
    
    // function move(index) {
    
    //     if(index < 1) index = items.length;
    //     if(index > items.length) index = 1;
    //     currIndex = index;
    
    //     for(var i = 0; i < items.length; i++) {
    //         let item = items[i];
    //         // box = item.getElementsByClassName('swiper-slide')[0];
    //         if(i == (index - 1)) {
    //             item.classList.add('swiper-slide-active');
    //             item.style.transform = "perspective(1200px)"; 
    //         } else {
    //             item.classList.remove('swiper-slide-active');
    //             item.style.transform = "perspective(1200px) rotateY(" + (i < (index - 1) ? 40 : -40) + "deg)";
    //         }
    //     }
    
    //     slider.style.transform = "translate3d(" + ((index * -width) + (width / 2) + window.innerWidth / 2) + "px, 0, 0)";
    // }
    
    // function timer() {
    //     clearInterval(interval);    
    //     interval = setInterval(() => {
    //         move(++currIndex);
    //     }, intervalTime);    
    // }
    
    // function prev() {
    //     move(--currIndex);
    //     timer();
    // }
    
    // function next() {
    //     move(++currIndex);    
    //     timer();
    // }
    
    
    // function bindEvents() {
    //     window.onresize = resize;
    //     prevBtn.addEventListener('click', () => { prev(); });
    //     nextBtn.addEventListener('click', () => { next(); });    
    // }
    
    
    // init();
    
    // })();
</script>