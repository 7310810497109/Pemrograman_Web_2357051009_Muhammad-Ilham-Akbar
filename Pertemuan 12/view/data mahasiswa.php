<?php include "../koneksi/db.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Tambah Mahasiswa</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="max-w-xl mx-auto mt-10 px-4">
  <h2 class="text-2xl font-bold mb-6">Tambah Data Mahasiswa</h2>

  <form method="POST" class="space-y-4">
    <div>
      <label class="block mb-1 font-medium">Nama</label>
      <input type="text" name="nama" class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500" required>
    </div>
    <div>
      <label class="block mb-1 font-medium">NPM</label>
      <input type="text" name="npm" class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500" required>
    </div>

    <div class="flex items-center space-x-3">
      <button type="submit" name="simpan" class="bg-green-600 text-white px-4 py-2 rounded hover:bg-green-700">Simpan</button>
      <a href="index.php" class="bg-gray-500 text-white px-4 py-2 rounded hover:bg-gray-600">Kembali</a>
    </div>
  </form>

  <?php 
  if (isset($_POST['simpan'])) {
    $nama = $_POST['nama'];
    $npm  = $_POST['npm'];
    mysqli_query($conn, "INSERT INTO mahasiswa (nama, npm) VALUES ('$nama', '$npm')");
    echo "
    <div class='bg-green-100 text-green-800 px-4 py-3 rounded mt-6'>
      Data berhasil disimpan.
    </div>
    <script>
      alert('Data Berhasil Ditambah');
      window.location.href = 'index.php';
    </script>
    ";
  }
  ?>
</body>
</html>
