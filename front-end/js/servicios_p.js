const typed = new Typed('.typed', {
	strings: [
		'<i class="mascota">MARCA DE CIUDAD</i>',
		'<i class="mascota">EVENTO DE LANZAMIENTO</i>',
		'<i class="mascota">BRANDING</i>',
		'<i class="mascota">SITIOS WEB</i>',
		'<i class="mascota">SOCIAL MEDIA</i>',
		'<i class="mascota">PAUTA</i>',
        '<i class="mascota">CAMPAÑAS INSTITUCIONALES</i>',
        '<i class="mascota">FOTOGRAFÍA</i>'
	],

	//stringsElement: '#cadenas-texto', // ID del elemento que contiene cadenas de texto a mostrar.
	typeSpeed: 60, // Velocidad en mlisegundos para poner una letra,
	startDelay: 300, // Tiempo de retraso en iniciar la animacion. Aplica tambien cuando termina y vuelve a iniciar,
	backSpeed: 60, // Velocidad en milisegundos para borrrar una letra,
	smartBackspace: true, // Eliminar solamente las palabras que sean nuevas en una cadena de texto.
	shuffle: false, // Alterar el orden en el que escribe las palabras.
	backDelay: 1100, // Tiempo de espera despues de que termina de escribir una palabra.
	loop: true, // Repetir el array de strings
	loopCount: false, // Cantidad de veces a repetir el array.  false = infinite
	showCursor: true, // Mostrar cursor palpitanto
	cursorChar: '|', // Caracter para el cursor
	contentType: 'html', // 'html' o 'null' para texto sin formato
});