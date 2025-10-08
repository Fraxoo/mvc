


movies.forEach(movie => {
    const template = document.querySelector("#movie-list");
    const cloneTemplate = template.content.cloneNode(true);
    const image = cloneTemplate.querySelector("img");
    const name = cloneTemplate.querySelector("#name");
    const diffusion = cloneTemplate.querySelector("#diffusion");

    image.setAttribute("src","https://picsum.photos/200/300")
    name.textContent = movie.name;
    diffusion.textContent = "test";

    const movieList = document.querySelector(".movie-list");
    movieList.appendChild(cloneTemplate);
});

