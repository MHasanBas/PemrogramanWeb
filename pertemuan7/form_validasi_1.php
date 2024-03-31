<!DOCTYPE html>
<html>
<head>
    <title>Form Input dengan Validasi</title>
    <!-- Mengimpor jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
    <h1>Form Input dengan Validasi</h1>
    <!-- Formulir -->
    <form id="myForm" method="post" action="proses_validasi.php">
        <!-- Input Nama -->
        <label for="nama">Nama :</label>
        <input type="text" id="nama" name="nama">
        <!-- Penanda kesalahan untuk input nama -->
        <span id="nama-error" style="color: red;"></span><br>

        <!-- Input Email -->
        <label for="email">Email :</label>
        <input type="text" id="email" name="email">
        <!-- Penanda kesalahan untuk input email -->
        <span id="email-error" style="color: red;"></span><br>

        <!-- Input Password -->
        <label for="password">Password :</label>
        <input type="password" id="password" name="password">
        <!-- Penanda kesalahan untuk input password -->
        <span id="password-error" style="color: red;"></span><br>

        <!-- Tombol Submit -->
        <input type="submit" value="Submit">
    </form>

    <!-- Script jQuery untuk validasi -->
    <script>
        $(document).ready(function() {
            $("#myForm").submit(function(event) {
                // Mengambil nilai dari input nama, email, dan password
                var nama = $("#nama").val();
                var email = $("#email").val();
                var password = $("#password").val();
                var valid = true;

                // Validasi input nama
                if (nama === "") {
                    $("#nama-error").text("Nama harus diisi.");
                    valid = false;
                } else {
                    $("#nama-error").text("");
                }

                // Validasi input email
                if (email === "") {
                    $("#email-error").text("Email harus diisi.");
                    valid = false;
                } else {
                    $("#email-error").text("");
                }

                // Validasi input password
                if (password.length < 8) {
                    $("#password-error").text("Password harus memiliki minimal 8 karakter.");
                    valid = false;
                } else {
                    $("#password-error").text("");
                }

                // Menghentikan pengiriman form jika validasi gagal
                if (!valid) {
                    event.preventDefault();
                } else {
                    // Mengirim data form menggunakan AJAX jika validasi berhasil
                    $.ajax({
                        url: "proses_validasi.php",
                        method: "POST",
                        data: $("#myForm").serialize(),
                        success: function(response) {
                            // Tanggapan dari proses_validasi.php
                            console.log(response); // tanggapan dari proses validasi
                        },
                        error: function(xhr, status, error) {
                            // Penanganan kesalahan jika terjadi
                            console.error(error); // tanggapan jiuka terjadi kesalahan
                        }
                    });
                }
            });
        });
    </script>
</body>
</html>
