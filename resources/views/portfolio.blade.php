<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ngabdul Muhyi</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;700&display=swap" rel="stylesheet">

    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>
<body>

    <main id="desktop">

        <header class="menu-bar">
            <div class="menu-left">
                <span class="apple-logo"></span> 
                <strong>Portofolio</strong>
                <span>File</span>
                <span>Edit</span>
                <span>View</span>
                <span>Help</span>
            </div>
            <div class="menu-right">
                <span id="clock">10:00 AM</span>
            </div>
        </header>

        <div class="window" id="about-window">
            <div class="window-header">
                <div class="traffic-lights">
                    <button class="traffic-light red" id="close-about"></button>
                    <button class="traffic-light yellow"></button>
                    <button class="traffic-light green" id="maximize-about"></button>
                </div>
                <span class="window-title">About Me</span>
            </div>
            <div class="window-content">
                <h2>Halo, Saya [Nama Kamu]!</h2>
                <p>Selamat datang di portofolio saya. Saya seorang...</p>
                <p>...(Isi deskripsi dirimu di sini)...</p>
            </div>
        </div>

        <div class="window" id="projects-window">
    <div class="window-header">
        <div class="traffic-lights">
            <button class="traffic-light red" id="close-projects"></button>
            <button class="traffic-light yellow"></button>
            <button class="traffic-light green" id="maximize-projects"></button>
        </div>
        <span class="window-title">My Projects</span>
    </div>
    <div class="window-content">
        <h2>Proyek-Proyek Saya</h2>
        <p>Ini adalah daftar proyek yang sedang dan sudah saya kerjakan.</p>
        
        <ul class="project-list">
    @foreach ($projects as $project)
        <li>
            <strong>
                {{ $project->title }} ({{ $project->year }})
            </strong>
            <p>
                {{ $project->description }}
            </p>
        </li>
    @endforeach
</ul>
    </div>
</div>

        <footer class="dock">
            <div class="dock-icon" id="open-about">
                <span>👨‍💻</span>
                <span class="tooltip">About Me</span>
            </div>

            <div class="dock-icon" id="open-projects"> 
    <span>📁</span>
    <span class="tooltip">Projects</span>
</div>

            </footer>

    </main>

</body>
</html>