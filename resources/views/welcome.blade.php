 <!DOCTYPE html>
 <html lang="en">

 @include('partials.head')

 <body>
     <!-- NAVBAR -->
     @include('partials.navbar')
     <!-- HERO -->
     <header id="home" class="section">
         <div class="container-xl">
             <div class="row align-items-center g-5">
                 <div class="col-12 col-lg-7 hero">
                     <h1 class="mt-3 title-xl">{{ __('keywords.Hi I am') }} Mostafa Henidy 👋
                     </h1>
                     <p class="lead mt-3 text-muted-2">
                         {{ __('keywords.about_paragraph') }}
                     </p>
                     <div class="d-flex flex-wrap gap-2 mt-4">
                         <span class="chip">HTML</span>
                         <span class="chip">CSS</span>
                         <span class="chip">BOOTSTRAP</span>
                         <span class="chip">JAVA SCRIPT</span>
                         <span class="chip">PHP</span>
                         <span class="chip">LARAVEL</span>
                     </div>
                     <div class="d-flex gap-2 mt-4">
                         <a class="btn btn-soft rounded-pill px-4" href="{{ route('resume.download') }}">
                             <i class="bi bi-download me-1"></i>
                             {{ __('keywords.Resume') }}
                         </a>
                         <a class="btn btn-outline-muted rounded-pill px-4" href="#work"><i
                                 class="bi bi-eye me-1"></i>{{ __('keywords.See work') }}</a>
                         <a class="btn btn-outline-muted rounded-pill px-4" href="#about"><i class="bi bi-person"></i>
                             <span class="ms-1">{{ __('keywords.About me') }}</span></a>
                     </div>
                     <div class="d-flex align-items-center gap-3 mt-4">
                         <div class="vr text-white opacity-25"></div>
                         <a class="text-decoration-none text-muted-2" href="https://github.com/MostafaHenidy"><i
                                 class="bi bi-github"></i> <span class="ms-1">GitHub</span></a>
                         <div class="vr text-white opacity-25"></div>
                         <a class="text-decoration-none text-muted-2"
                             href="https://www.facebook.com/mostafa.henedy.311/"><i class="bi bi-facebook"></i>
                             <span class="ms-1">Facebook</span></a>
                         <div class="vr text-white opacity-25"></div>
                         <a class="text-decoration-none text-muted-2"
                             href="https://www.linkedin.com/in/mostafa-henidy-43986a30a/"><i class="bi bi-linkedin"></i>
                             <span class="ms-1">LinkedIn</span></a>
                         <div class="vr text-white opacity-25"></div>
                         <a class="text-decoration-none text-muted-2" href="https://x.com/Henidy_exe"><i
                                 class="bi bi-twitter-x"></i>
                             <span class="ms-1">X</span></a>
                         <div class="vr text-white opacity-25"></div>
                         <a class="text-decoration-none text-muted-2" href="{{ route('whatsapp.redirect') }}">
                             <i class="bi bi-whatsapp"></i>
                             <span class="ms-1">WhatsApp</span>
                         </a>
                     </div>
                 </div>
                 <div class="col-12 col-lg-5">
                     <div class="card-dark p-3 rounded-2xl">
                         <div class="ratio ratio-4x3 ratio-cover rounded-2xl">
                             <img src="{{ asset('front-assets/personal photo.png') }}" class="w-100 h-100"
                                 alt="Showcase" />
                         </div>
                         <div class="d-flex justify-content-between align-items-center mt-3">
                             <div>
                                 <div class="fw-semibold">Laravel Back-end Web Developer</div>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </header>

     <div class="divider"></div>

     <!-- WORK -->
     <section id="work" class="section">
         <div class="container-xl">
             <div class="d-flex align-items-end justify-content-between mb-4">
                 <div>
                     <div class="eyebrow">{{ __('keywords.Selected Work') }}</div>
                     <h2 class="title-lg mt-1">{{ __('keywords.Projects') }}</h2>
                 </div>
             </div>

             <div class="row g-4">
                 <!-- Project 1 -->
                 <div class="col-12 col-md-4">
                     <a class="text-decoration-none" data-bs-toggle="offcanvas" href="#offcanvasCapodanno"
                         role="button" aria-controls="offcanvasCapodanno">
                         <article class="card-dark p-3 h-100 d-flex flex-column">
                             <div class="ratio ratio-16x9 ratio-cover rounded-2xl">
                                 <img src="https://images.unsplash.com/photo-1515879218367-8466d910aaa4?q=80&w=2000&auto=format&fit=crop"
                                     alt="SaaS dashboard" />
                             </div>
                             <div class="mt-3 d-flex justify-content-between align-items-center">
                                 <div>
                                     <div class="fw-semibold">Capodanno</div>
                                     <div class="small text-muted-2">
                                         {{ __('keywords.Capodanno description') }}
                                     </div>
                                 </div>
                                 <span class="badge rounded-pill">2025</span>
                             </div>
                         </article>
                     </a>
                 </div>
                 <!-- Project 2 -->
                 <div class="col-12 col-md-4">
                     <a class="text-decoration-none" data-bs-toggle="offcanvas" href="#offcanvasWisper" role="button"
                         aria-controls="offcanvasWisper">
                         <article class="card-dark p-3 h-100 d-flex flex-column">
                             <div class="ratio ratio-16x9 ratio-cover rounded-2xl">
                                 <img src="https://images.unsplash.com/photo-1480694313141-fce5e697ee25?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                                     alt="Travel landing" />
                             </div>
                             <div class="mt-3 d-flex justify-content-between align-items-center">
                                 <div>
                                     <div class="fw-semibold">Chat APP (Whisper)</div>
                                     <div class="small text-muted-2">
                                         {{ __('keywords.chatApp description') }}
                                     </div>
                                 </div>
                                 <span class="badge rounded-pill">2025</span>
                             </div>
                         </article>
                     </a>
                 </div>
                 <!-- Project 3 -->
                 {{-- <div class="col-12 col-md-4">
                    <a class="text-decoration-none" href="https://github.com/MostafaHenidy/E-Commerce">
                        <article class="card-dark p-3 h-100 d-flex flex-column">
                            <div class="ratio ratio-16x9 ratio-cover rounded-2xl">
                                <img src="https://images.unsplash.com/photo-1525182008055-f88b95ff7980?q=80&w=2000&auto=format&fit=crop"
                                    alt="Travel landing" />
                            </div>
                            <div class="mt-3 d-flex justify-content-between align-items-center">
                                <div>
                                    <div class="fw-semibold">E-Commerce</div>
                                    <div class="small text-muted-2">
                                        {{ __('keywords.E-Commerce description') }}
                                    </div>
                                </div>
                                <span class="badge rounded-pill">2024</span>
                            </div>
                        </article>
                    </a>
                </div> --}}
                 {{-- Project 4 --}}
                 <div class="col-12 col-md-4">
                     <a class="text-decoration-none" data-bs-toggle="offcanvas" href="#offcanvasPortfolio"
                         role="button" aria-controls="offcanvasPortfolio">
                         <article class="card-dark p-3 h-100 d-flex flex-column">
                             <div class="ratio ratio-16x9 ratio-cover rounded-2xl">
                                 <img src="https://images.unsplash.com/photo-1545665277-5937489579f2?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                                     alt="Travel landing" />
                             </div>
                             <div class="mt-3 d-flex justify-content-between align-items-center">
                                 <div>
                                     <div class="fw-semibold">Portfolio Builder</div>
                                     <div class="small text-muted-2">
                                         {{ __('keywords.portfolio_description_full') }}
                                     </div>
                                 </div>
                                 <span class="badge rounded-pill">2025</span>
                             </div>
                         </article>
                     </a>
                 </div>
             </div>
         </div>
     </section>
     {{-- Capodanno Offcanvas --}}
     <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasCapodanno"
         aria-labelledby="offcanvasCapodannoLabel" data-bs-theme="dark">
         <div class="offcanvas-header">
             <h5 class="offcanvas-title" id="offcanvasCapodannoLabel">Capodanno</h5>
             <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
         </div>
         <div class="offcanvas-body">
             <div id="carouselCapodanno" class="carousel slide">
                 <div class="carousel-inner">
                     <div class="carousel-item active">
                         <img src="{{ asset('front-assets/Capodanno Pics/login.png') }}" class="d-block w-100"
                             alt="...">
                     </div>
                     <div class="carousel-item">
                         <img src="{{ asset('front-assets/Capodanno Pics/home1.png') }}" class="d-block w-100"
                             alt="...">
                     </div>
                     <div class="carousel-item">
                         <img src="{{ asset('front-assets/Capodanno Pics/products.png') }}" class="d-block w-100"
                             alt="...">
                     </div>
                     <div class="carousel-item">
                         <img src="{{ asset('front-assets/Capodanno Pics/reviews.png') }}" class="d-block w-100"
                             alt="...">
                     </div>
                     <div class="carousel-item">
                         <img src="{{ asset('front-assets/Capodanno Pics/customerSupport.png') }}"
                             class="d-block w-100" alt="...">
                     </div>
                     <div class="carousel-item">
                         <img src="{{ asset('front-assets/Capodanno Pics/customerSupportPanel.png') }}"
                             class="d-block w-100" alt="...">
                     </div>
                     <div class="carousel-item">
                         <img src="{{ asset('front-assets/Capodanno Pics/customerSupportMessages.png') }}"
                             class="d-block w-100" alt="...">
                     </div>
                     <div class="carousel-item">
                         <img src="{{ asset('front-assets/Capodanno Pics/adminPanel.png') }}" class="d-block w-100"
                             alt="...">
                     </div>
                 </div>
                 <button class="carousel-control-prev" type="button" data-bs-target="#carouselCapodanno"
                     data-bs-slide="prev">
                     <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                     <span class="visually-hidden">Previous</span>
                 </button>
                 <button class="carousel-control-next" type="button" data-bs-target="#carouselCapodanno"
                     data-bs-slide="next">
                     <span class="carousel-control-next-icon" aria-hidden="true"></span>
                     <span class="visually-hidden">Next</span>
                 </button>
             </div>
             <div class="mt-3">
                 <p>{{ __('keywords.capodanno_description_full') }}</p>
             </div>
             <hr>
             <div>
                 <h5>{{ __('keywords.Features') }}</h5>
                 <ul>
                     <li>
                         <p>
                             {{ __('keywords.capodanno_feature_1') }}
                         </p>
                     </li>
                     <li>
                         <p>
                             {{ __('keywords.capodanno_feature_2') }}
                         </p>
                     </li>
                     <li>
                         <p>
                             {{ __('keywords.capodanno_feature_3') }}
                         </p>
                     </li>
                     <li>
                         <p>
                             {{ __('keywords.capodanno_feature_4') }}
                         </p>
                     </li>
                     <li>
                         <p>
                             {{ __('keywords.capodanno_feature_5') }}
                         </p>
                     </li>
                     <li>
                         <p>
                             {{ __('keywords.capodanno_feature_6') }}
                         </p>
                     </li>
                     <li>
                         <p>
                             {{ __('keywords.capodanno_feature_7') }}
                         </p>
                     </li>
                     <li>
                         <p>
                             {{ __('keywords.capodanno_feature_8') }}
                         </p>
                     </li>
                     <li>
                         <p>
                             {{ __('keywords.capodanno_feature_9') }}
                         </p>
                     </li>
                 </ul>
             </div>
             <hr>
             <div>
                 <h5>{{ __('keywords.Tech Stack') }}</h5>
                 <ul>
                     <li>
                         <p>{{ __('keywords.capodanno_tech_backend') }}</p>
                     </li>
                     <li>
                         <p>{{ __('keywords.capodanno_tech_frontend') }}</p>
                     </li>
                     <li>
                         <p>{{ __('keywords.capodanno_tech_database') }}</p>
                     </li>
                     <li>
                         <p>{{ __('keywords.capodanno_tech_auth') }}</p>
                     </li>
                     <li>
                         <p>{{ __('keywords.capodanno_tech_tools') }}</p>
                     </li>
                 </ul>
             </div>
             <div class="d-flex float-end">
                 <a href="https://github.com/MostafaHenidy/Car-Transport.git" class="btn btn-lg"><i
                         class="bi bi-github"></i></a>
             </div>
         </div>
     </div>
     {{-- Wisper Offcanvas --}}
     <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasWisper"
         aria-labelledby="offcanvasWisperLabel" data-bs-theme="dark">
         <div class="offcanvas-header">
             <h5 class="offcanvas-title" id="offcanvasWisperLabel">Whisper – Real-Time Chat Application</h5>
             <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
         </div>
         <div class="offcanvas-body">
             <div id="carouselWhisper" class="carousel slide">
                 <div class="carousel-inner">
                     <div class="carousel-item active">
                         <img src="{{ asset('front-assets/Whisper Pics/login.png') }}" class="d-block w-100"
                             alt="...">
                     </div>
                     <div class="carousel-item">
                         <img src="{{ asset('front-assets/Whisper Pics/home1.png') }}" class="d-block w-100"
                             alt="...">
                     </div>
                     <div class="carousel-item">
                         <img src="{{ asset('front-assets/Whisper Pics/chat.png') }}" class="d-block w-100"
                             alt="...">
                     </div>
                     <div class="carousel-item">
                         <img src="{{ asset('front-assets/Whisper Pics/group.png') }}" class="d-block w-100"
                             alt="...">
                     </div>
                     <div class="carousel-item">
                         <img src="{{ asset('front-assets/Whisper Pics/profile.png') }}" class="d-block w-100"
                             alt="...">
                     </div>

                 </div>
                 <button class="carousel-control-prev" type="button" data-bs-target="#carouselWhisper"
                     data-bs-slide="prev">
                     <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                     <span class="visually-hidden">Previous</span>
                 </button>
                 <button class="carousel-control-next" type="button" data-bs-target="#carouselWhisper"
                     data-bs-slide="next">
                     <span class="carousel-control-next-icon" aria-hidden="true"></span>
                     <span class="visually-hidden">Next</span>
                 </button>
             </div>
             <div class="mt-3">
                 <p>{{ __('keywords.chatApp description') }}</p>
             </div>
             <hr>
             <div>
                 <h5>{{ __('keywords.Features') }}</h5>
                 <ul>
                     <li>
                         <p>
                             {{ __('keywords.whisper_feature_1') }}
                         </p>
                     </li>
                     <li>
                         <p>
                             {{ __('keywords.whisper_feature_2') }}
                         </p>
                     </li>
                     <li>
                         <p>
                             {{ __('keywords.whisper_feature_3') }}
                         </p>
                     </li>
                     <li>
                         <p>
                             {{ __('keywords.whisper_feature_4') }}
                         </p>
                     </li>
                     <li>
                         <p>
                             {{ __('keywords.whisper_feature_5') }}
                         </p>
                     </li>
                     <li>
                         <p>
                             {{ __('keywords.whisper_feature_6') }}
                         </p>
                     </li>
                     <li>
                         <p>
                             {{ __('keywords.whisper_feature_7') }}
                         </p>
                     </li>
                     <li>
                         <p>
                             {{ __('keywords.whisper_feature_8') }}
                         </p>
                     </li>
                 </ul>
             </div>
             <hr>
             <div>
                 <h5>{{ __('keywords.Tech Stack') }}</h5>
                 <ul>
                     <li>
                         <p>{{ __('keywords.whisper_tech_backend') }}</p>
                     </li>
                     <li>
                         <p>{{ __('keywords.whisper_tech_frontend') }}</p>
                     </li>
                     <li>
                         <p>{{ __('keywords.whisper_tech_database') }}</p>
                     </li>
                     <li>
                         <p>{{ __('keywords.whisper_tech_auth') }}</p>
                     </li>
                     <li>
                         <p>{{ __('keywords.whisper_tech_tools') }}</p>
                     </li>
                 </ul>
             </div>
             <div class="d-flex float-end">
                 <a href="https://github.com/MostafaHenidy/ChatApp.git" class="btn btn-lg"><i
                         class="bi bi-github"></i></a>
             </div>
         </div>
     </div>
     {{-- Portfolio Builder --}}
     <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasPortfolio"
         aria-labelledby="offcanvasPortfolioLabel" data-bs-theme="dark">
         <div class="offcanvas-header">
             <h5 class="offcanvas-title" id="offcanvasPortfolioLabel">Portfolio Builder – Instant Portfolio Platform
             </h5>
             <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
         </div>
         <div class="offcanvas-body">
             <div id="carouselPortfolio" class="carousel slide">
                 <div class="carousel-inner">
                     <div class="carousel-item active">
                         <img src="{{ asset('front-assets/Portfolio Builder Pics/dashboard.png') }}"
                             class="d-block w-100" alt="...">
                     </div>
                     <div class="carousel-item">
                         <img src="{{ asset('front-assets/Portfolio Builder Pics/home1.png') }}"
                             class="d-block w-100" alt="...">
                     </div>
                     <div class="carousel-item">
                         <img src="{{ asset('front-assets/Portfolio Builder Pics/projects.png') }}"
                             class="d-block w-100" alt="...">
                     </div>
                     <div class="carousel-item">
                         <img src="{{ asset('front-assets/Portfolio Builder Pics/skills.png') }}"
                             class="d-block w-100" alt="...">
                     </div>
                     <div class="carousel-item">
                         <img src="{{ asset('front-assets/Portfolio Builder Pics/settings.png') }}"
                             class="d-block w-100" alt="...">
                     </div>
                     <div class="carousel-item">
                         <img src="{{ asset('front-assets/Portfolio Builder Pics/portfolio1.png') }}"
                             class="d-block w-100" alt="...">
                     </div>
                     <div class="carousel-item">
                         <img src="{{ asset('front-assets/Portfolio Builder Pics/portfolio2.png') }}"
                             class="d-block w-100" alt="...">
                     </div>
                     <div class="carousel-item">
                         <img src="{{ asset('front-assets/Portfolio Builder Pics/portfolio3.png') }}"
                             class="d-block w-100" alt="...">
                     </div>
                     <div class="carousel-item">
                         <img src="{{ asset('front-assets/Portfolio Builder Pics/portfolio4.png') }}"
                             class="d-block w-100" alt="...">
                     </div>
                     <div class="carousel-item">
                         <img src="{{ asset('front-assets/Portfolio Builder Pics/portfolio5.png') }}"
                             class="d-block w-100" alt="...">
                     </div>

                 </div>
                 <button class="carousel-control-prev" type="button" data-bs-target="#carouselPortfolio"
                     data-bs-slide="prev">
                     <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                     <span class="visually-hidden">Previous</span>
                 </button>
                 <button class="carousel-control-next" type="button" data-bs-target="#carouselPortfolio"
                     data-bs-slide="next">
                     <span class="carousel-control-next-icon" aria-hidden="true"></span>
                     <span class="visually-hidden">Next</span>
                 </button>
             </div>
             <div class="mt-3">
                 <p>{{ __('keywords.portfolio_description_full') }}</p>
             </div>
             <hr>
             <div>
                 <h5>{{ __('keywords.Features') }}</h5>
                 <ul>
                     <li>
                         <p>
                             {{ __('keywords.portfolio_feature_1') }}
                         </p>
                     </li>
                     <li>
                         <p>
                             {{ __('keywords.portfolio_feature_2') }}
                         </p>
                     </li>
                     <li>
                         <p>
                             {{ __('keywords.portfolio_feature_3') }}
                         </p>
                     </li>
                     <li>
                         <p>
                             {{ __('keywords.portfolio_feature_4') }}
                         </p>
                     </li>
                     <li>
                         <p>
                             {{ __('keywords.portfolio_feature_5') }}
                         </p>
                     </li>
                     <li>
                         <p>
                             {{ __('keywords.portfolio_feature_6') }}
                         </p>
                     </li>
                     <li>
                         <p>
                             {{ __('keywords.portfolio_feature_7') }}
                         </p>
                     </li>
                     <li>
                         <p>
                             {{ __('keywords.portfolio_feature_8') }}
                         </p>
                     </li>
                 </ul>
             </div>
             <hr>
             <div>
                 <h5>{{ __('keywords.Tech Stack') }}</h5>
                 <ul>
                     <li>
                         <p>{{ __('keywords.portfolio_tech_backend') }}</p>
                     </li>
                     <li>
                         <p>{{ __('keywords.portfolio_tech_frontend') }}</p>
                     </li>
                     <li>
                         <p>{{ __('keywords.portfolio_tech_database') }}</p>
                     </li>
                     <li>
                         <p>{{ __('keywords.portfolio_tech_localization') }}</p>
                     </li>
                     <li>
                         <p>{{ __('keywords.portfolio_tech_tooling') }}</p>
                     </li>
                 </ul>
             </div>
             <div class="d-flex float-end">
                 <a href="https://github.com/MostafaHenidy/ChatApp.git" class="btn btn-lg"><i
                         class="bi bi-github"></i></a>
             </div>
         </div>
     </div>
     <div class="divider"></div>
     <!-- ABOUT -->
     @include('contents.about')
     <div class="divider"></div>
     <!-- SERVICES -->
     @include('contents.services')
     <div class="divider"></div>
     <!-- CONTACT -->
     @include('contents.contact')
     <!-- FOOTER -->
     @include('partials.footer')
     <!-- SCRIPTS -->
     @include('partials.scripts')
 </body>

 </html>
