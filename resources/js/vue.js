import Hello from './components/Hello'
import Payment from './components/Payment'
import PaymentInfo from './components/PaymentInfo'

const Vue = require('vue')

const bus = new Vue({})

Vue.component('hello', Hello)
Vue.component('payment', Payment)
Vue.component('payment-info', PaymentInfo)

new Vue({
  el: '#app'
})
