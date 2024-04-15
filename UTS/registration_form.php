<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="style.css">
  <title>Formulir Pendaftaran Ekstrakurikuler</title>
</head>
<body>
  <section class="container">
    <header>Formulir Pendaftaran Ekstrakurikuler</header>
    <form action="process.php" method="post" class="form">
      <div class="input-box">
        <label>Nama Lengkap</label>
        <input type="text" name="nama" placeholder="Masukkan nama lengkap" required>
      </div>

      <div class="input-box">
        <label>Alamat email</label>
        <input type="text" name="email" placeholder="Masukkan alamat email" required>
      </div>

      <div class="column">
        <div class="input-box">
          <label>Nomor Telepon</label>
          <input type="text" name="phone" placeholder="Masukkan nomor telepon" required>
        </div>
        <div class="input-box">
          <label>Tanggal Lahir</label>
          <input type="date" name="dob" placeholder="Masukkan tanggal lahir" required>
        </div>
      </div>

      <div class="select-box">
        <select name="ClassNum">
          <option hidden>Kelas</option>
          <option value="1-A">1-A</option>
          <option value="2-B">2-B</option>
          <option value="3-C">3-C</option>
          <option value="4-D">4-D</option>
        </select>
      </div>

      <div class="gender-box">
        <h3>Jenis Kelamin</h3>
        <div class="gender-option">
          <div class="gender">
            <input type="radio" id="check-male" name="gender" value="Laki-Laki" checked>
            <label for="check-male">Laki-Laki</label>
          </div>
          <div class="gender">
            <input type="radio" id="check-female" name="gender" value="Perempuan">
            <label for="check-female">Perempuan</label>
          </div>
        </div>
      </div>

      <div class="input-box address">
        <label>Alamat</label>
        <input type="text" name="alamat1" placeholder="masukkan nama jalan" required>
        <div class="column">
          <div class="select-box">
            <select name="negara">
              <option hidden>Negara</option>
              <option value="Indonesia">Indonesia</option>
              <option value="Japan">Japan</option>
              <option value="Korea">Korea</option>
              <option value="America">America</option>
            </select>
          </div>
          <input type="text" name="kota" placeholder="Kota" required>
        </div>
        <div class="column">
          <input type="text" name="kecamatan" placeholder="Kecamatan" required>
          <input type="text" name="kodepos" placeholder="Kode pos" required>
        </div>
      </div>

      <div class="extra">
        <h3>Pilih Ekstrakurikuler</h3>
        <div class="extra-option">
          <div class="extra">
            <input type="radio" id="check-Renang" name="extrakurikuler" value="Renang" checked>
            <label for="check-Renang">Renang</label>
          </div>
          <div class="extra">
            <input type="radio" id="check-Futsal" name="extrakurikuler" value="Futsal">
            <label for="check-Futsal">Futsal</label>
          </div>
          <div class="extra">
            <input type="radio" id="check-Robotik" name="extrakurikuler" value="Robotik">
            <label for="check-Robotik">Robotik</label>
          </div>
        </div>
      </div>

      <button type="submit">Submit</button>
    </form>
  </section>
  <script src="jquery-3.7.1.js"></script>
  <script>
    $(document).ready(function(){
      $("form").submit(function(e){
        e.preventDefault(); // Prevent form from submitting
        // You can perform form validation here
        // Send form data to server using AJAX
        $.ajax({
          url: "process.php",
          type: "POST",
          data: $("form").serialize(),
          success: function(response){
            // Redirect to success page
            window.location.href = "success.php";
          },
          error: function(xhr, status, error){
            // Handle errors if any
            console.error(xhr.responseText);
          }
        });
      });
    });
  </script>
</body>
</html>