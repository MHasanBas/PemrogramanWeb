<div class="sidebar border border-right col-md-3 col-lg-2 p-0 bg-body-tertiary">
    <!-- Sidebar menggunakan offcanvas -->
    <div class="offcanvas-md offcanvas-end bg-body-tertiary" tabindex="-1" id="sidebarMenu" aria-labelledby="sidebarMenuLabel">
        <div class="offcanvas-header">
            <!-- Judul sidebar -->
            <h5 class="offcanvas-title" id="sidebarMenuLabel">Aplikasi Kantor Yudha</h5>
            <!-- Tombol close sidebar -->
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" data-bs-target="#sidebarMenu" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body d-md-flex flex-column p-0 pt-lg-3 overflow-y-auto">
            <!-- Daftar menu -->
            <ul class="nav flex-column list-unstyled">
                <!-- Menu Dashboard -->
                <li class="nav-item">
                    <a class="nav-link d-flex align-items-center gap-2 active" aria-current="page" href="index.php">
                        <svg class="bi" width="16" height="16">
                            <use xlink:href="#house-fill" />
                        </svg>
                        Dashboard
                    </a>
                </li>
                <!-- Menu Anggota -->
                <li class="nav-item">
                    <a class="nav-link d-flex align-items-center gap-2" href="index.php?page=anggota">
                        <svg class="bi" width="16" height="16">
                            <use xlink:href="#people" />
                        </svg>
                        Anggota
                    </a>
                </li>
                <!-- Menu Jabatan -->
                <li class="nav-item">
                    <a class="nav-link d-flex align-items-center gap-2" href="index.php?page=jabatan">
                        <svg class="bi" width="16" height="16">
                            <use xlink:href="#puzzle" />
                        </svg>
                        Jabatan
                    </a>
                </li>
            </ul>
            <hr class="my-3">
            <!-- Daftar menu tambahan -->
            <ul class="nav flex-column mb-auto list-unstyled">
                <!-- Menu Settings -->
                <li class="nav-item">
                    <a class="nav-link d-flex align-items-center gap-2" href="#">
                        <svg class="bi" width="16" height="16">
                            <use xlink:href="#gear-wide-connected" />
                        </svg>
                        Settings
                    </a>
                </li>
                <!-- Menu Log out -->
                <li class="nav-item">
                    <a class="nav-link d-flex align-items-center gap-2" href="logout.php">
                        <svg class="bi" width="16" height="16">
                            <use xlink:href="#door-closed" />
                        </svg>
                        Log out
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>
