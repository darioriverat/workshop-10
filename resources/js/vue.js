window.Vue = require('vue');

import Hello from './components/Hello'

Vue.component('hello', Hello)

const app = new Vue({
    el: '#app'
});