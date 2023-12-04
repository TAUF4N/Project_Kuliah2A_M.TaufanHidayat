<nav class="navbar navbar-expand navbar-dark bg-primary sticky-top">
    <div class="container">
        <a class="navbar-brand" href="."><i class="bi bi-tropical-storm"></i> Rumah Buku </a>

        <!-- Kategori -->
        <ul class="navbar-nav me-auto">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                    aria-expanded="false">
                    Kategori
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="#">Kategori 1</a></li>
                    <li><a class="dropdown-item" href="#">Kategori 2</a></li>
                    <!-- Tambahkan lebih banyak kategori sebagai dropdown-item sesuai kebutuhan -->
                </ul>
            </li>
        </ul>
        <!-- Akhir Kategori -->

        <!-- Form Pencarian -->
        <form class="d-flex mx-auto my-2 position-relative" action="kategori.php" method="GET" style="width: 700px">
            <input class="form-control me-1" type="search" placeholder="Cari Judul Buku, Penulis" aria-label="Search">
            <button class="btn btn-outline position-absolute end-0" type="submit">
                <i class="bi bi-search"></i>
            </button>
        </form>
        <!-- Akhir Form Pencarian -->

        <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Username
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end mt-2">
                        <li><a class="dropdown-item" href="#">Profil</a></li>
                        <li><a class="dropdown-item" href="#">Username</a></li>
                        <li><a class="dropdown-item" href="logout">logout</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>