const resultbusc = document.getElementById("cartas");
const buscador = document.getElementById("buscador");
const btnbuscar = document.getElementById("btn-buscar");
const fragmento = document.createDocumentFragment();
const filtrar = ()=>{
	resultbusc.innerHTML = '';

	const texto = buscador.value.toLowerCase();
	for (let i = 0; i < json.length; i++) {
		let nombre = json[i].nombre.toLowerCase();
		let descripcion = json[i].descripcion.toLowerCase();
		if (nombre.indexOf(texto) !== -1 || descripcion.indexOf(texto) !== -1){
			const nuevoa = document.createElement('DIV');
			nuevoa.setAttribute("class","card");
			nuevoa.innerHTML = 
			`
	        <img src="view/imagenes/${json[i].imagen}">
	        <div class="cardbody">
	            <h4>${json[i].nombre}</h4>
	            <h5 class="precioP">$${json[i].precio} COP</h5>
	            <p class="descripcion">${json[i].descripcion}</p>
	        </div>
			`;
			fragmento.appendChild(nuevoa);
		}
	}
	resultbusc.appendChild(fragmento);
	if (resultbusc.innerHTML === '') {
		resultbusc.innerHTML +=`
		<h2>No se encuentra el producto</h2>
		`;
	}
}



btnbuscar.addEventListener('click', filtrar);
buscador.addEventListener('keyup', filtrar);
filtrar();