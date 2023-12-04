<div class="col-lg-3">
                <nav class="navbar navbar-expand-lg bg-light rounded border mt-2">
                    <div class="container-fluid">
                        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas"
                            data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar"
                            aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar"
                            aria-labelledby="offcanvasNavbarLabel" style="width: 300px;">
                            <div class="offcanvas-header">
                                <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Offcanvas</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="offcanvas"
                                    aria-label="Close"></button>
                            </div>
                            <div class="offcanvas-body">
                                <ul class="navbar-nav nav-pills flex-column justify-content-end flex-grow-1">
                                    <li class="nav-item">
                                        <a class="nav-link ps-2 <?php echo ((isset ($_GET['x']) && $_GET['x']=='home' || !isset ($_GET['x']))) ? 'active link-light' : 'link-dark' ?>  " aria-current="page" href="home"><i
                                                class="bi bi-house-door"></i> Dashboard</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link ps-2 <?php echo (isset ($_GET['x']) && $_GET['x']=='kategori') ? 'active link-light' : 'link-dark' ;?>" href="kategori"><i class="bi bi-bookmarks"></i>
                                            Kategori</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link ps-2 <?php echo (isset ($_GET['x']) && $_GET['x']=='daftarbuku') ? 'active link-light' : 'link-dark' ;?>" href="daftarbuku"><i class="bi bi-view-list"></i> Daftar
                                            Buku</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link ps-2 <?php echo (isset ($_GET['x']) && $_GET['x']=='pelanggan') ? 'active link-light' : 'link-dark' ;?>" href="pelanggan"><i class="bi bi-people"></i> Pelanggan</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link ps-2 <?php echo (isset ($_GET['x']) && $_GET['x']=='gudang') ? 'active link-light' : 'link-dark' ;?>" href="gudang"><i class="bi bi-cloud-download"></i>
                                            Gudang</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link ps-2 <?php echo (isset ($_GET['x']) && $_GET['x']=='notice') ? 'active link-light' : 'link-dark' ;?>" href="notice"><i class="bi bi-bell"></i>
                                            Peringatan</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link ps-2 <?php echo (isset ($_GET['x']) && $_GET['x']=='report') ? 'active link-light' : 'link-dark' ;?>" href="report"><i class="bi bi-person-exclamation"></i>
                                            Report</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>