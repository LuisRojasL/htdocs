let formularioIniciarSesion = document.getElementById('formularioIniciarSesion')

formularioIniciarSesion.addEventListener('submit', IniciarSesion)

function IniciarSesion (e) {
	//previniendo su acción por defecto del evento (e) submit
	//la acción por defecto de un evento submit es refrescar el documento
	e.preventDefault()

	//rescatar datos ingresados en el formulario
	let datos = new FormData(formularioIniciarSesion)

	//enviamos los datos del backend (servidor) por medio de fetch
	/*fetch('url', {
		method : método de envío (GET (por la url) o POST (de forma oculta)), 
		body: datos
	})*/
	fetch('../controllers/LoginController.php', {
		method: 'POST',
		body: datos
	})
	.then(respuesta => respuesta.text())
	.then(mensaje => {
		if (mensaje== 'ok'){

		window.location.reload()
		
	}else{
		let mensaje= document.getElementById('mensaje')
		mensaje.innerText= 'Datos incorrectos. Ingrese nuevamente'
		mensaje.classList.add('text-danger')
	}
	})
}