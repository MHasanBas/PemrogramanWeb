<div class="container-fluid">
    <div class="row">
        <?php
        // Menyertakan file menu.php untuk menampilkan menu
        include "admin/template/menu.php";
        ?>
        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                <h1 class="h2">Anggota</h1>
            </div>
            <div class="row">
                <div class="col-lg-2">
                    <!-- Tombol untuk menampilkan modal tambah anggota -->
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">
                        <i class="fa fa-plus"></i>Tambah Anggota</button>
                </div>
                <?php
                // Menampilkan flash message jika ada
                if (isset($_SESSION['_flashdata'])) {
                    echo "<br>";
                    foreach ($_SESSION['_flashdata'] as $key => $val) {
                        echo get_flashdata($key);
                    }
                }
                ?>
                <div class="table-responsive small">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Nama</th>
                                <th scope="col">Jabatan </th>
                                <th scope="col">Username</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            // Mengambil data anggota, jabatan, dan user dari database
                            $no = 1;
                            $query = "SELECT * FROM anggota a, jabatan j, user u WHERE a.jabatan_id = j.id AND a.user_id = u.id order by a.id desc";
                            $result = mysqli_query($koneksi, $query);
                            while ($row = mysqli_fetch_assoc($result)) {
                            ?>
                                <tr>
                                    <th scope="row"><?= $no++ ?></th>
                                    <td><?= $row['nama'] ?></td>
                                    <td><?= $row['jabatan'] ?></td>
                                    <td><?= $row['username'] ?></td>
                                    <td>
                                        <!-- Tombol untuk mengedit dan menghapus anggota -->
                                        <a href="index.php?page=anggota/edit&id=<?= $row['user_id'] ?>" class="btn btn-warning btn-xs"><i class="fa fa-pencil-square-o"></i>Edit</a>
                                        <a href="fungsi/hapus.php?anggota=hapus&id=<?= $row['user_id'] ?>" onclick="javascript:return confirm('Hapus Data Anggota ?');" class="btn btn-danger btn-xs"><i class="fa fa-pencil-square-o"></i>Hapus</a>
                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
                <!-- Modal untuk menambahkan anggota -->
                <div class="modal fade" id="exampleModal" tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="false" role="dialog" aria-labelledby="modalTitleId" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-sm" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Form Anggota</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <form action="fungsi/tambah.php?anggota=tambah" method="post">
                                <div class="modal-body">
                                    <!-- Form untuk input data anggota -->
                                    <div class="mb-3">
                                        <label for="recipient-name" class="col-form-label">Nama :</label>
                                        <input type="text" name="nama" class="form-control" id="recipient-name">
                                    </div>
                                    <div class="mb-3">
                                        <label for="message-text" class="col-form-label">Jabatan:</label>
                                        <select name="jabatan" class="form-select">
                                            <option selected>Pilih Jabatan</option>
                                            <?php
                                            // Menampilkan pilihan jabatan dari database
                                            $query2 = "SELECT * FROM jabatan order by jabatan asc";
                                            $result2 = mysqli_query($koneksi, $query2);
                                            while ($row2 = mysqli_fetch_assoc($result2)) {
                                            ?>
                                                <option value="<?= $row2['id'] ?>"><?= $row2['jabatan'] ?></option>
                                            <?php
                                            }
                                            ?>
                                        </select>
                                    </div>
                                    <!-- Form untuk memilih jenis kelamin -->
                                    <div class="mb-3">
                                        <label for="recipient-name" class="col-form-label">Jenis Kelamin :</label>
                                        <br>
                                        <div class="form-check form-check-inline">
                                            <input type="radio" class="form-check-input" name="jenis_kelamin" value="L">
                                            <label class="form-check-label" for="inlineRadio1">Laki-laki:</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input type="radio" class="form-check-input" name="jenis_kelamin" value="P">
                                            <label class="form-check-label" for="inlineRadio2">Perempuan</label>
                                        </div>
                                    </div>
                                    <!-- Form untuk input alamat dan nomor telepon -->
                                    <div class="mb-3">
                                        <label for="recipient-name" class="col-form-label">Alamat :</label>
                                        <input type="text" name="alamat" class="form-control" id="recipient-name">
                                    </div>
                                    <div class="mb-3">
                                        <label for="recipient-name" class="col-form-label">No Telepon :</label>
                                        <input type="text" name="no_telp" class="form-control" id="recipient-name">
                                    </div>
                                    <!-- Form untuk input username, password, dan level -->
                                    <div class="mb-3">
                                        <label for="recipient-name" class="col-form-label">Username :</label>
                                        <input type="text" name="username" class="form-control" id="recipient-name">
                                    </div>
                                    <div class="mb-3">
                                        <label for="recipient-name" class="col-form-label">Password :</label>
                                        <input type="password" name="password" class="form-control" id="recipient-name">
                                    </div>
                                    <div class="mb-3">
                                        <label for="recipient-name" class="col-form-label">Level :</label>
                                        <select name="level" class="form-select" aria-label="Default select example">
                                            <option selected>Pilih Level</option>
                                            <option value="user">User</option>
                                            <option value="admin">Admin</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <!-- Tombol untuk menutup modal -->
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" aria-hidden="true"><i class="fa fa-times"></i> Close</button>
                                    <!-- Tombol untuk menyimpan data -->
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
