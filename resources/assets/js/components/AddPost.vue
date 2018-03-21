<template>
	<div class="card bg-light mb-3" style="">

	  <div class="card-header">
	  	<strong>{{ post.user.name }}</strong>
	  	posted... 
	  	<small class="close text-muted">{{ postedOn(post) }}</small>
	  </div>

	  <div class="card-body">
		<h5 class="card-title">
		  	{{ post.title }}
		</h5>
	    <p class="card-text">{{ post.body }}</p>
	  </div>

	</div>
	
</template>

<script>
export default {
	
}
	
</script>

<style>
	
</style>