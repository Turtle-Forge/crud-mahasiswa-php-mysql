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
