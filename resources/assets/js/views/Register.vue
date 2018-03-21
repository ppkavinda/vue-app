<template>
	<form method="POST" action="/register" @submit.prevent="onSubmit" @input="form.errors.clear($event)">
	  <div class="form-group">
	    <label for="exampleInputEmail1">Name</label>
	    <input type="text" class="form-control" id="exampleInputName" name="name" v-model="form.name" placeholder="Enter Name">
	    <small class="form-text text-danger" v-if="true" v-text="form.errors.get('name')"></small>
	  </div>
 	  <div class="form-group">
	    <label for="exampleInputEmail1">Email address</label>
	    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email" v-model="form.email" placeholder="Enter email">
	    <small class="form-text text-danger" v-if="true" v-text="form.errors.get('email')"></small>
	    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
	  </div>
	  <div class="form-group">
	    <label for="exampleInputPassword1">Password</label>
	    <input type="password" class="form-control" id="exampleInputPassword1" name="password" v-model="form.password" placeholder="Password">
	  </div>
	  <div class="form-group">
		  <button type="submit" class="btn btn-primary" :required="form.errors.any()">Submit</button>
	  </div>
	</form>
</template>

<script>
	import Error from '../models/Error';
	import Form from '../models/Form';

	export default {
		data () {
			return {
				form: new Form({
					name: 'test',
					email: 'as.assd@safs.com',
					password: 'asdf',
				})
			}
		},

		methods: {
			onSubmit () {
				this.form.submit('post', '/register')
					.then(response => {
						user.login(response);
						this.$router.push('/');
					})
					.catch(error => console.log(error));
				// this.user.login(form);
				// console.log(this.form.errors);
			}
		},

		beforeRouteEnter (to, from, next) {
			if (user.isLoggedin) {
				next(from);
			}else{
				next();
			}		    
		}
	}
</script>

<style>
	
</style>