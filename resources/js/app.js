// Menunggu semua elemen HTML (Blade) siap dulu
document.addEventListener('DOMContentLoaded', () => {

    // --- 1. FUNGSI JAM DIGITAL ---
    const clockElement = document.getElementById('clock');

    function updateClock() {
        // Ambil waktu sekarang
        const now = new Date();
        // Format waktu jadi HH:MM (Jam:Menit)
        const timeString = now.toLocaleTimeString('id-ID', {
            hour: '2-digit',
            minute: '2-digit'
        });
        // Tampilkan ke elemen HTML
        clockElement.textContent = timeString;
    }
    // Panggil fungsi updateClock setiap 1 detik
    setInterval(updateClock, 1000);
    // Panggil sekali saat halaman dimuat
    updateClock(); 


    // --- 2. FUNGSI BUKA/TUTUP JENDELA ---

    // Ambil elemen-elemen yang kita butuhkan dari HTML
    const aboutWindow = document.getElementById('about-window');
    const openAboutButton = document.getElementById('open-about');
    const closeAboutButton = document.getElementById('close-about');

    const projectsWindow = document.getElementById('projects-window');
const openProjectsButton = document.getElementById('open-projects');
const closeProjectsButton = document.getElementById('close-projects');

const maximizeAboutButton = document.getElementById('maximize-about');
const maximizeProjectsButton = document.getElementById('maximize-projects');

    // Fungsi untuk MEMBUKA jendela
    function openWindow(windowElement) {
        // Kita tambahkan class 'visible' (yang sudah kita styling di CSS)
        windowElement.classList.add('visible');
    }

    // Fungsi untuk MENUTUP jendela
    function closeWindow(windowElement) {
        // Kita hapus class 'visible'
        windowElement.classList.remove('visible');
    }

    // Pasang "pendengar" di icon Dock
    openAboutButton.addEventListener('click', () => {
        openWindow(aboutWindow); // Jika diklik, panggil fungsi openWindow
    });

    // Pasang "pendengar" di tombol merah
    closeAboutButton.addEventListener('click', () => {
        closeWindow(aboutWindow); // Jika diklik, panggil fungsi closeWindow
    });

    openProjectsButton.addEventListener('click', () => {
    openWindow(projectsWindow);
});

closeProjectsButton.addEventListener('click', () => {
    closeWindow(projectsWindow);
});

maximizeAboutButton.addEventListener('click', () => {
    aboutWindow.classList.toggle('maximized');
});

maximizeProjectsButton.addEventListener('click', () => {
    projectsWindow.classList.toggle('maximized');
});


    // --- 3. FUNGSI DRAG (GESER) JENDELA ---
    
    // Ini fungsi utamanya
    function makeWindowDraggable(windowEl, headerEl) {
        let isDragging = false; // Status: apakah sedang di-drag?
        let offsetX = 0; // Jarak mouse X dari ujung kiri jendela
        let offsetY = 0; // Jarak mouse Y dari ujung atas jendela

        // Saat mouse DITEKAN di header
        headerEl.addEventListener('mousedown', (e) => {
            if (windowEl.classList.contains('maximized')) return;
            isDragging = true;
            
            // Catat posisi awal mouse
            offsetX = e.clientX - windowEl.offsetLeft;
            offsetY = e.clientY - windowEl.offsetTop;
            
            // Ganti kursor jadi "menggenggam"
            headerEl.style.cursor = 'grabbing';
            // Pastikan jendela yang di-drag selalu di atas
            windowEl.style.zIndex = 51; 
        });

        // Saat mouse BERGERAK (di mana saja di layar)
        document.addEventListener('mousemove', (e) => {
            // Hentikan jika kita tidak sedang 'mousedown'
            if (!isDragging) return; 

            // Hitung posisi baru jendela
            let newX = e.clientX - offsetX;
            let newY = e.clientY - offsetY;

            // Pindahkan jendela ke posisi baru
            windowEl.style.left = newX + 'px';
            windowEl.style.top = newY + 'px';
        });

        // Saat mouse DILEPAS (di mana saja)
        document.addEventListener('mouseup', () => {
            isDragging = false;
            // Kembalikan kursor jadi "terbuka"
            headerEl.style.cursor = 'grab';
            // Kembalikan z-index
            windowEl.style.zIndex = 50; 
        });
    }

    // --- 4. MENERAPKAN FUNGSI DRAG ---
    
    // Ambil elemen header dari jendela 'About Me'
    const aboutHeader = aboutWindow.querySelector('.window-header');
    
    // Terapkan fungsi drag ke jendela 'About Me'
    makeWindowDraggable(aboutWindow, aboutHeader);

    const projectsHeader = projectsWindow.querySelector('.window-header');
makeWindowDraggable(projectsWindow, projectsHeader);

});