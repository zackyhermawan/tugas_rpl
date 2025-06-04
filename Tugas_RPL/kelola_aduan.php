<?php
session_start();

if (!isset($_SESSION['email'])) {
  header('location: index.php');
  exit();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kelola Aduan</title>
    
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
</head>
<body>

<!-- Modal detail -->
<div id="detailModal" class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50 hidden">
    <div class="bg-white w-[90%] max-w-xl max-h-[90vh] overflow-y-auto rounded-lg p-6 relative">
        <button onclick="closeModal()" class="absolute top-3 right-3 text-gray-600 hover:text-black text-2xl">&times;</button>
      
        <div class="space-y-3 text-left text-gray-700 text-sm">
        <p><strong>Kategori:</strong> <span id="modalKategori">Aduan</span></p>
        <p><strong>Deskripsi:</strong> <span id="modalDeskripsi">Deskripsi</span></p>
        <p><strong>Status:</strong> <span id="modalStatus">Status</span></p>
        <p><strong>Tanggapan:</strong> <span id="modalTanggapan">Tanggapan</span></p>
        </div>
    </div>
</div>

<!-- Modal Keluar Halaman -->
<div id="logoutPopup" class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center hidden z-50">
  <div class="bg-white p-6 rounded-lg shadow-lg w-80 text-center">
    <p class="mb-8">Apakah Anda yakin ingin keluar?</p>
    <div class="flex justify-center gap-4">
      <button onclick="closeLogoutPopup()" class="px-6 py-2 bg-[#61B3FF] text-white rounded hover:bg-blue-500">Batal</button>
      <a href="keluar.php" class="px-9 py-2 bg-red-600 text-white rounded hover:bg-red-700">Ya</a>
    </div>
  </div>
</div>

<div class="flex flex-col md:flex-row min-h-screen">
    <div class="bg-[#363636] w-full md:max-w-[250px] px-4">
        <nav class="flex flex-col justify-between w-full md:py-5 py-2 min-h-screen text-white">
          <div>
              <div class="flex mb-5 gap-3 justify-center items-center">
                  <div>
                      <img src="assets/logo_Basdat.png" class="w-12 h-12">
                  </div>
                  <div>
                      <h1 class="text-xl font-medium">AduanDesa</h1>
                  </div>
              </div>

              <ul class="flex md:flex-col justify-center flex-row md:gap-4 gap-2">
                <li class="flex flex-row items-center gap-3 px-3 transition-all duration-200 rounded hover:bg-gray-200 hover:text-slate-800"><i class="bi bi-house-door-fill text-lg"></i><a class="flex w-full md:border-none border border-gray-100/10 font-medium md:text-[17px] text-sm py-2 md:py-3 " href="dashboard.php">Dashboard</a></li>
                <li class="flex flex-row items-center gap-3 px-3 transition-all duration-200 rounded bg-gray-200 text-slate-800 "><i class="bi bi-chat-dots-fill text-lg"></i><a class="flex w-full md:border-none border border-gray-100/10 font-medium md:text-[17px] text-sm py-2 md:py-3" href="kelola_aduan.php">Kelola Aduan</a></li>
                <li class="flex flex-row items-center gap-3 px-3 transition-all duration-200 rounded hover:bg-gray-200 hover:text-slate-800"><i class="bi bi-calendar-event-fill text-lg"></i><a class="flex w-full md:border-none border border-gray-100/10 font-medium md:text-[17px] text-sm py-2 md:py-3 " href="kegiatan.php">Kegiatan</a></li>
              </ul>
          </div>

          <div class="pb-8">
              <div class="flex flex-row items-center hover:bg-red-600 text-red-600 hover:text-black font-medium transition-all duration-300 rounded px-3 py-2 gap-3">
                <i class="bi bi-power text-lg"></i>
                <button onclick="openLogoutPopup()" class="flex w-full">Keluar</button>
              </div>
          </div>
        </nav>
    </div>

    <div class="flex-1 p-4 md:my-0 my-6 md:p-10 flex flex-col gap-6">

      <div class="w-full">
        <h2 class="text-xl md:text-4xl font-semibold  mb-8 text-left">Aduan Masyarakat</h2>

        <div class=" bg-white shadow-md border border-gray-300 px-3 py-2 rounded-lg">
          <h1 class="text-2xl font-medium">Data Aduan</h1>  

          <div class="flex flex-row items-center my-4 gap-3">
              <div class="relative w-full max-w-xs">
                <input 
                  type="text" 
                  placeholder="Cari sesuatu..." 
                  class="w-full pl-10 pr-4 py-2 border rounded-full shadow-sm outline-none border-gray-300"
                >
                <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                  <i class="bi bi-search text-gray-400"></i>
                </div>
              </div>

              <div class="max-w-[150px] w-full">
                <select id="kategori" name="kategori" required class="block w-full rounded-md border p-2 border-gray-300 shadow-sm outline-none">
                  <option value="">Status</option>
                    <option value=""></option>
                </select>
              </div>

              <div class="max-w-[150px] w-full">
                <select id="kategori" name="kategori" required class="block w-full rounded-md border p-2 border-gray-300 shadow-sm outline-none">
                  <option value="">Kategori</option>
                    <option value=""></option>
                </select>
              </div>
          </div>

          <table class="min-w-full divide-y divide-gray-200 text-sm">
            <thead class="bg-[#D9D9D9] text-black">
              <tr>
                <th class="px-4 py-3 text-left font-medium uppercase tracking-wider">No</th>
                <th class="px-4 py-3 text-left font-medium uppercase tracking-wider">Kategori</th>
                <th class="px-4 flex py-3 text-left font-medium uppercase tracking-wider md:w-auto w-[500px]">Deskripsi</th>
                <th class="px-4 py-3 text-left font-medium uppercase tracking-wider">Tanggal</th>
                <th class="px-4 py-3 text-left font-medium uppercase tracking-wider">Status</th>
                <th class="px-4 py-3 text-left font-medium uppercase tracking-wider">Aksi</th>
              </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200 ">
                <tr>
                <td class="px-4 py-4"></td>
                <td class="px-4 py-4"></td>
                <td class="px-4 py-4"> <td>
                <td class="px-4 py-4"></td>
                <td class="px-4 py-4">
                  <p class="text-sm inline-flex items-center justify-center text-white px-12 py-2 w-12 h-8 rounded bg-[#18C11B] hover:bg-[#50ae52] cursor-pointer"
                    onclick='openModal({
                        kategori: "<?=$nama_kategori;?>",
                        deskripsi: "<?=$deskripsi;?>",
                        status: "<?=$status;?>",
                        tanggapan: "-",
                    })'>Tanggapan</p>
                </td>
              </tr>
              
            </tbody>
          </table>
        </div>
      </div>
    </div>
</div>

<script src="script.js"></script>    
</body>
</html>