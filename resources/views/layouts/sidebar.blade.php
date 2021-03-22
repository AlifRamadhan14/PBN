<div id="layoutSidenav_nav">
    <nav class="sidenav shadow-right sidenav-light">
        <div class="sidenav-menu">
            <div class="nav accordion" id="accordionSidenav">
                <div class="sidenav-menu-heading">Admin Panel</div>
                <a class="nav-link" href="/home">
                    <div class="nav-link-icon"><i class="fas fa-desktop fa-lg"></i></div>
                    Dashboard
                </a>
                <div class="sidenav-menu-heading">Manage Content</div>
                <a class="nav-link" href="/slider">
                    <div class="nav-link-icon"><i class="fas fa-sliders-h fa-lg"></i></div>
                    Slider
                </a>
                <a class="nav-link" href="/service">
                    <div class="nav-link-icon"><i class="fas fa-user-cog fa-lg"></i></div>
                    Service
                </a>
                 <a class="nav-link" href="/gallery">
                    <div class="nav-link-icon"><i class="far fa-image fa-lg"></i></div>
                    Gallery
                </a>
                <a class="nav-link" href="/about">
                    <div class="nav-link-icon"><i class="fas fa-users fa-lg"></i></div>
                    About
                </a>
                <a class="nav-link" href="/consultation">
                    <div class="nav-link-icon"><i class="fas fa-phone-alt fa-lg"></i></div>
                    Consultation
                </a>
                <a class="nav-link" href="/setting">
                    <div class="nav-link-icon"><i class="fas fa-wrench fa-lg"></i></div>
                    Setting
                </a>
            </div>
        </div>
        <div class="sidenav-footer">
            <div class="sidenav-footer-content">
                <div class="sidenav-footer-subtitle">Logged in as:</div>
                <div class="sidenav-footer-title">{{ Auth::user()->name }}</div>
            </div>
        </div>
    </nav>
</div>
