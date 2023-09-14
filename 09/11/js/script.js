function cadastrar() {
	const form = document.getElementById('form');
	const data = new FormData(form);

	fetch('php/cadastrar.php', {
		method: 'POST',
		body: data
	})
}