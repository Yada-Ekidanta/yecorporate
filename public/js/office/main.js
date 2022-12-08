// const options = {
//     // when this option is enabled, swup disables browser native scroll control (sets scrollRestoration to manual) and takes over this task. 
//     // This means that position of scroll on previous page(s) is not preserved (but can be implemented manually based on use case). 
//     // Otherwise swup scrolls to top/#element on popstate as it does with normal browsing.
//     animateHistoryBrowsing: false,
//     // animation selector
//     animationSelector: '[class*="transition-"]',
//     // defines link elements that will trigger the transition
//     linkSelector: '.menu-link:not([data-no-swup]), .menu-item:not([data-no-swup]), .nav-link:not([data-no-swup])',
//     // stores previously loaded contents of the pages in memory
//     cache: true,
//     // default container(s)
//     containers: ['#kt_app_main'],
//     // request headers
//     requestHeaders: {
//         'X-Requested-With': 'swup',
//         Accept: 'text/html, application/xhtml+xml'
//     },
//     // enable/disable plugins
//     // see below
//     plugins: [],
//     // skips popState handling when using other tools manipulating the browser history
//     skipPopStateHandling: function skipPopStateHandling(event) {
//         return !(event.state && event.state.source === 'swup');
//     }
// };
const options = {
    containers: ['#kt_app_main'],
    cache:true,
    animateHistoryBrowsing: true,
    linkSelector: '.menu-link:not([data-no-swup]), .menu-item:not([data-no-swup]), .nav-link:not([data-no-swup])',
    animationSelector: '[class="app-wrapper"]'
};
const swup = new Swup(options);
function init () {
    load_list();
    new number_only(element);
    // any other scripts 
}
init();
document.addEventListener("swup:contentReplaced",init);
// document.addEventListener("swup:contentReplaced", () => {
//     new load_list();
//     number_only(obj);
// });