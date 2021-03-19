<div>
    <div>    
            <main>
                <header class="page-header page-header-dark bg-gradient-primary-to-secondary pb-10">
                    <div class="container">
                        <div class="page-header-content pt-4">
                            <div class="row align-items-center justify-content-between">
                                <div class="col-auto mt-4">
                                    <h1 class="page-header-title">
                                        <div class="page-header-icon"><i data-feather="monitor"></i></div>
                                        Dashboard
                                    </h1>                                    
                                </div>                                
                            </div>
                        </div>
                    </div>
                </header>
                <!-- Main page content-->
                <div class="container mt-n10">
                    <!-- <div class="row">
                        <div class="col-xxl-4 col-xl-12 mb-4">
                            <div class="card h-100">
                                <div class="card-body h-100 d-flex flex-column justify-content-center py-5 py-xl-4">
                                    <div class="row align-items-center">
                                        <div class="col-xl-8 col-xxl-12">
                                            <div class="text-center px-4 mb-4 mb-xl-0 mb-xxl-4">
                                                <h1 class="text-primary">Selamat Datang {{ Auth::user()->name }}</h1>
                                                <p class="text-gray-700 mb-0">It&apos;s time to get started! View new
                                                    opportunities now, or continue on your previous work.</p>
                                            </div>
                                        </div>
                                        <div class="col-xl-4 col-xxl-12 text-center"><img class="img-fluid"
                                            src="{{asset('backend/assets/img/freepik/at-work-pana.svg')}}" style="max-width: 26rem;" >
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>                                            
                    </div> -->
                    <div class="card card-waves mb-4">
                        <div class="card-body p-5">
                            <div class="row align-items-center justify-content-between">
                                <div class="col">
                                <h2 class="text-primary">Welcome, {{ Auth::user()->name }}</h2>
                                    <p class="text-gray-700">Great job, your affiliate dashboard is ready to go! You can
                                        view sales, generate links, prepare coupons, and download affiliate reports
                                        using this dashboard.</p>
                                    <a class="btn btn-primary btn-sm px-3 py-2" href="#!">
                                        Get Started
                                        <i class="ml-1" data-feather="arrow-right"></i>
                                    </a>
                                </div>
                                <div class="col d-none d-lg-block mt-xxl-n4"><img class="img-fluid px-xl-4 mt-xxl-n5"
                                        src="{{asset('backend/assets/img/freepik/statistics-pana.svg')}}" /></div>
                            </div>
                        </div>
                    </div><br>
                    <!-- Example Colored Cards for Dashboard Demo-->
                    <div class="row">
                        <div class="col-xxl-3 col-lg-6">
                            <div class="card bg-primary text-white mb-4">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="mr-3">                                            
                                            <div class="text-white-100 small"><h3 class="text-white">Slider</h3></div>                                                                                    
                                            <div class="text-lg font-weight-bold">{{$slider}}</div>                                        
                                        </div>
                                        <i class="feather-xl text-white-50" data-feather="sliders"></i>
                                    </div>
                                </div>
                                <div class="card-footer d-flex align-items-center justify-content-between">
                                    <a class="small text-white stretched-link" href="/slider">Selengkapnya</a>
                                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-3 col-lg-6">
                            <div class="card bg-warning text-white mb-4">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="mr-3">
                                            <div class="text-white-75 small"><h3 class="text-white">About</h3></div>
                                            <div class="text-lg font-weight-bold">{{$about}}</div>
                                        </div>
                                        <i class="feather-xl text-white-50" data-feather="users"></i>
                                    </div>
                                </div>
                                <div class="card-footer d-flex align-items-center justify-content-between">
                                    <a class="small text-white stretched-link" href="/about">Selengkapnya</a>
                                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-3 col-lg-6">
                            <div class="card bg-success text-white mb-4">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="mr-3">
                                            <div class="text-white-75 small"><h3 class="text-white">Gallery</h3></div>
                                            <div class="text-lg font-weight-bold">{{$gallery}}</div>
                                        </div>
                                        <i class="feather-xl text-white-50" data-feather="image"></i>
                                    </div>
                                </div>
                                <div class="card-footer d-flex align-items-center justify-content-between">
                                    <a class="small text-white stretched-link" href="/gallery">Selengkapnnya</a>
                                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-3 col-lg-6">
                            <div class="card bg-danger text-white mb-4">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="mr-3">
                                            <div class="text-white-75 small"><h3 class="text-white">Service</h3></div>
                                            <div class="text-lg font-weight-bold">{{$service}}</div>
                                        </div>
                                        <i class="feather-xl text-white-50" data-feather="settings"></i>
                                    </div>
                                </div>
                                <div class="card-footer d-flex align-items-center justify-content-between">
                                    <a class="small text-white stretched-link" href="/service">Selengkapnya</a>
                                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                </div>
                            </div>
                        </div>                    
                        <div class="col-xxl-3 col-lg-6">
                            <div class="card bg-secondary text-white mb-4">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="mr-3">
                                            <div class="text-white-75 small"><h3 class="text-white">Consultation</h3></div>
                                            <div class="text-lg font-weight-bold">{{$consult}}</div>
                                        </div>
                                        <i class="feather-xl text-white-50" data-feather="phone"></i>
                                    </div>
                                </div>
                                <div class="card-footer d-flex align-items-center justify-content-between">
                                    <a class="small text-white stretched-link" href="/consultation">Selengkapnya</a>
                                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-3 col-lg-6">
                            <div class="card bg-dark text-white mb-4">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="mr-3">
                                            <div class="text-white-75 small"><h3 class="text-white">Setting</h3></div>
                                            <div class="text-lg font-weight-bold">{{$setting}}</div>
                                        </div>
                                        <i class="feather-xl text-white-50" data-feather="users"></i>
                                    </div>
                                </div>
                                <div class="card-footer d-flex align-items-center justify-content-between">
                                    <a class="small text-white stretched-link" href="/setting">Selengkapnya</a>
                                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                </div>
                            </div>
                        </div>
                    </div>                    
            </main>
</div>
</div>
