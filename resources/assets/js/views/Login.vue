<template>
	<form method="POST" action="/register" @submit.prevent="onSubmit" @keydown="form.errors.clear($event)">

 	  <div class="form-group">
	    <label for="exampleInputEmail1">Email address</label>
	    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email" v-model="form.email" placeholder="Enter email">
	    <small class="form-text text-danger" v-if="true" v-text="form.errors.get('email')"></small>
	  </div>
	  <div class="form-group">
	    <label for="exampleInputPassword1">Password</label>
	    <input type="password" class="form-control" id="exampleInputPassword1" name="password" v-model="form.password" placeholder="Password">
		  <div class="small form-text text-danger" v-text="form.errors.get('password')"></div>
	  </div>
	  <div class="form-group">
		  <button type="submit" class="btn btn-primary" :required="form.errors.any()">Submit</button>
	  </div>
	</form>	
</template>

<script>
	import Form from '../models/Form';
	import router from '../routes';

	export default {
		data () {
			return {
				form: new Form({
					email: 'as.assd@safs.com',
					password: 'asdf',
				}),
			}
		},

		methods: {
			onSubmit () {
				this.form.submit('post', '/login')
				.then(response => {
					user.login(response);
					this.$router.push('/');
				})
				.catch(error => console.log(error));
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