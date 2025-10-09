


const template = document.querySelector("#movie-list");
const movieList = document.querySelector(".movie-list");

async function loadMovies() {
  const response = await fetch("http://localhost:8080/movie/json");
  const movies = await response.json();
  console.log(movies);
  return movies;
}

loadMovies().then(movies => {



  movies.forEach(movie => {
    const clone = template.content.cloneNode(true);

    clone.querySelector("a").href = `http://localhost:8080/movie/show/${movie.id}`;
    clone.querySelector("img").src = "https://picsum.photos/200/300";
    clone.querySelector("#name").textContent = movie.name;
    clone.querySelector("#diffusion").textContent = "diffusion";

    movieList.appendChild(clone);
  });

})