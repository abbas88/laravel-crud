require('./bootstrap');

window.Vue = require('vue');
Vue.component('home-comp',require('./components/Home.vue').default);
new Vue({
    el:'#app'
})