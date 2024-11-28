

fetch('json/articoli.json').then((response) => response.json()).then((data) => {
    let radioWrapper = document.querySelector('#radio-wrapper');
    let cardWrapper = document.querySelector('#card-wrapper');

    function radioCreate() {
        let categorie = data.map((annuncio) => annuncio.categoria);
        let categoriesNoRepeat = Array.from(new Set(categorie));

        categoriesNoRepeat.forEach((categoria) => {
            let div = document.createElement('div');
            div.classList.add('form-check');
            div.innerHTML = `
                <input class="form-check-input" type="radio" name="categorie" id="${categoria}">
                <label class="form-check-label" for="${categoria}">
                    ${categoria}
                </label>
            `;
            radioWrapper.appendChild(div);
        });
    }

    radioCreate();

    function showCards(array) {
        cardWrapper.innerHTML = '';
        array.forEach((annuncio, i) => {
            let div = document.createElement('div');
            div.classList.add('card-custom');
            div.innerHTML = `
                <img src="https://picsum.photos/${300 + i}" alt="immagine casuale" class="img-fluid img-card">
                <p class="h6 text-center">${annuncio.categoria}</p>
                <p class="h4 text-center" title="${annuncio.titolo}">${annuncio.titolo}</p>
                <p class="h5 px-5 pb-4 text-center">${annuncio.descrizione}</p>
            `;

            // Aggiungo evento click per reindirizzare alla pagina dell'articolo
            div.addEventListener('click', () => {
                // Uso l'ID dell'articolo per creare una URL dinamica
                window.location.href = `/dettaglio-articoli/${annuncio.id}`;
            });

            cardWrapper.appendChild(div);
        });
    }

    showCards(data);

    let radioButtons = document.querySelectorAll('.form-check-input');

    function filterByCategory(array) {
        let selectedCategory = Array.from(radioButtons).find((button) => button.checked)?.id || 'all';
        if (selectedCategory !== 'all') {
            return array.filter((annuncio) => annuncio.categoria === selectedCategory);
        }
        return array;
    }

    let wordInput = document.querySelector('#word-input');

    function filterByWord(array) {
        let searchWord = wordInput.value.trim().toLowerCase();
        if (searchWord) {
            return array.filter((annuncio) => annuncio.titolo.toLowerCase().includes(searchWord));
        }
        return array;
    }

    wordInput.addEventListener('input', () => {
        globalFilter();
    });

    radioButtons.forEach((radio) => {
        radio.addEventListener('change', () => {
            globalFilter();
        });
    });

    function globalFilter() {
        let filteredByCategory = filterByCategory(data);
        let filteredByWord = filterByWord(filteredByCategory);

        showCards(filteredByWord);
    }
});


  