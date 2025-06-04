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
                <li class="flex flex-row items-center gap-3 px-3 transition-all duration-200 rounded bg-gray-200 text-slate-800"><i class="bi bi-house-door-fill text-lg"></i><a class="flex w-full md:border-none border border-gray-100/10 font-medium md:text-[17px] text-sm py-2 md:py-3 " href="dashboard.php">Dashboard</a></li>
                <li class="flex flex-row items-center gap-3 px-3 transition-all duration-200 rounded hover:bg-gray-200 hover:text-slate-800"><i class="bi bi-chat-dots-fill text-lg"></i><a class="flex w-full md:border-none border border-gray-100/10 font-medium md:text-[17px] text-sm py-2 md:py-3" href="kelola_aduan.php">Kelola Aduan</a></li>
                <li class="flex flex-row items-center gap-3 px-3 transition-all duration-200 rounded hover:bg-gray-200 hover:text-slate-800"><i class="bi bi-calendar-event-fill text-lg"></i><a class="flex w-full md:border-none border border-gray-100/10 font-medium md:text-[17px] text-sm py-2 md:py-3" href="kegiatan.php">Kegiatan</a></li>
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

    <div class=" p-4 md:my-0 my-6 md:p-10 flex flex-col w-full gap-6">

        <div class="w-full">
            <h2 class="text-xl md:text-4xl font-semibold  mb-8 text-left">Dashboard</h2>

            <div class="flex gap-3 justify-center">
                <div class="flex-1 rounded-lg w-72 text-center overflow-hidden shadow border py-3 border-gray-300 bg-white">
                    <h1 class="text-3xl font-medium">3</h1>
                    <p class="font-medium text-lg">Total Aduan</p>
                </div>
                <div class="flex-1 rounded-lg w-72 text-center overflow-hidden shadow border py-3 border-gray-300 bg-white">
                    <h1 class="text-3xl font-medium">3</h1>
                    <p class="font-medium text-lg">Diproses</p>
                </div>
                <div class="flex-1 rounded-lg w-72 text-center overflow-hidden shadow border py-3 border-gray-300 bg-white">
                    <h1 class="text-3xl font-medium">3</h1>
                    <p class="font-medium text-lg">Ditanggapi</p>
                </div>
                <div class="flex-1 rounded-lg w-72 text-center overflow-hidden shadow border py-3 border-gray-300 bg-white">
                    <h1 class="text-3xl font-medium">3</h1>
                    <p class="font-medium text-lg">Ditolak</p>
                </div>
            </div>
        </div>

        <div class="border border-gray-300 rounded-lg shadow py-2 px-4">
            <h1 class="text-lg font-medium mb-5">Aktivitas Terbaru</h1>

            <div class="flex flex-col gap-4">
                <div class="flex flex-col">
                    <div class="flex flex-row items-center gap-2">
                        <i class="bi bi-person-arms-up"></i>
                        <p>User_warga1 mengirim aduan 'Lampu jalan di RT 03 mati sejak seminggu lalu, mohon segera diperbaiki.'</p>
                    </div>
                    
                    <div class="flex flex-row items-center text-[10px] text-gray-500 gap-2">
                        <i class="bi bi-clock-history"></i>
                        <p>10 menit yang lalu</p>
                    </div>
                </div>
                <div class="flex flex-col">
                    <div class="flex flex-row items-center gap-2">
                        <i class="bi bi-person-arms-up"></i>
                        <p>User_warga1 mengirim aduan 'Lampu jalan di RT 03 mati sejak seminggu lalu, mohon segera diperbaiki.'</p>
                    </div>
                    
                    <div class="flex flex-row items-center text-[10px] text-gray-500 gap-2">
                        <i class="bi bi-clock-history"></i>
                        <p>10 menit yang lalu</p>
                    </div>
                </div>
                <div class="flex flex-col">
                    <div class="flex flex-row items-center gap-2">
                        <i class="bi bi-person-arms-up"></i>
                        <p>User_warga1 mengirim aduan 'Lampu jalan di RT 03 mati sejak seminggu lalu, mohon segera diperbaiki.'</p>
                    </div>
                    
                    <div class="flex flex-row items-center text-[10px] text-gray-500 gap-2">
                        <i class="bi bi-clock-history"></i>
                        <p>10 menit yang lalu</p>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</div>

    
<script src="script.js"></script>
</body>
</html>