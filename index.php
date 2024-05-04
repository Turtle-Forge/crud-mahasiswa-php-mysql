<?php
// Panggil koneksi.php
include("koneksi.php");
?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>CRUD Mahasiswa</title>

  <!-- =============== Bootstrap CSS =============== -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
  <header class="mt-4">
    <h3 class="text-center">CRUD Mahasiswa <br>dengan <br>PHP, MySQL + Bootstrap v5.3</h3>
  </header>

  <main>

    <!-- =============== Start | Data Tabel Mahasiswa =============== -->
    <div class="container mt-5">
      <div class="card">
        <h5 class="card-header bg-primary text-white">Data Mahasiswa</h5>
        <div class="card-body">

          <!-- Button trigger modal tambah data Mahasiswa-->
          <button type="button" class="btn btn-success mt-4 mb-4" data-bs-toggle="modal" data-bs-target="#modalTambahData">
            Tambah Data
          </button>

          <table class="table table-bordered table-striped table-hover">


            <tr>
              <th>No.</th>
              <th>Nama</th>
              <th>NIM</th>
              <th>Jurusan</th>
              <th>Alamat</th>
              <th>Aksi</th>
            </tr>

            <?php
            // Menampilkan data Mahasiswa dari database
            $no = 1;
            $tampil = mysqli_query($KONEKSI, "SELECT * FROM tmhs ORDER BY id_mhs ASC");
            while ($data = mysqli_fetch_array($tampil)) :
            ?>

              <tr>
                <td><?= $no++ ?></td>
                <td><?= $data['nama'] ?></td>
                <td><?= $data['nim'] ?></td>
                <td><?= $data['prodi'] ?></td>
                <td><?= $data['alamat'] ?></td>
                <td>
                  <a href="#" class="btn btn-warning">Ubah</a>
                  <a href="#" class="btn btn-danger">Hapus</a>
                </td>
              </tr>
            <?php endwhile ?>
          </table>
          <!-- =============== End | Data Tabel Mahasiswa =============== -->

          <!-- ========== Start | Modal Tambah Data ========== -->
          <!-- Modal -->
          <div class="modal fade" id="modalTambahData" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="modalTambahDataLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h1 class="modal-title fs-5" id="modalTambahDataLabel">Form Tambah Data Mahasiswa</h1>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form method="POST" action="aksi_crud.php">
                  <div class="modal-body">

                    <div class="mb-3">
                      <label class="form-label">Nama Lengkap</label>
                      <input type="text" name="tnama" class="form-control" placeholder="Masukkan Nama Lengkap">
                    </div>

                    <div class="mb-3">
                      <label class="form-label">NIM</label>
                      <input type="text" name="tnim" class="form-control" placeholder="Masukkan NIM ">
                    </div>

                    <div class="mb-3">
                      <label class="form-label">Program Studi</label>
                      <select class="form-select" name="tprodi">
                        <option value=""></option>
                        <option value="S1 - Informatika">S1 - Informatika</option>
                        <option value="S1 - Manajemen">S1 - Manajemen</option>
                        <option value="S1 - Ekonomi">S1 - Ekonomi</option>
                        <option value="S1 - Perminyakan">S1 - Perminyakan</option>
                      </select>
                    </div>

                    <div class="mb-3">
                      <label class="form-label">Alamat</label>
                      <textarea class="form-control" rows="3"></textarea>

                    </div>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                    <button type="submit" name="bsimpan" class="btn btn-primary">Simpan</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
          <!-- ========== End | Modal Tambah Data ========== -->


        </div>
      </div>
    </div>
  </main>


  <!-- =============== Bootstrap JS =============== -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>