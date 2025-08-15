<footer class="py-5">
    <div class="container-xl">
        <div class="row g-3 align-items-center">
            <div class="col-12 col-lg-6">
                <div class="d-flex align-items-center gap-2">
                    <div>
                        <a class="navbar-brand logo-bg" href="#home">
                            <img src="{{ asset('front-assets/white_logo.png') }}" alt="logo" class="logo">
                        </a>
                    </div>
                </div>
            </div>
            @foreach (LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                @php
                    $locale = match ($localeCode) {
                        'en' => 'English',
                        'ar' => 'العربية',
                        'it' => 'Italiano',
                        'es' => 'Español',
                    };
                @endphp
            @endforeach
            <div class="col-12 col-lg-6 text-lg-end">
                <a class="text-decoration-none text-muted-2 me-3" href="#work">{{ __('keywords.Work') }}</a>
                <a class="text-decoration-none text-muted-2 me-3" href="#about">{{ __('keywords.About') }}</a>
                <a class="text-decoration-none text-muted-2 me-3" href="#services">{{ __('keywords.Services') }}</a>
                <a class="text-decoration-none text-muted-2 me-3" href="#contact">{{ __('keywords.Contact') }}</a>
            </div>
        </div>
        <div class="text-center small text-muted-2 mt-3">Copyright © <span id="year"></span>All rights
            reserved | Mostafa Henidy</div>
        <div class="text-center small text-muted-2 mt-3"></span>design by Subtle Folio</div>
    </div>
</footer>
