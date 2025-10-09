const searchBar_elem = document.querySelector("#search-bar");
const resultsContainer = document.querySelector("#search-results");
const resultTemplate = document.querySelector("#results-template");

searchBar_elem.addEventListener("input", (event) => {
    const query = event.target.value.trim().toLowerCase();

    resultsContainer.innerHTML = ""; // 🔹 vide les anciens résultats
    if (query === "") return;

    const results = movies.filter(movie =>
        movie.name.toLowerCase().includes(query) ||
        movie.genre.toLowerCase().includes(query)
    );

    results.slice(0, 3).forEach(result => {
        const clone = resultTemplate.content.cloneNode(true);
        clone.querySelector("a").href = `http://localhost:8080/movie/show/${result.id}`
        clone.querySelector("img").src = "https://picsum.photos/200/300";
        clone.querySelector("p").textContent = result.name;
        resultsContainer.appendChild(clone);
    });
});
