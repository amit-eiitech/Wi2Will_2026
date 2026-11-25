<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- GSAP -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js"></script>
    <!-- GSAP ScrollTrigger -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/ScrollTrigger.min.js"></script>

    {{-- Alpine --}}
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <meta name="robots" content="noindex, nofollow">
</head>

<body>
    @include('partials.header')
    <main>
        @yield('content')
    </main>
    @include('partials.footer')

    <script src="{{ asset('js/animations.js') }}"></script>

    @env('local')
        <script>
            window.addEventListener('beforeunload', () => {
                sessionStorage.setItem('dev_scroll_y', window.scrollY);
            });

            window.addEventListener('DOMContentLoaded', () => {
                const scrollY = sessionStorage.getItem('dev_scroll_y');
                if (scrollY !== null) {
                    window.scrollTo({
                        top: parseInt(scrollY, 10),
                        behavior: 'instant'
                    });
                    sessionStorage.removeItem('dev_scroll_y');
                }
            });
        </script>
    @endenv

</body>

</html>
