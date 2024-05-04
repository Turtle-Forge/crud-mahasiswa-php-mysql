<?php

// Panggil Koneksi Database
include("koneksi.php");

// Uji jika tombol simpan diklik
if (isset($_POST["bsimpan"])) {

  // simpan data baru
  $simpan = mysqli_query($KONEKSI, "INSERT INTO tmhs (nama, nim, prodi, alamat)
                                    VALUES('$_POST[tnama]',
                                          '$_POST[tnim]',
                                          '$_POST[tprodi]',
                                          '$_POST[talamat]')");

  // Jika simpan sukses
  if ($simpan) {
    echo "<script>
            alert('Simpan data Sukses!');
            document.location='index.php';
          </script>";
  } else {
    echo "<script>
            alert('Simpan data Gagal!');
            document.location='index.php';
          </script>";
  }
}

// Uji jika tombol Ubah diklik
if (isset($_POST["bubah"])) {

  // ubah data 
  $ubah = mysqli_query($KONEKSI, "UPDATE tmhs SET
                                                  nama = '$_POST[tnama]',
                                                  nim = '$_POST[tnim]',
                                                  prodi = '$_POST[tprodi]',
                                                  alamat = '$_POST[talamat]'
                                                WHERE id_mhs = '$_POST[id_mhs]'
                                                  ");

  // Jika ubah sukses
  if ($ubah) {
    echo "<script>
            alert('Ubah data Sukses!');
            document.location='index.php';
          </script>";
  } else {
    echo "<script>
            alert('Ubah data Gagal!');
            document.location='index.php';
          </script>";
  }
}

// Uji jika tombol Hapus diklik
if (isset($_POST["bhapus"])) {

  // Hapus data 
  $hapus = mysqli_query($KONEKSI, "DELETE FROM tmhs WHERE id_mhs= '$_POST[id_mhs]'");

  // Jika Hapus sukses
  if ($hapus) {
    echo "<script>
            alert('Hapus data Sukses!');
            document.location='index.php';
          </script>";
  } else {
    echo "<script>
            alert('Hapus data Gagal!');
            document.location='index.php';
          </script>";
  }
}
