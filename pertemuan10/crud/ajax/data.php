<table id="example" class="table table-striped table-bordered" style="width:100%">
    <thead>
        <tr>
            <td>No</td>
            <td>Nama</td>
            <td>Jenis Kelamin</td>
            <td>Alamat</td>
            <td>No Telp</td>
            <td>Action</td>
        </tr>
    </thead>
    <tbody>
        <?php
            // Mengambil data dari database dan menampilkannya dalam bentuk baris tabel
        ?>
    </tbody>
</table>

<script type="text/javascript">
    // Menginisialisasi DataTables untuk tabel dengan id 'example'
    $(document).ready(function() {
        $('#example').DataTable();
    });

    // Fungsi untuk mereset pesan kesalahan pada form
    function reset(){
        // Reset pesan kesalahan pada elemen dengan id 'err_nama', 'err_jenis_kelamin', 'err_alamat', 'err_no_telp'
        document.getElementById("err_nama").innerHTML = "";
        document.getElementById("err_jenis_kelamin").innerHTML = ""; 
        document.getElementById("err_alamat").innerHTML = ""; 
        document.getElementById("err_no_telp").innerHTML = "";
    }

    // Fungsi untuk menangani klik pada tombol edit
    $(document).on('click', '.edit_data', function() { 
        // Scroll ke atas halaman
        $('html, body').animate({ scrollTop: 0 }, 'slow');
        // Ambil id data yang akan diedit
        var id = $(this).attr('id');
        // Kirim permintaan AJAX untuk mendapatkan data yang akan diedit
        $.ajax({
            type: 'POST',
            url: "get_data.php",
            data: {id:id},
            dataType:'json',
            success: function(response) {
                // Reset pesan kesalahan
                reset();
                // Scroll ke atas halaman
                $('html, body').animate({ scrollTop: 30 }, 'slow'); 
                // Isi form dengan data yang diperoleh dari server
                document.getElementById("id").value = response.id; 
                document.getElementById("nama").value = response.nama; 
                document.getElementById("alamat").value = response.alamat; 
                document.getElementById("no_telp").value = response.no_telp; 
                // Tentukan jenis kelamin sesuai data yang diperoleh dari server
                if (response.jenis_kelamin=="L") {
                    document.getElementById("jenkel1").checked = true;
                } else {
                    document.getElementById("jenkel2").checked = true;
                }
            }, error: function(response) {
                console.log(response.responseText);
            }
        });
    });

    // Fungsi untuk menangani klik pada tombol hapus
    $(document).on('click', '.hapus_data', function() { 
        // Ambil id data yang akan dihapus
        var id = $(this).attr('id');
        // Kirim permintaan AJAX untuk menghapus data
        $.ajax({
            type: 'POST',
            url: "hapus_data.php",
            data: {id:id},
            success: function()  {
                // Muat ulang data setelah data dihapus
                $('data').load("data.php");
            }, error: function(response) {
                console.log(response.responseText);
            }
        });
    });
</script>
