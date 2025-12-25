<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Mostafa Henidy</title>
    <meta name="author" content="Mostafa Henidy" />
    <meta>
    <meta name="description" content="A minimalist dark-mode portfolio template built with Bootstrap 5." />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap"
        rel="stylesheet" />
    <link rel="icon" type="image/png" href="{{ asset('front-assets/white_logo.png') }}" sizes="32x32" />
    <link rel="icon" type="image/png" href="{{ asset('front-assets/white_logo.png') }}" sizes="16x16" />
    <link rel="icon" type="image/png" href="{{ asset('front-assets/white_logo.png') }}" sizes="48x48" />
    <style>
        :root {
            --bg: #0c0c0d;
            /* near-black */
            --panel: #121214;
            /* panels */
            --muted: #8b8b92;
            /* secondary text */
            --text: #e8e8ee;
            /* main text */
            --accent: #9b9bff;
            /* soft indigo */
            --accent-2: #5ef2c5;
            /* mint */
            --ring: 0 0 0 .25rem rgba(155, 155, 255, .25);
            --radius: 16px;
        }

        html,
        body {
            height: 100%;
        }

        body {
            font-family: Inter, system-ui, -apple-system, Segoe UI, Roboto, "Helvetica Neue", Arial, "Noto Sans", "Apple Color Emoji", "Segoe UI Emoji";
            background: radial-gradient(1200px 900px at 80% -10%, #1b1b1f22, transparent 60%),
                radial-gradient(900px 700px at 10% -20%, #10102699, transparent 50%),
                var(--bg);
            color: var(--text);
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
        }

        /* Container rhythm */
        .section {
            padding-top: 6rem;
            padding-bottom: 6rem;
        }

        .section-sm {
            padding-top: 3.5rem;
            padding-bottom: 3.5rem;
        }

        /* Navbar */
        .glass {
            backdrop-filter: saturate(140%) blur(12px);
            background: rgba(18, 18, 20, .6);
            border: 1px solid rgba(255, 255, 255, .06);
        }

        .brand-mark {
            width: 40px;
            height: 40px;
            display: grid;
            place-items: center;
            border-radius: 10px;
            background: linear-gradient(135deg, var(--accent), var(--accent-2));
            color: #0b0b0c;
            font-weight: 800;
        }

        .nav-link {
            color: var(--muted);
            font-weight: 500;
        }

        .nav-link:hover,
        .nav-link.active {
            color: var(--text);
        }

        /* Hero */
        .hero h1 {
            letter-spacing: -0.02em;
            line-height: 1.1;
        }

        .chip {
            font-size: .85rem;
            color: var(--muted);
            border: 1px solid rgba(255, 255, 255, .08);
            border-radius: 999px;
            padding: .35rem .75rem;
        }

        .kbd {
            font-family: ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;
            font-size: .8rem;
            background: #0f0f12;
            border: 1px solid rgba(255, 255, 255, .08);
            padding: .25rem .5rem;
            border-radius: 6px;
            color: var(--muted)
        }

        /* Cards */
        .card-dark {
            background: linear-gradient(180deg, rgba(255, 255, 255, .02), rgba(255, 255, 255, .01));
            border: 1px solid rgba(255, 255, 255, .08);
            border-radius: var(--radius);
            overflow: hidden;
            transition: transform .35s ease, border-color .35s ease, box-shadow .35s ease;
        }

        .card-dark:hover {
            transform: translateY(-4px);
            border-color: rgba(155, 155, 255, .45);
            box-shadow: 0 12px 30px -12px rgba(155, 155, 255, .25);
        }

        .card-dark .badge {
            background: rgba(155, 155, 255, .12);
            color: #c9c9ff;
        }

        .ratio-cover {
            background: #0f0f12;
            overflow: hidden;
        }

        .ratio-cover img {
            object-fit: cover;
            filter: saturate(1.05) contrast(1.02);
            transition: transform .6s ease;
        }

        .card-dark:hover img {
            transform: scale(1.05);
        }

        /* Section headings */
        .eyebrow {
            text-transform: uppercase;
            letter-spacing: .18em;
            color: var(--muted);
            font-weight: 600;
            font-size: .8rem;
        }

        .title-xl {
            font-size: clamp(2rem, 3.8vw, 3.5rem);
            font-weight: 800;
        }

        .title-lg {
            font-size: clamp(1.35rem, 2.2vw, 2rem);
            font-weight: 700;
        }

        /* Buttons */
        .btn-soft {
            --bs-btn-bg: linear-gradient(135deg, rgba(155, 155, 255, .22), rgba(94, 242, 197, .18));
            --bs-btn-color: var(--text);
            --bs-btn-border-color: rgba(255, 255, 255, .12);
            --bs-btn-hover-border-color: rgba(155, 155, 255, .45);
            border: 1px solid var(--bs-btn-border-color);
            backdrop-filter: blur(8px);
        }

        .btn-outline-muted {
            --bs-btn-color: var(--muted);
            --bs-btn-border-color: rgba(255, 255, 255, .12);
            --bs-btn-hover-color: var(--text);
            --bs-btn-hover-border-color: rgba(255, 255, 255, .28);
        }

        .btn:focus {
            box-shadow: var(--ring) !important;
        }

        /* Footer */
        footer {
            border-top: 1px solid rgba(255, 255, 255, .06);
        }

        /* Subtle separators */
        .divider {
            height: 1px;
            background: linear-gradient(to right, transparent, rgba(255, 255, 255, .06), transparent);
        }

        /* Utilities */
        .text-muted-2 {
            color: var(--muted) !important;
        }

        .rounded-2xl {
            border-radius: 1.25rem;
        }

        .logo {
            height: 50px;
            /* controls navbar height */
            width: auto;
            transform: scale(1.6);
            /* visually enlarges */
            transform-origin: left center;
            /* keeps alignment */
        }

        .navbar {
            padding-top: 0.25rem;
            padding-bottom: 0.25rem;
        }

        .offcanvas {
            --bs-offcanvas-width: 700px;
        }
    </style>
</head>
