<?php 
require_once 'class_nilaiMahasiswa.php'; 


// }
if ($_SERVER["REQUEST_METHOD"]== "POST" && isset($_POST['submit']) ){
  // Tangani pengiriman data formulir
  $nim = $_POST['nim'];
  $mataKuliah = $_POST['mataKuliah'];
  $nilai = $_POST['nilai'];

  // Buat objek Mahasiswa menggunakan data yang dikirimkan
  $mahasiswa = new Mahasiswa($mataKuliah, $nilai, $nim);

  // Tambahkan bari baru ke tabel dengan hasil yang diperoleh dari objek Mahasiswa
  $nim = htmlspecialchars($mahasiswa->nim);
  $mataKuliah = htmlspecialchars($mahasiswa->mataKuliah);
  $nilai = htmlspecialchars($mahasiswa->nilai);
  $hasilUjian =$mahasiswa->hasil();
  $grade = $mahasiswa->grade();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Nilai Mahasiswa</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
  <nav class="navbar bg-primary">
    <div class="container-fluid">
      <span class="navbar-brand mb-0 h1">Elyas Randi Renaldi</span>
    </div>
  </nav>

  <h2 class='mt-4 ms-4'>Form Nilai Ujian</h2>
  <hr>
  <form method="POST" class='ms-4 me-4'>
    <div class="form-group row">
      <label for="nim" class="col-4 col-form-label">NIM</label>
      <div class="col-8">
        <input id="nim" name="nim" type="number" required="required" class="form-control">
      </div>
    </div>
    <div class="form-group row mt-2">
<<<<<<< HEAD
    <label for="mataKuliah" class="col-4 col-form-label">Mata Kuliah</label>
    <div class="col-8">
        <select id="mataKuliah" name="mataKuliah" class="form-select" required="required">
            <option value="">Pilih Mata Kuliah</option>
            <option value="Pemrograman Web 2">Pemrograman Web 2</option>
            <option value="Basis Data">Basis Data</option>
            <option value="Dasar-Dasar Pemrograman">Dasar-Dasar Pemrograman</option>
            <option value="Statistika">Statistika</option>
        </select>
    </div>
</div>
=======
      <label for="mataKuliah" class="col-4 col-form-label">Mata Kuliah</label>
      <div class="col-8">
        <select id="mataKuliah" name="mataKuliah" class="form-select" required="required">
          <option value="">Pilih Mata Kuliah</option>
          <option value="Pemrograman Web 2">Pemrograman Web 2</option>
          <option value="Basis Data">Basis Data</option>
          <option value="Dasar-Dasar Pemrograman">Dasar-Dasar Pemrograman</option>
          <option value="Statistika">Statistika</option>
        </select>
      </div>
    </div>
>>>>>>> d7ac66ddeec2cd58a31fb87cdcbe32d8444ad53a
    <div class="form-group row mt-2">
      <label for="nilai" class="col-4 col-form-label">Nilai</label>
      <div class="col-8">
        <input id="nilai" name="nilai" type=" number" required="required" class="form-control">
      </div>
    </div>

    <div class="form-group row mt-2">
      <div class="offset-4 col-8">
        <button name="submit" type="submit" class="btn btn-primary">Submit</button>
      </div>
    </div>
  </form>
  <div class="container mt-5">
    <table class="table table-bordered">
      <tr class = "table-primary">
        <th>NIM</th>
        <th>Mata Kuliah</th>
        <th>Nilai</th>
        <th>Hasil Ujian</th>
        <th>Grade</th>
      </tr>
      <?php if(isset($nim)) { ?>
      <tr>
        <td><?php echo $nim; ?></td>
        <td><?php echo $mataKuliah; ?></td>
        <td><?php echo $nilai; ?></td>
        <td><?php echo $hasilUjian; ?></td>
        <td><?php echo $grade; ?></td>
      </tr>
      <?php } ?>
    </table>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
</body>

</html>
