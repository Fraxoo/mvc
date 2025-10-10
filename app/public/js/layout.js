const searchBar_elem = document.querySelector("#search-bar");
const resultsContainer = document.querySelector("#search-results");
const resultTemplate = document.querySelector("#results-template");
const searchForm = document.querySelector('#search_form');
//  console.log(movies);

searchBar_elem.addEventListener("input", async (e) => {
  const query = e.target.value.trim();
  // Clear previous results
  resultsContainer.innerHTML = "";
  if (!query) return;

  try {
    const response = await fetch(`http://localhost:8080/movie/search?query=${encodeURIComponent(query)}`);
    if (!response.ok) return;
    const results = await response.json();

    results.slice(0, 5).forEach(result => {
      const clone = resultTemplate.content.cloneNode(true);
      clone.querySelector("a").href = `http://localhost:8080/movie/show/${result.id}`;
      clone.querySelector("img").src = "https://picsum.photos/200/300";
      clone.querySelector("p").textContent = result.name;
      resultsContainer.appendChild(clone);
    });
  } catch (err) {
    // ignore
  }
});

// On submit, navigate to /result/search/<query>
searchForm?.addEventListener('submit', (e) => {
  e.preventDefault();
  const q = searchBar_elem.value.trim();
  if (!q) return;
  window.location.href = `/result/search/${encodeURIComponent(q)}`;
});
