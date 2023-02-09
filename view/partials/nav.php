
<nav class= "navbar navbar-dark bg-dark">
        <div class="container">
            <a href="/bibliotech-refactoring/view/books/index.php" class="navbar-brand fw-bold fs-4">Biblio<span class="tech">Tech</span></a>

                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="btn btn-dark" href="/bibliotech-refactoring/view/books/create.php">
                        Agregar Libro
                        </a>
                    </li>
                </ul>
           
            <form action="/bibliotech-refactoring/view/books/search.php" method="POST" class="d-flex" role="search">
                <div class="input-container">
                    <input class="form-control me-2" type="search" name= "search" placeholder="Buscar por nombre de autor o por título" aria-label="Search">
                    <button class="btn btn-light" value="search" type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
                </div>
            </form>
        </div>
</nav>

<main>
