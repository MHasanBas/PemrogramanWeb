<div class="container-fluid">
    <div class="row">
        <?php
        // Memasukkan file menu.php untuk menampilkan menu
        include "admin/template/menu.php";
        ?>
        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                <h1 class="h2">Jabatan</h1>
            </div>
            <div class="row">
                <div class="col-lg-2">
                    <!-- Tombol untuk menampilkan modal tambah jabatan -->
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">
                        <i class="fa fa-plus"></i>Tambah Jabatan
                    </button>
                </div>
                <?php
                // Memeriksa apakah ada flash data yang diset
                if (isset($_SESSION['_flashdata'])) {
                    echo "<br>";
                    // Menampilkan flash data jika ada
                    foreach ($_SESSION['_flashdata'] as $key => $val) {
                        echo get_flashdata($key);
                    }
                }
                ?>
                <div class="table-responsive small">
                    <!-- Tabel untuk menampilkan data jabatan -->
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Jabatan</th>
                                <th scope="col">Keterangan</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            // Menginisialisasi nomor urut
                            $no = 1;
                            // Mengambil data jabatan dari database
                            $query = "SELECT * FROM jabatan order by id desc";
                            $result = mysqli_query($koneksi, $query);
                            // Menampilkan data jabatan dalam bentuk baris tabel
                            while ($row = mysqli_fetch_assoc($result)) {
                            ?>
                                <tr>
                                    <th scope="row"><?= $no++ ?></th>
                                    <td><?= $row['jabatan'] ?></td>
                                    <td><?= $row['keterangan'] ?></td>
                                    <td>
                                        <!-- Tombol untuk mengedit dan menghapus jabatan -->
                                        <a href="index.php?page=jabatan/edit&id=<?= $row['id'] ?>" class="btn btn-warning btn-xs"><i class="fa fa-pencil-square" aria-hidden="true"></i> Edit</a>
                                        <a href="fungsi/hapus.php?jabatan=hapus&id=<?= $row['id'] ?>" onclick="javascript:return confirm('Hapus Data Jabatan ?');" class="btn btn-danger btn-xs"><i class="fa fa-trash-o" aria-hidden="true"></i>Hapus</a>
                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
                <!-- Modal untuk menampilkan form tambah jabatan -->
                <div class="modal fade" id="exampleModal" tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="false" role="dialog" aria-labelledby="modalTitleId" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-sm" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Form Jabatan</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <form action="fungsi/tambah.php?jabatan=tambah" method="post">
                                <div class="modal-body">
                                    <!-- Input untuk menambahkan nama jabatan -->
                                    <div class="mb-3">
                                        <label for="recipient-name" class="col-form-label">Nama Jabatan:</label>
                                        <input type="text" name="jabatan" class="form-control" id="recipient-name">
                                    </div>
                                    <!-- Input untuk menambahkan keterangan jabatan -->
                                    <div class="mb-3">
                                        <label for="message-text" class="col-form-label">Keterangan:</label>
                                        <textarea class="form-control" name="keterangan" id="message-text"></textarea>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <!-- Tombol untuk menutup modal -->
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" aria-hidden="true"><i class="fa fa-times"></i> Close</button>
                                    <!-- Tombol untuk menyimpan data jabatan -->
                                    <button type="submit" class="btn btn-primary" aria-hidden="true"><i class="fa fa-floppy-o"></i> Simpan</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </main>
    </div>
</div>
