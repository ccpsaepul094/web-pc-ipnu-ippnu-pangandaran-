// public/js/admin.js
document.addEventListener('DOMContentLoaded', () => {
    // toggle dropdown user
    const userBtn = document.querySelector('[data-dropdown-toggle="dropdown-user"]');
    const dropdownUser = document.getElementById('dropdown-user');

    if (userBtn && dropdownUser) {
        userBtn.addEventListener('click', () => {
            dropdownUser.classList.toggle('hidden'); // munculkan/sembunyikan dropdown
        });
    }

    // toggle sidebar (contoh sederhana)
    const sidebarBtn = document.querySelector('[data-drawer-toggle="logo-sidebar"]');
    const sidebar = document.getElementById('logo-sidebar');
    if (sidebarBtn && sidebar) {
        sidebarBtn.addEventListener('click', () => {
            sidebar.classList.toggle('-translate-x-full'); // tambahin animasi kalau mau
        });
    }
});
