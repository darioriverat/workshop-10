<template>
	<div class="text-right mt-4">
			<button class="btn btn-secondary px-4 mr-2">Cancel</button>
			<button class="btn btn-primary px-4" @click="getSession">Pay</button>
	</div>
</template>

<script>
	export default {
		name: 'Payment',
		data() {
			return {
				order: 3
			}
		},
		methods: {
			getSession() {
				axios.post('/api/session', {
					order: this.order
				})
				.then(({data}) => window.location = data.processUrl)
			}
		}
	}
</script>
