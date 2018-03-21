<template>
	<div class="card bg-light mb-3" style="">
		<div class="card-body">
		<p class="card-text">
			<form @submit.prevent="onSubmit" @keyup="form.errors.clear()">
				<div class="form-group">
					<textarea name="post" id="post" v-model="form.body" class="form-control"></textarea>
					<small class="text-danger" v-if="true" v-text="form.errors.get('body')"></small>
				</div>
				<div class="form-group">
					<button type="submit" class="btn btn-primary" :disabled="form.errors.any()">Post</button>
				</div>
			</form>
		</p>
		</div>

		</div>
</template>

<script>
	import Form from '../models/Form';

	export default {
		data () {
			return {
				form: new Form({
					body: '',
				}),
			}
		},
		methods: {
			onSubmit () {
				this.form.submit('post', '/post/create')
					.then(response => {
						// console.log(response);
						this.$emit('completed', response);
						this.form.reset();
					})
					.catch(error => console.log(error));
			}
		}

	}	
</script>

<style>
	
</style>