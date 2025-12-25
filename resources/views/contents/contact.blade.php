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
                            <button class="btn btn-soft rounded-pill px-4" type="submit">{{ __('keywords.Send') }} <i
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
