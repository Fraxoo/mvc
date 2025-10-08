


movies.forEach(movie => {
    const template = document.querySelector("#movie-list");
    const cloneTemplate = template.content.cloneNode(true);
    const lien = cloneTemplate.querySelector("a");
    const image = cloneTemplate.querySelector("img");
    const name = cloneTemplate.querySelector("#name");
    const diffusion = cloneTemplate.querySelector("#diffusion");

    lien.setAttribute("href", `http://localhost:8080/movie/show/${movie.id}`);
    image.setAttribute("src", "https://picsum.photos/200/300")
    name.textContent = movie.name;
    diffusion.textContent = "diffusion";

    const movieList = document.querySelector(".movie-list");
    movieList.appendChild(cloneTemplate);
});

