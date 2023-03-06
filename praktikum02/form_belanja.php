<!doctype html>
<html lang="en">
<head>

  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
  <title>Belanja</title>
</head>
<body>
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-7">
        <br>
        <h3>
          Belanja Online
        </h3>
        <hr><br>
        <form method="POST" action="form_belanja.php">
          <div class="form-group row">
            <label for="customer" class="col-4 col-form-label">Customer</label>
            <div class="col-8">
              <input id="customer" name="customer" placeholder="Nama Customer" type="text" class="form-control">
            </div>
          </div>
          <div class="form-group row">
            <label class="col-4">Pilih Produk</label>
            <div class="col-8">
              <div class="custom-control custom-radio custom-control-inline">
                <input name="produk" id="produk_0" type="radio" class="custom-control-input" value="tv">
                <label for="produk_0" class="custom-control-label">TV</label>
              </div>
              <div class="custom-control custom-radio custom-control-inline">
                <input name="produk" id="produk_1" type="radio" class="custom-control-input" value="kulkas">
                <label for="produk_1" class="custom-control-label">KULKAS</label>
              </div>
              <div class="custom-control custom-radio custom-control-inline">
                <input name="produk" id="produk_2" type="radio" class="custom-control-input" value="mesin">
                <label for="produk_2" class="custom-control-label">MESIN CUCI</label>
              </div>
            </div>
          </div>
          <div class="form-group row">
            <label for="jumlah" class="col-4 col-form-label">Jumlah</label>
            <div class="col-8">
              <input id="jumlah" name="jumlah" placeholder="Jumlah" type="text" class="form-control">
            </div>
          </div>
          <div class="form-group row">
            <div class="offset-4 col-8">
              <button name="proses" type="submit" class="btn btn-success">Kirim</button>
            </div>
          </div>
        </form>
      </div>
      <div class="col-md-5">
        <div class="card">
          <h5 class="card-header" style="background-color: #337ab7; color:white;">
            Daftar Harga
          </h5>
          <div class="card-body">
            <p class="card-text">
              TV : 4.200.000
            </p>
          </div>
          <div class="card-footer">
            Kulkas : 3.100.000
          </div>
          <div class="card-body">
            <p class="card-text">
              Mesin Cuci : 3.800.000
            </p>
          </div>
          <div class="card-footer" style="background-color: #337ab7; color:white;">
            Harga Dapat Berubah Setiap Saat
          </div>
        </div>
      </div>
    </div>
    <hr><br>
    <div class="row">
      <div class="col-md-12">
          <?php
          // Tangkep hasil inputan
          $proses = $_POST["proses"];
          $nama_cs = $_POST["customer"];
          $pilih_produk = $_POST["produk"];
          $jumlah_produk = $_POST["jumlah"];
          // echo $nama_cs;
          // echo $pilih_produk;
          // echo $jumlah_produk;

          // Buat variabel total nilai
          // $total_belanja = $pilih_produk * $jumlah_produk;

          //Buat logic grade
          $pilihan_produk;
          if ($pilih_produk == "tv") {
            $pilihan_produk = "TV";
          } elseif ($pilih_produk == "kulkas") {
            $pilihan_produk = "Kulkas";
          } elseif ($pilih_produk == "mesin") {
            $pilihan_produk = "Mesin Cuci";
          } else {
            $pilihan_produk = "Tidak Ada";
          }

          // Buat total belanja
          $total_belanja;
          if ($pilihan_produk == "TV") {
            $total_belanja = 4200000 * $jumlah_produk;
          } elseif ($pilihan_produk == "Kulkas") {
            $total_belanja = 3100000 * $jumlah_produk;
          } elseif ($pilihan_produk == "Mesin Cuci") {
            $total_belanja = 3800000 * $jumlah_produk;
          } else {
            $total_belanja = "-";
          }
          ?>

          <?= "Nama Customer : " . $nama_cs; ?>
          <br>
          <?= "Produk Pilihan : " . $pilihan_produk; ?>
          <br>
          <?= "Jumlah Beli : " . $jumlah_produk; ?>
          <br>
          <?= "Total Belanja : Rp. " . number_format($total_belanja, 0, ".", ".",); ?>
      </div>
    </div>
  </div>

  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
</body>
</html>