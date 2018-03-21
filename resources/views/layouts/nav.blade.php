      <ul class="navbar-nav mr-auto">
	      <router-link to="/" class="nav-link" exact>Home</router-link>
	        <router-link to="/about" class="nav-link">About</router-link>
	        <router-link to="/contact" class="nav-link">Contact</router-link>

	        <router-link v-if="!user.isLoggedin" to="/login" class="nav-link ml-md-auto">Login</router-link>
	        <router-link v-if="!user.isLoggedin" to="/register" class="nav-link">Register</router-link>
	        <router-link v-if="user.isLoggedin" to="/logout" @click="$emit('logout')" class="nav-link">Logout</router-link>
      </ul>
