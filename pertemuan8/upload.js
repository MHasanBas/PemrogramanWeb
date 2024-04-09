$(document).ready(function() {
    // Menangani pengiriman formulir saat tombol "Unggah" ditekan
    $('#upload-form').submit(function(e) {
        // Mencegah perilaku default pengiriman formulir
        e.preventDefault();

        // Membuat objek FormData untuk mengumpulkan data formulir
        var formData = new FormData(this);

        // Mengirimkan data formulir ke skrip PHP menggunakan AJAX
        $.ajax({
            type: 'POST',
            url: 'upload_ajax.php',
            data: formData,
            cache: false,
            contentType: false,
            processData: false,
            success: function(response) {
                // Menampilkan respons dari skrip PHP di elemen dengan ID 'status'
                $('#status').html(response);
            },
            error: function() {
                // Menampilkan pesan kesalahan jika terjadi kesalahan saat mengunggah
                $('#status').html('Terjadi kesalahan saat mengunggah file.');
            }
        });
    });
});
