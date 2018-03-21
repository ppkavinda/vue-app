<template>
	<div>
		<post-form @completed="addPost"></post-form>

		<div v-for="post in posts">

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
		</div>
	</div>
	</template>

<script>
	import moment from 'moment';
	import PostForm from '../components/PostForm';

	export default {
		components: {PostForm},
		data () {
			return {
				posts: {},
			}
		},

		created () {
			axios.get('/posts')
				.then(response => this.posts = response.data)
				.catch(error => console.log(error.response))
		},

		methods: {
			postedOn (post) {
				return moment(post.created_at).fromNow();
			},

			addPost (post) {
				this.posts.unshift(post);
			}
		}
	}
</script>

<style>
	
</style>