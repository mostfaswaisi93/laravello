require('./bootstrap');

window.Vue = require('vue');

Vue.component('Board', require('./Board.vue').default);

const app = new Vue({
    el: '#app',
});