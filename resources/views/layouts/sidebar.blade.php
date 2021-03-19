<div id="layoutSidenav_nav">
    <nav class="sidenav shadow-right sidenav-light">
        <div class="sidenav-menu">
            <div class="nav accordion" id="accordionSidenav">
                <div class="sidenav-menu-heading">Admin Panel</div>
                <a class="nav-link" href="/home">
                    <div class="nav-link-icon"><i data-feather="monitor"></i></div>
                    Dashboard
                </a>
                <div class="sidenav-menu-heading">Manage Content</div>
                <a class="nav-link" href="/slider">
                    <div class="nav-link-icon"><i data-feather="sliders"></i></div>
                    Slider
                </a>
                <a class="nav-link" href="/service">
                    <div class="nav-link-icon"><i data-feather="settings"></i></div>
                    Service
                </a>
                 <a class="nav-link" href="/gallery">
                    <div class="nav-link-icon"><i data-feather="image"></i></div>
                    Gallery
                </a>
                <a class="nav-link" href="/about">
                    <div class="nav-link-icon"><i data-feather="users"></i></div>
                    About
                </a>
                <a class="nav-link" href="/consultation">
                    <div class="nav-link-icon"><i data-feather="phone"></i></div>
                    Consultation
                </a>
                <a class="nav-link" href="/setting">
                    <div class="nav-link-icon"><i data-feather="tool"></i></div>
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
