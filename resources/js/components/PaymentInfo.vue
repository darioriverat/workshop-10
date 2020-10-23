<template>
  <div class="row">
      <div class="col-10 offset-1 border rounded-lg p-5">
          <div class="row text-black-50 mb-5">
              <div class="col-6">
                  <h1 class="h4 mr-2 d-inline-block">
                      Order #{{ order.id }}
                  </h1>
                  <span class="badge badge-pill badge-primary">{{ statuses[order.status] }}</span>
              </div>
              <div class="col-6 text-right">
                  {{ order.created_at }}
              </div>
          </div>
          <div class="row pt-5">
              <div class="col-12">
                  <table class="table">
                      <thead>
                      <tr>
                          <th>Product</th>
                          <th>Quantity</th>
                          <th>Price</th>
                      </tr>
                      </thead>
                      <tbody>
                        <tr v-for="detail in order.details" :key="detail.id">
                            <td>{{ detail.product.name }}</td>
                            <td>{{ detail.quantity }}</td>
                            <td>{{ detail.unit_price }}</td>
                        </tr>
                      </tbody>
                  </table>
              </div>
          </div>
          <div class="row">
              <div class="col-12">
                  <div class="text-right text-info">
                      <strong>Total: </strong>
                      <span>{{ order.total_price }}</span>
                  </div>
              </div>
          </div>

      </div>
  </div>
</template>

<script>
export default {
  name: 'PaymentInfo',
  props: {
    order: {
      type: Object,
      required: true
    },
    statuses: {
      type: Array,
      required: true
    }
  },
  data () {
    return {
      orderStatus: 'pending'
    }
  },
  methods: {
    getInformation () {
      axios.get(`/api/info/${this.order.id}`)
        .then(({ data }) => console.log(data))
    }
  },
  created () {
    if (this.orderStatus === 'pending') {
      this.getInformation()
    }
  }
}
</script>
