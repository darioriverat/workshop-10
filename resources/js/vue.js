import Hello from './components/Hello'

const Vue = require('vue')

Vue.component('hello', Hello)

new Vue({
  el: '#app'
})
