<?php include "../koneksi/db.php"; ?> 
<!DOCTYPE html> 
<html lang="en"> 
<head> 
  <title>Data Mahasiswa</title> 
  <script src="https://cdn.tailwindcss.com"></script> 
</head> 
<body class="max-w-4xl mx-auto mt-10 px-4"> 
  <h2 class="text-2xl font-bold mb-6">Data Mahasiswa</h2> 
  <a href="data mahasiswa.php" class="inline-block bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700 mb-4">
    + Tambah Mahasiswa
  </a> 
  <div class="overflow-x-auto">
    <table class="w-full border border-gray-300 text-left"> 
      <thead class="bg-gray-800 text-white"> 
        <tr>
          <th class="px-4 py-2 border">No</th>
          <th class="px-4 py-2 border">Nama</th>
          <th class="px-4 py-2 border">NPM</th>
          <th class="px-4 py-2 border">Aksi</th>
        </tr> 
      </thead> 
      <tbody> 
        <?php 
        $no = 1; 
        $result = mysqli_query($conn, "SELECT * FROM mahasiswa"); 
        while ($row = mysqli_fetch_assoc($result)) { 
          echo "<tr class='border-t'> 
                  <td class='px-4 py-2 border'>{$no}</td> 
                  <td class='px-4 py-2 border'>{$row['nama']}</td> 
                  <td class='px-4 py-2 border'>{$row['npm']}</td> 
                  <td class='px-4 py-2 border space-x-2'> 
                    <a href='edit mahasiswa.php?id={$row['id']}' class='inline-block bg-yellow-400 text-black px-3 py-1 rounded hover:bg-yellow-500 text-sm'>Edit</a> 
                    <a href='hapus mahasiswa.php?id={$row['id']}' class='inline-block bg-red-600 text-white px-3 py-1 rounded hover:bg-red-700 text-sm' onclick='return confirm(\"Hapus data ini?\")'>Hapus</a> 
                  </td> 
                </tr>"; 
          $no++; 
        } 
        ?> 
      </tbody> 
    </table> 
  </div>
</body> 
</html>
