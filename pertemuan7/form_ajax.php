<!DOCTYPE html>
<html lang="en">
<head>
    <title>Contoh Form dengan PHP dan jQuery</title>
    <!-- Mengimpor jQuery dari CDN -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
    <h2>Form Contoh</h2>
    <!-- Formulir -->
    <form id="myForm">
        <label for="buah">Pilih Buah :</label>
        <select name="buah" id="buah">
            <option value="apel">Apel</option>
            <option value="pisang">Pisang</option>
            <option value="mangga">Mangga</option>
            <option value="jeruk">Jeruk</option>
        </select>

        <br>

        <label>Pilih Warna Favorit :</label><br>
        <!-- Checkbox untuk memilih warna favorit -->
        <input type="checkbox" name="warna[]" value="merah"> Merah<br>
        <input type="checkbox" name="warna[]" value="biru"> Biru<br>
        <input type="checkbox" name="warna[]" value="hijau"> Hijau<br>

        <br>

        <label>Pilih Jenis Kelamin :</label><br>
        <!-- Radio button untuk memilih jenis kelamin -->
        <input type="radio" name="jenis_kelamin" value="laki-laki"> Laki-laki<br>
        <input type="radio" name="jenis_kelamin" value="perempuan"> Perempuan<br>

        <br>

        <!-- Tombol submit -->
        <input type="submit" value="Submit">
    </form>

    <!-- Container untuk menampilkan hasil dari proses -->
    <div id="hasil">
        <!-- Hasil dari proses akan ditampilkan di sini -->
    </div>

    <!-- Script jQuery -->
    <script>
        $(document).ready(function () {
            // Ketika formulir di-submit
            $("#myForm").submit(function (e) {
                e.preventDefault(); // Mencegah pengiriman formulir secara default

                // Mengumpulkan data formulir
                var formData = $("#myForm").serialize();

                // Mengirim data ke server PHP menggunakan AJAX
                $.ajax({
                    url: "proses_lanjut.php", // Ganti dengan nama file PHP yang sesuai
                    type: "POST",
                    data: formData,
                    success: function (response) {
                        // Tampilkan hasil dari server di div "hasil"
                        $("#hasil").html(response);
                    }
                });
            });
        });
    </script>
</body>

</html>
