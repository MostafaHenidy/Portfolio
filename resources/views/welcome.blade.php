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
                        <a class="btn btn-soft rounded-pill px-4" href="{{ asset('front-assets/resume.docx') }}"><i
                                class="bi bi-download me-1"></i>{{ __('keywords.Resume') }}</a>
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
                        <a class="text-decoration-none text-muted-2" href="https://wa.me/+201032834213"><i
                                class="bi bi-whatsapp"></i>
                            <span class="ms-1">Whatsapp</span></a>
                    </div>
                </div>
                <div class="col-12 col-lg-5">
                    <div class="card-dark p-3 rounded-2xl">
                        <div class="ratio ratio-4x3 ratio-cover rounded-2xl">
                            <img src="{{ asset('front-assets/personal_photo.jpeg') }}" class="w-100 h-100"
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
                <div class="col-12 col-md-6">
                    <a class="text-decoration-none" href="https://github.com/MostafaHenidy/Car-Transport">
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
                <div class="col-12 col-md-6">
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
                </div>
            </div>
        </div>
    </section>

    <div class="divider"></div>

    <!-- ABOUT -->
    <section id="about" class="section">
        <div class="container-xl">
            <div class="row g-5 align-items-start">
                <div class="col-12 col-lg-6">
                    <div class="eyebrow">{{ __('keywords.About') }}</div>
                    <h2 class="title-lg mt-1">{{ __('keywords.Scalable Code. Real-Time Solutions.') }}</h2>
                    <p class="text-muted-2">
                        {{ __('keywords.about_short') }}
                    </p>
                    <div class="row g-3 mt-2">
                        <div class="col-6">
                            <div class="card-dark p-3 h-100">
                                <div class="small text-muted-2">{{ __('keywords.Experience') }}</div>
                                <div class="fw-semibold">{{ __('keywords.1+ years') }}</div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="card-dark p-3 h-100">
                                <div class="small text-muted-2">{{ __('keywords.Projects Delivered') }}</div>
                                <div class="fw-semibold">{{ __('keywords.E-commerce, Booking Systems, APIs') }}</div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="card-dark p-3">
                                <div class="small text-muted-2 mb-2">{{ __('keywords.Tech Stack') }}</div>
                                <div class="d-flex flex-wrap gap-2">
                                    <span class="chip">PHP</span>
                                    <span class="chip">Laravel</span>
                                    <span class="chip">Laravel Livewire</span>
                                    <span class="chip">RESTful API</span>
                                    <span class="chip">MySQL</span>
                                    <span class="chip">Bootstrap</span>
                                    <span class="chip">JavaScript</span>
                                    <span class="chip">Git</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-6">
                    <div class="card-dark p-4 h-100">
                        <div class="d-flex align-items-start gap-3">
                            <i class="bi bi-quote fs-2"></i>
                            <div>
                                <p class="mb-2">
                                    {{ __('keywords.Client Feedback Quote') }}
                                </p>
                                <div class="small text-muted-2">— {{ __('keywords.Client Feedback') }}</div>
                            </div>
                        </div>
                        <hr class="border-secondary-subtle">
                        <ul class="list-unstyled mb-0 small text-muted-2">
                            <li class="mb-2"><i
                                    class="bi bi-check2 me-2"></i>{{ __('keywords.Secure multi-authentication systems') }}
                            </li>
                            <li class="mb-2"><i
                                    class="bi bi-check2 me-2"></i>{{ __('keywords.Real-time features with WebSockets & Pusher') }}
                            </li>
                            <li class="mb-2"><i
                                    class="bi bi-check2 me-2"></i>{{ __('keywords.Scalable, maintainable Laravel architecture') }}
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="divider"></div>

    <!-- SERVICES -->
    <section id="services" class="section-sm">
        <div class="container-xl">
            <div class="d-flex align-items-end justify-content-between mb-4">
                <div>
                    <div class="eyebrow">{{ __('keywords.Services') }}</div>
                    <h2 class="title-lg mt-1">{{ __('keywords.How I Help Businesses') }}</h2>
                </div>
            </div>
            <div class="row g-3">
                <div class="col-12 col-lg-4">
                    <div class="card-dark p-4 h-100">
                        <div class="d-flex align-items-center mb-2">
                            <i class="bi bi-code-slash me-2"></i><strong>{{ __('keywords.Back-End Development') }}</strong>
                        </div>
                        <p class="text-muted-2 mb-0">
                            {{ __('keywords.Back-End Development Quote') }}
                        </p>
                    </div>
                </div>
                <div class="col-12 col-lg-4">
                    <div class="card-dark p-4 h-100">
                        <div class="d-flex align-items-center mb-2">
                            <i
                                class="bi bi-lightning me-2"></i><strong>{{ __('keywords.Real-Time Features') }}</strong>
                        </div>
                        <p class="text-muted-2 mb-0">
                            {{ __('keywords.Real-Time Features Desc') }}
                        </p>
                    </div>
                </div>
                <div class="col-12 col-lg-4">
                    <div class="card-dark p-4 h-100">
                        <div class="d-flex align-items-center mb-2">
                            <i class="bi bi-gear me-2"></i><strong>{{ __('keywords.Custom Solutions') }}</strong>
                        </div>
                        <p class="text-muted-2 mb-0">
                            {{ __('keywords.Custom Solutions Desc') }}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="divider"></div>

    <!-- CONTACT -->
    <section id="contact" class="section">
        <div class="container-xl">
            <div class="row g-4 align-items-center">
                <div class="col-12 col-lg-6">
                    <div class="eyebrow">{{ __('keywords.Contact') }}</div>
                    <h2 class="title-lg mt-1">{{ __('keywords.Contact Title') }}</h2>
                    <p class="text-muted-2">
                        {{ __('keywords.Contact Desc') }}</p>
                    <div class="d-flex gap-3">
                        <a href="mailto:mostafahenidy222@gmail.com" class="btn btn-soft rounded-pill px-4"><i
                                class="bi bi-envelope me-1"></i>{{ __('keywords.Email me') }}</a>
                        <a href="https://wa.me/+201032834213" class="btn btn-outline-muted rounded-pill px-4"><i
                                class="bi bi-calendar me-1"></i>{{ __('keywords.Book a call') }}</a>
                    </div>
                </div>
                <div class="col-12 col-lg-6">
                    <form action="{{ route('contact.send') }}" method="POST" class="card-dark p-4 rounded-2xl"
                        id="contactForm">
                        @csrf
                        <div class="row g-3">
                            <div class="col-12 col-md-6">
                                <label class="form-label text-muted-2">{{ __('keywords.Name') }}</label>
                                <input type="text" name="name" class="form-control bg-transparent text-white"
                                    required>
                            </div>
                            <div class="col-12 col-md-6">
                                <label class="form-label text-muted-2">{{ __('keywords.Email') }}</label>
                                <input type="email" name="email" class="form-control bg-transparent text-white"
                                    required>
                            </div>
                            <div class="col-12">
                                <label class="form-label text-muted-2">{{ __('keywords.Project brief') }}</label>
                                <textarea name="message" rows="4" class="form-control bg-transparent text-white" required></textarea>
                            </div>
                            <div class="col-12 d-flex align-items-center justify-content-between">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="nda" value="1"
                                        id="nda">
                                    <label class="form-check-label text-muted-2"
                                        for="nda">{{ __('keywords.Request NDA') }}</label>
                                </div>
                                <button class="btn btn-soft rounded-pill px-4"
                                    type="submit">{{ __('keywords.Send') }} <i
                                        class="bi bi-arrow-right-short"></i></button>
                            </div>
                        </div>
                    </form>
                    <div id="alert" class="alert alert-success d-none">
                        {{ __('keywords.✅ Your email has been sent successfully!') }}
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- FOOTER -->
    @include('partials.footer')
    <!-- SCRIPTS -->
    @include('partials.scripts')
</body>

</html>
