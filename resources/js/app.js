require('./bootstrap');

window.Vue = require('vue');


Vue.component('carousel', require('./components/Carousel.vue').default);


const app = new Vue({
    el: '#app',

});
