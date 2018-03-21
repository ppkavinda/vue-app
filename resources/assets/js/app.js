import './bootstrap';
import router from './routes';

import User from './models/User';
import NavBar from './components/NavBar';


window.user = new User();

const app = new Vue({
	components: {NavBar},

    el: '#app',
    router,

});
