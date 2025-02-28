const productos = [
    {name: 'Remitos', img: '../../img/gf-imp4.jpg', descripcion: 'Remitos de entrega, para gestionar tus pedidos', src: '../../solidacomercial/productos/productos.php'},
    {name: 'Producto 1', img: '../../img/gf-imp4.jpg', descripcion: 'Este es el producto 1', src: ''},
    {name: 'Producto 2', img: '../../img/gf-imp4.jpg', descripcion: 'Este es el producto 2', src: ''},
    {name: 'Producto 3', img: '../../img/gf-imp4.jpg', descripcion: 'Este es el producto 3', src: ''},
    {name: 'Producto 4', img: '../../img/gf-imp4.jpg', descripcion: 'Este es el producto 4', src: ''},
    {name: 'Producto 5', img: '../../img/gf-imp4.jpg', descripcion: 'Este es el producto 5', src: ''},
    {name: 'Remitos', img: '../../img/gf-imp4.jpg', descripcion: 'Remitos de entrega, para gestionar tus pedidos', src: '../../solidacomercial/productos/productos.php'},
    {name: 'Producto 1', img: '../../img/gf-imp4.jpg', descripcion: 'Este es el producto 1', src: ''},
    {name: 'Producto 2', img: '../../img/gf-imp4.jpg', descripcion: 'Este es el producto 2', src: ''},
    {name: 'Producto 3', img: '../../img/gf-imp4.jpg', descripcion: 'Este es el producto 3', src: ''},
    {name: 'Producto 4', img: '../../img/gf-imp4.jpg', descripcion: 'Este es el producto 4', src: ''},
    {name: 'Producto 5', img: '../../img/gf-imp4.jpg', descripcion: 'Este es el producto 5', src: ''},
    {name: 'Remitos', img: '../../img/gf-imp4.jpg', descripcion: 'Remitos de entrega, para gestionar tus pedidos', src: '../../solidacomercial/productos/productos.php'},
    {name: 'Producto 1', img: '../../img/gf-imp4.jpg', descripcion: 'Este es el producto 1', src: ''},
    {name: 'Producto 2', img: '../../img/gf-imp4.jpg', descripcion: 'Este es el producto 2', src: ''},
    {name: 'Producto 3', img: '../../img/gf-imp4.jpg', descripcion: 'Este es el producto 3', src: ''},
    {name: 'Producto 4', img: '../../img/gf-imp4.jpg', descripcion: 'Este es el producto 4', src: ''},
    {name: 'Producto 5', img: '../../img/gf-imp4.jpg', descripcion: 'Este es el producto 5', src: ''},
    {name: 'Remitos', img: '../../img/gf-imp4.jpg', descripcion: 'Remitos de entrega, para gestionar tus pedidos', src: '../../solidacomercial/productos/productos.php'},
    {name: 'Producto 1', img: '../../img/gf-imp4.jpg', descripcion: 'Este es el producto 1', src: ''},
    {name: 'Producto 2', img: '../../img/gf-imp4.jpg', descripcion: 'Este es el producto 2', src: ''},
    {name: 'Producto 3', img: '../../img/gf-imp4.jpg', descripcion: 'Este es el producto 3', src: ''},
    {name: 'Producto 4', img: '../../img/gf-imp4.jpg', descripcion: 'Este es el producto 4', src: ''},
    {name: 'Producto 5', img: '../../img/gf-imp4.jpg', descripcion: 'Este es el producto 5', src: ''},
];

productos.forEach((producto, index) => {
    const container = document.getElementById('containerProducts');
    const cajita = document.createElement('div');
    cajita.classList.add('cajita');

    const containerImage = document.createElement('div');
    containerImage.classList.add('containerImage');

    const imagen = document.createElement('img');
    imagen.src = producto.img;
    imagen.classList.add('imagenProduct');

    const textContainer = document.createElement('div');
    textContainer.classList.add('textContainer');

    const names = document.createElement('h3');
    names.classList.add('names');
    names.textContent = producto.name;

    const descriptions = document.createElement('p');
    descriptions.classList.add('descriptions');
    descriptions.textContent = producto.descripcion;

    const botonsito = document.createElement('a');
    botonsito.href = producto.src;
    botonsito.textContent = "¡lo quiero!";
    botonsito.classList.add('botonsito');

    
    containerImage.appendChild(imagen);
    cajita.appendChild(containerImage);
    textContainer.appendChild(names);
    textContainer.appendChild(descriptions);
    textContainer.appendChild(botonsito);
    cajita.appendChild(textContainer);
    container.appendChild(cajita);

    setTimeout(() => {
        const observar = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if(entry.isIntersecting){
                    cajita.classList.add('animacion');
                    observar.disconnect();
                }
            });
        });
        observar.observe(container);
    }, index * 100);
    setTimeout(() => {
        const observer = new IntersectionObserver((entries, observer) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    cajita.classList.add('animacion');
                    observer.unobserve(entry.target); // Dejar de observar después de la animación
                }
            });
        }, { threshold: 0.2 }); // Se activa cuando el 20% del elemento es visible

        observer.observe(cajita);
    }, index * 100); // Delay en cascada para cada elemento
});