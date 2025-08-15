<nav class="navbar navbar-expand-lg fixed-top glass">
    <div class="container-xl py-2">
        <a class="navbar-brand logo-bg" href="{{ url('/') }}">
            <img src="{{ asset('front-assets/white_logo.png') }}" alt="logo" class="logo">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navMain"
            aria-controls="navMain" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon" style="filter:invert(1)"></span>
        </button>
        <div class="collapse navbar-collapse" id="navMain">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0 align-items-lg-center gap-lg-2">
                <li class="nav-item"><a class="nav-link" href="#work">{{ __('keywords.Work') }}</a></li>
                <li class="nav-item"><a class="nav-link" href="#about">{{ __('keywords.About') }}</a></li>
                <li class="nav-item"><a class="nav-link" href="#services">{{ __('keywords.Services') }}</a></li>
                <li class="nav-item"><a class="nav-link" href="#contact">{{ __('keywords.Contact') }}</a></li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-muted-2" href="#" id="langDropdown" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="bi bi-globe-americas"></i>
                    </a>
                    <ul class="dropdown-menu bg-secondary" aria-labelledby="langDropdown">
                        @foreach (LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                            @php
                                $locale = match ($localeCode) {
                                    'en' => 'English',
                                    'ar' => 'العربية',
                                    'it' => 'Italiano',
                                    'es' => 'Español',
                                };
                            @endphp
                            <li>
                                <a class="dropdown-item text-center" hreflang="{{ $localeCode }}"
                                    href="{{ LaravelLocalization::getLocalizedURL($localeCode, url('/')) }}">
                                    {{ $locale }}
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </li>
                <li class="nav-item ms-lg-2"><a class="btn btn-sm btn-soft rounded-pill px-3" href="#contact"><i
                            class="bi bi-send me-1"></i>{{ __('keywords.Start a project') }}</a></li>
            </ul>
        </div>
    </div>
</nav>
