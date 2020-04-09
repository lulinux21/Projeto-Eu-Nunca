let email = 'lulinux2109@gmail.com';

console.log(email);
console.log(`O seu E-mail é:  ${email}`);

// document.getElementById('btn-submit').addEventListener('click', e => {
// 	console.log('O botão foi clicado');
// });

// document.getElementById('form-login').addEventListener('mouseenter', e => {
// 	console.log("O mouse está sobre o formulário");
// });

// document.querySelector('#form-login').addEventListener('mouseleave', e => {
// 	console.log("O mouse está fora");
// });


document.querySelector('#form-login').addEventListener('submit', e => {
	e.preventDefault();
	let email = document.querySelector('#email').value;
	let password = document.querySelector('#password').value;

	let json = {
		email: email,
		password: password
	};

	if (!json.email || !json.password) {
		console.error("O campo não foi preenchido");
	} else {
		console.log("Dados validados com sucesso");
	}
});