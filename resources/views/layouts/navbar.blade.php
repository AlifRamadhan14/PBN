    <nav class="topnav navbar navbar-expand shadow navbar-danger bg-white" id="sidenavAccordion">
        <h5 class="navbar-brand text-danger">Admin Page</h5>
        <button class="btn btn-icon btn-transparent-dark order-1 order-lg-0 mr-lg-2" id="sidebarToggle" href="#"><i class="fas fa-bars fa-lg"></i></button>
        <!-- <form class="form-inline mr-auto d-none d-md-block">
            <div class="input-group input-group-joined input-group-solid">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" />
                <div class="input-group-append">
                    <div class="input-group-text"><i data-feather="search"></i></div>
                </div>
            </div>
        </form> -->
        <ul class="navbar-nav align-items-center ml-auto">
            
            <li class="nav-item dropdown no-caret mr-2 dropdown-user">
                <a class="btn btn-icon btn-transparent-dark dropdown-toggle" id="navbarDropdownUserImage"
                    href="javascript:void(0);" role="button" data-toggle="dropdown" aria-haspopup="true"
                    aria-expanded="false"><i class="fas fa-user-circle fa-2x"></i></a>
                <div class="dropdown-menu dropdown-menu-right border-0 shadow animated--fade-in-up"
                    aria-labelledby="navbarDropdownUserImage">
                    <h6 class="dropdown-header d-flex align-items-center">                                    
                        <div class="dropdown-user-details">
                            <div class="dropdown-user-details-name">{{ Auth::user()->name }}</div>
                            <div class="dropdown-user-details-email">{{ Auth::user()->email }}</div>
                        </div>
                    </h6>
                    <div class="dropdown-divider"></div>                    
                    <a class="dropdown-item dropdown-item-right" aria-labelledby="navbarDropdown">

                        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                            <div class="dropdown-item-icon"><i data-feather="log-out"></i></div>
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </a>
                </div>
            </li>
        </ul>
    </nav>
