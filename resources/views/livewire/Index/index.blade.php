<div>
  <header id="header" class="header fixed-top">
      <div class="container-fluid header-container container-xl d-flex align-items-center justify-content-between">

      @foreach($setting as $item)
        <a href="index.html" class="logo d-flex align-items-center">
          <img src="{{asset('storage/image/'.$item->logo)}}" alt="" class="">
        </a>
      @endforeach
      
        <nav id="navbar" class="navbar">
          <ul class="justify-content-center">
            <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
            <li><a class="nav-link scrollto" href="#service">Service</a></li>
            <li><a class="nav-link scrollto" href="#gallery">Gallery</a></li>
            <li>
              <a class="nav-link scrollto" data-bs-toggle="modal" data-bs-target="#exampleModal">konsultasi</a>
            </li>            
            <li><a class="nav-link scrollto" href="#about">About</a></li>
          </ul>
          <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->
      </div>
    </header><!-- End Header -->

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" wire:ignore.self>
      <div class="modal-dialog modal-xl">
        <div class="modal-content">
          <div class="modal-body">
              <div class="row">
                <div class="col-md bg-consult-red" style="background-color: red;">                  
                  <div class="col-12">
                    <h2> <b>PBN</b> </h2>
                  </div>
                  <div class="col-12">
                    <h3 style="color: white;">mulai konsultasimu <br> hari ini bersama <br> kami </h3>
                  </div>
                  <div class="row text-center">
                    <div class="col-12"></div>
                    <img src="{{asset('frontend/image/team-mask.png')}}" class="img-fluid">
                  </div>
                </div>                                
                <div class="col-md" style="padding: 30px;">
                    <div class="row close"> 
                      <div class="col text-end">
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>    
                    </div>
                    <div class="col-sm">
                      <h3>
                        <b>Isi dengan lengkap</b>
                      </h3>
                    </div>
                    <br>
                    <form wire:submit.prevent="store">
                      <div class="row">
                        <div class="col-sm-5">
                          <div class="form-group">
                            <label for="name">Nama lengkap</label>
                            <input type="text" wire:model="name" class="form-control" id="name">
                            @error('name') <span class="text-danger">{{ $message }}</span>@enderror
                          </div>
                        </div>
                        <div class="col-sm-5 tlpn">
                          <div class="form-group">
                            <label for="phone">No telepon</label>
                            <input type="number" wire:model="phone" class="form-control" id="phone" min="0" step="1" pattern="[0-9]{10}">
                            @error('phone') <span class="text-danger">{{ $message }}</span>@enderror
                          </div>
                        </div>
                      </div><br>
                      <div class="form-group col-sm-5">
                        <label for="topic">Topik konsultasi</label>
                        <input type="text" wire:model="topic" class="form-control" id="topic">
                        @error('topic') <span class="text-danger">{{ $message }}</span>@enderror
                      </div><br>
                      <div class="form-group col-sm-10">
                        <label for="description">Deskripsi</label>
                        <textarea type="text" wire:model="description" class="form-control" id="description"></textarea>
                        @error('description') <span class="text-danger">{{ $message }}</span>@enderror                
                      </div><br>
                      <div class="form-group col-sm-5">
                        <label class="form-label" for="customFile">Foto pendukung</label>
                        <input type="file" wire:model="image" class="form-control" id="customFile" />              
                        @error('image') <span class="text-danger">{{ $message }}</span>@enderror
                      </div>
                      <br>
                      <button type="submit" class="btn btn-danger" wire:click="store()">Kirim</button>
                    </form>
                  </div>
                </div>
              </div>
          </div>
        </div>
      </div>
    </div>

    
    

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="hero d-flex align-items-center">
      @foreach( $slide as $item )
        <div class="container">
          <div class="row">
            <div class="col-lg-6 d-flex flex-column justify-content-center">
              <h2 data-aos="fade-up">{{$item->title}}</h2><br>
              <p data-aos="fade-up" data-aos-delay="400" class="col-10 ">{{$item->description}}</p>
              <div data-aos="fade-up" data-aos-delay="600"><br>
                <div class="text-center text-lg-start">
                  <a href="#about"
                    class="btn-get-started scrollto d-inline-flex align-items-center justify-content-center align-self-center">
                    <span data-bs-toggle="modal" data-bs-target=".bd-example-modal-lg">Yuk Konsultasi </span>
                    <i class="bi bi-arrow-right"></i>
                  </a>
                </div>
              </div>
            </div>
            <div class="col-lg-6 hero-img text-end" data-aos="zoom-out" data-aos-delay="200">
              <img src="{{asset('storage/image/'.$item->image)}}" class="img-fluid">
            </div>
          </div>
        </div>
      @endforeach
    </section><!-- End Hero -->

    <section class="service d-flex align-items-center ml-30" id="service">
      <div class="container">
        <div class="row">
          <div class="col-md">
            <div class="standing-img">
              <img src="{{'frontend/image/standing.png'}}" alt="" class="bg-standing" width="300">
            </div>
          </div>
          <div class="col-md justify-content-center">
            <div class="row title-service-kami">
            <div>
                <h1 class="title-service">Service</h1> 
                <h1 class="title-s-kami">Kami</h1>
              </div>              
            </div><br>
            <div class="row service-item">
            @foreach($service as $item)
              <div class="col-6 text-center">
                <img src="{{asset('storage/image/'.$item->image)}}" alt=""><br><br>
                <h4 class="fw-bold">{{$item->title}}</h4>
                <div class="col-12 ">
                  <p>{{$item->description}}</p>
                </div>              
              </div>
              @endforeach
            </div>
          </div>                           
        </div>
      </div>
    </section>

    <section class="gallery d-flex align-items-center " id="gallery">
      <div class="container">
        <div class="col ">
          <div class="row ">
            <div class="col-12 title-galeri justify-content-center text-center">
              <div class="row">  
                <div class="col">
                  <H2 class="title-galeri-1 ">Galeri</H2>
                </div>
                <div class="col">
                  <h2 class="title-galeri-2 ">PBN</h2>  
                </div>                                           
              </div>
              <div class="row desc-title">
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dolorum</p>
              </div>
              <section id="portfolio" class="portfolio">

                <div class="container" data-aos="fade-up">

                  <div class="row gy-4 portfolio-container" data-aos="fade-up" data-aos-delay="200">
                  @foreach($gallery as $item)
                    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                      <div class="portfolio-wrap">
                        <img src="{{asset('storage/image/'.$item->image)}}" class="img-fluid" alt="">
                        <div class="portfolio-info">
                          <h3>{{$item->title}}</h3>
                        </div>
                      </div>
                    </div>
                  @endforeach
                  </div>
                </div>
              </section>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="tentang" id="about">
      <div class="container">
        <div class="row">
          <div class="col-md">
            <div class="tentang-kami">
              <h1 class="title-tentang">Tentang</h1>
              <h1 class="title-kami">Kami</h1>
            </div><br>
          </div>
          <div class="col-md tt">
            <div class="tentang-text">
              <p data-aos="fade-up" data-aos-delay="400" class="col-12">Lorem ipsum dolor sit amet consectetur,
                adipisicing
                elit. Voluptas alias in accusamus ipsam! Deleniti quam soluta praesentium, quas excepturi vitae facere
                eligendi rem explicabo optio ad quis animi</p>
              <p data-aos="fade-up" data-aos-delay="400" class="col-12">Lorem ipsum dolor sit amet consectetur,
                adipisicing
                elit. Voluptas alias in accusamus ipsam! Deleniti quam soluta praesentium, quas excepturi vitae facere
                eligendi rem explicabo optio ad quis animi</p>
            </div>
            <div data-aos="fade-up" data-aos-delay="600">
              <div class="text-center text-lg-start ">
                <a
                  class="btn-get-started scrollto d-inline-flex align-items-center justify-content-center align-self-center baca">
                  <span>Selanjutnya</span>
                  <i class="bi bi-arrow-right"></i>
                </a>
              </div>
            </div>
          </div>
          <div class="col text-end laptop-img">
            <img src="{{'frontend/image/laptop-peep.png'}}" alt="" width="280">
          </div>
        </div><br><br><br>
        <div class="">
          <div class="about-item text-center"><br><br>
            <div class="row">
              @foreach($about as $item)
              <div class="col-sm-4">
                <img src="{{asset('storage/image/'.$item->image)}}" alt=""><br><br>
                <h3> 
                  {{$item->title}}
                </h3>
                <div class="col-12">
                <p>
                {{$item->description}}
                </p>
                </div>
                <br>
              </div>
              @endforeach
            </div><br>
          </div>
        </div>
      </div>
    </section>

    <section class="siap">
      <div class="container">
        <div class="row">
          <div class="col-md-6 siap-img">
            <img src="{{'frontend/image/Group 8.svg'}}" alt="" width="500">
          </div>
          <div class="col-md-6">
            <div>
              <h1 class="title-tertarik">Tertarik ?</h1>
              <h1 class="title-kami-siap-bantu">Kami siap bantu!</h1><br>
              <p data-aos="fade-up" data-aos-delay="400" class="col-12">Lorem ipsum dolor sit amet consectetur,
                adipisicing elit. Voluptas alias in accusamus ipsam! Deleniti quam soluta praesentium, quas excepturi
                vitae facere eligendi rem explicabo optio ad quis animi</p>
              <div data-aos="fade-up" data-aos-delay="600">
                <div class="text-center text-lg-start">
                  <a
                    class="btn-get-started scrollto d-inline-flex align-items-center justify-content-center align-self-center">
                    <span>Baca Selanjutnya</span>
                    <i class="bi bi-arrow-right"></i>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
      <path fill="#ed1c24" fill-opacity="0.2"
        d="M0,128L48,149.3C96,171,192,213,288,224C384,235,480,213,576,181.3C672,149,768,107,864,106.7C960,107,1056,149,1152,181.3C1248,213,1344,235,1392,245.3L1440,256L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z">
      </path>
    </svg>
    <section class="footer-top">
      <div class="container">
        <div class="row">
          <div class="col-lg-3 text-start footer-info">
            <h2>
              PBN
            </h2>
            <div class="col-12">
            <p>Cras fermentum odio eu feugiat lide par naso tierra. Justo eget nada terra videa</p>
            </div>
            <div class="social-links mt-3">
            @foreach($setting as $item)
              <a href="{{$item->twitter}}" class="twitter"><i class="bi bi-twitter"></i></a>
              <a href="{{$item->facebook}}" class="facebook"><i class="bi bi-facebook"></i></a>
              <a href="{{$item->instagram}}" class="instagram"><i class="bi bi-instagram bx bxl-instagram"></i></a>
              <a href="{{$item->linkedln}}" class="linkedin"><i class="bi bi-linkedin bx bxl-linkedin"></i></a>
            @endforeach
            </div>
          </div><br><br>
            <div class="col-lg-1"></div>
            <div class="col-lg-2 footer-links">
              <h4 class="quick">Quick Links</h4>
              <div class="quick-link">
                <div><a href="#hero">Home</a></div>
                <div><a href="#service">Service kami</a></div>
                <div><a href="#gallery">Galeri</a></div>
                <div><a data-bs-toggle="modal" data-bs-target=".bd-example-modal-lg">Konsultasi</a></div>
              </div>
            </div><br><br>
            <div class="col-lg-2 footer-links">
              <h4 class="about">About Us</h4>
              <div class="about-link">
                <div><a href="#about">Detail Perusahaan</a></div>
                <div><a href="#about">Tim Kami</a></div>
                <div><a href="#service">Servis</a></div>
                <div><a href="#about">Testimonial</a></div>
              </div>
            </div>
            @foreach( $slide as $item )
            <div class="col-lg-4 text-end footer-img">
              <img src="{{'storage/image/'.$item->image}}" alt="" width="250">
            </div>
            @endforeach        
        </div>
      </div>
    </section>
</div>