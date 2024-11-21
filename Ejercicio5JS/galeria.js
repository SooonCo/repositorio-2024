const apiUrl = "https://api.thecatapi.com/v1/breeds";
const catDetails = document.getElementById('catDetails');
let currentPage = 3;
const limit = 3; 
const options = {
    headers: {
        'x-api-key': 'live_9xAXeOySuZF12pqsDZzqNZy3lMzRgjHdcdFDViMWLt5kIahrWeNrkjQZ5QwzVkWA'
    }
}

window.addEventListener('DOMContentLoaded', () => getCatDetails(currentPage));

async function getCatDetails(page) {
    try {
        const response = await fetch(`${apiUrl}?limit=${limit}&page=${page - 1}`, options);
        if (!response.ok) {
            throw new Error("Error " + response.status);
        }
        const breeds = await response.json();
        
        if (breeds.length > 0) {
            showCatDetails(breeds[0]); 
            updateButtons(breeds.length);
        }
    } catch (error) {
        console.error(error);
    }
}

function showCatDetails(breed) {
    catDetails.innerHTML = `
        <img src="${breed.image?.url || 'https://via.placeholder.com/150'}" alt="${breed.name}">
        <h1>${breed.name}</h1>
        <p><strong>Temperamento:</strong> ${breed.temperament || 'No disponible'}</p>
        <p><strong>Años de vida:</strong> ${breed.life_span || 'No disponible'}</p>
        <p><strong>Descripción:</strong> ${breed.description || 'No disponible'}</p>
        <p><strong>Amigable con perros:</strong> ${breed.dog_friendly || 'No disponible'}</p>
        <p><strong>Origen:</strong> ${breed.origin || 'No disponible'}</p>
        <a href="${breed.wikipedia_url || '#'}" class="see-details-button" target="_blank">Más información</a>
    `;
}

function updateButtons(breedCount) {
    document.getElementById('prevPage').disabled = currentPage === 1;
    document.getElementById('nextPage').disabled = breedCount < limit;
}

document.getElementById('prevPage').addEventListener('click', () => {
    if (currentPage > 1) {
        currentPage--;
        getCatDetails(currentPage);
    }
});

document.getElementById('nextPage').addEventListener('click', () => {
    currentPage++;
    getCatDetails(currentPage);
});
