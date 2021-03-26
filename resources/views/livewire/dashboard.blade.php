<div>
    <div>    
            <main>
                <header class="page-header page-header-dark bg-danger pb-10">
                    <div class="container">
                        <div class="page-header-content pt-4">
                            <div class="row align-items-center justify-content-between">
                                <div class="col-auto mt-4">
                                    <h1 class="page-header-title">
                                        <div class="page-header-icon"><i class="fas fa-desktop"></i></div>
                                        Dashboard
                                    </h1>                                    
                                </div>
                                                        
                            </div>
                        </div>
                    </div>
                </header>
                <!-- Main page content-->
                <div class="container mt-n10">
                    <div class="row">
                        <div class="col-xxl-4 col-xl-12 mb-4">
                            <div class="card h-100">
                                <div class="card-body h-100 d-flex flex-column justify-content-center py-5 py-xl-4">
                                    <div class="row align-items-center">
                                        <div class="col-xl-8 col-xxl-12">
                                            <div class="text-center px-4 mb-4 mb-xl-0 mb-xxl-4">
                                                <h1 class="text-danger">Welcome Back, {{ Auth::user()->name }}</h1>
                                                <p class="text-gray-700 mb-0">It&apos;s time to get started! View new
                                                    opportunities now, or continue on your previous work.</p>
                                            </div>
                                        </div>
                                        <div class="col-xl-4 col-xxl-12 text-center"><img class="img-fluid"
                                                src="{{'frontend/image/laptop-peep.png'}}" style="max-width: 10rem; -webkit-transform: scaleX(-1); transform: scaleX(-1);" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>                   
                    </div>
                   
                    <!-- Example Colored Cards for Dashboard Demo-->
                    <div class="row">
                        <div class="col-xxl-3 col-lg-6">
                            <div class="card text-danger mb-4">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="mr-3">                                            
                                            <div class="text-danger-100 small"><h3 class="text-danger">Slider</h3></div>                                                                                    
                                            <div class="text-lg font-weight-bold">{{$slider}}</div>                                        
                                        </div>
                                        <i class="feather-xl text-danger-50" data-feather="sliders"></i>
                                    </div>
                                </div>
                                <div class="card-footer d-flex align-items-center justify-content-between">
                                    <a class="small text-danger stretched-link" href="/slider">Selengkapnya</a>
                                    <div class="small text-danger"><i class="fas fa-angle-right"></i></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-3 col-lg-6">
                            <div class="card text-danger mb-4">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="mr-3">
                                            <div class="text-danger-75 small"><h3 class="text-danger">About</h3></div>
                                            <div class="text-lg font-weight-bold">{{$about}}</div>
                                        </div>
                                        <i class="feather-xl text-danger-50" data-feather="users"></i>
                                    </div>
                                </div>
                                <div class="card-footer d-flex align-items-center justify-content-between">
                                    <a class="small text-danger stretched-link" href="/about">Selengkapnya</a>
                                    <div class="small text-danger"><i class="fas fa-angle-right"></i></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-3 col-lg-6">
                            <div class="card text-danger mb-4">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="mr-3">
                                            <div class="text-danger-75 small"><h3 class="text-danger">Gallery</h3></div>
                                            <div class="text-lg font-weight-bold">{{$gallery}}</div>
                                        </div>
                                        <i class="feather-xl text-danger-50" data-feather="image"></i>
                                    </div>
                                </div>
                                <div class="card-footer d-flex align-items-center justify-content-between">
                                    <a class="small text-danger stretched-link" href="/gallery">Selengkapnnya</a>
                                    <div class="small text-danger"><i class="fas fa-angle-right"></i></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-3 col-lg-6">
                            <div class="card text-danger mb-4">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="mr-3">
                                            <div class="text-danger-75 small"><h3 class="text-danger">Service</h3></div>
                                            <div class="text-lg font-weight-bold">{{$service}}</div>
                                        </div>
                                        <i class="feather-xl text-danger-50" data-feather="settings"></i>
                                    </div>
                                </div>
                                <div class="card-footer d-flex align-items-center justify-content-between">
                                    <a class="small text-danger stretched-link" href="/service">Selengkapnya</a>
                                    <div class="small text-danger"><i class="fas fa-angle-right"></i></div>
                                </div>
                            </div>
                        </div>                    
                        <div class="col-xxl-3 col-lg-6">
                            <div class="card text-danger mb-4">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="mr-3">
                                            <div class="text-danger-75 small"><h3 class="text-danger">Consultation</h3></div>
                                            <div class="text-lg font-weight-bold">{{$consult}}</div>
                                        </div>
                                        <i class="feather-xl text-danger-50" data-feather="phone"></i>
                                    </div>
                                </div>
                                <div class="card-footer d-flex align-items-center justify-content-between">
                                    <a class="small text-danger stretched-link" href="/consultation">Selengkapnya</a>
                                    <div class="small text-danger"><i class="fas fa-angle-right"></i></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-3 col-lg-6">
                            <div class="card text-danger mb-4">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="mr-3">
                                            <div class="text-danger-75 small"><h3 class="text-danger">Setting</h3></div>
                                            <div class="text-lg font-weight-bold">{{$setting}}</div>
                                        </div>
                                        <i class="feather-xl text-danger-50" data-feather="users"></i>
                                    </div>
                                </div>
                                <div class="card-footer d-flex align-items-center justify-content-between">
                                    <a class="small text-danger stretched-link" href="/setting">Selengkapnya</a>
                                    <div class="small text-danger"><i class="fas fa-angle-right"></i></div>
                                </div>
                            </div>
                        </div>
                    </div>                    
            </main>
</div>
</div>
