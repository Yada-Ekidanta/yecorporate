const options = {
    containers: ['#kt_app_main'],
    cache:false,
    animateHistoryBrowsing: true,
    linkSelector: '.menu-link:not([data-no-swup]), .menu-item:not([data-no-swup]), .nav-link:not([data-no-swup])',
    animationSelector: '[class="app-wrapper"]'
};
const swup = new Swup(options);

// this event runs for every page view after initial load
document.addEventListener("swup:contentReplaced", function() {
    //
    load_list(1);
});