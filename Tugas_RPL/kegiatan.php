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
    <title>Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
</head>
<body>

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
                <li class="flex flex-row items-center gap-3 px-3 transition-all duration-200 rounded hover:bg-gray-200 hover:text-slate-800"><i class="bi bi-chat-dots-fill text-lg"></i><a class="flex w-full md:border-none border border-gray-100/10 font-medium md:text-[17px] text-sm py-2 md:py-3" href="kelola_aduan.php">Kelola Aduan</a></li>
                <li class="flex flex-row items-center gap-3 px-3 transition-all duration-200 rounded bg-gray-200 text-slate-800"><i class="bi bi-calendar-event-fill text-lg"></i><a class="flex w-full md:border-none border border-gray-100/10 font-medium md:text-[17px] text-sm py-2 md:py-3" href="kegiatan.php">Kegiatan</a></li>
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
        <h2 class="text-xl md:text-4xl font-semibold  mb-8 text-left">Agenda Kegiatan</h2>

        <div class=" bg-white shadow-md border border-gray-300 px-3 py-2 rounded-lg">
          <h1 class="text-2xl mb-4 font-medium">Daftar Agenda</h1>  

          <table class="min-w-full divide-y divide-gray-200 text-sm">
            <thead class="bg-[#D9D9D9] text-black">
              <tr>
                <th class="px-4 py-3 text-left font-medium uppercase tracking-wider">No</th>
                <th class="px-4 py-3 text-left font-medium uppercase tracking-wider">Nama Agenda</th>
                <th class="px-4 flex py-3 text-left font-medium uppercase tracking-wider md:w-auto w-[500px]">Tempat</th>
                <th class="px-4 py-3 text-left font-medium uppercase tracking-wider">Tanggal</th>
                <th class="px-4 py-3 text-left font-medium uppercase tracking-wider">Waktu</th>
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
                    >Edit</p>
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