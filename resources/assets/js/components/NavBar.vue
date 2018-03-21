<template>
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
	  <a class="navbar-brand" href="#">Navbar</a>
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
	    <span class="navbar-toggler-icon"></span>
	  </button>

	  <div class="collapse navbar-collapse" id="navbarSupportedContent">
	    
	    <ul class="navbar-nav mr-auto">
	        <router-link to="/" class="nav-link" exact>Home</router-link>
	        <router-link to="/about" class="nav-link">About</router-link>
	        <router-link to="/contact" class="nav-link">Contact</router-link>

	        <router-link v-if="!user.isLoggedin" to="/login" class="nav-link ml-md-auto">Login</router-link>
	        <router-link v-if="!user.isLoggedin" to="/register" class="nav-link">Register</router-link>
	        <a v-if="user.isLoggedin" href="#/" @click="logout" class="nav-link">Logout</a>
	    </ul>

	  </div>
	</nav>
</template>

<script>
	export default {
		data () {
			return {
				user,
			}
		},
		methods: {
			logout () {
				this.user.logout();
			},
		},
	}
</script>

<style>
	
</style>