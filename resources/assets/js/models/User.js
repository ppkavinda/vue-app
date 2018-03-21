class User {
	constructor () {
		this.id; 
		this.name = '';
		this.email = '';
		this.isLoggedin = false;

		this.authCheck();
	}

	login (data) {
		this.id = data.id;
		this.name = data.name;
		this.email = data.email;
		this.isLoggedin = true;

		// console.log(router)

		// console.log(this.id);
	}

	authCheck () {
		axios.get('/user/authcheck')
			.then(response => {
				this.isLoggedin = response.data.status;
			})
			.catch(error => console.log(error));
	}

	logout () {
		axios.post('/user/logout')
			.then(response => {
				this.isLoggedin = response.data.status;
			});
	}
}

export default User;