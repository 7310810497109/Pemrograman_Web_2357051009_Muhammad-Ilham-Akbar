<?php 
include "../koneksi/db.php"; 
$id = $_GET['id']; 
$data = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM mahasiswa WHERE id=$id")); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Edit Mahasiswa</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="max-w-xl mx-auto mt-10 px-4">
  <h2 class="text-2xl font-bold mb-6">Edit Data Mahasiswa</h2>

  <form method="POST" class="space-y-4">
    <div>
      <label class="block mb-1 font-medium">Nama</label>
      <input type="text" name="nama" value="<?= $data['nama'] ?>" class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500" required>
    </div>

    <div>
      <label class="block mb-1 font-medium">NIM</label>
      <input type="text" name="npm" value="<?= $data['npm'] ?>" class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500" required>
    </div>

    <div class="flex items-center space-x-3">
      <button type="submit" name="update" class="bg-yellow-400 text-black px-4 py-2 rounded hover:bg-yellow-500">Update</button>
      <a href="index.php" class="bg-gray-500 text-white px-4 py-2 rounded hover:bg-gray-600">Kembali</a>
    </div>
  </form>

  <?php 
  if (isset($_POST['update'])) {
    $nama = $_POST['nama'];
    $nim  = $_POST['npm'];
    mysqli_query($conn, "UPDATE mahasiswa SET nama='$nama', npm='$npm' WHERE id=$id");
    echo "
    <div class='bg-green-100 text-green-800 px-4 py-3 rounded mt-6'>
      Data berhasil diupdate.
    </div>
    ";
  }
  ?>
</body>
</html>
