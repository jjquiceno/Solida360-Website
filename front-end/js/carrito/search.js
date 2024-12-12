function searchFunction() {
    const input = document.getElementById('search-input').value.toLowerCase();
    const resultsContainer = document.getElementById('search-results');
    resultsContainer.innerHTML = ''; // Limpiar resultados previos

    // Lista de productos con descripciones y enlaces
    const products = [
        { name: 'Carnets', description: 'Personaliza tus carnets con calidad y rapidez.', link: 'personalizar-carnets.html' },
        { name: 'Volantes', description: 'Volantes para promocionar tus eventos o negocios.', link: 'personalizar-volantes.html' },
        { name: 'Tarjetas personales', description: 'Diseña tus tarjetas personales con estilo.', link: 'personalizar-tarjetas.html' },
        { name: 'Microperforado', description: 'Publicidad en ventanas con microperforado.', link: 'personalizar-microperforado.html' },
        { name: 'Stickers', description: 'Crea stickers personalizados para cualquier ocasión.', link: 'personalizar-stickers.html' },
        { name: 'Mugs', description: 'Personaliza mugs con tus diseños favoritos.', link: 'personalizar-mugs.html' },
        { name: 'Camisetas', description: 'Diseña camisetas únicas para cualquier evento.', link: 'personalizar-camisetas.html' }
    ];

    // Mostrar o esconder resultados
    if (input === '') {
        resultsContainer.textContent = ''; // No mostrar nada si el input está vacío
    } else {
        const results = products.filter(product => product.name.toLowerCase().includes(input));
        if (results.length > 0) {
            results.forEach(result => {
                const div = document.createElement('div');
                div.classList.add('product-result');
                
                const h3 = document.createElement('h3');
                h3.textContent = result.name;

                const p = document.createElement('p');
                p.textContent = result.description;

                const a = document.createElement('a');
                a.href = result.link;
                a.textContent = 'Personalizar';

                div.appendChild(h3);
                div.appendChild(p);
                div.appendChild(a);
                resultsContainer.appendChild(div);
            });
        } else {
            resultsContainer.textContent = 'No se encontraron resultados';
        }
    }
}
