// Toggle Navbar
function toggleSidebar() {
  const sidebar = document.getElementById("mobileSidebar");
  sidebar.classList.toggle("-translate-x-full");
}

function showLoginPopup(event) {
    event.preventDefault();
    document.getElementById("loginPopup").classList.remove("hidden");
}

function closeLoginPopup() {
    document.getElementById("loginPopup").classList.add("hidden");
}

function openLogoutPopup() {
    document.getElementById('logoutPopup').classList.remove('hidden');
  }

  function closeLogoutPopup() {
    document.getElementById('logoutPopup').classList.add('hidden');
  }

function openModal(data) {
document.getElementById('modalKategori').textContent = data.kategori;
document.getElementById('modalDeskripsi').textContent = data.deskripsi;
document.getElementById('modalStatus').textContent = data.status;
document.getElementById('modalTanggapan').textContent = data.tanggapan;

document.getElementById('detailModal').classList.remove('hidden');
}

function closeModal() {
document.getElementById('detailModal').classList.add('hidden');
}