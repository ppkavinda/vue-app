import VueRouter from 'vue-router';

let routes = [
	{
		path: '/',
		component: require('./views/Home.vue'),
	},
	{
		path: '/about',
		component: require('./views/About.vue'),
	},
	{
		path: '/contact',
		component: require('./views/Contact.vue'),
	},
	{
		path: '/login',
		component: require('./views/Login.vue'),
	},
	{
		path: '/register',
		component: require('./views/Register.vue'),
	},
	{
		path: '/logout',
		// component: require('./views/Logout.vue'),
	}
]

export default new VueRouter({
	routes,
	linkActiveClass: 'active',
});