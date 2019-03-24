require('./bootstrap');

window.Vue = require('vue');
import router from './Router/router.js';
import carousel from 'vue-owl-carousel'
import VueCarousel from 'vue-carousel';

import BookShareHeader from './components/Header.vue';
import BookShareFooter from './components/Footer.vue';

Vue.use(VueCarousel);

const app = new Vue({
    el: '#app',
    router,
    components: {
        'header-component'      : BookShareHeader,
        'footer-component'      : BookShareFooter,
         carousel
            },
    data:{
        appName:'Share-Book'
    },
    method:
        {

        },
    computed:
        {

        },
    created(){

    }
});
