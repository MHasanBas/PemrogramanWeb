<?php
// Menghapus cookie 'user' dengan mengatur waktu kedaluwarsa ke belakang 1 jam (3600 detik)
setcookie("user", "polinema", time()-3600);
?>
