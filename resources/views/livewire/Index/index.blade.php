<div>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!-- SEO Meta Tags -->
    <meta name="description" content="Aria is a business focused HTML landing page template built with Bootstrap to help you create lead generation websites for companies and their services.">
    <meta name="author" content="Inovatik">

    <!-- OG Meta Tags to improve the way the post looks when you share the page on LinkedIn, Facebook, Google+ -->
	<meta property="og:site_name" content="" /> <!-- website name -->
	<meta property="og:site" content="" /> <!-- website link -->
	<meta property="og:title" content=""/> <!-- title shown in the actual shared post -->
	<meta property="og:description" content="" /> <!-- description shown in the actual shared post -->
	<meta property="og:image" content="" /> <!-- image link, make sure it's jpg -->
	<meta property="og:url" content="" /> <!-- where do you want your post to link to -->
	<meta property="og:type" content="article" />

    <!-- Website Title -->
    <title> building contractor serve</title>
    
    <!-- Styles -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:500,700&display=swap&subset=latin-ext" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,600&display=swap&subset=latin-ext" rel="stylesheet">
    <link href="{{ asset('frontend/css/bootstrap.css')}}" rel="stylesheet">
    <link href="{{ asset('frontend/css/fontawesome-all.css')}}" rel="stylesheet">
    <link href="{{ asset('frontend/css/swiper.css')}}" rel="stylesheet">
	<link href="{{ asset('frontend/css/magnific-popup.css')}}" rel="stylesheet">
	<link href="{{ asset('frontend/css/styles.css')}}" rel="stylesheet">
	
	<!-- Favicon  -->
    <link rel="icon" href="{{asset('images/gambar1.png')}}">
    @livewireStyles
</head>
<body data-spy="scroll" data-target=".fixed-top">
    
    <!-- Preloader -->
	<div class="spinner-wrapper">
        <div class="spinner">
            <div class="bounce1"></div>
            <div class="bounce2"></div>
            <div class="bounce3"></div>
        </div>
    </div>
    <!-- end of preloader -->
    

    <!-- Navbar -->
    <nav class="navbar navbar-expand-md navbar-dark navbar-custom fixed-top">
        <!-- Text Logo - Use this if you don't have a graphic logo -->
        <!-- <a class="navbar-brand logo-text page-scroll" href="index.html">Aria</a> -->

        <!-- Image Logo -->
        <a class="navbar-brand logo-image" href="index.html"><img src="{{asset('images/gambar1.png')}}" alt="alternative" style="padding: auto;"></a>
        
        <!-- Mobile Menu Toggle Button -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-awesome fas fa-bars"></span>
            <span class="navbar-toggler-awesome fas fa-times"></span>
        </button>
        <!-- end of mobile menu toggle button -->

        <div class="collapse navbar-collapse" id="navbarsExampleDefault">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="#beranda">Beranda<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="#servis">Servis</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="#konsultasi">Konsutasi</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="#galeri">Galeri</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link page-scroll" href="#tentang">Tentang</a>
                </li>
            </ul>
        </div>
    </nav> <!-- end of navbar -->
    <!-- end of navbar -->


    <!-- Header -->
    <header id="beranda" class="header">
        <div class="header-content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="text-container">
                        @foreach ($slide as $item)
                            <h1>{{$item->title}}</h1>
                            <p class="p-heading p-large">{{$item->description}}</p>
                            <a class="btn-solid-lg page-scroll" href="#home">Learn More</a>
                        @endforeach
                        </div>
                    </div> <!-- end of col -->
                </div> <!-- end of row -->
            </div> <!-- end of container -->
        </div> <!-- end of header-content -->
    </header> <!-- end of header -->
    <!-- end of header -->

                    
   


    <!-- Services -->
    <div id="servis" class="cards-2">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">SERVICES</div>
                    <h2>Kami Menyediakan apa yang anda butuhkan</h2>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
            <div class="row">
                <div class="col-lg-12">
                    
                @foreach($service as $item)
                    <!-- Card -->
                    <div class="card">
                        <div class="card-image">
                            <img class="img-fluid" src="{{asset('storage/image/'.$item->image)}}" alt="alternative">
                        </div>
                        <div class="card-body">
                            <h3 class="card-title">{{$item->title}}</h3>
                            <p>Starting from planning the RAB, IMB, to house design, you can consult with the building contractor.com team and our contractor partners.  </p>
                            <p class="price">Starting at <span>$299</span></p>
                        </div>
                        <div class="button-container">
                            <a class="btn-solid-reg page-scroll" href="#callMe">DETAILS</a>
                        </div> <!-- end of button-container -->
                    </div>
                    <!-- end of card -->
                @endforeach
                   
                    <!-- Card -->
                    <div class="card">
                        <div class="card-image">
                            <img class="img-fluid" src="{{asset('images/gambar19.webp')}}" alt="alternative">
                        </div>
                        <div class="card-body">
                            <h3 class="card-title">ADD FLOOR </h3>
                            <p>Adding floors certainly requires professional services and legal IMB management. We will offer you the best price.</p>
                            <br>
                            <p class="price">Starting at <span>$299</span></p>
                        </div>
                        <div class="button-container">
                            <a class="btn-solid-reg page-scroll" href="#callMe">DETAILS</a>
                        </div> <!-- end of button-container -->
                    </div>
                    <!-- end of card -->

                    <!-- Card -->
                    <div class="card">
                        <div class="card-image">
                            <img class="img-fluid" src="{{asset('images/gambar22.jpg')}}" alt="alternative">
                        </div>
                        <div class="card-body">
                            <h3 class="card-title">RENOVATION </h3>
                            <p>Leaking roof or cracked walls? Don't hesitate to consult so that your home problems can be resolved quickly.</p>
                            <br>
                            <br>
                            <p class="price">Starting at <span>$299</span></p>
                        </div>
                        <div class="button-container">
                            <a class="btn-solid-reg page-scroll" href="#callMe">DETAILS</a>
                        </div> <!-- end of button-container -->
                    </div>
                    <!-- end of card -->

                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of cards-2 -->
    <!-- end of services -->



    <!-- Testimonials -->
    <div class="slider" id="konsultasi">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Read Our Customer Testimonials</h2>
                    <p class="p-heading">Our clients are our partners and we can not imagine a better future for our company without helping them reach their objectives</p>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
            <div class="row">
                <div class="col-lg-12">

                    <!-- Card Slider -->
                    <div class="slider-container">
                        <div class="swiper-container card-slider">
                            <div class="swiper-wrapper">
                                
                                <!-- Slide -->
                                <div class="swiper-slide">
                                    <div class="card">
                                        <img class="card-image" src="{{asset('images/testimonial-1.jpg')}}" alt="alternative">
                                        <div class="card-body">
                                            <div class="testimonial-text">The people from the building contractor helped build the house of my dreams </div>
                                            <div class="testimonial-author">Mrs.Astuti</div>
                                        </div>
                                    </div>
                                </div> <!-- end of swiper-slide -->
                                <!-- end of slide -->
        
                                <!-- Slide -->
                                <div class="swiper-slide">
                                    <div class="card">
                                        <img class="card-image" src="{{asset('images/testimonial-2.jpg')}}" alt="alternative">
                                        <div class="card-body">
                                            <div class="testimonial-text">I used a building contractor to renovate my house and now my dream house is coming true  </div>
                                            <div class="testimonial-author">Mrs.puji</div>
                                        </div>
                                    </div>        
                                </div> <!-- end of swiper-slide -->
                                <!-- end of slide -->
        
                                <!-- Slide -->
                                <div class="swiper-slide">
                                    <div class="card">
                                        <img class="card-image" src="{{asset('images/testimonial-3.jpg')}}" alt="alternative">
                                        <div class="card-body">
                                            <div class="testimonial-text">I use the services of a building contractor to build my home garage, thank you the building contractor, I am very satisfied </div>
                                            <div class="testimonial-author">Mr.Samsul</div>
                                        </div>
                                    </div>        
                                </div> <!-- end of swiper-slide -->
                                <!-- end of slide -->
        
                                <!-- Slide -->
                                <div class="swiper-slide">
                                    <div class="card">
                                        <img class="card-image" src="{{asset('images/testimonial-4.jpg')}}" alt="alternative">
                                        <div class="card-body">
                                            <div class="testimonial-text">I chose a building contractor service because it has been trusted since 20 years ago</div>
                                            <div class="testimonial-author">Mr.Arifin</div>
                                        </div>
                                    </div>
                                </div> <!-- end of swiper-slide -->
                                <!-- end of slide -->
        
                                <!-- Slide -->
                                <div class="swiper-slide">
                                    <div class="card">
                                        <img class="card-image" src="{{asset('images/testimonial-5.jpg')}}" alt="alternative">
                                        <div class="card-body">
                                            <div class="testimonial-text">I build a house level on the building contractor serve, the price is very affordable, really cheap </div>
                                            <div class="testimonial-author">Mrs.Sari</div>
                                        </div>
                                    </div>        
                                </div> <!-- end of swiper-slide -->
                                <!-- end of slide -->
        
                                <!-- Slide -->
                                <div class="swiper-slide">
                                    <div class="card">
                                        <img class="card-image" src="{{asset('images/testimonial-6.jpg')}}" alt="alternative">
                                        <div class="card-body">
                                            <div class="testimonial-text">steady soul</div>
                                            <div class="testimonial-author">Mr.dodo</div>
                                        </div>
                                    </div>        
                                </div> <!-- end of swiper-slide -->
                                <!-- end of slide -->
                            
                            </div> <!-- end of swiper-wrapper -->
        
                            <!-- Add Arrows -->
                            <div class="swiper-button-next"></div>
                            <div class="swiper-button-prev"></div>
                            <!-- end of add arrows -->
        
                        </div> <!-- end of swiper-container -->
                    </div> <!-- end of sliedr-container -->
                    <!-- end of card slider -->

                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of slider -->
    <!-- end of testimonials -->


    
                    
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of form-1 -->
    <!-- end of call me -->


    <!-- Projects -->
	<div id="galeri" class="filter">
		<div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">PROJECTS</div>
                    <h2>Projects That We're Proud Of</h2>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
            <div class="row">
                <div class="col-lg-12">
                    <!-- Filter -->
                    <div class="button-group filters-button-group">
                        <a class="button is-checked" data-filter="*"><span>SHOW ALL</span></a>
                        <a class="button" data-filter=".design"><span>DESIGN</span></a>
                        <a class="button" data-filter=".development"><span>DEVELOPMENT</span></a>
                        <a class="button" data-filter=".marketing"><span>MARKETING</span></a>
                        <a class="button" data-filter=".seo"><span>SEO</span></a>
                    </div> <!-- end of button group -->
                    <div class="grid">
                        <div class="element-item development">
                            <a class="popup-with-move-anim" href="#project-1"><div class="element-item-overlay"><span>minimalis home</span></div><img src="{{asset('images/gambar0.jpg')}}" alt="alternative" style="height: 100%;"></a>
                        </div>
                        <div class="element-item development">
                            <a class="popup-with-move-anim" href="#project-2"><div class="element-item-overlay"><span>Classic home</span></div><img src="{{asset('images/gambar1.jpg')}}" alt="alternative" style="height: 100%;"></a>
                        </div>
                        <div class="element-item design development marketing">
                            <a class="popup-with-move-anim" href="#project-3"><div class="element-item-overlay"><span>modern home</span></div><img src="{{asset('images/gambar2.png')}}" alt="alternative" style="height: 100%;"></a>
                        </div>
                        <div class="element-item design development marketing">
                            <a class="popup-with-move-anim" href="#project-4"><div class="element-item-overlay"><span>modern tropical home</span></div><img src="{{asset('images/gambar3.jpg')}}" alt="alternative" style="height: 100%;"></a>
                        </div>
                        <div class="element-item design development marketing seo">
                            <a class="popup-with-move-anim" href="#project-5"><div class="element-item-overlay"><span>classic kolonial home</span></div><img src="{{asset('images/gambar4.jpg')}}" alt="alternative" style="height: 100%;"></a>
                        </div>
                        <div class="element-item design marketing seo">
                            <a class="popup-with-move-anim" href="#project-6"><div class="element-item-overlay"><span>classic american home </span></div><img src="{{asset('images/gambar5.jpg')}}" alt="alternative" style="height: 100%;"></a>
                        </div>
                        <div class="element-item design marketing">
                            <a class="popup-with-move-anim" href="#project-7"><div class="element-item-overlay"><span>minimalis home</span></div><img src="{{asset('images/gambar15.jpg')}}" alt="alternative" style="height: 100%;"></a>
                        </div>
                        <div class="element-item design marketing">
                            <a class="popup-with-move-anim" href="#project-8"><div class="element-item-overlay"><span>minimalis mewah home</span></div><img src="{{asset('images/gambar17.jpeg')}}" alt="alternative" style="height: 100%;"    ></a>
                        </div>
                    </div> <!-- end of grid -->
                    <!-- end of filter -->
                    
                </div> <!-- end of col -->
            </div> <!-- end of row -->
		</div> <!-- end of container -->
    </div> <!-- end of filter -->
    <!-- end of projects -->


    <!-- Project Lightboxes -->
    <!-- Lightbox -->
    <div id="project-1" class="lightbox-basic zoom-anim-dialog mfp-hide">
        <div class="row">
            <button title="Close (Esc)" type="button" class="mfp-close x-button">×</button>
            <div class="col-lg-8">
                <img class="img-fluid" src="images/gambar0.jpg" alt="alternative">
            </div> <!-- end of col -->
            <div class="col-lg-4">
                <h3>Minimalist homes</h3>
                <hr class="line-heading">
                <h6>dream house in the present </h6>
                <p>We are here to make all your wishes come true, affordable prices, guaranteed security, safe houses, cleanliness we always take care of. This example of a vacation story at home in English is also an example of English holiday stories and their meanings. The goal is simple, the English legend story that you know for the first time is a legend from Indonesia which is translated into English. The following is a story about my house in English.</p>
                <p>The following story is a story that takes the theme of work or about work or home. For those of you who are looking for legeda stories in English, maybe the first thing you should know is the original Indonesian English legend. English assignments about ideals, examples of English stories about experiences.</p>
                <div class="testimonial-container">
                    <p class="testimonial-text">Need a solid foundation for your business growth plans? Aria will help you manage sales and meet your current requirements.</p>
                    <p class="testimonial-author">General Manager</p>
                </div>
                <a class="btn-solid-reg" href="#your-link">DETAILS</a> <a class="btn-outline-reg mfp-close as-button" href="#projects">BACK</a> 
            </div> <!-- end of col -->
        </div> <!-- end of row -->
    </div> <!-- end of lightbox-basic -->
    <!-- end of lightbox -->

    <!-- Lightbox -->
    <div id="project-2" class="lightbox-basic zoom-anim-dialog mfp-hide">
        <div class="row">
            <button title="Close (Esc)" type="button" class="mfp-close x-button">×</button>
            <div class="col-lg-8">
                <img class="img-fluid" src="{{asset('images/gambar1.jpg')}}" alt="alternative">
            </div> <!-- end of col -->
            <div class="col-lg-4">
                <h3>Classic homes</h3>
                <hr class="line-heading">
                <h6>dream house in the present</h6>
                <p>Need a solid foundation for your business growth plans? Aria will help you manage sales and meet your current needs</p>
                <p>By offering the best professional services and quality products in the market. Don't hesitate and get in touch with us.</p>
                <div class="testimonial-container">
                    <p class="testimonial-text">Need a solid foundation for your business growth plans? Aria will help you manage sales and meet your current requirements.</p>
                    <p class="testimonial-author">General Manager</p>
                </div>
                <a class="btn-solid-reg" href="#your-link">DETAILS</a> <a class="btn-outline-reg mfp-close as-button" href="#projects">BACK</a> 
            </div> <!-- end of col -->
        </div> <!-- end of row -->
    </div> <!-- end of lightbox-basic -->
    <!-- end of lightbox -->

    <!-- Lightbox -->
    <div id="project-3" class="lightbox-basic zoom-anim-dialog mfp-hide">
        <div class="row">
            <button title="Close (Esc)" type="button" class="mfp-close x-button">×</button>
            <div class="col-lg-8">
                <img class="img-fluid" src="images/gambar2.png" alt="alternative">
            </div> <!-- end of col -->
            <div class="col-lg-4">
                <h3>modern home</h3>
                <hr class="line-heading">
                <h6>Strategy Development</h6>
                <p>We are here to make all your wishes come true, affordable prices, guaranteed security, safe houses, cleanliness we always take care of. This example of a vacation story at home in English is also an example of English holiday stories and their meanings. The goal is simple, the English legend story that you know for the first time is a legend from Indonesia which is translated into English. The following is a story about my house in English.</p>
                <p>The following story is a story that takes the theme of work or about work or home. For those of you who are looking for legeda stories in English, maybe the first thing you should know is the original Indonesian English legend. English assignments about ideals, examples of English stories about experiences.</p>
                <div class="testimonial-container">
                    <p class="testimonial-text">Need a solid foundation for your business growth plans? Aria will help you manage sales and meet your current requirements.</p>
                    <p class="testimonial-author">General Manager</p>
                </div>
                <a class="btn-solid-reg" href="#your-link">DETAILS</a> <a class="btn-outline-reg mfp-close as-button" href="#projects">BACK</a> 
            </div> <!-- end of col -->
        </div> <!-- end of row -->
    </div> <!-- end of lightbox-basic -->
    <!-- end of lightbox -->

    <!-- Lightbox -->
    <div id="project-4" class="lightbox-basic zoom-anim-dialog mfp-hide">
        <div class="row">
            <button title="Close (Esc)" type="button" class="mfp-close x-button">×</button>
            <div class="col-lg-8">
                <img class="img-fluid" src="{{asset('images/gambar3.jpg')}}" alt="alternative">
            </div> <!-- end of col -->
            <div class="col-lg-4">
                <h3>modern tropical home</h3>
                <hr class="line-heading">
                <p>Need a solid foundation for your business growth plans? Aria will help you manage sales and meet your current needs</p>
                <p>The following story is a story that takes the theme of work or about work or home. For those of you who are looking for legeda stories in English, maybe the first thing you should know is the original Indonesian English legend. English assignments about ideals, examples of English stories about experiences.</p>
                <div class="testimonial-container">
                    <p class="testimonial-text">Need a solid foundation for your business growth plans? Aria will help you manage sales and meet your current requirements.</p>
                    <p class="testimonial-author">General Manager</p>
                </div>
                <a class="btn-solid-reg" href="#your-link">DETAILS</a> <a class="btn-outline-reg mfp-close as-button" href="#projects">BACK</a> 
            </div> <!-- end of col -->
        </div> <!-- end of row -->
    </div> <!-- end of lightbox-basic -->
    <!-- end of lightbox -->

    <!-- Lightbox -->
    <div id="project-5" class="lightbox-basic zoom-anim-dialog mfp-hide">
        <div class="row">
            <button title="Close (Esc)" type="button" class="mfp-close x-button">×</button>
            <div class="col-lg-8">
                <img class="img-fluid" src="{{asset('images/gambar4.jpg')}}" alt="alternative">
            </div> <!-- end of col -->
            <div class="col-lg-4">
                <h3>classic american home</h3>
                <hr class="line-heading">
                <p>Need a solid foundation for your business growth plans? Aria will help you manage sales and meet your current needs</p>
                <p>The following story is a story that takes the theme of work or about work or home. For those of you who are looking for legeda stories in English, maybe the first thing you should know is the original Indonesian English legend. English assignments about ideals, examples of English stories about experiences.</p>
                <div class="testimonial-container">
                    <p class="testimonial-text">Need a solid foundation for your business growth plans? Aria will help you manage sales and meet your current requirements.</p>
                    <p class="testimonial-author">General Manager</p>
                </div>
                <a class="btn-solid-reg" href="#your-link">DETAILS</a> <a class="btn-outline-reg mfp-close as-button" href="#projects">BACK</a> 
            </div> <!-- end of col -->
        </div> <!-- end of row -->
    </div> <!-- end of lightbox-basic -->
    <!-- end of lightbox -->

    <!-- Lightbox -->
    <div id="project-6" class="lightbox-basic zoom-anim-dialog mfp-hide">
        <div class="row">
            <button title="Close (Esc)" type="button" class="mfp-close x-button">×</button>
            <div class="col-lg-8">
                <img class="img-fluid" src="{{asset('images/gambar5.jpg')}}" alt="alternative">
            </div> <!-- end of col -->
            <div class="col-lg-4">
                <h3>classic kolonial home</h3>
                <hr class="line-heading">
                <p>Need a solid foundation for your business growth plans? Aria will help you manage sales and meet your current needs</p>
                <p>By offering the best professional services and quality products in the market. Don't hesitate and get in touch with us.</p>
                <div class="testimonial-container">
                    <p class="testimonial-text">Need a solid foundation for your business growth plans? Aria will help you manage sales and meet your current requirements.</p>
                    <p class="testimonial-author">General Manager</p>
                </div>
                <a class="btn-solid-reg" href="#your-link">DETAILS</a> <a class="btn-outline-reg mfp-close as-button" href="#projects">BACK</a> 
            </div> <!-- end of col -->
        </div> <!-- end of row -->
    </div> <!-- end of lightbox-basic -->
    <!-- end of lightbox -->

    <!-- Lightbox -->
    <div id="project-7" class="lightbox-basic zoom-anim-dialog mfp-hide">
        <div class="row">
            <button title="Close (Esc)" type="button" class="mfp-close x-button">×</button>
            <div class="col-lg-8">
                <img class="img-fluid" src="{{asset('images/gambar15.jpg')}}" alt="alternative">
            </div> <!-- end of col -->
            <div class="col-lg-4">
                <h3>minimalis home</h3>
                <hr class="line-heading">
                <p>Need a solid foundation for your business growth plans? Aria will help you manage sales and meet your current needs</p>
                <p>The following story is a story that takes the theme of work or about work or home. For those of you who are looking for legeda stories in English, maybe the first thing you should know is the original Indonesian English legend. English assignments about ideals, examples of English stories about experiences.</p>
                <div class="testimonial-container">
                    <p class="testimonial-text">Need a solid foundation for your business growth plans? Aria will help you manage sales and meet your current requirements.</p>
                    <p class="testimonial-author">General Manager</p>
                </div>
                <a class="btn-solid-reg" href="#your-link">DETAILS</a> <a class="btn-outline-reg mfp-close as-button" href="#projects">BACK</a> 
            </div> <!-- end of col -->
        </div> <!-- end of row -->
    </div> <!-- end of lightbox-basic -->
    <!-- end of lightbox -->

    <!-- Lightbox -->
    <div id="project-8" class="lightbox-basic zoom-anim-dialog mfp-hide">
        <div class="row">
            <button title="Close (Esc)" type="button" class="mfp-close x-button">×</button>
            <div class="col-lg-8">
                <img class="img-fluid" src="{{asset('images/gambar17.jpeg')}}" alt="alternative">
            </div> <!-- end of col -->
            <div class="col-lg-4">
                <h3>minimalis mewah home</h3>
                <hr class="line-heading">
                <p>Need a solid foundation for your business growth plans? Aria will help you manage sales and meet your current needs</p>
                <p>By offering the best professional services and quality products in the market. Don't hesitate and get in touch with us.</p>
                <div class="testimonial-container">
                    <p class="testimonial-text">Need a solid foundation for your business growth plans? Aria will help you manage sales and meet your current requirements.</p>
                    <p class="testimonial-author">General Manager</p>
                </div>
                <a class="btn-solid-reg" href="#your-link">DETAILS</a> <a class="btn-outline-reg mfp-close as-button" href="#projects">BACK</a> 
            </div> <!-- end of col -->
        </div> <!-- end of row -->
    </div> <!-- end of lightbox-basic -->
    <!-- end of lightbox -->
    <!-- end of project lightboxes -->

    <!-- About -->
    <div id="tentang" class="counter" >
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-xl-6">
                    <div class="image-container">
                        <img class="about" src="{{asset('images/gambar10.jpg')}}" style="height: 90%; width: 80%;" >
                    </div> <!-- end of image-container -->
                </div> <!-- end of col -->
                <div class="col-lg-7 col-xl-6" >
                    <div class="text-container">
                        <div class="section-title">ABOUT</div>
                        <h2>We Are Engaged About Providing Home Construction Services </h2>
                        <p>Our goal is to provide building materials, building tools, as well as workers to build your house </p>
                        <ul class="list-unstyled li-space-lg">
                            <li class="media">
                                <i class="fas fa-square"></i>
                                <div class="media-body">Everything we recommend has direct positive impact</div>
                            </li>
                            <li class="media">
                                <i class="fas fa-square"></i>
                                <div class="media-body">You will become an important partner of our company</div>
                            </li>
                        </ul>

                        <!-- Counter -->
                        <div id="counter">
                            <div class="cell">
                                <div class="counter-value number-count" data-count="100">0</div>
                                <div class="counter-info">Happy<br>Users</div>
                            </div>
                            <div class="cell">
                                <div class="counter-value number-count" data-count="100">0</div>
                                <div class="counter-info">Issues<br>Solved</div>
                            </div>
                            <div class="cell">
                                <div class="counter-value number-count" data-count="100">0</div>
                                <div class="counter-info">Good<br>Reviews</div>
                            </div>
                        </div>
                        <!-- end of counter -->

                    </div> <!-- end of text-container -->      
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of counter -->
    <!-- end of about -->


    <!-- Contact -->
    <div id="contact" class="form-2">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="text-container">
                        <div class="section-title">CONTACT</div>
                        <h2>Get In Touch Using The Form</h2>
                        <p>You can stop by our office for a cup of coffee and just use the contact form below for any questions and inquiries</p>
                        <ul class="list-unstyled li-space-lg">
                            <li class="address"><i class="fas fa-map-marker-alt"></i>Jln.Dr.Sutomo Gg,Majestic,No.262,Badean,Bondowoso</li>
                            <li><i class="fas fa-phone"></i><a href="tel:082245093787">+62 2245093787</a></li>
                            <li><i class="fas fa-phone"></i><a href="tel:082246082456">+82 2246082456</a></li>
                            <li><i class="fas fa-envelope"></i><a href="mailto:office@aria.com">office@buildingcontractor.com</a></li>
                        </ul>
                        <h3>Follow buildingcontractor On Social Media</h3>

                        <span class="fa-stack">
                            <a href="#your-link">
                                <span class="hexagon"></span>
                                <i class="fab fa-facebook-f fa-stack-1x"></i>
                            </a>
                        </span>
                        <span class="fa-stack">
                            <a href="#your-link">
                                <span class="hexagon"></span>
                                <i class="fab fa-twitter fa-stack-1x"></i>
                            </a>
                        </span>
                        <span class="fa-stack">
                            <a href="#your-link">
                                <span class="hexagon"></span>
                                <i class="fab fa-instagram fa-stack-1x"></i>
                            </a>
                        </span>
                    </div> <!-- end of text-container -->
                </div> <!-- end of col -->
                <div class="col-lg-6">
                    
                    <!-- Contact Form -->
                    <form id="contactForm" data-toggle="validator" data-focus="false">
                        <div class="form-group">
                            <input type="text" class="form-control-input" id="cname" required>
                            <label class="label-control" for="cname">Name</label>
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control-input" id="cemail" required>
                            <label class="label-control" for="cemail">Email</label>
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group">
                            <textarea class="form-control-textarea" id="cmessage" required></textarea>
                            <label class="label-control" for="cmessage">Your message</label>
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group checkbox">
                            <input type="checkbox" id="cterms" value="Agreed-to-Terms" required>I agree with Aria's stated <a href="privacy-policy.html">Privacy Policy</a> and <a href="terms-conditions.html">Terms Conditions</a> 
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="form-control-submit-button">SUBMIT MESSAGE</button>
                        </div>
                        <div class="form-message">
                            <div id="cmsgSubmit" class="h3 text-center hidden"></div>
                        </div>
                    </form>
                    <!-- end of contact form -->

                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of form-2 -->
    <!-- end of contact -->


    <!-- Footer -->
    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="text-container about">
                        <h4>Few Words About buildingcontractor</h4>
                        <p class="white">We are passionate about providing home, office, school building services for you. Your safety and comfort is our priority .</p>
                    </div> <!-- end of text-container -->
                </div> <!-- end of col -->
                <div class="col-md-2">
                    <div class="text-container">
                        <h4>Links</h4>
                        <ul class="list-unstyled li-space-lg white">
                            <li>
                                <a class="white" href="#your-link">buildingcontractor.id</a>
                            </li>
                            <li>
                                <a class="white" href="terms-conditions.html">buildingcontractor.id</a>
                            </li>
                            <li>
                                <a class="white" href="privacy-policy.html">buildingcontractor.id</a>
                            </li>
                        </ul>
                    </div> <!-- end of text-container -->
                </div> <!-- end of col -->
                <div class="col-md-2">
                    <div class="text-container">
                        <h4>Tools</h4>
                        <ul class="list-unstyled li-space-lg">
                            <li>
                                <a class="white" href="#your-link">buildingcontractor.id</a>
                            </li>
                            <li>
                                <a class="white" href="#your-link">buildingcontractor.id</a>
                            </li>
                            <li class="media">
                                <a class="white" href="#your-link">buildingcontractor.id</a>
                            </li>
                        </ul>
                    </div> <!-- end of text-container -->
                </div> <!-- end of col -->
                <div class="col-md-2">
                    <div class="text-container">
                        <h4>Partners</h4>
                        <ul class="list-unstyled li-space-lg">
                            <li>
                                <a class="white" href="#your-link">buildingcontractor.id</a>
                            </li>
                            <li>
                                <a class="white" href="#your-link">buildingcontractor.id</a>
                            </li>
                            <li>
                                <a class="white" href="#your-link">buildingcontractor.id</a>
                            </li>
                        </ul>
                    </div> <!-- end of text-container -->
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of footer -->  
    <!-- end of footer -->


    <!-- Copyright -->
    <div class="copyright">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <p class="p-small">Copyright © 2020 <a href="https://buildingcontractor.com">Template by buildingcontractor</a></p>
                </div> <!-- end of col -->
            </div> <!-- enf of row -->
        </div> <!-- end of container -->
    </div> <!-- end of copyright --> 
    <!-- end of copyright -->
    

    <!-- Scripts -->
    <script src="{{ asset('frontend/js/jquery.min.js')}}"></script> <!-- jQuery for Bootstrap's JavaScript plugins -->
    <script src="{{ asset('frontend/js/popper.min.js')}}"></script> <!-- Popper tooltip library for Bootstrap -->
    <script src="{{ asset('frontend/js/bootstrap.min.js')}}"></script> <!-- Bootstrap framework -->
    <script src="{{ asset('frontend/js/jquery.easing.min.js')}}"></script> <!-- jQuery Easing for smooth scrolling between anchors -->
    <script src="{{ asset('frontend/js/swiper.min.js')}}"></script> <!-- Swiper for image and text sliders -->
    <script src="{{ asset('frontend/js/jquery.magnific-popup.js')}}"></script> <!-- Magnific Popup for lightboxes -->
    <script src="{{ asset('frontend/js/morphext.min.js')}}"></script> <!-- Morphtext rotating text in the header -->
    <script src="{{ asset('frontend/js/isotope.pkgd.min.js')}}"></script> <!-- Isotope for filter -->
    <script src="{{ asset('frontend/js/validator.min.js')}}"></script> <!-- Validator.js - Bootstrap plugin that validates forms -->
    <script src="{{ asset('frontend/js/scripts.js')}}"></script> <!-- Custom scripts -->
    @livewireScripts
</body>
</html>
</div>







