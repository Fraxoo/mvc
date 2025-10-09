<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Allociné</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="/public/css/layout.css">
    <link rel="stylesheet" href="/public/css/home.css">
    <link rel="stylesheet" href="/public/css/footer.css">
</head>

<body>

    <header>
        <div class="layout-background">
            <div class="width">
                <div class="layout">
                    <a href="http://localhost:8080/"><img src="https://fr.web.img6.acsta.net/commons/v9/allocine/logo-custom/logo-ssm25-white.svg"> </a>
                    <form id="search_form" method="get">
                        <div class="search">
                            <input
                                id="search-bar"
                                type="search"
                                placeholder="Rechercher un film, une série, une star..."
                                name="search">
                            <button class="search-button">
                                <i class="fa-solid fa-magnifying-glass"></i>
                            </button>

                            <!-- 🔹 Zone où les résultats s'afficheront -->
                            <div id="search-results" class="reset"></div>

                            <!-- 🔹 Modèle invisible pour chaque résultat mettre le template en dehors pour eviter de le vider avec innerhtml = ""; -->
                            <template id="results-template">
                                <a>
                                    <div class="search-result-item">
                                        <img>
                                        <p></p>
                                    </div>
                                </a>
                            </template>
                        </div>
                    </form>

                    <div class="hidden-div">
                        <p class="hidden-div"></p>
                    </div>
                </div>
            </div>
            <div class="width">
                <div class="nav-bar">
                    <div class="left-nav-bar">
                        <a class="open" href="http://localhost:8080/">Film</a>
                        <a class="hover" href="http://localhost:8080/">Diffusion</a>
                        <a class="hover" href="http://localhost:8080/">Ajout</a>
                    </div>
                    <a class="hover" href="http://localhost:8080/">Mon compte</a>
                </div>
            </div>
        </div>
        <div class="below-header-background bold">
            <div class="width">
                <div class="below-header-nav">
                    <a href="http://localhost:8080/">News cinéma</a>
                    <a href="http://localhost:8080/">News séries</a>
                    <a href="http://localhost:8080/">Diaporamas</a>
                </div>
            </div>
        </div>
        </div>
    </header>

</body>


<script>
</script>
<script src="/public/js/layout.js"></script>

</html>