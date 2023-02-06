
<nav class= "navbar navbar-dark bg-dark">
        <div class="container">
            <a href="/bibliotech/index.php" class="navbar-brand fw-bold fs-4">Biblio<span class="tech">Tech</span></a>

                <ul class="navbar-nav">
                    <li class="nav-item">
                        <button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        Agregar Libro
                        </button>
                    </li>
                </ul>
           
            <form action="/bibliotech/pages/second_page.php" method="POST" class="d-flex" role="search">
                <div class="input-container">
                    <input class="form-control me-2" type="search" name= "search" placeholder="Buscar por nombre de autor o por título" aria-label="Search">
                    <button class="btn btn-light" value="search" type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
                </div>
            </form>
        </div>
</nav>

<main>
