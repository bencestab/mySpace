'use strict';

const   apiURL      =   'http://localhost:8080/architecture_examples/api/api.php';
const   container   =   document.querySelector('section');
const   buttons     =   document.querySelectorAll('button');
let     content     =   '';

// API hívást végző függvény
const getContent = () => {
    fetch(apiURL)
        .then(response => response.json())
        .then(data => {
            data.forEach( item => {
                content += `
                            <article>
                                <h2>${item.cont_title}</h2>
                                <h4>szerző: ${item.user_realname}</h4>
                                ${item.cont_content}
                                <div style="background-image: url('${item.cont_img}')">
                                    <h2>${item.cont_title}</h2>
                                </div>
                            </article>
                `;
            });
            container.innerHTML = `<h1>Kaptam az API-tól ${data.length} darab cikket.</h1>`;
            buttons[0].classList.add('hide');
            buttons[1].classList.remove('hide');
        });
}

// Tartalom megjelenítő függvény
const showContent = () => {
    container.innerHTML = content;
    buttons[1].classList.add('hide');
}

buttons[0].addEventListener('click', getContent);
buttons[1].addEventListener('click', showContent);