
//JavaScript code is executed only after the HTML has been completely parsed and is ready for manipulation
document.addEventListener('DOMContentLoaded', function () {
    const searchForm = document.getElementById('potvrdenie');
    const searchInput = document.getElementById('vyhladaj');
    const recipesContainer = document.querySelector('#recepty');

    //event listener is attached to the search form, and it listens for the form submission event.
    searchForm.addEventListener('submit', function (event) {
        event.preventDefault();

        const query = searchInput.value;

        //extracts the value from the search input field and uses it to construct a URL for the AJAX request. It then makes a GET request to the specified URL
        if (query.trim() !== '') {
            // Perform AJAX request
            fetch(`/recipes/search?query=${query}`, {
                method: 'GET',
            })
                .then(response => {
                    return response.json()
                })
                .then(data => {
                    recipesContainer.innerHTML = '';

                    if (data.length > 0) {

                            data.forEach(recipe => {
                                let content = '';
                                const ingred = recipe.ingredients.split(", ");
                                const instr = recipe.instructions.split(". ");
                                const recipeCard = document.createElement('div');
                                content = `
                                        <div class="recipe ">
                                            <h2><a href="/recipes/${recipe.id}">${recipe.title}</a></h2>
                                            <ul> `

                                ingred.forEach(i => {
                                    content += `<li>${i}</li>`
                                })

                                content +=  `</ul>
                                <p>Postup:</p>
                                <ol>`

                                instr.forEach(i => {
                                    content += `<li>${i}</li>`
                                })

                                content +=  `</ol>
                                        </div>`;
                                recipeCard.innerHTML = content
                                recipesContainer.appendChild(recipeCard);
                            })
                    } else {
                        // Message when no recepies are found
                        recipesContainer.innerHTML = '<p>No recipes found</p>';
                    }
                })
                .catch(error => console.log(error));
        }
    });
});
